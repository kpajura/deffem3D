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
    <link rel="stylesheet" href="styles/admin.css" />
    <link rel="stylesheet" href="styles/structures.css" />
    <link rel="stylesheet" href="styles/footer.css" />

    <title>DEFFEM 3D - Generator</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
    ?>

    <section>
      <div class="container">
        <a href="editFEM.php" class="editFEM">GENERUJ STRUKTURĘ DLA MODUŁU FEM</a>
        <a href="editSPH.php" class="editSPH">GENERUJ STRUKTURĘ DLA MODUŁU SPH</a>
      </div>
    </section>

    <?php
    include 'footer.php';
    ?>

  </body>
</html>