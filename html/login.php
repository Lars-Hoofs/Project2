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
    <link rel="stylesheet" href="../css/inlog_style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                    <li class="nav-itemz">
                        <img src="../img/icons/burger-menu.png" onclick="burger()" alt="">
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="form-container">
                <form action="../php/inlog.php" method="POST">
                    <h2>Login</h2>
                    <div>
                        <label for="login_username">Gebruikersnaam/email:</label>
                        <input type="text" id="login_username" name="login_username" value="" required>
                    </div>
                    <div>
                        <label for="login_password">Wachtwoord:</label>
                        <input type="password" id="login_password" name="login_password" value="" required>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lcugo8mAAAAAMHZjNACHGwbDaSoxnqvET3XVYzp" name="g-recaptcha-response"></div>
                    <div>
                        <input type="submit" value="Verzenden">
                    </div>
                </form>
            </div>
            <div class="form-container">
                <form action="../php/register.php" method="POST">
                    <h2>Registreren</h2>
                    <div>
                        <label for="register_username">Gebruikersnaam:</label>
                        <input type="text" id="register_username" name="register_username" value="" required>
                    </div>
                    <div>
                        <label for="register_email">Email:</label>
                        <input type="email" id="register_email" name="register_email" value="" required>
                    </div>
                    <div>
                        <label for="register_password">Wachtwoord:</label>
                        <input type="password" id="register_password" name="register_password" value="" required>
                    </div>
                    <div>
                        <label for="confirm_register_password">Bevestig wachtwoord:</label>
                        <input type="password" id="confirm_register_password" name="confirm_register_password" value=""
                            required>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lcugo8mAAAAAMHZjNACHGwbDaSoxnqvET3XVYzp" name="g-recaptcha-response"></div>
                    <div>
                        <input type="submit" value="Verzenden">
                    </div>
                </form>
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
                        <h3>PVV website</h3>
                        <p>Dit is de enige 'PVV' website die officieel beheerd wordt door de PVV.</p>
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
                
                <p class="copyright">&copy;
                    2023 Partij voor de vrijheid.nl. Alle rechten voorbehouden.</p>
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
