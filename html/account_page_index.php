<?php
session_start();

if (isset($_POST['logout'])) {
    logout();
}

function logout() {
    session_destroy();
    header("Location: ../html/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lars pagina</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="logout">Uitloggen</button>
    </form>
</body>
</html>