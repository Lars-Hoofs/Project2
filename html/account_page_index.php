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
    <link rel="stylesheet" href="../css/account_page_style.css">
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
            <?php if (isUserLoggedIn()): ?>
            <h1>Welkom, <?php echo $_SESSION['gebruikersnaam']; ?></h1>
            <form action="../php/update.php" method="post">
                <input type="hidden" name="gebruikersnaam" value="<?php echo $_SESSION['gebruikersnaam']; ?>">
                <label for="nieuweGebruikersnaam">Nieuwe gebruikersnaam:</label>
                <input type="text" name="nieuweGebruikersnaam" id="nieuweGebruikersnaam">
                <br>
                <label for="email">Nieuw emailadres:</label>
                <input type="email" name="email" id="email">
                <br>
                <label for="wachtwoord">Nieuw wachtwoord:</label>
                <input type="password" name="wachtwoord" id="wachtwoord">
                <br>
                <input type="submit" value="Opslaan" name="submit">
            </form>

            <form action="../php/session.php" method="post">
        <input type="hidden" name="logout" value="true">
        <input type="submit" value="Uitloggen">
    </form>
            <?php else: ?>
            <h1>Welkom</h1>
            <?php endif; ?>
            <form method="post" action="../php/delete.php">
    <input type="submit" value="Verwijder Account" name="delete" onclick="return confirm('Weet je zeker dat je je account wilt verwijderen?')">
</form>
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