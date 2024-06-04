<?php
session_start();

if(!isset($_SESSION['majeur'])) {
    header('Location: majeur.php');
    exit;
} 
// Récupération des données :
include 'app/model/connexionBDD.php';

if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num'] < 1) {
    $_SESSION['message'] = "L'identifiant de la bière n'est pas correct.";
    header('Location: accueil.php');
    exit;
}

require_once 'app/model/connexionBDD.php';
require_once 'app/model/fiche.model.php';

$numBeer = intval($_GET['num']);
$pdo = getDatabaseConnection();
$biere = getBeer($numBeer,$pdo);


$page_title = 'Bière - ' . $biere['nom_produit'];

$css = 'style1.css';

// Génération et injection de la vue
ob_start();
include 'app/view/fiche-produit.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';