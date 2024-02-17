<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos/style.css">
  <title>registro Form</title>
</head>

<body>
  <div class="container">

    <br><div class="logo">
      <img src="./assets/devchallenges-light.svg" alt="Logo">
    </div>
    <br><div class="lista2">
      <ul>
        <li class="titulo2">Login</li>
      </ul>
      <br></div>
    <form action="./login.php" method="post">
      <input type="text"  name="email" placeholder="Email" required>                  
      <input type="password" name="password" placeholder="password" required> <br>  
      <button type="submit" id="start-coding-button">Start coding now</button>  </form>  
  

    <br><ul>
      <li class="tituloredes">or continue with these social profiles</li>
    </ul>

    <div class="redesSociales">
      <img src="./assets/Google.svg" alt="gmail 1">
      <img src="./assets/Facebook.svg" alt="faceb 2">
      <img src="./assets/Twitter.svg" alt="twit 3">
      <img src="./assets/Gihub.svg" alt="git 4">
    </div>

    <ul>
      <li class="tituloLoging">Don’t have an account yet? <a href="/changeInfo.php"> Register</a></li>
    </ul>

  </div>
</body>
</html>