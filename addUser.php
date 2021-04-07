<?php
  session_start();  
  if(!(isset($_SESSION['loggedin']))||!($_SESSION['loggedin']==true))
  {
    header('Location: login.html');
    exit();
  }
  if(!($_SESSION['admin']==true)){
    header('Location:index.php');
    exit();
  }

  require_once "connect.php";

  $connect = @new mysqli($host, $db_user, $db_password, $db_name);

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
    <link rel="stylesheet" href="styles/addUser.css">
    <link rel="stylesheet" href="styles/footer.css">


    <title>DEFFEM 3D - Dodaj użytkownika</title>
  </head>

  <body>
  <?php
    include 'header.php';
    include 'loggedinHeader.php';
  ?>

  <section>
    <form id="form" action="signup.php" method="post">
      <label for="username"
        >Podaj login:
        <input type="text" name="username" id="username" value="" />
      </label>
      <?php
        if(isset($_SESSION['e_username'])){
          echo '<div class="error">'.$_SESSION['e_username'].'</div>';
          unset($_SESSION['e_username']);
        }
      ?>
        <br />
        <label for="email"
          >Podaj email:
          <input type="email" name="email" id="email" value="" />
        </label>
        <?php
          if(isset($_SESSION['e_mail'])){
            echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
            unset($_SESSION['e_mail']);
          }
          ?>
        <br />
        <label for="password"
          >Podaj hasło:
          <input type="password" name="password" id="password" value="" />
        </label>
        <?php
          if(isset($_SESSION['e_password'])){
            echo '<div class="error">'.$_SESSION['e_password'].'</div>';
            unset($_SESSION['e_password']);
          }
          ?>
        <br />
        <label for="password2"
          >Podaj ponownie hasło:
          <input type="password" name="password2" id="password2" value="" />
        </label>
        <br />
        <br>
    
        
        <button type="submit" id="loginButton">Zarejestruj użytkownika</button>
        <br>
        <?php
          if(isset($_SESSION['e_repeat'])){
            echo '<br>
            <div class="error">'.$_SESSION['e_repeat'].'</div>';
            unset($_SESSION['e_repeat']);
          }
         
          if(isset($_SESSION['added'])){
            echo '<div class="error">Dodano użytkownika: '.$_SESSION['added'].'</div>';
            unset($_SESSION['added']);
          }
          ?>
      </form>
    </section>
   
    <?php
    include 'footer.php';
    ?>
  </body>


</html>
