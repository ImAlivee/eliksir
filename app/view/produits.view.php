<ul class="liste-de-bière">
        <?php foreach ($bière as $bières): ?>
    <ul class="listebiere">
        <li>
            <h2><?php echo $biere["nom_produit"]; ?></h2>
            <img src="">
            <h3><?php echo $biere["prix"]; ?></h3>
            <p><?php echo $biere["quantité"]; ?></p>
            <h3><?php echo $biere["pourcentage_alcool"]; ?></h3>
        </li>
        <?php endforeach; ?>
        <?php foreach ($bière as $id_produit => $nom_produit) : ?>
            <li>
                <a href="panier.php?action=add&id=<?php echo $id_produit; ?>">Ajouter au panier</a>
            </li>
        <?php endforeach ?>
</ul>