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
  <h1>función de segundo grado</h1>
    <form action="calcular.php" name="" method="POST" >
      <table border="0" align="center">
        <tr>
          <td>
          Ingrese valor de A:
          </td>
          <td>
            <label for="a "></label>
            <input type="number" name="a" id="a" required  />
          </td>
        </tr>
        <td>
        Ingrese valor de B:
          </td>
          <td>
            <label for="b "></label>
            <input type="number" name="b" id="b" required  />
          </td>
          <tr>
          <td>
          Ingrese valor de C:
          </td>
          <td>
            <label for="c "></label>
            <input type="number" name="c" id="c" required  />
          </td>
        </tr>
          <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"  name="calcular" id="calcular" value="calcular" />
          </td>
      </table>
    </form>
  </body>
</html>






