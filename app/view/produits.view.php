<ul class="liste-de-biere">
    <?php foreach ($bieres as $biere): ?>
        <a href="fiche.php?num=<?= $biere['id_produit'] ?>">
        <ul class="listebiere">
            <li>
                <h2><?php echo $biere["nom_produit"]; ?></h2>
                <img src="public\images\img_brassage_site_web\Posts_bieres\<?php echo $biere["image"];?>">
                <h3><?php echo $biere["prix"]; ?></h3>
                <h3><?php echo $biere["type"]; ?></h3>
                <h3><?php echo $biere["pourcentage_alcool"]; ?></h3>
            </li>
                <li>
                <a href=" ">Ajouter au panier</a>
            </li>
    <?php endforeach; ?>
</ul>