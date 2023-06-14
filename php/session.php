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
    ?>