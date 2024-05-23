<?php
session_start();
// Récupération des données :
include 'app/model/connexionBDD.php';

var_dump($_SESSION);
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$page_title = 'Produits';
$css = 'style1.css';

// Génération et injection de la vue
ob_start();
include 'app/view/produits.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';