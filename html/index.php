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
    <link rel="stylesheet" href="../css/style.css">
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
            <div class="con-front">
                <h1 class="overlay-text">Nederland moet weer van de Nederlander worden</h1>
                <img src="../img/image_1.png" alt="">
            </div>
            <div class="mid-con">
                <h1>Partij voor de vrijheid</h1>
                <p>
                    <a href="" class="typewrite" data-period="2000"
                        data-type='[ "De partij voor en door nederland.", "De partij tegen oosterse imigratie", "De partij voor de nederlandse trots.", "De partij van nederland" ]'>
                        <span class="wrap"></span>
                    </a>
                </p>
            </div>
            <div class="con-split">
                <span class="image-container">
                    <img src="../img/Rectangle 2.png" alt="">
                    <div class="image-overlay">
                        <h1 class="overlay-title">Nieuws</h1>
                        <p class="overlay-description">Bekijk de laatste nieuwtjes in de de pvv app</p>
                    </div>
                </span>
                <span class="image-container">
                    <img src="../img/20230304_154336.png" alt="">
                    <div class="image-overlay">
                        <h1 class="overlay-title"><a href="../html/login.php">meld je aan</a></h1>
                        <p class="overlay-description">Blijf op de hoogte van de laatste nieuwtjes door je in te
                            schrijven voor onze nieuws mail.</p>
                    </div>
                </span>
            </div>
            <div class="cont-nieuws">
            <div class="news-container">
    <a href="../Nieuws-artikelen-html/artk-camp.php" class="news-item">
        <h2>campagnetour 2023</h2>
        <p>11/06/2023</p>
        <img src="../img/nieuws-images/campagnetour.jpg" alt="Afbeelding 1" class="news-image">
        <p>Geert Wilders maakt indruk met krachtige campagnetour door het land</p>
    </a>
    <a href="../Nieuws-artikelen-html/artk-pl.php" class="news-item">
        <h2>Peilingen laten kansen zien van de pvv</h2>
        <p>09/06/2023</p>
        <img src="../img/nieuws-images/de-derde-keer-peilingen.png" alt="Afbeelding 2" class="news-image">
        <p>De peilingen laten zien hoe de pvv meegroeit.</p>
    </a>
    <a href="../Nieuws-artikelen-html/artk-vh.php" class="news-item">
        <h2>Geert Wilders lanceert nieuw veiligheidsplan voor Nederland</h2>
        <p>08/06/2023</p>
        <img src="../img/nieuws-images/1024x576a.jpg" alt="Afbeelding 3" class="news-image">
        <p>Geert Wilders onthult ambitieus veiligheidsplan om criminaliteit en terrorisme effectief aan te pakken.</p>
    </a>
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