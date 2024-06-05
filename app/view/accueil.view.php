<div class="heritage">
    <img src="public\images\img_brassage_site_web\Posts_bieres\Heritage.jpg" alt="">
    <p>Günther a reçu un carnet de son héritage nordique. Dans celui-ci,
        il y trouve diverses potions permettant d’acquérir chaque aptitudes des vikings.
        Voulant partager son savoir, il créa Elixir afin que chacun puisse retrouver
        en soi les qualités que voulaient transmettre ces ancêtres !</p>
</div>

<section class="suggestion">
<<<<<<< Updated upstream
    <?php foreach ($bieresAleatoires as $biere): ?>
        <div class="biere">
            <img src="public/images/img_brassage_site_web/Posts_bieres/<?php echo isset($biere['image']) ? $biere['image'] : 'default.jpg'; ?>" alt="<?php echo isset($biere['nom']) ? $biere['nom'] : 'Nom '; ?>">
            <p><?= isset($biere['nom_produit']) ? $biere['nom_produit'] : 'Nom' ?></p>
            <p> <?= isset($biere['type']) ? $biere['type'] : 'Type inconnu' ?></p>
            <p><?= isset($biere['pourcentage']) ? $biere['pourcentage'] : 'Pourcentage' ?>%</p>
            <p><?= isset($biere['prix']) ? $biere['prix'] : 'Prix inconnu' ?> €</p>
        </div>
    <?php endforeach; ?>
=======
    <div class="resilience">
        <img src="public\images\img_brassage_site_web\Posts_bieres\resilience.jpg" alt="">
        <p>type de biere</p>
        <p>Prix</p>
        <p>Le nom</p>
        <p>pourcentage</p>
    </div>
    <div class="sante">
        <img src="public\images\img_brassage_site_web\Posts_bieres\sante.jpg" alt="">
        <p>type de biere</p>
        <p>Prix</p>
        <p>Le nom</p>
        <p>pourcentage</p>
    </div>
    <div class="seduction">
        <img src="public\images\img_brassage_site_web\Posts_bieres\seduction.jpg" alt="">
        <p>type de biere</p>
        <p>Prix</p>
        <p>Le nom</p>
        <p>pourcentage</p>
    </div>
>>>>>>> Stashed changes
</section>

<section class="tous">
    <div class="etape">
        <h1>Etape</h1>
        <input class="bouton" type="button" value="En savoir plus">
    </div>
    <p class="pi">texte a description</p>
</section>

<h2>Qui sommes nous ?</h2>
<section class="tout">
    <div class="nous">
        <p>texte a description</p>
<<<<<<< Updated upstream
        <img src="public/images/photos_groupe/photo_groupe.jpg" alt="">
=======
        <img src="public\images\photos_groupe\photo_groupe.jpg" alt="">
>>>>>>> Stashed changes
        <p>texte a description</p>
    </div>
    <input class="bouton2" type="button" value="En savoir plus">
</section>