<?php
session_start();
// Récupération des données :
include 'app/model/connexionBDD.php';


$page_title = 'Brassage';
$css = 'brassage.css';

// Génération et injection de la vue
ob_start();
include 'app/view/brassage.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';