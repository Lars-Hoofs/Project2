<?php
require_once "../php/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nieuws_style.css">
    <title>PVV Nieuws</title>
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
                </ul>
            </nav>
        </header>
        <main>
            <div class="news-container">
                <div class="news-item">
                    <h2>campagnetour 2023</h2>
                    <p>11/06/2023</p>
                    <img src="../img/nieuws-images/campagnetour.jpg" alt="Afbeelding 1" class="news-image">
                    <p>Geert Wilders maakt indruk met krachtige campagnetour door het land</p>
                </div>
                <div class="news-item">
                    <h2>Peilingen laten kansen zien van de pvv</h2>
                    <p>09/06/2023</p>
                    <img src="../img/nieuws-images/de-derde-keer-peilingen.png" alt="Afbeelding 2" class="news-image">
                    <p>De peilingen laten zien hoe de pvv mee groeit.</p>
                </div>
                <div class="news-item">
                    <h2>Geert Wilders lanceert nieuw veiligheidsplan voor Nederland</h2>
                    <p>08/06/2023</p>
                    <img src="../img/nieuws-images/1024x576a.jpg" alt="Afbeelding 3" class="news-image">
                    <p>Geert Wilders onthult ambitieus veiligheidsplan om criminaliteit en terrorisme effectief aan te
                        pakken.</p>
                </div>
                <div class="news-item">
                    <h2>De Politieke Opkomst van Geert Wilders</h2>
                    <p>06/06/2023</p>
                    <img src="../img/nieuws-images/FxycqNfXoAELWZu.jpg" alt="Afbeelding 3" class="news-image">
                    <p>Een overzicht van Wilders' impact op de Nederlandse politiek.</p>
                </div>
                <div class="news-item">
                    <h2>Geert Wilders en de Toekomst van het Nederlandse Immigratiebeleid</h2>
                    <p>04/06/2023</p>
                    <img src="../img/nieuws-images/geert-wilders-blaast-cartoonwedstrijd-af-er-staat-een-prijs-op-mijn-hoofd.jpg"
                        alt="Afbeelding 3" class="news-image">
                    <p>Wilders' standpunten over immigratie en integratie.</p>
                </div>
                <div class="news-item">
                    <h2>Het Populisme van Geert Wilders: Een Diepgaande Analyse van Zijn Strategieën</h2>
                    <p>03/06/2023</p>
                    <img src="../img/nieuws-images/download.jpg" alt="Afbeelding 3" class="news-image">
                    <p>Onderzoek naar de populistische tactieken van Wilders.</p>
                </div>
                <div class="news-item">
                    <h2>Geert Wilders en de Vrijheid van Meningsuiting: Een Delicate Balans</h2>
                    <p>02/06/2023</p>
                    <img src="../img/nieuws-images/freedom-001.jpg" alt="Afbeelding 3" class="news-image">
                    <p>Een bespreking van Wilders' visie op vrijheid van meningsuiting.</p>
                </div>
                <div class="news-item">
                    <h2>Geert Wilders en de Opkomst van Rechtspopulisme in Europa</h2>
                    <p>030/05/2023</p>
                    <img src="../img/nieuws-images/Geert-Wilders-.jpg" alt="Afbeelding 3" class="news-image">
                    <p>Een vergelijking van Wilders met andere rechtspopulistische leiders in Europa.</p>
                </div>

            </div>
        </main>
        <footer>
            <div class="footer-content">
                <ul class="footer-links">
                    <li><a href="#">Nieuws</a></li>
                    <li><a href="#">Leden</a></li>
                    <li><a href="#">Standpunten</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Schenk</a></li>
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
    </div>
</body>

</html>