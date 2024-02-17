<?php
include "conexion.php";

$email = $_POST['email'];
$password = $_POST['contraseña'];

// Hash de la contraseña
$PasswordEncriptado = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (`email`, `contraseña`) VALUES ('$email', '$PasswordEncriptado')";
 $selecionar = "SELECT * FROM  usuarios where email = '$email'";

if (mysqli_query($conectar, $sql)) {
    $con= $conectar->prepare($selecionar);
    $con-> execute();
    $resul = $con-> get_result();
    $data = $resul->fetch_assoc();

    session_start();
     
    $_SESSION["seccionIni"]= $data;
    
    // Redirect to index.php after successful registration
    header("Location: ./peronaslInfo.php");
    echo "Conexión satisfactoria";
} else {
    echo "Error en la conexión" . mysqli_error($conectar);
}

mysqli_close($conectar);
?>
