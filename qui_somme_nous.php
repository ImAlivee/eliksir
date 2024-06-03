<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
file_put_contents('log.txt', 'Session started' . PHP_EOL, FILE_APPEND);

// Récupération des données :
include 'app/model/connexionBDD.php';
include 'app/controller/MemberController.php';
file_put_contents('log.txt', 'Included model and controller' . PHP_EOL, FILE_APPEND);

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
    file_put_contents('log.txt', 'Message from session: ' . $message . PHP_EOL, FILE_APPEND);
}

$page_title = 'Qui sommes nous ?';
$css = 'qui_sommes_nous.css';

try {
    $memberController = new MemberController();
    file_put_contents('log.txt', 'MemberController instantiated' . PHP_EOL, FILE_APPEND);
    
    $members = $memberController->index();
    file_put_contents('log.txt', 'Members fetched: ' . print_r($members, true) . PHP_EOL, FILE_APPEND);
} catch (Exception $e) {
    file_put_contents('log.txt', 'Error: ' . $e->getMessage() . PHP_EOL, FILE_APPEND);
    die('There was an error processing your request.');
}

// Génération et injection de la vue
ob_start();
include 'app/view/qui_somme_nous.view.php';
$content = ob_get_clean();
file_put_contents('log.txt', 'View included and content buffered' . PHP_EOL, FILE_APPEND);

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';
file_put_contents('log.txt', 'Layout included' . PHP_EOL, FILE_APPEND);
?>
