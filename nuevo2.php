<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar alumnos</title>
    <style>
        body {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-size: 25px;
            color: rgb(245, 239, 237);
            animation-name: miAnimacion;
            animation-duration: 3s;
            animation-direction: alternate;
            animation-iteration-count: infinite;
            font-family: Arial, Helvetica, sans-serif;
        }

        @keyframes miAnimacion {
            from { color: red; }
            to { color: blue; }
        }

        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 18px;
            margin: 40px;
            width: 290px;
            text-align: left;
            border-collapse: collapse;
            text-align: center;
        }

        th {
            font-size: 43px;
            font-weight: normal;
            padding: 8px;
            background: #c7bbc700;
            border-top: 7px solid #a583b3;
            border-bottom: 1px solid #ffffff8a;
            color: black;
            text-align: center;
        }

        td {
            padding: 18px;
            background: #d7c7dd00;
            border-bottom: 1px solid #fff;
            color: #696969;
            border-top: 0px solid transparent;
            text-align: center;
        }

        #caja {
            width: 1000px;
            height: 200px;
            display: inline-block;
        }

        .btn {
            background-color: thistle;
            border: none;
            color: rgb(20, 22, 22);
            padding: 8px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            font-family: "Lucida Console", "Courier New", monospace;
            border-radius: 10px;
            box-shadow: 0 5px #999;
        }

        .btn:hover {
            background-color: #aadaac;
        }

        .btn:active {
            background-color: purple;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
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
<?php
if(isset($_POST['Enviar'])){
    $idA = $_POST['idA'];
    $modulo = $_POST['modulo'];
    $horas = $_POST['horas'];
    $creditos = $_POST['creditos'];
  

    include("conexión.php");
    $sql = "INSERT INTO modulos (idA, modulo, horas, creditos)
    VALUES ('".$idA."', '".$modulo."', '".$horas."', '".$creditos."')";
    $resultados = mysqli_query($conexion, $sql);

    if($resultados){
        echo "<script language='JavaScript'>
        alert('Los datos fueron ingresados correctamente');
        location.assign('modulos_html.php');
        </script>";
    }else{
        echo "<script language='JavaScript'>
        alert(VERIFIQUE QUE LOS DATOS ESTEN CORRECTOS');
        location.assign('modulos_html.php');
        </script>";
    }
    mysqli_close($conexion);
}else{
}
?>
<img src="https://i.pinimg.com/736x/dc/66/aa/dc66aae269009c295e20feee8fd3cd9e.jpg">
<P>NUEVO MODULO</P>
<table>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
<tr><td>
    <label for="idA">ID Modulo:</label></td>
  <td>  <input type="number" id="idA" name="idA" maxlength="4" min="1" required><br>
</td>
<tr><td>
    <label for="modulo">Modulo:</label>
    <td> <input type="text" id="modulo" name="modulo" maxlength="30" required><br>
    <tr><td>
    <label for="horas">No. Horas:</label>
    <td> <input type="number" id="horas" name="horas" style="text-transform: uppercase;" maxlength="3" required><br>
    <tr><td>
    <label for="creditos">No.Créditos:</label>
    <td> <input type="number" id="creditos" name="creditos" maxlength="15" required><br>
</tr></td>
    <input type="submit" name="Enviar" class="btn" value="Agregar">
    <a href="modulos_html.php" class="btn">Regresar</a>
</form>
</center>
</body>
</html>
