<?php
session_start();
if (!isset($_SESSION['majeur'])) {
    header('Location: majeur.php');
    exit;
}

// Récupération des données
include 'app/model/connexionBDD.php';
include 'app/model/fonctions.model.php';

$pdo = getDatabaseConnection(); // Initialisation de la connexion à la base de données
$bieres = getInfo($pdo);

// Sélection aléatoire de 3 bières
$nombreDeBieres = 3;
if (count($bieres) > $nombreDeBieres) {
    $clesAleatoires = array_rand($bieres, $nombreDeBieres);
    $bieresAleatoires = [];
    foreach ($clesAleatoires as $cle) {
        $bieresAleatoires[] = $bieres[$cle];
    }
} else {
    $bieresAleatoires = $bieres;
}

$page_title = 'Accueil';
$css = 'accueil.css';

// Génération et injection de la vue
ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';
?>