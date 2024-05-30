
<?php
session_start();

// Inclure les fonctions
include 'fonctions.model.php';

// Vérifier si un produit est ajouté
if (isset($_GET['add'])) {
    $productId = (int)$_GET['add'];
    addToCart($productId);
}
