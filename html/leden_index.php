<?php
require_once "../php/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/burger.js"></script>
    <link rel="stylesheet" href="../css/leden_style.css">
    <title>PVV Leden</title>
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
            <div class="news-container">
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_wilders.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Geert Wilders</h2>
                    <p>Fractievoorzitter, Algemene Zaken, Islam</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_agema.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Fleur Agema</h2>
                    <p>Vice-fractievoorzitter, Zorg</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_markuszower.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Gidi Markuszower</h2>
                    <p>Penningmeester en personeel, immigratie asiel, terrorisme</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_bosma.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Martin bosma</h2>
                    <p>Fractiesecretaris, Binnenlandse Zaken, Cultuur, media</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_jong_de.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Léon de Jong</h2>
                    <p>Inkomen, pensioenen, arbeidsmarkt</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_maeijer.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Vicky Maeijer</h2>
                    <p>Europese zaken, jeugdwet, geneesmiddelen, medisch etische preventie</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_kops.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Alexander Kops</h2>
                    <p>Wonen, energie, klimaat</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_dijck_van.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Teun van Dijck</h2>
                    <p>Financien</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_helder.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Lilian Helder</h2>
                    <p>Politie, veiligheid, deel justitie</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_madlener.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>VBarry Madlenner</h2>
                    <p>Infrastructuur, water</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_fritsma.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Sietse Fritsma</h2>
                    <p>Defensie</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_weerdenburg_van.jpg" alt="Afbeelding 1"
                        class="news-image">
                    <h2>Danai van Weerdenburg</h2>
                    <p>Buitenlandse handel, Ontwikkelingshulp, digitale zaken</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_graus.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Dion Graus</h2>
                    <p>Dierenwelzijn, luchtvaart, mkb</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_graaf_de.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Machiel de Graaf</h2>
                    <p>Islam (2), integratie antisemitisme, koninkrijksrelaties</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_mulder_edgar.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Edgar Mulder</h2>
                    <p>Belastingen, Landbouw, natuur, voedselkwaliteit</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_beertema.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Harm Beertema</h2>
                    <p>onderwijs, wetenschap, emancipatie</p>
                </div>
                <div class="news-item">
                    <img src="../img/leden-images/2de-kamer/pvv_roon_de.jpg" alt="Afbeelding 1" class="news-image">
                    <h2>Raymond de Roon</h2>
                    <p>Buitenlandse Zaken, MH17</p>
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
    <div class="muis">
        <div class="cursor-dot" data-cursor-dot></div>
        <div class="cursor-outline" data-cursor-outline></div>
        <script src="../js/muis.js"></script>
    </div>
</body>

</html>