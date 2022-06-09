<?php 
    include_once 'conexion.php';
    class Comentario {
        public function borrarComentario($idComentario,$idUsuario) {
            try{
                $db = getDB();
                 
                $stmt = $db->prepare("DELETE FROM resenas where IDReseñas=:idComentario and correo = :idUsuario "); 
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

        public function anadirCometario($nombre,$correo,$texto) {
            try{
                $db = getDB();
                $st = $db->prepare("SELECT IDreseñas FROM resenas WHERE correo = :user"); 
                $st->bindParam("user", $nombre,PDO::PARAM_INT);
                $st->execute();
                $count=$st->rowCount();
                if($count<1)
                {
                $stmt = $db->prepare("INSERT INTO resenas(nombre, correo,texto) VALUES (:user,:correo,:texto)");
                $stmt->bindParam("user", $nombre,PDO::PARAM_INT);
                $stmt->bindParam("correo", $correo,PDO::PARAM_STR);
                $stmt->bindParam("texto", $texto,PDO::PARAM_STR);
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
                $stmt = $db->prepare("SELECT nombre,correo,texto FROM resenas"); 
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //Valoracion data
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                }

    }
?>