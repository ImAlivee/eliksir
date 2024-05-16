<?php
session_start();
// Récupération des données :
//include base de données

var_dump($_SESSION);
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$page_title = 'Qui sommes nous ?';
$css = 'style1.css';

// Génération et injection de la vue
ob_start();
include 'app/view/qui_somme_nous.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';