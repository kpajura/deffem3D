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
    <link rel="stylesheet" href="styles/licence.css">
    <link rel="stylesheet" href="styles/footer.css">

    <title>DEFFEM 3D - Pliki</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
      require_once "connect.php";

      $connect = @new mysqli($host, $db_user, $db_password, $db_name);

      if($connect->connect_errno!=0){
        echo "error";
      }
      else{
        $userID = $_SESSION['userID'];
        $sql = "SELECT FILE_NAME, FILE_DES FROM files WHERE USERS_ID=$userID";

        if($result = @$connect->query($sql)){
          if($result->num_rows>0){
            $num=1;
            echo "<div class='filesBox'>";
            while($row = $result->fetch_assoc()){
              $file = $row['FILE_NAME'];
              echo "\n<p class='lic'> ".$num. ". ".$file."</p>";
              echo "\n<p class='date'> Opis: ".$row['FILE_DES']."</p>";
              if(file_exists("downloads/".$file)){
                echo '<a href="downloads/'.$file.'" download class="fileDownload">Pobierz plik</a>';
              }
              else{
                echo("Brak pliku w repozytorium");
              }
              echo "<div class='line'></div>";
              $num++;
            }
            echo "</div>";
          }
          else{
            echo "<div class='licenceBox'>";
            echo "\n<p class='lic'> Brak plików do pobrania </p>";
            echo "</div>";
          }
        }
        else{
          echo "BLad połączenia";
        }

        $connect->close();
      }



      include 'footer.php';
    ?>

  </body>
</html>
