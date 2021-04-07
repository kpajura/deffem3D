<?php
  session_start();
  if((isset($_SESSION['loggedin']))&&($_SESSION['loggedin']==true))
  {
    header('Location: index.php');
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
    <link rel="stylesheet" href="styles/contact.css" />
    <link rel="stylesheet" href="styles/footer.css" />


    <title>DEFFEM 3D - kontakt</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
    ?>

    <main>
      <div class="info">
        <h3>W razie dodatkowych pytań prosimy o kontakt poprzez formularz. 
        Dołożymy wszelkich starań, aby odpowiedzieć jak najszybciej.</h3>
        <br>
        <div class="adres">
          <p>Akademia Górniczo-Hutnicza w Krakowie</p>
          <p>Wydział Inżynierii Metali i Informatyki Przemysłowej</p>
          <p>ul. Czarnowiejska 66</p>
          <p>30-054 Kraków</p>
        </div>
      </div>
      
      <div class='form'>
        <form action="send.php", method="POST">
          <div class="personal">
            <label for="name"
              >Imię: <input type="name" name="name" required
            /></label>
            <br>
            <label for="surname"
              >Nazwisko: <input type="surname" name="surname" required
            /></label>
            <br>
            <label for="email"
              >E-mail: <input type="email" name="email" required
            /></label>
            <br>
            <br>
          </div>
          <br />
          <br>
          <p>Zaznacz elementy pakietu, którymi jesteś zainteresowany:</p>
          <label for="sph"><input type="checkbox" name="sph" />SPH</label>
          <label for="fem"><input type="checkbox" name = "fem"/>FEM</label>
          <label for="pre"><input type="checkbox" name="pre"/>PRE</label>
          <label for="postS"><input type="checkbox" name="post"/>POST</label>
          <br />
          <textarea name="message" id="message" cols="50" rows="7">Wiadomość</textarea>
          <br />
          <button type="submit">Wyślij</button>
          
        </form>
        <?php
          if(isset($_SESSION['sent'])){
            echo $_SESSION['sent'];
            unset($_SESSION['sent']);
          }
        ?>
      </div>
    </main>
    <?php
      include 'footer.php';
    ?>
  </body>
</html>
