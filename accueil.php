<?php
session_start();
if(!isset($_SESSION['majeur'])) {
    header('Location:majeur.php');
    exit;
} 

// Récupération des données :
include 'app/model/connexionBDD.php';

var_dump($_SESSION);
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$page_title = 'Accueil';
$css = 'accueil.css';

// Génération et injection de la vue
ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';

$bieres = getInfo($pdo);