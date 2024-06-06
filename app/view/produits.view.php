<div class="main">
    <img  class="photodebut" src="public/images/logos/logo_eliksir_v3_blanc.png" >

<div>
    <h2 class="titrestyle">Tous nos produits</h2>
</div>




<ul class="liste-de-biere">
    <?php foreach ($bieres as $biere): ?>
 
            <li class="item">
                <a href="fiche_produit.php?num=<?= $biere['id_produit']; ?>">
                <h2 class="nombiere"><?php echo $biere["nom_produit"]; ?></h2>
                <img class="photo"src="public\images\img_brassage_site_web\Posts_bieres\<?php echo $biere["image"];?>">
                <h3 class="typebiere"><?php echo $biere["type"]; ?></h3>
                <h3 class="pourcentage"><?php echo $biere["pourcentage_alcool"]; ?></h3>
                <h3 class="prixbiere"><?php echo $biere["prix"]; ?></h3>                
                <a class="panier" href="ajouter_panier.php?id= <?php echo $biere["id_produit"]; ?>" >Ajouter au panier</a>
            </li>

    <?php endforeach; ?>
</ul>
</div>
