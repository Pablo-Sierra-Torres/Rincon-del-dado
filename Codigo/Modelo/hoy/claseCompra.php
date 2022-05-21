<?php 
    include_once 'conexion.php';
    class Compra {

        public function anadirCompra($idUsuario,$Productos_Nombre,$dia,$hora,$precio) {
            try{
                $db = getDB();
                $stmt = $db->prepare("INSERT INTO compra(Usuarios_IDUsuarios,Productos_Nombre,Dia,Hora,Precio) VALUES (:user,:Productos_Nombre,:dia,:hora,:precio)");
                $stmt->bindParam("user", $idUsuario,PDO::PARAM_INT);
                $stmt->bindParam("Productos_Nombre", $Productos_Nombre,PDO::PARAM_STR);
                $stmt->bindParam("dia", $dia,PDO::PARAM_STR);
                $stmt->bindParam("hora", $hora,PDO::PARAM_STR);
                $stmt->bindParam("precio", $precio,PDO::PARAM_INT);
                $stmt->execute();
                $db = null;
                return true;
            
                } 
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
                }

        }

        public function obtenerCompra($id_compra) {
            try{
                $db = getDB();
                $stmt = $db->prepare("SELECT Usuarios_IDUsuarios,Productos_Nombre,Dia,Hora,Precio FROM compra where IDCompra:id_compra"); 
                $stmt->bindParam("id_compra", $id_compra,PDO::PARAM_INT);
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