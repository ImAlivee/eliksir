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
        ?><p id="vide"><? echo "Votre panier est vide";?></p>
    <?} else {
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
        <div class="enfant" id="infos">
            <a href="fiche_produit.php?num=<?= $produit['id_produit']; ?>">
                <img id="biere" src="public/images/img_brassage_site_web/Posts_bieres/<?php echo htmlspecialchars($produit['image']); ?>" alt="Produit">
            </a>
            <div class="infos">
                <p><?php echo htmlspecialchars($produit['nom_produit']); ?></p>
                <p><?php echo htmlspecialchars($produit['prix']); ?>€</p>
                <p><?php echo htmlspecialchars($produit['type']);?><br> <?php echo htmlspecialchars($produit['pourcentage_alcool']); ?></p>
            </div>
        </div>
        <div id="quantite" class="enfant">
            <a href="update_panier.php?action=plus&id=<?php echo $produit['id_produit']; ?>" id="plus">+</a>
            <p id="chiffre"><?php echo $quantite; ?></p>
            <a href="update_panier.php?action=moins&id=<?php echo $produit['id_produit']; ?>" id="moins">-</a>
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

<button class="bouton_panier" onclick="window.location.href='produits.php'">Poursuivre les achats</button>
<button class="bouton_panier" onclick="showPopup()">Commander</button>

<div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup" id="popup">
        <form> </form>

        <p>Merci d'avoir commander chez ELIKSIR !</p>
        
        <button onclick="hidePopup()">DE RIEN !!!</button>
</div>

<!--<script>
        function showPopup() {
            document.getElementById('popup-overlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        }

        function hidePopup() {
            document.getElementById('popup-overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }

    </script> -->