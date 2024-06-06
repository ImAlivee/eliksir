<?php
include 'app/model/connexionBDD.php';
include 'app/model/fonctions.model.php';

$pdo = getDatabaseConnection();

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// Handle cart actions
if (isset($_GET['action']) && isset($_GET['id'])) {
    $productId = intval($_GET['id']);
    if ($_GET['action'] == 'plus') {
        if (isset($_SESSION['panier'][$productId])) {
            $_SESSION['panier'][$productId]++;
        } else {
            $_SESSION['panier'][$productId] = 1;
        }
    } elseif ($_GET['action'] == 'moins') {
        if (isset($_SESSION['panier'][$productId])) {
            if ($_SESSION['panier'][$productId] > 1) {
                $_SESSION['panier'][$productId]--;
            } else {
                unset($_SESSION['panier'][$productId]);
            }
        }
    }
    header('Location: panier.php'); // Redirect back to the cart page
    exit();
}
?>
