<?php 
 include_once 'conexion.php';

 class Reserva {
        

        public function crearReserva($Usuarios_IDUsuarios,$dia,$hora,$titular,$participantes) {
            try{
                $db = getDB();

                $stmt = $db->prepare("INSERT INTO reservas(Usuarios_IDUsuarios,Dia,Hora,Titular,Participantes) VALUES (:Usuarios_IDUsuarios,:dia,:hora,:titular,:participantes)");
                $stmt->bindParam("Usuarios_IDUsuarios", $Usuarios_IDUsuarios,PDO::PARAM_STR);
                $stmt->bindParam("dia", $dia,PDO::PARAM_STR);
                $stmt->bindParam("hora", $hora,PDO::PARAM_STR);
                $stmt->bindParam("titular", $titular,PDO::PARAM_STR);
                $stmt->bindParam("participantes", $participantes,PDO::PARAM_STR);
                $db = null;
                return true;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
                }

        }

        public function borrarReserva($titular,$dia,$hora) {
            try{
                $db = getDB();

                $stmt = $db->prepare("DELETE FROM reservas where Titular = :titular and Dia:dia and Hora:hora");
                $stmt->bindParam("titular", $titular,PDO::PARAM_STR);
                $stmt->bindParam("dia", $dia,PDO::PARAM_STR);
                $stmt->bindParam("hora", $hora,PDO::PARAM_STR);
                $db = null;
                return true;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
                }

        }

        public function mostrarReserva() {
            try{
                $db = getDB();
                $stmt = $db->prepare("SELECT Usuarios_IDUsuarios,Dia,Hora,Titular,participantes FROM reservas"); 
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                }

    }