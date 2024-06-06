<?php
session_start();
if(!isset($_SESSION['majeur'])) {
    header('Location:majeur.php');
    exit;
} 

$page_title = 'Produits';
$css = 'produit.css';
// Récupération des données :
include 'app/model/connexionBDD.php';


if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

//include ?
$pdo = getDatabaseConnection();
include 'app/model/fonctions.model.php';
$bieres = getInfo($pdo);

$ids = array_keys ($_SESSION['panier']);
$lines = getSpecificBeers($pdo, $ids);


$page_title = 'Produits';
$css = 'style1.css';

// Génération et injection de la vue
ob_start();
include 'app/view/produits.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';





