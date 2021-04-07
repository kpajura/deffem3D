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
    <link rel="stylesheet" href="styles/about.css" />
    <link rel="stylesheet" href="styles/admin.css" />
    <link rel="stylesheet" href="styles/footer.css" />

    <title>DEFFEM 3D - O pakiecie</title>
  </head>

  <body>
    <?php
    include 'header.php';
    include 'loggedinHeader.php';
    ?>

    <main>
      <h2>Informacje ogólne</h2>
      <p>
        Rozwój nowych technologii oraz metod badawczych wymusza poszukiwanie nowatorskich rozwiązań wspomagających procesy decyzyjne zarówno na etapie przygotowania, jak i&nbsp;samej produkcji. Obecnie trudno wyobrazić sobie istnienie zakładu przemysłowego, który nie korzysta z nowoczesnych systemów komputerowych, które wspomagają projektowanie oraz procesy decyzyjne. Coraz powszechniejszy stał się dostęp do profesjonalnych systemów symulacji oraz aparatury badawczej. 
      </p>
      <p>
        Alternatywą dla drogich, komercyjnych systemów symulacji są autorskie dedykowane systemy symulacyjne, których przykładem jest DEFFEM3D. Pozwala on już na etapie projektowania i&nbsp;implementacji numerycznej na dostosowanie rozwiązania do określonych wymagań użytkownika. Takie rozwiązanie znacznie obniża koszty wdrożenia oraz świadczy o&nbsp;prostocie użytkowania takiego narzędzia. 
      </p>
      <p>
        Pakiet symulacyjny DEFFEM3D łączy zalety symulacji fizycznych i&nbsp;modelowania numerycznego w&nbsp;aspekcie wspomagania projektowania nowych technologii. Jest on opracowany zgodnie z&nbsp;filozofią projektowania ONEDES (ONEDECisionSoftware). Opiera się ona na założeniu opracowania modułowego zestawu niezależnych silników obliczeniowych, które umożliwiają komputerowe wspomaganie symulacji fizycznych, bez konieczności wspomagania się aplikacjami komercyjnymi.
      </p>
      <ul>
        Do najważniejszych rozwiązań numerycznych oraz metodologicznych pakietu DEFFEM3D można zaliczyć m.in.:
        <li>
          metodyki hybrydowego modelowania własności mechanicznych stali odkształconej w&nbsp;ekstremalnie wysokich temperaturach oraz w&nbsp;warunkach współistnienia fazy stałej i&nbsp;ciekłej,
        </li>
        <li>
          model 3D procesu nagrzewania oporowego połączonego z&nbsp;przetapianiem i&nbsp;chłodzeniem oraz z&nbsp;zakresie przewidywania stref o&nbsp;zmiennej dynamice rozrostu ziarna,
        </li>
        <li>
          wieloskalowy model 3D procesu wieloskalowego odkształcenia stali w&nbsp;zakresie przewidywania rozmiarów i&nbsp;kształtu strefy odkształcenia oraz korekty parametrów modelu reologicznego,
        </li>
        <li>
          model 3D procesu nagrzewania oporowego połączonego z&nbsp;przetapianiem i&nbsp;chłodzeniem z&nbsp;uwzględnieniem lokalnych przepływów krzepnącej stali.
        </li>
      </ul>

      <h2>Budowa modułowa</h2>
      <p>
        Pakiet zbudowany jest z&nbsp;niezależnych modułów, zarówno od strony aplikacyjnej, jak i&nbsp;organizacji kodu źródłowego. Daje to duże możliwości szybkiej adaptacji opracowanych rozwiązań do innej klasy zagadnień. Obecnie składa się z&nbsp;dwóch silników obliczeniowych dedykowanych zagadnieniom mechaniki płynów oraz mechaniki ośrodków ciągłych.
      </p>
      <p>
        Uzupełnienie pakietu stanowią niezależne moduły PRE i&nbsp;POST Procesora, które pozwalają na wizualizację zarówno danych wejściowych oraz wyników wykonanych symulacji.
      </p>
      
      <h2>
        Zintegrowane modelowanie
      </h2>
      <p>
        Opracowana koncepcja modelowania zintegrowanego obejmuje dwa obszary: symulację fizyczną i&nbsp;symulację komputerową oraz jednocześnie zapewnia wymianę informacji pomiędzy tymi obszarami. Koncepcja ta wykorzystuje możliwości symulatorów termo-mechanicznych w&nbsp;zakresie obróbki materiałów wysokotemperaturowych. Niezbędnym i&nbsp;unikalnym komponentem jest pakiet symulacyjny DEFFEM3D. Całość podejścia do modelowania jest uzupełniana przez wykorzystanie nowoczesnych przyrządów badawczych i&nbsp;pomiarowych do weryfikacji wdrażanych rozwiązań lub uzyskania dodatkowych informacji, których nie można uzyskać metodami tradycyjnymi. Sprzężenie i&nbsp;wymiana informacji pomiędzy obszarami symulacji fizycznych i&nbsp;komputerowych pozwala m.in. na identyfikację danych niezbędnych dla potrzeb symulacji numerycznych, np. krzywych naprężenie-odkształcenie, charakterystyk zmian natężenia prądu w&nbsp;funkcji czasu, lokalnych zmian temperatury w&nbsp;obrębie objętości próbki, lokalnych szybkości chłodzenia, makro- i&nbsp;mikrostruktur. Jednocześnie zastosowanie symulacji komputerowych przy użyciu dedykowanego systemu symulacyjnego DEFFEM3D pozwala na interpretację wyników symulacji fizycznych.
        <br>
        <br>
        <img src="graphics/MZM.png" alt="Koncepcja modelowania zintegrowanego" class="integretedPhoto">
        <figcaption>Schemat metodyki zintegrowanego modelowania</figcaption>
      </p>
    <h2>
      Rozwój
    </h2>
    <p>
      Badania oraz prace rozwojowe prowadzone są na Akademii Górniczo-Hutniczej od 2012 roku, wspierane&nbsp;i finansowane przez Narodowe Centrum Nauki (Decyzja numer: DEC 2011/03/D/ST8/04041). Pakiet DEFFEM3D został z powodzeniem zastosowany w praktycznych projektach realizowanych&nbsp;z partnerami przemysłowymi jako narzędzie wspomagające projektowanie.
    </p>

    <h2>
      Publikacje
    </h2>
    <ol>
      <li>Marcin Hojny
        <br>
        <i>	
          A sequential FEM-SPH model of the heating-remelting-cooling of steel samples in the Gleeble 3800 thermo-mechanical simulator system
        </i>
        <br>
        Archives of Foundry Engineering, 2020
      </li>
      <li>
        Marcin Hojny, Mirosław Głowacki
        <br>
        <i> 
          Methodology of integrated modeling of high-temperature steel processing in the aspect of supporting the design of new technologies
        </i>
        <br>
        Journal of Theoretical and Applied Mechanics, 2020 
      </li>
      <li>
        Marcin Hojny, Krzysztof Żaba, Tomasz Dębiński, J. Porada
        <br>
        <i>
          The use of the CUDA architecture to increase the computing effectiveness of the simulation module of a ceramic mould quality forecasting system</i>
        <br>
        Archives of Foundry Engineering, 2020
      </li>
      <li>
        Marcin Hojny, Mirosław Głowacki, Piotr Bała, Wiktor Bednarczyk, Władysław Zalecki
        <br>
        <i>
          A multiscale model of heating-remelting-cooling in the Gleeble 3800 thermo-mechanical simulator system
        </i>
        <br>
        Archives of Metallurgy and Materials, 2019
      </li>
      <li>
        Tomasz Dębiński, Mirosław Głowacki, Marcin Hojny 
        br>
        <i>
          The methodology of analysis on geometrical changes of a&nbsp;mixed zone in resistance-heated samples</i>
        <br>
        Archives of Metallurgy and Materials, 2019</li>
      <li>
        Marcin Hojny
        <br>
        <i>
        Modeling steel deformation in the semi-solid state (2nd edition)</i>
        <br>
        Springer International Publishing, 2018 </li>
    </ol>

  </main>
    
  <?php
  include 'footer.php';
  ?>
   
  </body>
</html>
