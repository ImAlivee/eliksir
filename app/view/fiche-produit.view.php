<section class="biere">
    <p class="retour"><</p>
    <div class="banière">
    <?php
            if (isset($biere['image_fond'])) {
                $photo = $biere['image_fond'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <img id="fond" src="public/images/baniere/<?= $biere['image_fond'] ?>" alt="photo de la bannière de la bière <?= $biere['nom_produit'] ?>">
    </div>
    <figure class="image">
        <?php
            if (isset($biere['image'])) {
                $photo = $biere['image'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
        </figure>
    </figure>
</section>

<section class="description">
    <div class="text">
        <div class="gauche"></div>
            <p class="storytelling"><?= $biere['description'] ?></p>
        <div class="centre"> 
            <img id="biere" src="public\images\img_brassage_site_web\Posts_bieres\<?php echo $biere["image"];?>">
            <h1><?=$biere['nom_produit']?></h1>
            <p class="infos"><?= $biere['type'] ?></p>
            <p class="pourcentage"><?= $biere['pourcentage_alcool'] ?></p>
        </div>
        <div class="droite">
            <p class="ingredients"><?= $biere['ingredients'] ?></p>
        </div>     

        
        
    </div>
    <div class="achat">
        <p class="prix">3,15€</p>
        <a href="ajouter_panier.php?id= <?php echo $biere["id_produit"]; ?>">Ajouter au panier</a>
    </div>

<h1>Suggestions</h1>
<h2>Vous pourriez aimer aussi</h2>
<section class="suggestion">
    <?php foreach ($bieresAleatoires as $biere): ?>
        <div class="biere">
            <a href="fiche_produit.php?num=<?= $biere['id_produit']; ?>">
            <img src="public/images/img_brassage_site_web/Posts_bieres/<?php echo isset($biere['image']) ? $biere['image'] : 'default.jpg'; ?>"
                alt="<?php echo isset($biere['nom']) ? $biere['nom'] : 'Nom '; ?>">
            <p class="nom"><?= isset($biere['nom_produit']) ? $biere['nom_produit'] : 'Nom' ?></p>
            <p class="type"><?= isset($biere['type']) ? $biere['type'] : 'Type inconnu' ?></p>
            <p class="pourcentage"><?= isset($biere['pourcentage_alcool']) ? $biere['pourcentage_alcool'] : 'Pourcentage' ?>%</p>
            <p class="prix"><?= isset($biere['prix']) ? $biere['prix'] : 'Prix inconnu' ?> €</p>
        </div>
    <?php endforeach; ?>
</section>

</section>
