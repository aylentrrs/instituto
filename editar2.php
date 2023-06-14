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
    <center> 
    <img id="caja" src="https://i.pinimg.com/564x/42/83/19/42831978dfc3e668f636ff5f8cb079a0.jpg">

        <h1>Editar Módulos</h1> 
        <section>
        <?php
        if (isset($_POST['Enviar'])) {
            // Botón enviar
            $idA = $_POST['idA'];
            $modulo = $_POST['modulo'];
            $horas = $_POST['horas'];
            $creditos = $_POST['creditos'];

     

            $sql = "UPDATE modulos SET 
                modulo='$modulo',
                horas='$horas',
                creditos='$creditos'
                WHERE idA='$idA'";

            $resultados = mysqli_query($conexion, $sql);

            if ($resultados) {
                echo "<script language='JavaScript'>
                    alert('Los datos fueron editados correctamente');
                    location.assign('modulos_html.php');
                    </script>";
            } else {
                echo "<script language='JavaScript'>
                    alert('Los datos NO fueron editados');
                    location.assign('modulos_html.php');
                    </script>";
            }

            mysqli_close($conexion);
        } else {
            $idA = $_GET['idA'];


            $sql = "SELECT * FROM modulos WHERE idA='$idA'";
            $resultados = mysqli_query($conexion, $sql);
            $filas = mysqli_fetch_assoc($resultados);

            $idA = $filas['idA'];
            $modulo = $filas['modulo'];
            $horas = $filas['horas'];
            $creditos = $filas['creditos'];

            mysqli_close($conexion);
        }
        ?>
        <div>
            <table>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
            <tr>
                <td>
                    <!-- <label for="idA">ID módulo:</label> -->
                </td>
                <td>
                    <input type="hidden" name="idA" maxlength="5" min="1"  required value="<?php echo $idA; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="modulo">Módulo:</label>
                </td>
                <td>
                    <input type="text" name="modulo" maxlength="20" required value="<?php echo $modulo; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="horas">No. Horas:</label>
                </td>
                <td>
                    <input type="number" name="horas" style="text-transform: uppercase;" maxlength="3" required value="<?php echo $horas; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="creditos">No. Créditos:</label>
                </td>
                <td>
                    <input type="number" name="creditos" maxlength="15" required value="<?php echo $creditos; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Enviar" class="btn" value="Actualizar">
                </td>
                <td>
                    <a href="modulos_html.php" class="btn">Regresar</a>
                </td>
            </tr>
            </form>
            </table>
        </div>
        </section>
    </center>
</body>
</html>