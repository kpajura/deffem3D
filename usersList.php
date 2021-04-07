<?php
session_start();
unset($_SESSION['mes']);

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

// print_r($_SESSION);

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
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/admin.css" />
    <link rel="stylesheet" href="styles/list.css">

    


    <title>DEFFEM 3D</title>
  </head>

  <body>
  <?php
    include 'header.php';
  
    include 'loggedinHeader.php';

    ?>
    <!-- <div class="list">
        <button>Sortuj po ID użytkownika</button>
        <button>Sortuj po nazwie użytkownika</button>
        <button>Sortuj po licencji</button>
    </div> -->


    
<?php


    if($connect->connect_errno!=0){
        echo "error";
    }
    else{
        
        $sql= "SELECT  u.ID, u.USERNAME, u.EMAIL, u.CREATIONDATE FROM users u ";
    
        if($result = @$connect->query($sql)){
            if($result->num_rows>0){    
               echo "<table>
               <tr>
               <th>ID Użytkownika</th>
               <th>Login</th> 
               <th>E-mail</th>
               <th>Data założenia konta</th>
             </tr>";
             

             while($row = $result->fetch_assoc()){
                 echo "
                 <tr>
                 <td>".$row['ID']."</td>
               <td>".$row['USERNAME']."</td>
               <td>".$row['EMAIL']."</td>
               <td>".$row['CREATIONDATE']."</td>             
             </tr>
             ";
             }

             echo "</table>";

                $result->close();
    
    
            }
            else{
              echo "BLA";
            }
        }
        else{
          echo "BLABLA";
        }
    
    
        $connect->close();
    }
   


    ?> 

    <div class="changeDateForm">
        <form action="saveFile.php" method="post" enctype="multipart/form-data">
          <h2>Dodaj plik</h1>

          <label>ID użytkownika <input type="number" value='' name="userid" class="idNum"></label>
          <br>
          <label>Wybierz plik<input type="file" name= "file"></label>
          <br>
          <label>Nazwa pliku <input type="text" value='' name="name"></label>
          <br>
          <label>Opis pliku </label>
          <br>
          <br>
          <textarea type="text" value='' name="description" rows = "4", cols="40" ></textarea>
          <br>
          <button type="Submit">Zapisz</button><button type="button" class="close">Zamknij</button>
        </form>
    
    </div>
    <!-- <?php
    include 'footer.php';
    ?> -->
    


    <script src="scripts/list.js"></script>


  </body>


</html>
