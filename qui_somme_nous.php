<?php
session_start();

// Inclure les fonctions du modèle
include 'app/model/members.php';

// Récupérer la connexion à la base de données
$pdo = getDatabaseConnection();
/* Inutile pour ma fonction
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}*/

$page_title = 'Qui sommes nous ?';
$css = 'qui_sommes_nous.css';

// Récupérer les membres
$members = getMembres($pdo);

// Génération et injection de la vue
ob_start();
include 'app/view/qui_somme_nous.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';