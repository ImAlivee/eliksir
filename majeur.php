<?php
session_start();
// Récupération des données :
include 'app/model/connexionBDD.php';

var_dump($_SESSION);
if(isset($_SESSION['majeur'])) {
    header('Location: accueil.php');
    exit;
} 

if ($_GET['reponse'] == 'oui')
{
    $_SESSION['majeur'] = true;
    header('Location: accueil.php');
    exit;
}


$page_title = 'Avertissement';
$css = 'majeur.css';

// Génération et injection de la vue
ob_start();
include 'app/view/18.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout18.php';