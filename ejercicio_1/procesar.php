<?php
require_once("conexion.php");

$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];
$categoria = $_POST['categoria'];
$imagen = $_FILES['imagen'];

$nombre_archivo = "imagen";

$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($imagen["tmp_name"]);

if($check !== false) {
    echo "el archivo es una imagen " . $check["mime"] . ".";
} else {
    echo "el archivo no es una imagen";
}
//reviso peso imagen
if ($imagen["size"] > 1000000) {
    echo "la imagen pesa mas de 1mb";
    $uploadOk = 0;
}
   //reviso la imagen
if($imageFileType != "jpg" && $imageFileType != "png") {
        echo "la imagen debe ser jpg o png";
        $uploadOk = 0;
    }

move_uploaded_file($imagen["tmp_name"], $target_file);
echo "Imagen " .( $imagen["name"]);

$autor = $_POST['autor'];




//1.- Conexión
$host = "localhost";
$user = "root";
$pass = "";
$db = "multimedia_prueba_1";

$conexion = mysqli_connect($host, $user, $pass, $db);

//2.- Consulta
$consulta = "INSERT INTO ejercicio_1 (titulo, cuerpo, categoria,imagen,autor ) 
            VALUES('$titulo', '$cuerpo', '$categoria','$target_file','$autor')";

//3.- Ejecutar consulta
if (mysqli_query($conexion, $consulta)) {
    echo "registro ingresado";
}else{
    echo "error al ingresar";
}



?>