<h1>Panier</h1>
<section class="grid">
    <div class="ligne1">
        <h2 class="line1">Produits</h2>
        <h2 class="line1">Quantité</h2>
        <h2 class="line1">Prix Total</h2>
    </div>
    <?php 
    $ids = array_keys($_SESSION['panier']);
    if (empty($ids)) {
        echo "Votre panier est vide";
    } else {
        try {
            // Utilisation de PDO pour récupérer les produits
            $placeholders = implode(',', array_fill(0, count($ids), '?'));
            $stmt = $pdo->prepare("SELECT * FROM biere WHERE id_produit IN ($placeholders)");
            $stmt->execute($ids);
            $produits = $stmt->fetchAll();

            $totalPanier = 0;

            foreach ($produits as $produit):
                $quantite = $_SESSION['panier'][$produit['id_produit']];
                $prixTotalProduit = $produit['prix'] * $quantite;
                $totalPanier += $prixTotalProduit;
    ?>
    <div class="ligne2">
        <img class="enfant" id="biere" src="public/images/img_brassage_site_web/Posts_bieres/<?php echo htmlspecialchars($produit['image']); ?>" alt="Produit">
        <p class="enfant"><?php echo htmlspecialchars($produit['nom_produit']); ?></p>
        <div id="quantite" class="enfant">
            <!--<img src="public\images\panier\plus.png" alt="ajouter" class="modifie">-->
            <a>+</a>
            <p><?php echo $quantite; ?></p>
            <a>-</a>
            <!--<img src="public\images\panier\moins.png" alt="retirer" class="modifie">-->
        </div>
        <p class="enfant" id="prix"><?php echo $prixTotalProduit;?> €</p>
    </div>
    <?php endforeach; ?>
    <h2 class="total">Total du panier</h2>
    <p class="total"><?php echo $totalPanier; ?> €</p>
    <?php 
        } catch (PDOException $e) {
            echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        }
    }
    ?>
</section>
<button onclick="window.location.href='produits.php'">Poursuivre les achats</button>
<button onclick="window.location.href='checkout.php'">Commander</button>
