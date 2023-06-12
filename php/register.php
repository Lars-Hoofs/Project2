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


        $username = $_POST['register_username'];
        $email = $_POST['register_email'];
        $password = $_POST['register_password'];
        $confirmPassword = $_POST['confirm_register_password'];

        if ($password !== $confirmPassword) {
            echo "Het bevestigde wachtwoord komt niet overeen.";
            exit;
        }

        $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE gebruikersnaam = :username OR email = :email");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "De gebruikersnaam of e-mail is al in gebruik.";
            exit;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO gebruikers (gebruikersnaam, email, wachtwoord) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        header("Location: ../html/index.php");
    } catch (PDOException $e) {
        echo "Fout bij het verbinden met de database: " . $e->getMessage();
    }

    $conn = null;
}
?>