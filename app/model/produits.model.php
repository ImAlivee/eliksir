<?php

function getInfo(PDO $pdo): array
{
    $sql = "SELECT * FROM biere";
    $stmt = $pdo->query($sql);
    $infos = $stmt->fetchAll();

    return $infos;
}