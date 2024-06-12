<?php

function getSpecificBeers(PDO $pdo, $ids) {
    if (empty($ids)) {
        return ["il n'y a pas de produits"];
    }
    
    $list = join(',', array_fill(0, count($ids), '?'));
    $sql = "SELECT * FROM biere WHERE id_produit IN ($list)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($ids);
    
    return $stmt->fetchAll();
}

function getInfo(PDO $pdo): array {
    $sql = "SELECT * FROM biere";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
?>