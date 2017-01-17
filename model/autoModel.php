<?php

include 'Database.php';
include 'automovil.php';

class autoModel {

    public function getAutos() {
        $pdo = Database::connect();
        $sql = "select * from automovil";
        $resultado = $pdo->query($sql);
        $listado = array();
        foreach ($resultado as $res) {
            $auto = new automovil();
            $auto->setPlaca($res['placa']);
            $auto->setAño($res['anio']);
            array_push($listado, $auto);
        }
        Database::disconnect();
        return $listado;
    }
}
