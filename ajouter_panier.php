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

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  // Utilisation de intval pour éviter les injections SQL par l'URL

    try {
        $stmt = $pdo->prepare("SELECT * FROM biere WHERE id_produit = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $produit = $stmt->fetch();
        
        if (!$produit) {
            die("Ce produit n'existe pas");
        }
    } catch (PDOException $e) {
        die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
    }

    if (!isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id] = 1;
    } else {
        $_SESSION['panier'][$id]++;
    }
    header("location:produits.php");
}
?>
