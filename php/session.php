    <?php
    session_start();

    function isUserLoggedIn() {
        return isset($_SESSION['gebruikersnaam']);
    }

    function redirectIfNotLoggedIn() {
        if (!isUserLoggedIn()) {
            header("Location: ../html/login.php");
            exit;
        }
    }

    function logout() {
        session_destroy();
        header("Location: ../html/login.php");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
        logout();
    }

    function deleteAccount() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project2";
    
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Verbindingsfout: " . $e->getMessage());
        }
        if ($conn){
            echo "Status: Connected";
        }
        if (!$conn){
            echo "Status: Not Connected";
        }
        $gebruikersnaam = $_SESSION['gebruikersnaam'];
    

        $sql = "DELETE FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam";
    
        try {
            // Bereid de query voor
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
    
            // Voer de query uit
            $stmt->execute();
    
            // Account succesvol verwijderd
            logout(); // Log de gebruiker uit na het verwijderen van het account
        } catch(PDOException $e) {
            echo "Fout bij het verwijderen van het account: " . $e->getMessage();
        }
    
        $conn = null;
    }
    ?>