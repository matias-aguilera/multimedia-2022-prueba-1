<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>formulario de noticia</title>

    <style>
      body {
        background-color: #87ccc1;
        margin: 0;
        padding: 0;
      }
      h1 {
        text-align: center;
        width: 50%;
        margin: auto;
        margin-top: 30px;
      }
      table {
        border: 3px solid #cca633;
        padding: 20px 50px;
        margin-top: 20px;
        border-radius: 5px;
        background-color: #edf797;
      }
    </style>
  </head>
  <body>
    <h1>ver la noticia</h1>
      <table border="0" align="center">
        <tr>
          <td>
          <?php

$host = "localhost";
    $user ="root";
    $pass="";
    $db="multimedia_prueba_1";

    $conexion= mysqli_connect($host, $user,$pass,$db);
   

    $vista = "SELECT * FROM ejercicio_1";
    $resultado = mysqli_query($conexion, $vista);

        while($fila = mysqli_fetch_assoc($resultado)){
         
        echo "----  ----  ----  ----  ---<br>";
         echo "titulo: " .$fila["titulo"] . "<br>";
         echo "cuerpo de la noticia: " .$fila["cuerpo"] . "<br>";
         echo "Categotia: " .$fila["categoria"] ."<br>";
         echo "imagen: " .$fila["imagen"] ."<br>";
         echo " Autor: " .$fila["autor"] ."<br>";     
         echo "----  ----  ----  ----  ---<br>";

    }


?>
          </td>
          <td>
            
      </table>
    </form>
  </body>
</html>


