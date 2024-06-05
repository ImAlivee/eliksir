<?php

function getSpecificBeers (PDO $pdo, $ids) {
    
    $list = join(',', $ids);
    $sql = "SELECT * FROM beers WHERE id IN (" . $list . ")";
    
    $stmt = $pdo->prepare($sql);

    $specificBeers = $stmt->fetchAll();

    return $specificBeers;

}

function getInfo(PDO $pdo): array
{
    $sql = "SELECT * FROM biere";
    $stmt = $pdo->query($sql);
    $infos = $stmt->fetchAll();

    return $infos;
}
