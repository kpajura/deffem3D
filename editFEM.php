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
    <link rel="stylesheet" href="styles/edit.css" />
    <link rel="stylesheet" href="styles/tooltip.css"/>
    <link rel="stylesheet" href="styles/footer.css" />


    <title>DEFFEM 3D - Structura FEM</title>
  </head>

  <body>
    <?php
      include 'header.php';
      include 'loggedinHeader.php';
    ?>

    <section>
        <main class="FEM">
            <form >
            <h2>Wybierz i wprowadź wartości parametrów</h2>

              <input type="checkbox"  class="box" id="box1">
              <label for="include" class="include">
                INCLUDE
                <div class="tooltip">
                  <input id="1" type="text" value="mesh_typeC_MC.k" class="longer" disabled>
                  <span class="tooltiptext">Nazwa pliku z siatką</span>
                </div>
              </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box2">
                <label for="include" class="include2">
                  INCLUDE

                  <div class="tooltip">
                  <input id="2" type="text" value="Current_typC.k"  class="longer" disabled>
                  <span class="tooltiptext">Nazwa pliku ze zmianą natężenia prądu</span>
                  </div>


                  <div class="tooltip">
                  <input id="43" type="text" value="2401" disabled>
                  <span class="tooltiptext">Ilość punktów pomiarowych</span>
                  </div>

                </label>
              <br>
              <div class="line"></div>
                
              <input type="checkbox"  class="box" id="box3">
                <label for="output" class="output">
                  output file

                  <div class="tooltip">
                  <input id="3" type="text" value="temperature" class="longer" disabled>
                  <span class="tooltiptext">Nazwa pliku z wynikami</span>
                  </div>

                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box4">
                <label for="time" class="time">
                Time

                <div class="tooltip">
                  <input id="4" type="text" value="120" disabled>
                  <span class="tooltiptext">Czas symulacji</span>
                  </div>

                  <div class="tooltip">
                  <input id="5" type="text" value="1200" disabled>
                  <span class="tooltiptext">Ilość kroków symulacji</span>
                  </div>
                  
                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box5">
                <label for="mesh" class="mesh">
                MESH_PARAM

                <div class="tooltip">
                  <input id="6" type="text" value="2268" disabled>
                  <span class="tooltiptext">Ilość węzłów</span>
                  </div>

                  <div class="tooltip">
                  <input id="7" type="text" value="1550" disabled>
                  <span class="tooltiptext">Ilość elementów</span>
                  </div>
                  
                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box6">
                <label for="boundry" class="boundry">
                BOUNDARY_TEMPERATURE
                                  
                  <div class="tooltip">
                  <input id="8" type="text" value="20" disabled>
                  <span class="tooltiptext">Temperatura narzędzia</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="9" type="text" value="20" disabled>
                  <span class="tooltiptext">Temperatura otoczenia</span>
                  </div>
                  
                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box7">
                <label for="htc" class="htc">
                EFFECTIVE_HTC
                                  
                 <div class="tooltip">
                  <input id="10" type="text" value="5000" disabled>
                  <span class="tooltiptext">Współczynnik wymiany ciepła z narzędziem</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="11" type="text" value="120" disabled>
                  <span class="tooltiptext">Współczynnik wymiany ciepła z otoczeniem</span>
                  </div>
                  
                </label>
              <br>
              <div class="line"></div>

              
              <input type="checkbox"  class="box" id="box8">

                <label for="heating" class="heat">
                HEATING_PROGRAM
                <br>
                                  
                  <div class="tooltip">
                  <input id="12" type="text" value="70" disabled>
                  <span class="tooltiptext">Czas nagrzewania 1 [s]</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="13" type="text" value="50" disabled>
                  <span class="tooltiptext">Czas nagrzewania 2 [s]</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="14" type="text" value="0" disabled>
                  <span class="tooltiptext">Czas nagrzewania 3 [s]</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="15" type="text" value="0" disabled>
                  <span class="tooltiptext">Czas nagrzewania 4 [s]</span>
                  </div>
                  
                  <br>
                  <div class="tooltip">
                  <input id="16" type="text" value="20" disabled>
                  <span class="tooltiptext">Szybkość nagrzewania 1 [&#176C/s]</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="17" type="text" value="1" disabled>
                  <span class="tooltiptext">Szybkość nagrzewania 2 [&#176C/s]</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="18" type="text" value="0" disabled>
                  <span class="tooltiptext">Szybkość nagrzewania 3 [&#176C/s]</span>
                  </div>
                  
                  <div class="tooltip">
                  <input id="19" type="text" value="0" disabled>
                  <span class="tooltiptext">Szybkość nagrzewania 4 [&#176C/s]</span>
                  </div>

                  
                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box9">
                <label for="mod" class="mod">
                RES_MOD_FACTORS
                  
                  <div class="tooltip">
                  <input id="20" type="text" value="2000" disabled>
                  <span class="tooltiptext">Współczynnik 1 modelu nagrzewania oporowego</span>
                  </div>

                  <div class="tooltip">
                  <input id="21" type="text" value="2.2" disabled>
                  <span class="tooltiptext">Współczynnik 2 modelu nagrzewania oporowego</span>
                  </div>

                  <div class="tooltip">
                  <input id="22" type="text" value="0.2" disabled>
                  <span class="tooltiptext">Współczynnik 3 modelu nagrzewania oporowego</span>
                  </div>

                  <div class="tooltip">
                  <input id="23" type="text" value="10" disabled>
                  <span class="tooltiptext">Współczynnik 4 modelu nagrzewania oporowego</span>
                  </div>

                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box10">
                <label for="solid" class="solid">
                SOLIDIFICATION
                <br>
                  
                  <div class="tooltip">
                  <input id="24" type="text" value="1465.23" disabled>
                  <span class="tooltiptext">Temperatura solidus</span>
                  </div>

                  <div class="tooltip">
                  <input id="25" type="text" value="1513.79" disabled>
                  <span class="tooltiptext">Temperatura liquidus</span>
                  </div>
                  <br>
                  
                  <div class="tooltip">
                  <input id="26" type="text" value="650" disabled>
                  <span class="tooltiptext">Entalpia dla temperatury solidus</span>
                  </div>

                  <div class="tooltip">
                  <input id="27" type="text" value="840" disabled>
                  <span class="tooltiptext">Entalpia dla temperatury liquidus</span>
                  </div>
                  <br>
                  
                  <div class="tooltip">
                  <input id="28" type="text" value="7800" disabled>
                  <span class="tooltiptext">Gęstość fazy stałej</span>
                  </div>

                  <div class="tooltip">
                  <input id="29" type="text" value="6800" disabled>
                  <span class="tooltiptext">Gęstość fazy ciekłej</span>
                  </div>
                  <br>
                  
                  <div class="tooltip">
                  <input id="30" type="text" value="270000" disabled>
                  <span class="tooltiptext">Ciepło krzepnięcia</span>
                  </div>

                </label>
              <br>
              <div class="line"></div>
              

              <input type="checkbox"  class="box" id="box11">
                <label for="sensors" class="sensors">
                TEMP_SENSORS
                <br>
                    
                    <div class="tooltip">
                    <input id="31" type="text" value="1150" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="32" type="text" value="1149" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>
                  <br>
                    
                    <div class="tooltip">
                    <input id="33" type="text" value="1131" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="34" type="text" value="1132" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="35" type="text" value="1137" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="36" type="text" value="1138" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>
                  <br>
                    
                    <div class="tooltip">
                    <input id="37" type="text" value="1689" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="38" type="text" value="1690" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="39" type="text" value="1725" disabled>
                    <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                    <div class="tooltip">
                    <input id="40" type="text" value="1726" disabled>
                  <span class="tooltiptext">Numer węzła, w którym są zapisywane wyniki do pliku</span>
                  </div>

                </label>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box12">
                <label for="flags" class="flags">
                ster flags
                  
                  <div class="tooltip">
                  <input id="41" type="text" value="1" disabled>
                  <span class="tooltiptext">Parametr numeryczny 1</span>
                  </div>

                  <div class="tooltip">
                  <input id="42" type="text" value="1" disabled>
                  <span class="tooltiptext">Parametr numeryczny 2</span>
                  </div>

                </label>
              <br>

              
            
              <button class="submit">WYGENERUJ PLIK</button>
            </form>
          </main>
    </section>

    <?php
      include 'footer.php';
    ?>
    <script src="scripts/editFEM.js"></script>
  </body>
</html>