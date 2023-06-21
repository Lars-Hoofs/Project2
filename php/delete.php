<?php
try {
    $connection = new PDO("mysql:host=localhost;dbname=project2;", 'root', '');
    if ($connection->getAttribute(PDO::ATTR_CONNECTION_STATUS)) {
        echo "Status: Connected";
    } else {
        echo "Status: Not Connected";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gebruikersnaam = $_POST["gebruikersnaam"];

        $deleteQuery = $connection->prepare("DELETE FROM gebruikers WHERE gebruikersnaam = :gebruikersnaam");
        $deleteQuery->bindParam(':gebruikersnaam', $gebruikersnaam);
        $deleteQuery->execute();

        echo "<br>";
        echo "<h1>User deleted successfully</h1>";
        session_abort();
    }
} catch (PDOException $e) {
    echo "An error has occurred: " . $e->getMessage();
} catch (Exception $e) {
    echo "Deletion query error: " . $e->getMessage();
}
?>

<form action="../html/account_page_index.php" method="post">
    <input type="submit" value="Go Back">
</form>
