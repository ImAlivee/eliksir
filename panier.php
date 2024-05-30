<?php
session_start();

if(!isset($_SESSION['majeur'])) {
    header('Location:majeur.php');
    exit;
} 
// Récupération des données :
include 'app/model/connexionBDD.php';

if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$page_title = 'Votre Panier';
$css = '/public/css/panier.css';

// Génération et injection de la vue
ob_start();
include 'app/view/panier.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';