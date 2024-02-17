<?php
session_start();

if (isset($_SESSION["seccionIni"])) {
  $user = $_SESSION["seccionIni"];
} else {
  header("location: index.php");
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>changeInformacion</title>
  <link rel="stylesheet" href="./estilos/styleChange.css">


  <style>
    body {
      margin: 0;
      font-family: "Noto Sans", sans-serif;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    .logo {
      width: 130.17px;
      height: 18px;
      margin-left: 15%;
    }

    .user-info {
      display: flex;
      align-items: center;
      font-family: "Noto Sans", sans-serif;
    }

    .user-details {
      display: flex;
      flex-direction: row;
      margin-right: 15%;
    }

    .user-details img {
      width: 32px;
      height: 32px;
      border-radius: 10%;
      margin-right: 10px;
    }

    .user-name {
      font-size: 16px;
      font-family: "Noto Sans", sans-serif;
    }

    .dropdown {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }

    .arrow {
      font-size: 12px;
      margin-left: 5px;
    }

    .dropdown-content {
      width: 190.01px;
      border: 1px solid #e0e0e0;
      background-color: #f9f9f9;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border-radius: 12px;
      overflow: hidden;
      display: none;
      z-index: 1;
      position: absolute;
      top: 100%;
      /* Cambiado a 'absolute' para que se posicione correctamente */
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      padding: 12px 16px;
      display: block;
      text-decoration: none;
      color: #333;
      border-top: 1px solid #e0e0e0;
      /* Añadido un borde superior */
    }

    .dropdown-content a:hover {
      background-color: #f2f2f2;
      /* Cambiado el color de fondo en hover */
    }

    .group {
      border-bottom: 1px solid #333;
    }

    .logout {
      border-top: 1px solid #e0e0e0;
      /* Añadido un borde superior a 'Logout' */
    }

    .devolver {
      width: 39px;
      height: 25px;
      font-family: "Noto Sans", sans-serif;
      font-weight: 400;
      font-size: 18px;
      line-height: 24.52px;
      letter-spacing: -3.5%;
      color: #2d9cdb;
      margin-left: 29%;
    }

    .content {
      display: flex;
      flex-direction: column;
      width: 845.91px;
      border-radius: 12px;
      border: 1px solid #e0e0e0;
      color: rgba(189, 189, 189, 1);
      text-align: center;
      margin: 50px auto;
      background: #fff;
      padding: 20px;
    }

    h2 {
      font-family: "Noto Sans", sans-serif;
      font-weight: 400;
      font-size: 24px;
      line-height: 32.69px;
      letter-spacing: -3.5%;
      color: #000000;
    }

    p {
      font-family: "Noto Sans", sans-serif;
      font-weight: 500;
      font-size: 13px;
      line-height: 17.71px;
      letter-spacing: -3.5%;
      color: #828282;
    }

    li {
      list-style-type: none;
    }

    .styled-form {
      width: 300px;
      margin: auto;
    }

    .contenedorFoto {
      display: flex;
      flex-direction: column;
      width: 72px;
      height: 72px;
      border-radius: 8px;
      border: 1px solid #000000;
      align-items: center;
      margin-bottom: 20px;
    }

    .contenedorFoto label {
      margin-right: 10px;
    }

    .contenedorHijo {
      display: flex;
      flex-direction: column;
      margin-bottom: 10px;
      width: 416.93px;
      height: 73.83px;
      border-radius: 12px;
      border: 1px;
      align-items: flex-start;
    }

    #name,
    #phone,
    #email,
    #password {
      width: 100%;
      height: 100%;
      border-radius: 12px;
      border: 1px solid rgba(130, 130, 130, 1);
      padding: 10px;
      box-sizing: border-box;
    }

    #bio {
      width: 100%;
      height: 113.83px;
      border-radius: 12px;
      border: 1px solid rgba(130, 130, 130, 1);
      padding: 10px;
      box-sizing: border-box;
    }

    button {
      width: 150px;
      height: 40px;
      background-color: #2d9cdb;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 20px;
    }

    button:hover {
      background-color: #1f7fbf;
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="./assets/devchallenges-light.svg" alt="Logo">
    </div>

    <div class="devolver">

      <a href="./register.php">
        < Back</a>
    </div>


    <form action="./enlaceAgreagarInfo.php" method="post" enctype="multipart/form-data">


      <div class="listasCabeza">
        <ul>
          <li>Change Info</li>
          <li>Changes will be reflected to every services</li>
        </ul>
      </div>

      <div class="contenedorHijo">
        <label for="photo">CHANGE PHOTO</label>
        <input type="file" name="photo" id="photo">
      </div>

      <div class="contenedorDiv">
        <div class="contenedorHijo">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name..." required>
        </div>

        <div class="contenedorHijo">
          <label for="Bio">Bio</label>
          <input type="text" name="bio" id="bio" placeholder="Enter your bio..." required>
        </div>

        <div class="contenedorHijo">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone..." required>
        </div>

        <div class="contenedorHijo">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter your email..." required>
        </div>

        <div class="contenedorHijo">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password..." required>
        </div>



        <button type="submit">Save</button>
      </div>
    </form>
  </div>
</body>

</html>