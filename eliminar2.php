<?php
echo "<body bgcolor: thistle>";


$idA = $_GET['idA'];
include("conexión.php");

$sql = "DELETE FROM modulos WHERE idA = '".$idA."'";
$resultados= mysqli_query($conexion, $sql);

if ($resultados) {
    echo "<script language='JavaScript'>
    alert('El registro del modulo fue eliminado exitosamente');
    location.assign('modulos_html.php');</script>";
} else {
    echo "<script language='JavaScript'>
    alert('El registro del modulo NO fue eliminado');
    location.assign('modulos_html.php');</script>";
}
?>