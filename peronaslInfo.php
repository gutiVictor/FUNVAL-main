<?php
session_start();

$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$baseDatos =  "login_db";

/* establecer conexion */

$conectar = mysqli_connect($servidor, $usuario, $contraseña, $baseDatos);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/personalInfo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Personal Info</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap");

        body {
            margin: 0;
            font-family: "Noto Sans", sans-serif;
        }

        .container {
            position: relative;
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
            top: 44.63px;
            left: 72px;
        }

        .user-info {
            display: flex;
            align-items: center;
            font-family: "Noto Sans", sans-serif;
        }

        .user-image {
            width: 32px;
            height: 32px;
            top: 24px;
            left: 1220px;
            border-radius: 10%;
            margin-right: 10px;
        }

        .user-details {
            display: flex;
            flex-direction: column;
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
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .dropdown-content a {
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            color: #333;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .content {
            padding: 10px;
        }

        h2,
        p,
        button {
            margin: 0;
        }

        h1 {
            text-align: center;
            font-family: "Noto Sans", sans-serif;
        }

        h3 {
            font-family: "Noto Sans", sans-serif;
            text-align: center;
            font-weight: lighter;
        }

        p {
            font-size: 14px;
        }

        .info-table {
            width: 845.91px;
            height: 580.54px;
            margin: 20px auto;
            border-radius: 12px;
            border: 1px solid #e0e0e0;
            top: 228.06px;
            left: 297.04px;
        }
        .info-row1 {
            justify-content: center;
            display: flex;
            flex-direction: column;
            margin-top: 4%;
            padding: 2px;
            padding-left: 50px;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-row {
            display: flex;
            align-items: center;
            padding: 16px;
            padding-left: 50px;
            border-bottom: 1px solid #e0e0e0;
        }
        .info-row>img {
            width: 72px;
            height: 72px;
            border-radius: 8px;
            top: 381.14px;
            left: 346.34px;
            margin-left: 20%;
        }
        label {
            width: 100px;
            color: #bdbdbd;
        }

        input,
        textarea {
            width: 470px;
            height: 25px;
            flex: 1;
            margin-left: 20%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            font-family: "Noto Sans", sans-serif;
            font-size: 18px;
            line-height: 24.52px;
            letter-spacing: -3.5%;
        }

        button {
            align-self: flex-end;
            background-color: transparent;
            border: 1px solid #828282;
            border-radius: 12px;
            width: 95.34px;
            height: 38px;
            top: 267.11px;
            left: 998.77px;
            cursor: pointer;
            transform: translateY(-100%);
            margin-left: 85%;
        }

        button:hover {
            background-color: #f1f1f1;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="header">
            <img src="./assets/devchallenges.svg" alt="Logo" class="logo">
            <div class="user-info">
                <img src="./assets/dark_blue.jpg" alt="User" class="user-image">
                <div class="user-details">
                    <span class="user-name">victor</span>
                    <div class="dropdown">
                        <span class="arrow">&#9660;</span>
                        <div class="dropdown-content">
                            <a href="#">Logout</a>
                            <a href="#">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <h1>Personal Info</h1>
            <h3>Basic info, like your name and photo</h3>
            <div class="info-table">
                <div class="info-row1">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                    <a href="./changeInfo.php"><button type="submit">Edit</button> </a>

                </div>
                <div class="info-row">
                    <label for="photo">PHOTO</label>
                    <img src="./assets/dark_blue.jpg" alt="User Img">
                </div>
                <div class="info-row">
                    <label for="name">NAME</label>
                    <input type="text" id="name">
                </div>
                <div class="info-row">
                    <label for="bio">BIO</label>
                    <textarea id="bio"></textarea>
                </div>
                <div class="info-row">
                    <label for="phone">PHONE</label>
                    <input type="tel" id="phone">
                </div>
                <div class="info-row">
                    <label for="email">EMAIL</label>
                    <input type="email" id="email">
                </div>
                <div class="info-row">
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password">
                </div>
            </div>
        </div>
    </div>
</body>

</html>




















</div>


</body>

</html>