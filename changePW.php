<?php
  session_start();
  if(!(isset($_SESSION['loggedin']))||!($_SESSION['loggedin']==true))
  {
    header('Location: login.html');
    exit();
  }
?>


<!DOCTYPE html>
<html lang="pl-PL">
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
    <link rel="stylesheet" href="styles/admin.css" />
    <link rel="stylesheet" href="styles/changePW.css">
    <link rel="stylesheet" href="styles/footer.css" />

    <title>DEFFEM 3D - zmiana hasła</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
    ?>

    <section>
      <form id="form" action="changePWinDB.php" method="post">
        <label for="oldPassword"
          >Podaj stare hasło:
          <input type="password" name="oldPassword" id="old" value="" />
        </label>
        <br />
        <label for="newPassword">Podaj nowe hasło:
          <input type="password" name="newPassword" value="" />
        </label>
        <br />
        <label for="repeatPassword"
          >Powtórz nowe hasło:
          <input type="password" name="repeatPassword" value="" />
        </label>
        <br />
        <button type="submit" id="loginButton">Zmień hasło</button>
      </form>
      <?php
        if(isset($_SESSION['mes'])){
            $mes = $_SESSION['mes'];
            echo "<p class='mes'>".$mes."</p>";
            unset($_SESSION['mes']);
        }
      ?>
    </section>

    <?php
    include 'footer.php';
    ?>

  </body>


</html>
