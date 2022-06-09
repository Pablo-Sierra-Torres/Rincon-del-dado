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
                $stmt = $db->prepare("INSERT INTO resenas(nombre,correo,texto) VALUES (:user,:correo,:texto)");
                $stmt->bindParam("user", $nombre,PDO::PARAM_STR);
                $stmt->bindParam("correo", $correo,PDO::PARAM_STR);
                $stmt->bindParam("texto", $texto,PDO::PARAM_STR);
                $stmt->execute();
                $db = null;
                return true;
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
                $data = $stmt->fetchAll(PDO::FETCH_CLASS); //Valoracion data
                $db = null;
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                }

    }
?>