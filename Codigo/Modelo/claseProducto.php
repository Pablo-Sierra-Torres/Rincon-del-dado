<?php 
    include_once "conexion.php";

    //Insert insetar productos
    class Producto {
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
                $stmt->bindParam("precio", $precio,PDO::PARAM_INT);
                $stmt->bindParam("cantidad", $cantidad,PDO::PARAM_INT);
                $stmt->bindParam("categoria", $categoria,PDO::PARAM_STR);
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
                $stmt = $db->prepare("SELECT Nombre,Descripcion,Imagen,Precio,Cantidad FROM productos WHERE Categoria=:categoria"); 
                $stmt->bindParam("categoria", $nombre,PDO::PARAM_STR);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
                $db = null;
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
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
                $db = null;
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
            }

        }

        //Update para compra (cantidad a reducir)

        public function productoCompra($nombre,$cuantia) {
            try{
                $db = getDB();
                $stmt = $db->prepare("SELECT Cantidad FROM productos WHERE Nombre=:nombre"); 
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //User data

                $cantidad = $data -> Cantidad;
                $cantidad = $cantidad - $cuantia;

                $stmt2 = $db->prepare("UPDATE productos SET Cantidad = :cantidad WHERE Nombre = :nombre");
                $stmt2->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt2->bindParam("cantidad", $cantidad,PDO::PARAM_STR);
                $stmt2->execute();
                $db = null;
            }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
            }

        }


        //update para reponer (cantidad a aumentar)

        public function productoReponer($nombre,$cuantia) {
            try{
                $db = getDB();
                $stmt = $db->prepare("SELECT Cantidad FROM productos WHERE Nombre=:nombre"); 
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //User data

                $cantidad = $data -> Cantidad;
                $cantidad = $cantidad + $cuantia;

                $stmt2 = $db->prepare("UPDATE productos SET Cantidad = :cantidad WHERE Nombre = :nombre");
                $stmt2->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt2->bindParam("cantidad", $cantidad,PDO::PARAM_STR);
                $stmt2->execute();
                $db = null;
            }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
            }

        }

        //Delete borrar productos
        public function productoBorrar($nombre) {
            try{
                $db = getDB();
                $stmt = $db->prepare("DELETE FROM productos where Nombre=:nombre"); 
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->execute();
                $db = null;
            }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
            }

        }
    }    

?>