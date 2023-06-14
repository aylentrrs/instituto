<?php
echo "<body bgcolor: thistle>";


$idM = $_GET['idM'];
include("conexión.php");

$sql = "DELETE FROM maestros WHERE idM = '".$idM."'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "<script language='JavaScript'>
    alert('El registro del profesor fue eliminado exitosamente');
    location.assign('maestros_html.php');</script>";
} else {
    echo "<script language='JavaScript'>
    alert('El registro del profesor NO fue eliminado');
    location.assign('maestros_html.php');</script>";
}
?>