<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
        function confirmar(){
            return confirm('¿Estás seguro? Se eliminarán los datos del maestro(a)');
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Maestros</title>
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
    height:510px;
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
    .Btn {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 100px;
  height: 40px;
  border: none;
  padding: 0px 20px;
  background-color: rgb(168, 38, 255);
  color: white;
  font-weight: 500;
  cursor: pointer;
  border-radius: 10px;
  box-shadow: 5px 5px 0px rgb(140, 32, 212);
  transition-duration: .3s;
}

.svg {
  width: 13px;
  position: absolute;
  right: 0;
  margin-right: 20px;
  fill: white;
  transition-duration: .3s;
}

.Btn:hover {
  color: transparent;
}

.Btn:hover svg {
  right: 43%;
  margin: 0;
  padding: 0;
  border: none;
  transition-duration: .3s;
}

.Btn:active {
  transform: translate(3px , 3px);
  transition-duration: .3s;
  box-shadow: 2px 2px 0px rgb(140, 32, 212);
}
    </style>
</head>
<body>
    <center>
        <?php
        include("conexión.php");
        $sql = "SELECT * FROM maestros";
        $resultados = mysqli_query($conexion, $sql);
        ?>
    <img id="caja" src="https://media2.giphy.com/media/3orifc0HEZb5RONubC/giphy.gif?cid=ecf05e47u8wjojv4hs931ccvo4ud55kmgz6vb09hqnco2uk6&ep=v1_gifs_related&rid=giphy.gif&ct=g">
    <p>Maestros</p>

    <table>
        <thead>
            <tr>
                <th>N. matrícula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th><a class='btn' href="nuevo1.php">Agregar</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($filas = mysqli_fetch_assoc($resultados)) {
                echo "<tr>";
                echo "<td>" . $filas['idM'] . "</td>";
                echo "<td>" . $filas['nombre'] . "</td>";
                echo "<td>" . $filas['apellidopat'] . "</td>";
                echo "<td>" . $filas['apellidomat'] . "</td>";
                echo "<td>" . $filas['direccion'] . "</td>";
                echo "<td>" . $filas['telefono'] . "</td>";
                echo "<td>" . $filas['correo'] . "</td>";
                echo" <td>   <a class='Btn'href='editar1.php?idM=". $filas['idM'] . "'>Editar 
                <svg class='svg' viewBox='0 0 512 512'>
                  <path d='M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z'></path></svg>
              </a>";
                echo "<td><a class='btn1' href='eliminar1.php?idM=" . $filas['idM'] . "' onclick='return confirmar()'>Eliminar</a></td>";
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