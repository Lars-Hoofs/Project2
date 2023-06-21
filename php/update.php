<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=project2;", 'root', '');
    if (!$connection) {
        echo "Status: Not Connected";
    }
    if ($connection) {
        echo "Status: Connected";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gebruikersnaam = $_POST["gebruikersnaam"];
        $nieuweGebruikersnaam = $_POST["nieuweGebruikersnaam"];
        $email = $_POST["email"];
        $password = $_POST["wachtwoord"];
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

        $updateQuery = $connection->prepare("UPDATE gebruikers SET gebruikersnaam = :nieuwegebruikersnaam, email = :email WHERE gebruikersnaam = :oldname");
        $updateQuery->bindParam(':nieuwegebruikersnaam', $nieuweGebruikersnaam);
        $updateQuery->bindParam(':email', $email);
        $updateQuery->bindParam(':oldname', $gebruikersnaam);
        $updateQuery->bindParam(':password',  $hashedpassword);
        $updateQuery->execute();
        echo "<br>";
        echo "<h1>Done</h1>";
    }
} catch (PDOException $e) {
    echo "An error has occurred: " . $e->getMessage();
}
?>

<form action="../html/account_page_index.php" method="post">
    <input type="submit" value="Go Back">
</form>
