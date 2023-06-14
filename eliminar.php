<?php
echo "<body bgcolor: thistle>";


$id = $_GET['id'];
include("conexión.php");

$sql = "DELETE FROM alumnos WHERE id = '".$id."'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "<script language='JavaScript'>
    alert('El registro del alumno fue eliminado exitosamente');
    location.assign('index_html.php');</script>";
} else {
    echo "<script language='JavaScript'>
    alert('El registro del alumno NO fue eliminado');
    location.assign('index_html.php');</script>";
}
?>
