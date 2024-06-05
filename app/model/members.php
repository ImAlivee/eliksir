<?php
require_once 'app/model/connexionBDD.php';

function getMembre(int $idMembres, PDO $pdo): array {
    $sql = "SELECT * FROM membres WHERE idMembres = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $idMembres, PDO::PARAM_INT);
    $stmt->execute();

    $membres = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$membres) {
        $_SESSION['message'] = "Le membre " . $idMembres . " n'existe pas !";
        header("Location: biere.php");
        exit;
    }
    return $membres;
}

function getMembres(PDO $pdo): array {
    $sql = "SELECT * FROM membres";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
