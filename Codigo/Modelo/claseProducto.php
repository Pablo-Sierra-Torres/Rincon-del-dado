<?php 
    include_once "conexion.php";

    //Insert insetar productos

    public function nuevoProducto($nombre,$descripcion,$imagen,$precio,$cantidad,$categoria) {
        try{
            $db = getDB();
            $st = $db->prepare("SELECT Nombre FROM productos WHERE Nombre=:nombre"); 
            $st->bindParam("nombre", $nombre,PDO::PARAM_STR);
            $st->execute();
            $count=$st->rowCount();
            if($count<1)
            {
            $stmt = $db->prepare("INSERT INTO productos(Nombre,Descripcion,Imagen,Precio,Cantidad,Categoria) VALUES (:nombre,:descripcion,:imagen,:precio,:cantidad,:categoria)");
            $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
            $stmt->bindParam("descripcion", $descripcion,PDO::PARAM_STR);
            $stmt->bindParam("imagen", $imagen,PDO::PARAM_STR);
            $stmt->bindParam("precio", $precio,PDO::PARAM_STR);
            $stmt->bindParam("cantidad", $cantidad,PDO::PARAM_STR);
            $stmt->bindParam("ctegoria", $categoria,PDO::PARAM_STR);
            $stmt->execute();
            $id=$db->lastInsertId(); // Last inserted row id
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

    //Select mostrar productos por categoria
    public function mostrarProductos($categoria) {
        try{
            $db = getDB();
            $stmt = $db->prepare("SELECT Nombre,Imagen,Precio,Cantidad FROM productos WHERE Nombre=:nombre"); 
            $stmt->bindParam("nombre", $nombre,PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
            return $data;
            }
            catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
            }
        }

    }
    

    //Select mostrar productos en carrito
    public function productoCarrito($nombre) {
        try{
            $db = getDB();
            $stmt = $db->prepare("SELECT Nombre,Imagen,Precio,Cantidad FROM productos WHERE Nombre=:nombre"); 
            $stmt->bindParam("nombre", $nombre,PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
            return $data;
            }
            catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
            }
        }

    }

    //Delete borrar productos

    //Update para compra (cantidad a reducir)

    //update para reponer (cantidad a aumentar)

?>