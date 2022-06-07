<?php 
 include_once 'conexion.php';

 class Reserva {
        

        public function crearReserva($nombre,$dia,$horaEntrada,$horaSalida,$participantes) {
            try{
                $db = getDB();

                $stmt = $db->prepare("INSERT INTO reservas(Nombre,Dia,HoraEntrada,HoraSalida,Participantes) VALUES (:nombre,:dia,:horaEntrada,:horaSalida,:participantes)");
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->bindParam("dia", $dia,PDO::PARAM_STR);
                $stmt->bindParam("horaEntrada", $horaEntrada,PDO::PARAM_STR);
                $stmt->bindParam("horaSalida", $horaSalida,PDO::PARAM_STR);
                $stmt->bindParam("participantes", $participantes,PDO::PARAM_STR);
                $db = null;
                return true;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}'; 
                }

        }

        public function borrarReserva($nombre,$dia,$horaEntrada) {
            try{
                $db = getDB();

                $stmt = $db->prepare("DELETE FROM reservas where Nombre = :nombre and Dia:dia and HoraEntrada:HoraEntrada");
                $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
                $stmt->bindParam("dia", $dia,PDO::PARAM_STR);
                $stmt->bindParam("horaEntrada", $horaEntrada,PDO::PARAM_STR);
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
                $stmt = $db->prepare("SELECT Nombre,Dia,HoraEntrada,HoraSalida,participantes FROM reservas"); 
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC); //User data
                return $data;
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                }

    }