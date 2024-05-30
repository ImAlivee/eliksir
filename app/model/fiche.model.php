<?php

function getBeer(int $numBeer, PDO $pdo): array {
    $sql="SELECT * FROM biere WHERE id_produits=:id";
    $stmt= $pdo -> prepare($sql);
    $stmt -> bindParam(':id', $numBeer, PDO::PARAM_INT);
    $stmt -> execute();
    if (!$biere = $stmt -> fetch()) {
        $_SESSION['message'] = "L'identifiant de l'étudiant n'est pas correct.";
        header('Location: accueil.php');
        exit;
    }

    return $biere;
}