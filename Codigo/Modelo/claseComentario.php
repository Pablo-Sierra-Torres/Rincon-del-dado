<?php 
    include_once 'conexion.php';
    class Comentario {
        public function borrarComentario($idComentario,$idUsuario) {
            try{
                $db = getDB();
                 
                $stmt = $db->prepare("DELETE FROM comentarios where IDComentarios=:idComentario and Usuarios_IDUsuarios = :idUsuario "); 
                $stmt->bindParam("idComentario", $idComentario,PDO::PARAM_STR);
                $stmt->bindParam("idUsuario", $idUsuario,PDO::PARAM_STR);
                $stmt->execute();
                $db = null;    
                return true;
                    
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
        }

        public function anadirCometario($idUsuario,$texto,$valoracion,$dia,$hora) {
            try{
                $db = getDB();
                $st = $db->prepare("SELECT IDComentarios FROM comentarios WHERE Usuarios_IDUsuarios = :user"); 
                $st->bindParam("user", $idUsuario,PDO::PARAM_INT);
                $st->execute();
                $count=$st->rowCount();
                if($count<1)
                {
                $stmt = $db->prepare("INSERT INTO comentarios(Usuarios_IDUsuarios,Texto,Valoracion,Dia,Hora) VALUES (:user,:texto,:valoracion,:dia,:hora)");
                $stmt->bindParam("user", $idUsuario,PDO::PARAM_INT);
                $stmt->bindParam("texto", $texto,PDO::PARAM_STR);
                $stmt->bindParam("valoracion", $valoracion,PDO::PARAM_STR);
                $stmt->bindParam("dia", $dia,PDO::PARAM_STR);
                $stmt->bindParam("hora", $hora,PDO::PARAM_STR);
                $stmt->execute();
                $db = null;
                return true;
                }
                else
                {
                $db = null;
                return false;
                }
                
                } 
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
                }

        }

        public function obtenerComentarios() {
            try{
                $db = getDB();
                $stmt = $db->prepare("SELECT Usuarios_IDUsuarios,Texto,Valoracion,Dia,Hora FROM comentarios"); 
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC); //Valoracion data
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                }

        public function filtrarValoracion($valoracion) {
                    try{
                        $db = getDB();
                        $stmt = $db->prepare("SELECT Usuarios_IDUsuarios,Texto,Valoracion,Dia,Hora FROM comentarios where Valoracion=:valoracion");
                        $stmt->bindParam("valoracion", $valoracion,PDO::PARAM_STR); 
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC); //Valoracion data
                        return $data;
                        }
                        catch(PDOException $e) {
                        echo '{"error":{"text":'. $e->getMessage() .'}}';
                        }
                        }        
    }

?>