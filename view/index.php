<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link   href="../css/bootstrap.min.css" rel="stylesheet">
        <title>AUTOMOVIL</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h3>AUTOMOVILES</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <tr><td>
                            <form action="../controller/controller.php">
                                <input type="hidden" value="listar" name="opcion">
                                <input class='btn btn-success' type="submit" value="CONSULTAR">
                            </form>
                        </td>
                    </tr>
                </table>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>PLACA</th>
                        <th>AÑO</th>
                    </tr>
                    <?php
                    session_start();
                    include '../model/automovil.php';
                    if (isset($_SESSION['lista'])) {
                        $listado = unserialize($_SESSION['lista']);
                        foreach ($listado as $auto) {
                            echo "<tr>";
                            echo "<td>" . $auto->getPlaca() . "</td>";
                            echo "<td>" . $auto->getAño() . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "No se han cargado datos.";
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
