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

    input[type="text"] {
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
    width:1050px ;  
    height:310px;
    display:inline-block;
    border-radius: 10px;
    border: 2px solid black;
}
    </style>
</head>
<body><center>
<main>
<img id="caja" src="https://i.pinimg.com/564x/5e/43/ca/5e43ca158d04a0d8215eec63ffd93d95.jpg">

    </main>   
<h1>Editar Alumno</h1> 
  <section>
<?php
if (isset($_POST['Enviar'])) {
    // Boton enviar
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidoPat = $_POST['apellidopat'];
    $apellidoMat = $_POST['apellidomat'];
    $semestre = $_POST['semestre'];
    $grupo = $_POST['grupo'];
    $especialidad = $_POST['especialidad'];

    $sql = "UPDATE alumnos SET 
    id='$id',
    nombre='$nombre',
    apellidopat='$apellidoPat',
    apellidomat='$apellidoMat',
    semestre='$semestre',
    grupo='$grupo',
    especialidad='$especialidad'
    WHERE id='$id'";


    $resultados = mysqli_query($conexion, $sql);

    if ($resultados) {
        echo "<script language='JavaScript'>
            alert('Los datos fueron editados correctamente ');
            location.assign('index_html.php');
            </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Los datos NO fueron editados');
            location.assign('index_html.php');
            </script>";
    }

    mysqli_close($conexion);
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM alumnos WHERE id='$id'";
    $resultados = mysqli_query($conexion, $sql);
    $filas = mysqli_fetch_assoc($resultados);

    $id = $filas['id'];
    $nombre = $filas['nombre'];
    $apellidoPat = $filas['apellidopat'];
    $apellidoMat = $filas['apellidomat'];
    $semestre = $filas['semestre'];
    $grupo = $filas['grupo'];
    $especialidad = $filas['especialidad'];

    mysqli_close($conexion);
?>


  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">


        <!-- <label for="id">No.control:</label> -->
<input type="hidden" name="id" maxlength="3" min="1"   required value="<?php echo $id; ?>"><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" maxlength="20" required value="<?php echo $nombre; ?>"><br>

        <label for="apellidos">Apellido paterno:</label>
        <input type="text" name="apellidopat" maxlength="15" required value="<?php echo $apellidoPat; ?>"><br>

        <label for="apellidos">Apellido materno:</label>
        <input type="text" name="apellidomat" maxlength="15" required value="<?php echo $apellidoMat; ?>"><br>

        <label for="semestre">Semestre:</label>
        <input type="number" name="semestre" min="1" max="6" required value="<?php echo $semestre; ?>"><br>

        <label for="grupo">Grupo:</label>
        <input type="text" name="grupo" style="text-transform: uppercase;" maxlength="1" required value="<?php echo $grupo; ?>"><br>

        <label for="especialidad">Especialidad:</label>
        <input type="text" name="especialidad" maxlength="15" required value="<?php echo $especialidad; ?>"><br><br>

        <input type="submit" name="Enviar" class="btn" value="Actualizar">
        <a href="index_html.php" class="btn">Regresar</a>
    </form>
<?php
}
?>
<section>

</body>
</html>