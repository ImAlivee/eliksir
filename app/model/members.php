<?php
require_once 'app/model/connexionBDD.php';
//Renvoie un seul membre dont l'ID a été fourni
/*function getMembre(int $idMembre, PDO $pdo): array {
    $sql = "SELECT * FROM membres WHERE idMembres = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $idMembre, PDO::PARAM_INT);
    $stmt->execute();

    $membre = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$membre) {
        $_SESSION['message'] = "Le membre " . $idMembre . " n'existe pas !";
        header("Location: biere.php");
        exit;
    }
    return $membre;
}*/
//Renvoie la liste de tous les membres
function getMembres(PDO $pdo): array {
    $sql = "SELECT * FROM membres";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
