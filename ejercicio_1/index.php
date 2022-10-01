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
    <h1>Formulario de noticia</h1>
    <form action="procesar.php" name="" method="POST" enctype="multipart/form-data">
      <table border="0" align="center">
        <tr>
          <td>
            titulo de la noticia:
          </td>
          <td>
            <label for="titulo"></label>
            <input type="text" name="titulo"  required  />
          </td>
        </tr>
        <tr>
          <td>
          cuerpo de la noticia:
          </td>
          <td>
          <textarea name="cuerpo"></textarea>
          </td>
        </tr>
        <tr>
          <td>
          categoria:
          </td>
          <td>
            <label for="categoria"></label>
            <input type="text" name="categoria"   required />
          </td>
        </tr>
        <tr>
          <td>
          imagen:
          </td>
          <td>
            <label for="foto"></label>
            <input type="file" name="imagen"   required />
          </td>
        </tr>
        <tr>
          <td>
          autor de la noticia:
          </td>
          <td>
            <label for="autor"></label>
            <input type="text" name="autor"   required />
          </td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"  name="enviar" id="enviar" value="enviar" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
