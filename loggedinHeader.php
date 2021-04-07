<?php
if((isset($_SESSION['admin']))&&($_SESSION['admin']==true)){
    echo "<nav class='admin'>
    <a href='files.php'>Pliki do pobrania</a>
    <a href='usersList.php'>Użytkownicy</a>    
    <a href='addUser.php'>Dodaj konto</a>
    <a href='changePW.php' id='changePW'>Zmień hasło</a>
   
  </nav>";
  }
  else if(isset($_SESSION['admin'])){
    echo "<nav class='admin'>
    <a href='files.php'>Pliki do pobrania</a>
    <a href='changePW.php'>Zmień hasło</a>
    
    
  </nav>";
  // <a href='userContact.php'>Kontakt</a>
  }

?>