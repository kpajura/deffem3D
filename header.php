<?php
    echo '<header>
        <div>
            <a class="logoA" href="index.php">
                <img src="graphics/logo/logo1.0.png" alt="logo" id="logo" />
                <img src="graphics/logo/napis.png" alt="DEFFEM" id="DEFFEM" />
            </a>
            <nav>
            <a href="about.php">O pakiecie</a>
            <a href="structres.php">Generator struktur danych</a>
            <a href="tests.php">Symulacje testowe</a>';
            
            if((isset($_SESSION["loggedin"]))&&($_SESSION["loggedin"]==true)){
                echo "<a id='logout' href='logout.php'>Wyloguj</a>";
            }
            else{
                echo "<a href='contact.php'>Napisz do nas</a>
                <a href='loginUser.php'>Zaloguj się</a>";
            }
            
            echo'
            </nav>
        </div>
      
    </header>';
?>