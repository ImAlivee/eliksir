<?php
include 'connexionBDD.php';

function getAllReviews(PDO $pdo): array {
    $stmt = $pdo->query("SELECT users.username, reviews.rating, reviews.comment, reviews.created_at FROM reviews JOIN users ON reviews.user_id = users.id ORDER BY reviews.created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}