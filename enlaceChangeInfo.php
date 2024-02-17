<?php

session_start();

$userId= $_SESSION["seccionIni"]["id"];


include "conexion.php";

$email = $_POST['email'];
$password = $_POST['password'];
$photo = $_FILES['photo'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$phone = $_POST['phone'];

$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE usuarios SET `name` = '$name', `bio` = '$bio', `phone` = '$phone', `contraseña` = '$PasswordEncriptado' WHERE `id` = '$userId'";

if ($conectar->query($sql) === TRUE) {

    $selecionar = "SELECT * FROM  usuarios where email ='$email'";


    $con = $conectar->prepare($selecionar);
    $con->execute();
    $resul = $con->get_result();
    $data = $resul->fetch_assoc();

    session_start();

    $_SESSION["seccionIni"] = $data;

   
    header("Location: ./peronaslInfo.php");
} else {
    echo "Error al actualizar la información de usuario: " . $conectar->error;
}

$conectar->close();
