<?php
    require_once "../php/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/functions.js"></script>
    <script src="../js/burger.js"></script>
    <link rel="stylesheet" href="../css/artikel.css">
    <title>Stem pvv</title>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="../html/index.php">
                            <img src="../img/vogel1.png" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="../html/nieuws_index.php">Nieuws</a>
                    </li>   
                    <li class="nav-item">
                        <a href="../html/leden_index.php">Leden</a>
                    </li>
                    <li class="nav-item">
                        <a href="../html/standpunten_index.php">Standpunten</a>
                    </li>
                    <li class="nav-item">
                        <a href="../html/contact_index.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="../html/schenk_index.php">Schenk</a>
                    </li>
                    <?php if (isUserLoggedIn()): ?>
                    <li class="nav-item">
                        <a href="../html/account_page_index.php">
                            <?php echo $_SESSION['gebruikersnaam']; ?>
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="../html/login.php">Login / register</a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-itemz">
                        <img src="../img/icons/burger-menu.png" onclick="burger()" alt="">
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="article">
                <img src="../img/nieuws-images/campagnetour.jpg" alt="Article Image">
                <h2>Geert Wilders lanceert energieke campagnetour 2023 voor de PVV</h2>
                <p>Publicatie datum: 11 Juni, 2023</p>
                <div class="article-content">
                    <p>In aanloop naar de verkiezingen van 2023 heeft Geert Wilders, de charismatische leider van de
                        Partij voor de Vrijheid (PVV), een energieke campagnetour gelanceerd om zijn partij en haar
                        boodschap naar kiezers in het hele land te brengen. Met zijn karakteristieke blonde lokken en
                        vastberaden houding is Wilders vastbesloten om de politieke arena te betreden en zijn visie op
                        het beleid van de PVV te delen.

                        De campagnetour van Wilders is een goed georganiseerde operatie die alle hoeken van het land
                        bestrijkt. Met een team van enthousiaste vrijwilligers en ervaren campagnemedewerkers heeft de
                        PVV een strak schema opgesteld, waarbij Wilders talloze steden, dorpen en gemeenschappen bezoekt
                        om zijn boodschap over immigratie, veiligheid en de Nederlandse identiteit over te brengen.

                        Tijdens de campagnetour trekt Wilders volle zalen, waar hij met passie en vastberadenheid zijn
                        toespraken houdt. Hij benadrukt de noodzaak van een streng immigratiebeleid en het belang van
                        veiligheid voor alle Nederlanders. Wilders richt zich op de gevaren van extremistische
                        ideologieën en pleit voor maatregelen die de nationale veiligheid versterken, zoals het sluiten
                        van moskeeën waar haatpredikers actief zijn en het verbieden van dubbele nationaliteiten voor
                        mensen met een migratieachtergrond.

                        Tijdens zijn tournee komt Wilders ook in aanraking met kiezers uit verschillende demografische
                        groepen. Hij bezoekt niet alleen grote steden, maar ook landelijke gebieden waar mensen zich
                        zorgen maken over de economie en werkgelegenheid. Wilders belooft banen terug te brengen naar
                        Nederland door het bevorderen van nationale productie en het beschermen van lokale bedrijven
                        tegen oneerlijke concurrentie uit het buitenland.</p>
                    <p>Een belangrijk onderdeel van de campagnetour is ook het contact met de PVV-aanhangers en
                        potentiële kiezers. Wilders neemt de tijd om met mensen in gesprek te gaan, hun zorgen en
                        frustraties aan te horen en oplossingen aan te bieden die aansluiten bij de idealen van de PVV.
                        Hij benadrukt dat de PVV een stem wil geven aan degenen die zich vergeten voelen door de
                        gevestigde politieke partijen.

                        De campagnetour van Wilders krijgt veel media-aandacht, zowel positief als negatief. Critici
                        beschuldigen hem van populisme en het zaaien van verdeeldheid, terwijl zijn supporters zijn
                        vastberadenheid en onverschrokkenheid prijzen. De campagne van Wilders heeft de aandacht
                        getrokken van zowel zijn politieke tegenstanders als zijn trouwe aanhang, waardoor de discussie
                        over immigratie, integratie en de Nederlandse identiteit weer hoog op de politieke agenda staat.

                        Met zijn campagnetour hoopt Wilders de PVV naar een sterke positie te leiden bij de komende
                        verkiezingen. Hoewel de peilingen een wisselend beeld laten zien, blijft Wilders vol vertrouwen
                        en vastberaden om zijn boodschap over te brengen. Of zijn inspanningen de gewenste resultaten
                        zullen opleveren, zal pas blijken op de verkiezingsdag. Tot die tijd zal Wilders onvermoeibaar
                        doorgaan met het mobiliseren van zijn aanhangers en het aanspreken van kiezers in het hele land.
                    </p>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-content">
                <ul class="footer-links">
                    <li><a href="../html/nieuws_index.php">Nieuws</a></li>
                    <li><a href="../html/leden_index.php">Leden</a></li>
                    <li><a href="../html/standpunten_index.php">Standpunten</a></li>
                    <li><a href="../html/contact_index.php">Contact</a></li>
                    <li><a href="../html/schenk_index.php">Schenk</a></li>
                </ul>
                <div class="additional-sections">
                    <div class="section">
                        <h3>Privacy beleid</h3>
                        <p>Beschrijving van het privacy beleid.</p>
                    </div>
                    <div class="section">
                        <h3>Pvv website</h3>
                        <p>Dit is de enigste 'PVV' website die officeel beheerd wordt door de pvv.</p>
                    </div>
                    <div class="section">
                        <h3>Social media</h3>
                        <ul class="social-media-icons">
                            <li><a href="https://www.facebook.com/partijvoordevrijheid/?locale=nl_NL"><img
                                        src="../img/icons/Facebook - Negative.png" alt="Icon 1"></a></li>
                            <li><a href="https://www.instagram.com/geertwilders/"><img
                                        src="../img/icons/Instagram - Negative.png" alt="Icon 2"></a></li>
                            <li><a href="https://twitter.com/limburg_pvv"><img src="../img/icons/Vector.png"
                                        alt="Icon 3"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCCEuhjaT09ArS77AJm6etXw"><img
                                        src="../img/icons/YouTube - Negative.png" alt="Icon 4"></a></li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">&copy; 2023 Partij voor de vrijheid.nl. Alle rechten voorbehouden.</p>
            </div>
        </footer>
        <div id="myNav" class="overlay">

            <!-- burger menu slide left werkt -->
            <a href="javascript:void(0)" class="sluitbtn" onclick="sluitNav()">&times;</a>


            <div class="overlay-content">
                <a href="../html/index.php">Home</a>
                <a href="../html/nieuws_index.php">Nieuws</a>
                <a href="../html/leden_index.php">Leden</a>
                <a href="../html/standpunten_index.php">Standpunten</a>
                <a href="../html/contact_index.php">Contact</a>
                <a href="../html/schenk_index.php">Schenk</a>
                <?php if (isUserLoggedIn()): ?>

                <a href="../html/account_page_index.php">
                    <?php echo $_SESSION['gebruikersnaam']; ?>
                </a>
                <?php else: ?>
                <a href="../html/login.php">Login / register</a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>