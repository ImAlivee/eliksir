<?php
session_start();
if(!isset($_SESSION['majeur'])) {
    header('Location:majeur.php');
    exit;
} 

// Récupération des données :
include 'app/model/connexionBDD.php';

//include ?
$pdo = getDatabaseConnection();
require_once 'app/model/fonctions.model.php';
$bieres = getInfo($pdo);


$page_title = 'Produits';
$css = 'style1.css';

// Génération et injection de la vue
ob_start();
include 'app/view/produits.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';





