<?php
include "../config/conexion.php";
require "function.php";

$valido['success']=array('success', false, 'mensaje'=>"", 'ticket' => "");


$numero = limpiarDatos($_POST['numero']);
    if (!preg_match("/\b/", $numero)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe ingresar solo numeros.";
        if (!preg_match("/[0-9]{2,3}/", $numero)) {
            $valido['success'] = false;
            $valido['mensaje'] = "Debe ingresar solo 2 digitos.";
        }
    }
$nombre_jugador = limpiarDatos($_POST['nombre_jugador']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombre_jugador)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe ingresar el nombre en el formato indicado.";
    }
    
$cedula_jugador = limpiarDatos($_POST['cedula_jugador']);
    if (!preg_match("/^[0-9]{7,8}/", $cedula_jugador)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe ingresar la cedula en el formato indicado.";
    }
$telefono_jugador = limpiarDatos($_POST['telefono_jugador']); 
if (!preg_match("/^[0-9]{8,10}/", $telefono_jugador )){
    $valido['success'] = false;
    $valido['mensaje'] = "Debe ingresar el telefono en el formato indicado.";
};

$sqlValidation = "SELECT numero FROM numeros WHERE numero = '$numero'";
$resultado = mysqli_query($conexion, $sqlValidation);
if ($resultado ->num_rows > 0) {
    $valido['success'] = false;
    $valido['mensaje'] = "Numero ya registrado";
} else {
    $sql = "INSERT INTO numeros (`numero`, `nombre_jugador`,`cedula_jugador`,`telefono_jugador`  ) VALUES ('$numero', '$nombre_jugador', '$cedula_jugador', '$telefono_jugador' )";

$resultado = $conexion->query($sql);
if ($resultado === true) {
    $valido['success'] = true;
    $valido['mensaje'] = "Registro Realizado.";
}else {
    $valido['success'] = false;
    $valido['mensaje'] = "No se realizo el registro";
}
}



echo json_encode($valido);