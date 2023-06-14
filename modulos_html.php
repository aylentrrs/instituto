<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulos</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estás seguro? Se eliminarán los datos del módulo');
        }
    </script>
    <style>
      body{

        background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
      }
        p{
        font-size: 50px;
        font-family: Arial, Helvetica, sans-serif;
        }
        
table { font-family: «Lucida Sans Unicode», «Lucida Grande», Sans-Serif;
font-size: 18px; margin: 40px; width: 290px; text-align: left; border-collapse: collapse;
text-align: center; }

th { font: size 43px; font-weight: normal; padding: 8px; background: #c7bbc700;
border-top: 7px solid #a583b3; border-bottom: 1px solid #ffffff8a; color:black;
text-align: center;}

td { padding: 18px; background: #d7c7dd00; border-bottom: 1px solid #fff;
color:#696969; border-top: 0px solid transparent;
text-align: center; }
#caja{
    width:1050px ;  
    height:310px;
    display:inline-block;
    border-radius: 10px;
    border: 2px solid black;
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
p{
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
    </style>
</head>
<body>
<center>
<?php
include("conexión.php");
$sql = "SELECT * FROM modulos";
$resultados = mysqli_query($conexion, $sql);
?>
    <img id="caja" src="https://media2.giphy.com/media/3orifc0HEZb5RONubC/giphy.gif?cid=ecf05e47u8wjojv4hs931ccvo4ud55kmgz6vb09hqnco2uk6&ep=v1_gifs_related&rid=giphy.gif&ct=g">
<p>Gestión Modulos</p>
<table>
    <thead>
        <tr>
            <th>ID módulo</th>
            <th>Nombre del módulo</th>
            <th>No. Horas</th>
            <th>No. Créditos</th>
            <th><a class='btn' href="nuevo2.php">Agregar</a><br></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        while ($filas = mysqli_fetch_assoc($resultados)) {
            echo "<tr>";
            echo "<td>" . $filas['idA'] . "</td>";
            echo "<td>" . $filas['modulo'] . "</td>";
            echo "<td>" . $filas['horas'] . "</td>";
            echo "<td>" . $filas['creditos'] . "</td>";
            echo "<td><a class='btn' href='editar2.php?idA=" . $filas['idA'] . "'>Editar</a></td>";
            echo "<td><a class='btn1' href='eliminar2.php?idA=" . $filas['idA'] . "' onclick='return confirmar()'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<?php 
mysqli_close($conexion);
?>
<hr width="250">
<a href="portada.html"><button type="button" class="btn">Regresar al inicio</button></a>
</center>
</body>
</html>