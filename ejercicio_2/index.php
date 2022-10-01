<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QR</title>

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
  <h1>creacion QR</h1>
    <form action="QR.php" name="" method="POST" >
      <table border="0" align="center">
        <tr>
          <td>
            nombre:
          </td>
          <td>
            <label for="nombre: "></label>
            <input type="text" name="nombre" id="nombre" required  />
          </td>
        </tr>
        <td>
            apellido:
          </td>
          <td>
            <label for="apellido: "></label>
            <input type="text" name="apellido" id="apellido" required  />
          </td>
          <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"  name="crear" id="crear" value="crear" />
          </td>
      </table>
    </form>
  </body>
</html>






