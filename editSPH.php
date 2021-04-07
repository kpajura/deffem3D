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
    <link rel="stylesheet" href="styles/tooltip.css">
    <link rel="stylesheet" href="styles/footer.css" />

    <title>DEFFEM 3D - Struktura SPH</title>
  </head>

  <body>
  <?php
    include 'header.php';
  
    include 'loggedinHeader.php';

    ?>

<section>
        <main>
            <form >
              <h2>Wybierz i wprowadź wartości parametrów</h2>
              <input type="checkbox"  class="box" id="box1">
                <label for="particles" class="particles">
                  SPH particles

                  <div class="tooltip">
                  <input id="1" type="text" value="38672" disabled>
                  <span class="tooltiptext">Ilość cząstek definujących warunek brzegowy</span>
                  </div>

                  <div class="tooltip">
                  <input id="2" type="text" value="29791" disabled>
                  <span class="tooltiptext">Ilość cząstek domeny obliczeniowej</span>
                  </div>

                  <div class="tooltip">
                  <input id="3" type="text" value="6954" disabled>
                  <span class="tooltiptext">Gęstość początkowa domeny obliczeniowej</span>
                  </div>

                  <div class="tooltip">
                  <input id="4" type="text" value="15" disabled>
                  <span class="tooltiptext">Prędkość dźwięku</span>
                  </div>

                  <div class="tooltip">
                  <input id="5" type="text" value="1.1" disabled>
                  <span class="tooltiptext">Rozmiar pudła obliczeniego</span>
                  </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>

              <input type="checkbox"  class="box" id="box2">
                <label for="kernel" class="kernel">
                  SPH kernel
                  <div class="tooltip">
                  <input id="6" type="text" value="1" disabled>
                  <span class="tooltiptext">Numer kernela</span>
                  </div>

                  <div class="tooltip">
                  <input id="7" type="text" value="0.024" disabled>
                  <span class="tooltiptext">Początkowy krok wygładzania</span>
                  </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>

                
              <input type="checkbox"  class="box" id="box3">
                <label for="eos" class="eos">
                  SPH eos
                  <div class="tooltip">
                  <input id="8" type="text" value="1" disabled>
                  <span class="tooltiptext">Numer równania stanu</span>
                  </div>

                  <div class="tooltip">
                  <input id="9" type="text" value="0.5" disabled>
                  <span class="tooltiptext">Współczynnik &#945</span>
                  </div>

                  <div class="tooltip">
                  <input id="10" type="text" value="0" disabled>
                  <span class="tooltiptext">Współczynnik &#946</span>
                  </div>

                  <div class="tooltip">
                  <input id="11" type="text" value="7" disabled>
                  <span class="tooltiptext">Współczynnik &#947</span>
                  </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox"  class="box" id="box4">
                <label for="time" class="time">
                  SPH time

                  <div class="tooltip">
                  <input id="12" type="text" value="25" disabled>
                  <span class="tooltiptext">Czas symulacji [s]</span>
                  </div>

                  <div class="tooltip">
                  <input id="13" type="text" value="0.05" disabled>
                  <span class="tooltiptext">Odstęp czasu pomiędzy zapisami wyników [s]</span>
                  </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox" class="box" id="box5">
                <label for="transform" class="transform">
                  SPH transform
                  <br>

                    <div class="tooltip">
                    <input id="14" type="text" value="0" disabled>
                    <span class="tooltiptext">Trainlacja cząstek ruchomych względem osi X</span>
                    </div>

                    <div class="tooltip">
                    <input id="15" type="text" value="0" disabled>
                    <span class="tooltiptext">Translacja cząstek ruchomych względem osi Y</span>
                    </div>

                    <div class="tooltip">
                    <input id="16" type="text" value="0" disabled>
                    <span class="tooltiptext">Translacja cząstek ruchomych względem osi Z</span>
                    </div>
                    
                    <br>

                    <div class="tooltip">
                    <input id="17" type="text" value="0" disabled>
                    <span class="tooltiptext">Translacja cząstek nieruchomych względem osi X</span>
                    </div>

                    <div class="tooltip">
                    <input id="18" type="text" value="0" disabled>
                    <span class="tooltiptext">Translacja cząstek nieruchomych względem osi Y</span>
                    </div>

                    <div class="tooltip">
                    <input id="19" type="text" value="0" disabled>
                    <span class="tooltiptext">Translacja cząstek nieruchomych względem osi Z</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox" class="box" id="box6">
                <label for="termal" class="termal">
                  SPH thermal prop
                  <br>

                  <div class="tooltip">
                    <input id="20" type="text" value="1412.42" disabled>
                    <span class="tooltiptext">Temperatura solidus</span>
                    </div>

                    <div class="tooltip">
                    <input id="21" type="text" value="1494.79" disabled>
                    <span class="tooltiptext">Temperatura liquidus</span>
                    </div>

                    <div class="tooltip">
                    <input id="22" type="text" value="960.689" disabled>
                    <span class="tooltiptext">Wartość entropii w temperaturze solidus</span>
                    </div>

                    <div class="tooltip">
                    <input id="23" type="text" value="1264.274" disabled>
                    <span class="tooltiptext">Wartość entropii w temperaturze liquidus</span>
                    </div>
                    <br>

                    <div class="tooltip">
                    <input id="24" type="text" value="303.585" disabled>
                    <span class="tooltiptext">Ciepło krzepnięcia</span>
                    </div>
                    
                    <div class="tooltip">
                    <input id="25" type="text" value="0.68" disabled>
                    <span class="tooltiptext">Ciepło właściwe fazy stałej</span>
                    </div>

                    <div class="tooltip">
                    <input id="26" type="text" value="0.811" disabled>
                    <span class="tooltiptext">Ciepło właściwe fazy ciekłej</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox"  class="box" id="box7">
                <label for="boundry" class="boundry">
                  SPH boundry temp

                  <div class="tooltip">
                  <input id="27" type="text" value="20" disabled>
                  <span class="tooltiptext">Temperatura początkowa cząstek nieruchomych</span>
                    </div>

                  <div class="tooltip">
                  <input id="28" type="text" value="1500" disabled>
                  <span class="tooltiptext">Temperatura początkowa cząstek ruchomych</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox"  class="box" id="box8">
                <label for="mass" class="mass">
                  SPH mass

                  <div class="tooltip">
                  <input id="29" type="text" value="0.000002595" disabled>
                  <span class="tooltiptext">Masa cząstek nieruchomych</span>
                    </div>

                  <div class="tooltip">
                  <input id="30" type="text" value="0.058952595" disabled>
                  <span class="tooltiptext">Masa cząstek ruchomych</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox" class="box" id="box9">
                <label for="velocity" class="velocity">
                  SPH velocity
                  <br>

                  <div class="tooltip">
                    <input id="31" type="text" value="0" disabled>
                    <span class="tooltiptext">Składowa X wektora pola prędkości dla cząsteczek nieruchomych</span>
                    </div>

                    <div class="tooltip">
                    <input id="32" type="text" value="0" disabled>
                    <span class="tooltiptext">Składowa Y wektora pola prędkości dla cząsteczek nieruchomych</span>
                    </div>

                    <div class="tooltip">
                    <input id="33" type="text" value="0" disabled>
                    <span class="tooltiptext">Składowa Z wektora pola prędkości dla cząsteczek nieruchomych</span>
                    </div>
                    <br>

                    <div class="tooltip">
                    <input id="34" type="text" value="0" disabled>
                    <span class="tooltiptext">Składowa X wektora pola prędkości dla cząsteczek ruchomych</span>
                    </div>

                    <div class="tooltip">
                    <input id="35" type="text" value="0" disabled>
                    <span class="tooltiptext">Składowa Y wektora pola prędkości dla cząsteczek ruchomych</span>
                    </div>

                    <div class="tooltip">
                    <input id="36" type="text" value="0" disabled>
                    <span class="tooltiptext">Składowa Z wektora pola prędkości dla cząsteczek ruchomych</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox" class="box" id="box10">
                <label for="enthalpy" class="enthalpy">
                  SPH init enthalpy
                  <br>

                  <div class="tooltip">
                    <input id="37" type="text" value="0.811" disabled>
                    <span class="tooltiptext">Współczynnik h1 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="38" type="text" value="51.756" disabled>
                    <span class="tooltiptext">Współczynnik h2 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="39" type="text" value="3.686" disabled>
                    <span class="tooltiptext">Współczynnik h3 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="40" type="text" value="-4245.206" disabled>
                    <span class="tooltiptext">Współczynnik h4 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="41" type="text" value="0.68" disabled>
                    <span class="tooltiptext">Współczynnik h5 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="42" type="text" value="0" disabled>
                    <span class="tooltiptext">Współczynnik h6 dla warunku brzegowego</span>
                    </div>
                    <br>

                    <div class="tooltip">
                    <input id="43" type="text" value="0.811" disabled>
                    <span class="tooltiptext">Współczynnik h1 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="44" type="text" value="51.756" disabled>
                    <span class="tooltiptext">Współczynnik h2 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="45" type="text" value="3.686" disabled>
                    <span class="tooltiptext">Współczynnik h3 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="46" type="text" value="-4245.206" disabled>
                    <span class="tooltiptext">Współczynnik h4 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="47" type="text" value="0.68" disabled>
                    <span class="tooltiptext">Współczynnik h5 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="48" type="text" value="0" disabled>
                    <span class="tooltiptext">Współczynnik h6 dla domeny obliczeniowej</span>
                    </div>
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox" class="box" id="box11">
                <label for="denisty" class="denisty">
                  SPH init density
                  <br>

                  <div class="tooltip">
                    <input id="49" type="text" value="-0.8048" disabled>
                    <span class="tooltiptext">Współczynnik &#961-1 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="50" type="text" value="8202.188" disabled>
                    <span class="tooltiptext">Współczynnik &#961-2 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="51" type="text" value="-4.0179" disabled>
                    <span class="tooltiptext">Współczynnik &#961-3 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="52" type="text" value="13053.13" disabled>
                    <span class="tooltiptext">Współczynnik &#961-4 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="53" type="text" value="-0.4657" disabled>
                    <span class="tooltiptext">Współczynnik &#961-5 dla warunku brzegowego</span>
                    </div>

                    <div class="tooltip">
                    <input id="54" type="text" value="8015.95" disabled>
                    <span class="tooltiptext">Współczynnik &#961-6 dla warunku brzegowego</span>
                    </div>
                    <br>

                    <div class="tooltip">
                    <input id="55" type="text" value="-0.8048" disabled>
                    <span class="tooltiptext">Współczynnik &#961-1 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="56" type="text" value="8202.188" disabled>
                    <span class="tooltiptext">Współczynnik &#961-2 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="57" type="text" value="-4.0179" disabled>
                    <span class="tooltiptext">Współczynnik &#961-3 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="58" type="text" value="13053.13" disabled>
                    <span class="tooltiptext">Współczynnik &#961-4 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="59" type="text" value="-0.4657" disabled>
                    <span class="tooltiptext">Współczynnik &#961-5 dla domeny obliczeniowej</span>
                    </div>

                    <div class="tooltip">
                    <input id="60" type="text" value="8015.95" disabled>
                    <span class="tooltiptext">Współczynnik &#961-6 dla domeny obliczeniowej</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>

              
              <input type="checkbox"  class="box" id="box12">
                <label for="conductivity" class="conductivity">
                  SPH conductivity

                  <div class="tooltip">
                  <input id="61" type="text" value="-0.009" disabled>
                  <span class="tooltiptext">Lambda1</span>
                    </div>

                  <div class="tooltip">
                  <input id="62" type="text" value="50.19" disabled>
                  <span class="tooltiptext">Lambda2</span>
                    </div>
                  
                </label>
              </input>
              <br>
              <div class="line"></div>


              <input type="checkbox"  class="box" id="box13">
                <label for="flags" class="flags">
                  SPH flags

                  <div class="tooltip">
                  <input id="63" type="text" value="0" disabled>
                  <span class="tooltiptext">Korelacja kernela</span>
                    </div>

                  <div class="tooltip">
                  <input id="64" type="text" value="0" disabled>
                  <span class="tooltiptext">Temperatura zaczytywana z pliku</span>
                    </div>
                  
                </label>
              </input>
              <br>
              

              
            
              <button class="submit">WYGENERUJ PLIK</button>
            </form>
          </main>
    </section>

    <?php
    include 'footer.php';
    ?>

    
    <script  src="scripts/edit.js"></script>
  </body>
</html>