<?php
session_start();
// Récupération des données :
include 'app/model/connexionBDD.php';

$page_title = 'Contact';
$css = 'contact.css';

// Génération et injection de la vue
ob_start();
include 'app/view/contact.view.php';
$content = ob_get_clean();

// Inclusion du layout pour obtenir la page HTML
include 'app/view/common/layout.php';