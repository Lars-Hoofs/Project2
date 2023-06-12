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
}
?>