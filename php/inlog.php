<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_POST['login_username'];
        $password = $_POST['login_password'];

        $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE gebruikersnaam = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['wachtwoord'])) {
                $_SESSION['gebruikersnaam'] = $user['gebruikersnaam'];
                echo "Inloggen succesvol!";
                header("Location: ../html/index.php");
            } else {
                echo "Ongeldige gebruikersnaam of wachtwoord.";
            }
        } else {
            echo "Ongeldige gebruikersnaam of wachtwoord.";
        }
    } catch (PDOException $e) {
        echo "Fout bij het verbinden met de database: " . $e->getMessage();
    }

    $conn = null;
}
?>