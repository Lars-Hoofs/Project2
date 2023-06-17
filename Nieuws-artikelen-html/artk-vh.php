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
                <img src="../img/nieuws-images/1024x576a.jpg" alt="Article Image">
                <h2>Titel: Het veiligheidsplan van Geert Wilders' PVV: Een beoordeling</h2>
                <p>Publicatie datum: 8 Juni, 2023</p>
                <div class="article-content">
                    <p>Introductie:

                        In de politieke arena van Nederland is het waarborgen van veiligheid een essentieel onderwerp
                        dat de aandacht verdient. Geert Wilders, de leider van de Partij voor de Vrijheid (PVV), heeft
                        een veiligheidsplan gepresenteerd als onderdeel van zijn partijprogramma. In dit artikel zullen
                        we het veiligheidsplan van Geert Wilders' PVV onder de loep nemen en beoordelen op basis van de
                        haalbaarheid en effectiviteit van de voorgestelde maatregelen.

                        Grensbeheer:
                        Een van de belangrijkste onderwerpen in het veiligheidsplan van de PVV is het versterken van het
                        grensbeheer. Wilders pleit voor het invoeren van strengere grenscontroles om illegale immigratie
                        en de toestroom van criminele elementen tegen te gaan. Hoewel het beheren van de grenzen
                        belangrijk is voor de veiligheid, is het belangrijk om rekening te houden met de praktische
                        uitvoerbaarheid en economische gevolgen van dergelijke maatregelen.

                        Terrorismebestrijding:
                        De PVV stelt dat terrorisme een van de grootste bedreigingen vormt voor de veiligheid in
                        Nederland. Ze pleiten voor meer investeringen in veiligheidsdiensten, het sluiten van radicale
                        moskeeën en het intrekken van de Nederlandse nationaliteit van veroordeelde terroristen met een
                        dubbele nationaliteit. Hoewel het bestrijden van terrorisme cruciaal is, is het belangrijk om de
                        balans te vinden tussen veiligheidsmaatregelen en het respecteren van fundamentele rechten en
                        vrijheden.

                        Versterking van de politie:
                        De PVV stelt voor om duizenden extra politieagenten aan te nemen en harder op te treden tegen
                        criminaliteit. Dit voorstel kan zeker bijdragen aan een betere handhaving van de wet en orde,
                        maar er moeten ook voldoende middelen beschikbaar zijn om dit plan te financieren en de training
                        en opleiding van nieuwe politieagenten te waarborgen.

                    </p>
                    <p>
                        Titel: Het veiligheidsplan van Geert Wilders' PVV: Een beoordeling

                        Introductie:

                        In de politieke arena van Nederland is het waarborgen van veiligheid een essentieel onderwerp
                        dat de aandacht verdient. Geert Wilders, de leider van de Partij voor de Vrijheid (PVV), heeft
                        een veiligheidsplan gepresenteerd als onderdeel van zijn partijprogramma. In dit artikel zullen
                        we het veiligheidsplan van Geert Wilders' PVV onder de loep nemen en beoordelen op basis van de
                        haalbaarheid en effectiviteit van de voorgestelde maatregelen.

                        Grensbeheer:
                        Een van de belangrijkste onderwerpen in het veiligheidsplan van de PVV is het versterken van het
                        grensbeheer. Wilders pleit voor het invoeren van strengere grenscontroles om illegale immigratie
                        en de toestroom van criminele elementen tegen te gaan. Hoewel het beheren van de grenzen
                        belangrijk is voor de veiligheid, is het belangrijk om rekening te houden met de praktische
                        uitvoerbaarheid en economische gevolgen van dergelijke maatregelen.

                        Terrorismebestrijding:
                        De PVV stelt dat terrorisme een van de grootste bedreigingen vormt voor de veiligheid in
                        Nederland. Ze pleiten voor meer investeringen in veiligheidsdiensten, het sluiten van radicale
                        moskeeën en het intrekken van de Nederlandse nationaliteit van veroordeelde terroristen met een
                        dubbele nationaliteit. Hoewel het bestrijden van terrorisme cruciaal is, is het belangrijk om de
                        balans te vinden tussen veiligheidsmaatregelen en het respecteren van fundamentele rechten en
                        vrijheden.

                        Versterking van de politie:
                        De PVV stelt voor om duizenden extra politieagenten aan te nemen en harder op te treden tegen
                        criminaliteit. Dit voorstel kan zeker bijdragen aan een betere handhaving van de wet en orde,
                        maar er moeten ook voldoende middelen beschikbaar zijn om dit plan te financieren en de training
                        en opleiding van nieuwe politieagenten te waarborgen.

                        Minderhedenbeleid:
                        Het veiligheidsplan van de PVV heeft ook betrekking op het minderhedenbeleid. Wilders pleit voor
                        het sluiten van islamitische scholen, het verbieden van hoofddoeken in openbare functies en het
                        bevorderen van assimilatie van minderheidsgroepen. Het is belangrijk om de impact van dergelijke
                        maatregelen op de vrijheid van religie en de gelijkheid van alle burgers zorgvuldig af te wegen.

                        Conclusie:

                        Het veiligheidsplan van Geert Wilders' PVV bevat een aantal voorstellen die de veiligheid in
                        Nederland zouden kunnen verbeteren. Het versterken van het grensbeheer, de bestrijding van
                        terrorisme, de versterking van de politie en het herzien van het minderhedenbeleid zijn zeker
                        legitieme aandachtspunten. Echter, de haalbaarheid, uitvoerbaarheid en de mogelijke impact op
                        fundamentele rechten en vrijheden moeten zorgvuldig worden geëvalueerd.

                        Het waarborgen van veiligheid is een gedeelde verantwoordelijkheid van de gehele samenleving.
                        Het is belangrijk dat politieke partijen en beleidsmakers een evenwicht vinden tussen
                        veiligheidsmaatregelen en het beschermen van individuele vrijheden en rechten. Een open en
                        constructieve dialoog is essentieel om tot effectieve oplossingen te komen die de veiligheid van
                        alle burgers in Nederland bevorderen.
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