<?php
include "conexion.php";


$email = $_POST['email'];
$password = $_POST['password'];


$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$selecionar = "SELECT * FROM  usuarios where email ='$email'";

$con = $conectar->prepare($selecionar);
$con->execute();
$resul = $con->get_result();
$data = $resul->fetch_assoc();

if (password_verify($password, $data["contraseña"])) {
    session_start();

    $_SESSION["seccionIni"] = $data;
    
    header("Location: ./peronaslInfo.php");
    echo "Conexión satisfactoria";
} else {
    
    header("Location: ./register.php");
    echo "Usuario no Encontrado" . mysqli_error($conectar);
}

mysqli_close($conectar);
