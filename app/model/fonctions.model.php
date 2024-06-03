<?php
function addToCart($productId) {
    // Initialiser le panier s'il n'existe pas
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    // Ajouter ou incrémenter le produit dans le panier
    if (isset($_SESSION['panier'][$productId])) {
        $_SESSION['panier'][$productId]++;
    } else {
        $_SESSION['panier'][$productId] = 1;
    }
}

function totalCart($totalItem){
    $totalItem = 0;
    if (isset($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as $quantity) {
            $totalItem += $quantity;
        }
    }
}