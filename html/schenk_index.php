<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/schenk_style.css">
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
                        <li class="nav-item">
                            <a href="../html/login.php">Login / register</a>
                        </li>
                    </ul>
                </nav>
        </header>
          <main>
            <h1>Doneer nu</h1>
            <form id="donation-form">
              <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="amount">Bedrag:</label>
                <input type="number" id="amount" name="amount" required>
              </div>
              <div class="form-group">
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
              </div>
              <div class="form-group">
                <input type="checkbox" id="agreement" name="agreement" required>
                <label for="agreement">Ik ga akkoord met de <a href="overeenkomst.pdf" target="_blank">overeenkomst</a>.</label>
              </div>
              <div class="form-group">
                <label for="payment-method">Betaalmethode:</label>
                <select id="payment-method" name="payment-method" required>
                  <option value="">Kies een betaalmethode</option>
                  <option value="credit-card">Creditcard</option>
                  <option value="bank-transfer">Bankoverschrijving</option>
                  <option value="paypal">PayPal</option>
                </select>
              </div>
              <input type="submit" value="Doneer">
            </form>
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
                    <li><a href="https://www.facebook.com/partijvoordevrijheid/?locale=nl_NL"><img src="../img/icons/Facebook - Negative.png" alt="Icon 1"></a></li>
                    <li><a href="https://www.instagram.com/geertwilders/"><img src="../img/icons/Instagram - Negative.png" alt="Icon 2"></a></li>
                    <li><a href="https://twitter.com/limburg_pvv"><img src="../img/icons/Vector.png" alt="Icon 3"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCCEuhjaT09ArS77AJm6etXw"><img src="../img/icons/YouTube - Negative.png" alt="Icon 4"></a></li>
                  </ul>
                </div>
              </div>
              <p class="copyright">&copy; 2023 Partij voor de vrijheid.nl. Alle rechten voorbehouden.</p>
            </div>
          </footer> 
    </div>
</body>
</html>