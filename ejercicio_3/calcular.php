<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>

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
    <h1>resultado</h1>
      <table border="0" align="center">
        <tr>
          <td>
          <?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$raiz = sqrt(($b**2) - 4*$a*$c);
$x1 = (-($b) + $raiz) / (2*$a);
$x2 = (-($b) - $raiz) / (2*$a);


echo" valor de x1  = $x1 <br>";
echo" valor de x2  = $x2";

?>

          </td>
          <td>
            
      </table>
    </form>
  </body>
</html>