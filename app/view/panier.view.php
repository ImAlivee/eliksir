    <h1>Panier</h1>
    <section class="grid">
        <div class="gridleft">
            <h2 id="child" class="line1">Produits</h2>
            <?php if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) : ?>
                <?php foreach ($_SESSION['panier'] as $id => $quantity) : ?>
                    <div class="product-item">
                        <img class="biere" src="/public/images/img_brassage_site_web/Posts_bieres/Posts bières/heritage.jpg" alt="Produit">
                        <p><?php echo $products[$id]; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h2>Votre panier est vide.</h2>
            <?php endif; ?>
        </div>
        <div class="gridright">
            <?php if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) : ?>
                <h2 class="line1">Quantité</h2>
                <h2 class="line1">Prix Total</h2>
                <?php foreach ($_SESSION['panier'] as $id => $quantity) : ?>
                    <div class="product-quantity">
                        <form action="" method="get">
                            <input type="number" name="quantity" value="<?php echo $quantity; ?>">
                        </form>
                        <p id="prix"><?php echo number_format($quantity * 11.00, 2); ?>€</p>
                    </div>
                <?php endforeach; ?>
                <h2>Total du panier</h2>
                <p id="total-prix"><?php echo number_format($totalItems * 11.00, 2); ?>€</p>
            <?php endif; ?>
        </div>
    </section>
    <button onclick="window.location.href='index.php'">Poursuivre les achats</button>
    <button onclick="window.location.href='checkout.php'">Commander</button>
   
    <div class="suggestion">
    <img id="photo" src="/public/images/img_brassage_site_web/Posts_bieres/Posts bières/Courage.jpg" alt="">
    <h3>Nom de la biere</h3>
    <p>Type de biere</p>
</div>