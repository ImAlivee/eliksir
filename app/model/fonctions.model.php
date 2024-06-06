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


function updateCart($productId, $action) {
        if ($action == 'plus') {
            $_SESSION['panier'][$productId]++;  // Increment quantity
        } elseif ($action == 'moins') {
            if ($_SESSION['panier'][$productId] > 1) {
                $_SESSION['panier'][$productId]--;  // Decrement quantity
            } else {
                unset($_SESSION['panier'][$productId]);  // Remove product if quantity is 0
            }
        }
    }