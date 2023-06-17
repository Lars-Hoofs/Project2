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
                <img src="../img/nieuws-images/de-derde-keer-peilingen.png" alt="Article Image">
                <h2>Positieve peilingen voeden hoop voor de PVV in aanloop naar de verkiezingen van 2023</h2>
                <p>Publicatie datum: 9 Juni, 2023</p>
                <div class="article-content">
                    <p>In aanloop naar de verkiezingen van 2023 heeft de Partij voor de Vrijheid (PVV) van Geert Wilders
                        reden tot optimisme gekregen, aangezien recente peilingen wijzen op een stijgende populariteit
                        van de partij. Met het oog op deze positieve ontwikkelingen voelen Wilders en zijn aanhangers
                        zich gesterkt in hun overtuiging dat de PVV een sterke positie kan innemen in het politieke
                        landschap van Nederland.

                        De meest recente peilingen tonen een stijgende trend in de populariteit van de PVV, met
                        groeiende steun onder kiezers. Dit is een positieve ontwikkeling voor Wilders, die zich met zijn
                        partij profileert als een stem voor degenen die zich niet gehoord voelen door de gevestigde
                        politieke orde. De stijgende peilingen suggereren dat steeds meer mensen zich aangetrokken
                        voelen tot de standpunten en boodschappen van de PVV.

                        Een van de belangrijkste redenen achter de groeiende populariteit van de PVV is de nadruk op
                        immigratie en integratie. Wilders heeft herhaaldelijk gepleit voor een strengere aanpak van
                        immigratie en het behoud van de Nederlandse identiteit. In een tijd waarin deze kwesties hoog op
                        de politieke agenda staan, lijken steeds meer kiezers zich aangetrokken te voelen tot de
                        standpunten van de PVV.

                        Bovendien heeft Wilders zijn campagnetour effectief ingezet om zijn boodschap rechtstreeks aan
                        kiezers over te brengen. Zijn energieke optredens en vastberadenheid hebben indruk gemaakt op
                        veel mensen, die op zoek zijn naar een politiek leider die hun zorgen serieus neemt. Wilders
                        heeft niet alleen PVV-aanhangers geïnspireerd, maar ook potentiële kiezers die zich vergeten
                        voelen door andere politieke partijen.

                    </p>
                    <p>De positieve peilingen hebben ook geleid tot hernieuwde hoop en enthousiasme onder
                        PVV-aanhangers. Zij zien de toenemende steun als een teken dat de PVV eindelijk de erkenning
                        krijgt die zij verdienen. Het heeft ook een positief effect op de partij zelf, waar de stijgende
                        populariteit zorgt voor een gevoel van momentum en motivatie om nog harder te werken in de
                        aanloop naar de verkiezingen.

                        Natuurlijk moeten peilingen altijd met enige voorzichtigheid worden benaderd, aangezien deze
                        momentopnames zijn en de uiteindelijke verkiezingsresultaten kunnen variëren. Er kunnen tal van
                        factoren zijn die van invloed zijn op de daadwerkelijke stemkeuze van de kiezers. Toch bieden de
                        positieve peilingen een bemoedigend perspectief voor de PVV en geven ze hoop op een sterke
                        positie in het politieke speelveld.

                        Terwijl de verkiezingsdatum nadert, zal de PVV blijven bouwen op het momentum dat de positieve
                        peilingen hebben gegenereerd. Geert Wilders en zijn partij zullen zich inzetten om hun boodschap
                        verder te verspreiden en kiezers te overtuigen van de noodzaak van hun beleidsvoorstellen.
                        Uiteindelijk is het aan de kiezers om te beslissen, maar de positieve peilingen hebben de PVV
                        zeker een welkome stimulans gegeven in hun streven naar politiek succes.
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