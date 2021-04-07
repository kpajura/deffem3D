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
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/tests.css"/>

    <title>DEFFEM 3D - Symulacje testowe</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
    ?>

    <main>
    
      <p>
        Z użyciem struktur danych wygenerowanych waplikacji przeprowadzono symulacje testowe pakietu DEFFEM 3D. Wizualizacja wyników symulacji stworzona z&nbsp;zastosowaniem technik generowania obrazu trójwymiarowego oraz generowania  pól wektorowych z wykorzystaniem programowalnego protokołu graficznego i&nbsp;języka półcieni GLSL, oraz pól skalarnych z&nbsp;wykorzystaniem biblioteki OpenGL. 
      </p>
      
      <h2 class="tests">Przypadek testowy 1
        <br>Symulacja przepływu połączonego z krzepnięciem </h2>
      <h4>Moduł SPH</h4>
      <p>
        Symulacja została przeprowadzona w&nbsp;silniku obliczeniowym mechaniki płynów bazującego na metodzie hydrodynamiki cząstek rozmytych z&nbsp;wykorzystaniem struktury wygenerowanej w&nbsp;aplikacji. Celem symulacji, było zaobserwowanie jak będzie wyglądał przepływ cząstek ruchomych (ciekłego metalu) w&nbsp;interakcji z&nbsp;barierą zdefiniowaną przez cząstki nieruchome oraz, jak będzie zmieniała się temperatura cząstek ruchomych w&nbsp;kolejnych krokach symulacji. Cząstki nieruchome zaznaczone są kolorem niebieskim, przedstawiają pudło    obliczeniowe oraz barierę. Kolorem czerwonym oznaczone są cząstki ruchome – ciekła stal.
      </p>

      <p>
        Domena obliczeniowa (cząstki ruchome) została zbudowana z&nbsp;29&nbsp;791 cząsteczek, natomiast warunek brzegowy (cząstki nieruchome) zawierał 38&nbsp;972 cząsteczki w&nbsp;postaci pudła obliczeniowego o&nbsp;wymiarach 1x1x1 metr oraz barier znajdujących się wewnątrz tego pudła.  Wyniki symulacji były zapisywane co 0.05 sekundy. Temperatura początkowa cząstek ruchomych wynosiła 1&nbsp;500 stopni Celsjusza, natomiast cząstek nieruchomych 20 stopni Celsjusza. W trakcie symulacji wymiana ciepła odbywa się pomiędzy dwoma klasami cząsteczek, a&nbsp;wymiana ciepła do otoczenia nie została uwzględniona. 
      </p>
      <p>
        Poniższe ilustracje przedstawiają wyniki symulacji testowej swobodnego przepływu ciekłej stali i&nbsp;jej krzepnięcia z&nbsp;uwzględnieniem interakcji stali z&nbsp;pudełkiem i&nbsp;barierą w&nbsp;wybranych krokach czasowych symulacji.
      </p>

      <div class="sphimg">
        <img src="graphics/symulation/sph/sph5.png" alt="sph">
        <img src="graphics/symulation/sph/sph10.png" alt="sph">
        <img src="graphics/symulation/sph/sph15.png" alt="sph">
        <img src="graphics/symulation/sph/sph23.png" alt="sph">
        <img src="graphics/symulation/sph/sph40.png" alt="sph">
        <img src="graphics/symulation/sph/sph75.png" alt="sph">
        <img src="graphics/symulation/sph/sph120.png" alt="sph">
        <img src="graphics/symulation/sph/sph147.png" alt="sph">

      </div>

      <p>  
        W początkowych fazach symulacji można wyróżnić obszary, w&nbsp;których następuje intensyfikacja wymiany ciepła ciekłego metalu z&nbsp;cząstkami nieruchomymi. Można zaobserwować, że kolejnych krokach symulacji temperatura stali spada wykładniczo i&nbsp;w&nbsp;wyniku procesu krzepnięcia cały układ dąży do temperatury 20 stopni Celsjusza. 
      </p>

      <h2 class="tests">Przypadek testowy 2
        <br>Symulacja nagrzewania oporowego próbki do temperatury 300°C </h2>
      <h4>Moduł FEM</h4>
      <p>
        Symulacja została przeprowadzona w&nbsp;silniku obliczeniowym bazującym na metodzie elementów skończonych z&nbsp;wykorzystaniem struktury wygenerowanej w&nbsp;aplikacji stworzonej w&nbsp;ramach tego projektu. Symulacja przedstawia proces oporowego nagrzewania próbki do temperatury 300 stopni Celsjusza, zamocowanej w&nbsp;specjalnych uchwytach miedzianych. 
      </p>
      
      <div class="femimg">
        <img src="graphics/symulation/fem1/fem1.png" alt="fem">
        <img src="graphics/symulation/fem1/fem23.png" alt="fem">
        <img src="graphics/symulation/fem1/fem45.png" alt="fem">
        <img src="graphics/symulation/fem1/fem68.png" alt="fem">
        <img src="graphics/symulation/fem1/fem100.png" alt="fem">
        <img src="graphics/symulation/fem1/fem137.png" alt="fem">
      </div>

      <p> 
        Próbka na początku symulacji ma stałą temperaturę ok. 20 stopni Celsjusza. Maksymalna temperatura próbki w&nbsp;obszarze bezpośredniego kontaktu z&nbsp;uchwytem wynosi 25.8 stopni Celsjusza, i&nbsp;różni się ze stanem początkowym o&nbsp;około 5 stopni Celsjusza. Obszarem, który cechuje się największą ilością wydzielanego ciepła w&nbsp;wyniku ogrzewania jest strefa swobodna próbki - obszar środkowy strefy nagrzewania. 
      </p>

      <h2 class="tests">Przypadek testowy 3
        <br>Symulacja kłucia kowadłem stalowego klocka</h2>
      <h4>Moduł FEM</h4>
      <p>
        Symulacja, tak samo jak symulacja z&nbsp;poprzedniego punktu, została przeprowadzona w&nbsp;silniku obliczeniowym bazującym na metodzie elementów skończonych z&nbsp;wykorzystaniem struktury wygenerowanej w&nbsp;aplikacji. Symulacja przedstawia rozkład pola prędkości procesu odkształcenia połączonego ze ściskaniem klocka o&nbsp;wymiarach 1x1x1 metr. W&nbsp;wyniku ściskania klocka kowadłem ulega on trwałemu odkształceniu. 
      </p>
      
      <div class="femimg">
        <img src="graphics/symulation/fem2/fem1.png" alt="fem">
        <img src="graphics/symulation/fem2/fem8.png" alt="fem">
        <img src="graphics/symulation/fem2/fem15.png" alt="fem">
      </div>

      <p>
        Na powyższych rysunkach można zauważyć, że wartość pola prędkości względem osi Z&nbsp;w&nbsp;przeprowadzanej symulacji nie ulega zmianie i&nbsp;w&nbsp;każdym kroku symulacji prezentuje się tak samo. W&nbsp;wyniku nacisku zmianie ulega kształt klocka, który ulega znacznemu zdeformowaniu.  
      </p>


    </main>


    <?php
      include 'footer.php';
    ?>

  </body>


</html>
sph