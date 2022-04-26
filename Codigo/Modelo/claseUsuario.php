<?php 

    include_once "conexion.php";
    class Usuario {
        public function loginUsuario($usernameEmail,$password) {
            try{
                $db = getDB();
                $hash_password= hash('sha256', $password); //Password encryption 
                $stmt = $db->prepare("SELECT IDUsuarios FROM usuarios WHERE Correo=:usernameEmail AND Pass=:hash_password"); 
                $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR);
                $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR);
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $db = null;
                if($count)
                {
                $_SESSION['id']=$data->id; // Storing user session value
                return true;
                }
                else
                {
                return false;
                } 
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
        }

        public function registerUsuario($nombre,$apellidos,$email,$password,$codigo_postal,$poblacion,$direccion,$telefonofijo,$telefono_movil,$notificaciones) {
            try{
                $db = getDB();
                $st = $db->prepare("SELECT IDUsuarios FROM usuarios WHERE Correo=:email"); 
                $st->bindParam("email", $email,PDO::PARAM_STR);
                $st->execute();
                $count=$st->rowCount();
                if($count<1)
                {
                $stmt = $db->prepare("INSERT INTO usuarios(Nombre,Apellidos,Correo,Pass,CodPos,Poblacion,Direccion,Telefijo,Telemovil,Notificaciones) VALUES (:nombre,:apellidos,:email,:hash_password,:codigo_postal,:poblacion,:direccion,:telefono_fijo,:telefono_movil,:notificaciones)");
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->bindParam("apellidos", $apellidos,PDO::PARAM_STR);
                $stmt->bindParam("email", $email,PDO::PARAM_STR);
                $hash_password= hash('sha256', $password); //Password encryption
                $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR);
                $stmt->bindParam("codigo_postal", $codigo_postal,PDO::PARAM_STR);
                $stmt->bindParam("poblacion", $poblacion,PDO::PARAM_STR);
                $stmt->bindParam("direccion", $direccion,PDO::PARAM_STR);
                $stmt->bindParam("telefono_fijo", $telefono_fijo,PDO::PARAM_STR);
                $stmt->bindParam("telefono_movil", $telefono_movil,PDO::PARAM_STR);
                $stmt->bindParam("notificaciones", $notificaciones,PDO::PARAM_STR);
                $stmt->execute();
                $id=$db->lastInsertId(); // Last inserted row id
                $db = null;
                $_SESSION['id']=$id;
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

        public function detallesUsuario($id) {
            try{
                $db = getDB();
                $stmt = $db->prepare("SELECT Nombre,Apellidos,Correo,Pass,CodPos,Poblacion,Direccion,Telefijo,Telemovil FROM usuarios WHERE IDUsuarios=:id"); 
                $stmt->bindParam("id", $id,PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                }

    }
?>