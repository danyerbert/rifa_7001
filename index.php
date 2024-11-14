<!doctype html>
<html lang="es">
<?php 
require "config/conexion.php";
$sql = "SELECT id, numero, nombre_jugador, cedula_jugador, telefono_jugador FROM numeros";
$result = $conexion->query($sql);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RIFA DE 7001</title>
    <link rel="icon" href="img/logo.png">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="js/DataTables/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
</head>

<body>
    <div class="container">
        <center>
            <h1>Listado de Números</h1>
        </center>
        <br>
        <div class="container">
            <!-- <a href="nuevo.php" class="btn btn-dark">agregar</a> -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#registrarNumero">
                Registrar
            </button>
            <hr>
            <table class="table" id="example" class="display compact" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Numero</th>
                        <th>Jugador</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = $result->fetch_assoc()) :
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['numero'];?></td>
                        <td><?php echo $row['nombre_jugador'];?></td>
                        <td><?php echo $row['cedula_jugador'];?></td>
                        <td><?php echo $row['telefono_jugador'];?></td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Numero</th>
                        <th>Jugador</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <?php
        include "modalRegistro.php";
        include "inc/scripts.html";
    ?>
</body>

</html>