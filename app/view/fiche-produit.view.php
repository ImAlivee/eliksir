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
            <img id="biere" src="public\images\img_brassage_site_web\Posts_bieres\<?php echo $biere["image"];?>">
        </figure>
    </figure>
</section>

<section class="description">
    <div class="text">
        <h1><?=$biere['nom_produit']?></h1>
        <p class="storytelling"><?= $biere['description'] ?></p>
        <p class="ingrédients"><?= $biere['ingredients'] ?></p>
        <p class="infos"><?= $biere['type'] ?></p>
        <p class="pourcentage"><?= $biere['pourcentage_alcool'] ?></p>
    </div>
    <div class="achat">
        <p class="prix">3,15€</p>
        <form>
        <button action="submit" method="get">Ajouter au panier</button>
        </form>
    </div>


</section>
