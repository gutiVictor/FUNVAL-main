<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/style.css">
    <title>Login Form</title>

</head>

<body>
    <div class="container">

        <br>

        <div class="logo">
            <img src="./assets/devchallenges-light.svg" alt="Logo">
        </div>
        <br>
        <div class="lista1">
            <ul>
                <li class="titulo1">Join thousands of learners from <br> around the world</li>
            </ul>
        </div>
        <div class="lista2">
            <ul>
                <li class="titulo2">Master web development by making real-life <br> projects. There are multiple paths for you to <br>choose</li>
            </ul>
            <br>
        </div>
        <form action="./enlace.php" method="post">


            <div class="icon-input">
                <img src="./assets/Email.svg" alt="Email Icon" class="icon">
                <input type="text" name="email" placeholder="Email">
            </div>



            <div class="icon-input">
                <img src="./assets/bloquear.png" alt="Password Icon">
                <input type="password" name="contraseña" placeholder="Password">
            </div>
            <button type="submit">Start coding now</button>
        </form>

        <ul>
            <li class="tituloredes">or continue with these social profiles</li>
        </ul>

        <div class="redesSociales">

            <img src="./assets/Google.svg" alt="gmail 1">
            <img src="./assets/Facebook.svg" alt="faceb 2">
            <img src="./assets/Twitter.svg" alt="twit 3">
            <img src="./assets/Gihub.svg" alt="git 4">

        </div>

        <ul>
            <li class="tituloLoging">Already a member? <a href="register.php">Login</a></li>
        </ul>

    </div>
</body>

</html>