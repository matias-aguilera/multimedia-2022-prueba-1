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
    <h1>QR</h1>
      <table border="0" align="center">
        <tr>
          <td>
          <?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

echo $nombre . " " . $apellido;

require_once 'phpqrcode/qrlib.php';

$dir='temp/';
if(!file_exists($dir))
    mkdir($dir);


$filename=$dir.'test.png';


$tamano=10;
$level='M';
$frameSize=3;
$contenido= $nombre . " " . $apellido;

QRcode::png($contenido,$filename,$level,$tamano,$frameSize);

echo '<img src="'.$filename.'"/>';



?>
          </td>
          <td>
            
      </table>
    </form>
  </body>
</html>




