<?php

require_once '../model/autoModel.php';
session_start();
$autoModel = new autoModel();
$opcion = $_REQUEST['opcion'];

switch ($opcion) {
    case "listar":
        $listado = $autoModel->getAutos();
//y los guardamos en sesion:
        $_SESSION['lista'] = serialize($listado);
        header('Location: ../view/index.php');
        break;
    default:
        header('Location: ../view/index.php');
}