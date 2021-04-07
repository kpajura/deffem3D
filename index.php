<?php
    session_start();
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
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/admin.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <title>DEFFEM 3D - Strona Główna</title>
  </head>

  <body>
    <?php
    include 'header.php';
    include 'loggedinHeader.php';

    ?>

    <main>
      <section>
        <div class="text">
        <img src="graphics/logo/logo_transparent.png" alt="logo" class="mainLogo">
          <h3 class="home">Modułowy i zadaniowo zorientowany pakiet symulacyjny</h3>
        </div>
        <img src="graphics/deffem graph.png" alt="graph" class="graph">
      </section>
    </main>


    <?php
      include 'footer.php';
    ?>
  </body>


</html>
