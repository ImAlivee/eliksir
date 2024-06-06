<?php

function getBeer(int $numBeer, PDO $pdo): array {
    $sql="SELECT * FROM biere WHERE id_produit=:id";
    $stmt= $pdo -> prepare($sql);
    $stmt -> bindParam(':id', $numBeer, PDO::PARAM_INT);
    $stmt -> execute();
    if (!$biere = $stmt -> fetch()) {
        $_SESSION['message'] = "L'identifiant de la bière n'est pas correct.";
        header('Location: produits.php');
        exit;
}

    return $biere;
}