<?php 
include("conexión.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
      body{

        background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
      }
        label{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        }
        


}

.btn1{
    display: inline-block;
  background-color: #CD5C5C;
  border: none;
  color: rgb(10, 10, 10);
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: "Lucida Console", "Courier New", monospace;
  border-radius: 12px;
  box-shadow: 0 9px #999;
}
.btn{
    color: #1a1d1a;
}
        
 .btn{
    display: inline-block;
  background-color: #E6E6FA;
  border: none;
  color: rgb(10, 10, 10);
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: "Lucida Console", "Courier New", monospace;
  border-radius: 12px;
  box-shadow: 0 9px #999;
}
.btn:hover {background-color: #d1eed2}

.btn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
h1{
           font-size: 50px;
           color: rgb(245, 239, 237);
           animation-name: miAnimacion;
        animation-duration: 3s;
        animation-direction: alternate;
        animation-iteration-count: infinite;
    }
    
    @keyframes miAnimacion {
        from {color: red;}
        to {color: blue;}
    }

    input[type="text"],input[type="email"] {
  width: 100px;
  height: 15px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: transparent;
  border: none;
  border-bottom: 1px solid purple; /* Puedes ajustar el estilo del borde según tus necesidades */
}

input[type="number"] {
  width: 110px;
  height: 20px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: gray;
  border-bottom: 1px solid purple;
}
#caja{

    display:inline-block;
    border-radius: 10px;
    border: 2px solid black;
}
img{
    position: relative;
  width: 300px; /* Ajusta el ancho según tus necesidades */
  height: 300px; /
  width: 100%;
  height: 100%;

  transition: transform 0.3s ease; /* Agrega una transición suave al estilo transform */
}

img:hover {
  transform: scale(1.2); /* Escala la imagen al 120% cuando se coloca el cursor sobre ella */
  cursor: pointer; /* Cambia el cursor del mouse a un ícono de puntero */
}
    </style>
</head>
<body>
<center> <img id="caja" src="https://media0.giphy.com/media/3orieYvLZXsgTkOHza/giphy.gif?cid=ecf05e47v8v86llqpoemxbavg4rkcip21qjyrylvtgakryop&ep=v1_gifs_related&rid=giphy.gif&ct=g">

<h1>Editar Maestros</h1> 
<section>
<?php
if (isset($_POST['Enviar'])) {
    // Boton enviar
    $idM = $_POST['idM'];
    $nombre = $_POST['nombre'];
    $apellidoPat = $_POST['apellidopat'];
    $apellidoMat = $_POST['apellidomat'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['telefono'];
    $correo = $_POST['correo'];

    $sql = "UPDATE maestros SET 
        nombre='$nombre',
        apellidopat='$apellidoPat',
        apellidomat='$apellidoMat',
        direccion='$direccion',
        telefono='$tel',
        correo='$correo'
        WHERE idM='$idM'";

    $resultados = mysqli_query($conexion, $sql);

    if ($resultados) {
        echo "<script language='JavaScript'>
            alert('Los datos fueron editados correctamente');
            location.assign('maestros_html.php');
            </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Los datos NO fueron editados');
            location.assign('maestros_html.php');
            </script>";
    }

    mysqli_close($conexion);
} else {
    $idM = $_GET['idM'];
    $sql = "SELECT * FROM maestros WHERE idM='$idM'";
    $resultados = mysqli_query($conexion, $sql);
    $filas = mysqli_fetch_assoc($resultados);

    $idM = $filas['idM'];
    $nombre = $filas['nombre'];
    $apellidoPat = $filas['apellidopat'];
    $apellidoMat = $filas['apellidomat'];
    $direccion = $filas['direccion'];
    $tel = $filas['telefono'];
    $correo = $filas['correo'];

    mysqli_close($conexion);
}
?>

<table>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
<tr><td>
    <!-- <label for="idM">No.matrícula:</label></td> -->
  <td>  <input type="hidden"  name="idM" maxlength="5"  min="1" required value="<?php echo $idM; ?>"><br>
</td>
<tr><td>
    <label for="nombre">Nombre:</label>
    <td> <input type="text"  name="nombre" maxlength="20" required value="<?php echo $nombre; ?>"><br>
    <tr><td>
    <label for="apellidopat">Apellido paterno:</label>
    <td> <input type="text"  name="apellidopat" maxlength="15" required value="<?php echo $apellidoPat; ?>"><br>
    <tr><td>
    <label for="apellidomat">Apellido materno:</label>
    <td> <input type="text"  name="apellidomat" maxlength="15" required value="<?php echo $apellidoMat; ?>"><br>
    <tr><td>
    <label for="direccion">Dirección:</label>
    <td><input type="text"  name="direccion" maxlength="30" required value="<?php echo $direccion; ?>"><br>
    <tr><td>
    <label for="telefono">No.Teléfono:</label>
    <td> <input type="number"  name="telefono" style="text-transform: uppercase;" maxlength="10" required value="<?php echo $tel; ?>"><br>
    <tr><td>
    <label for="correo">Correo:</label>
    <td> <input type="email" name="correo" maxlength="30" required value="<?php echo $correo; ?>"><br>
</tr></td>
    <input type="submit" name="Enviar" class="btn" value="Actualizar">
    <a href="maestros_html.php" class="btn">Regresar</a>
</form>
</table>
</section>
</body>
</html>