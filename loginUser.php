<?php

session_start();
unset($_SESSION['mes']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="logo/logo_transparent.png"
      sizes="16x16"
      type="image/png"
    />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/login.css" />
    <link rel="stylesheet" href="styles/footer.css" />


    <title>DEFFEM 3D - Logowanie</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
    ?>
    
    <section>
      <form id="form" action="login.php" method="post">
        <label for="username"
          >Podaj login:
          <input type="text" name="username" id="username" value="" />
        </label>
        <br />
        <label for="password"
          >Podaj hasło:
          <input type="password" name="password" id="password" value="" />
        </label>
        <br>
        <br />
        <button type="submit" id="loginButton">Zaloguj się</button>
      </form>
      <br>
      <?php
          if(isset($_SESSION['error'])){
            echo '<div class="error">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
          }
          ?>
    </section>

    <?php
      require_once "footer.php";
    ?>

  </body>
</html>
