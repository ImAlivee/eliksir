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
            <img src="public/images/fond_biere/<?= $photo ?>" alt="photo de la bannière de la bière <?= $biere['nom_produit'] ?>">
        <h1><?=$biere['nom_produit']?></h1>
    </div>
    <figure class="image">
        <?php
            if (isset($biere['image'])) {
                $photo = $biere['image'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <img src="public/images/baniere/<?= $photo ?>" alt="photo de la bière <?= $biere['nom_produit'] ?>">
        </figure>
    </figure>
</section>

<section class="description">
    <div class="text">
        <p class="storytelling"><?= $biere['storytelling'] ?></p>
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
