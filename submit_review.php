<?php
include 'app/model/connexionBDD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Connexion à la base de données
    $pdo = getDatabaseConnection();

    try {
        $stmt = $pdo->prepare("INSERT INTO reviews (user_id, rating, comment) VALUES (?, ?, ?)");
        $stmt->execute([$user_id, $rating, $comment]);
        echo "Review submitted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}