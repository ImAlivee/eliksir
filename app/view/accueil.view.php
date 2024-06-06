<h1 class="titre">Accueil</h1>

<h1>Nos Vidéos</h1>
<div class="videos">
    <video width="560" height="315" controls>
        <source src="public/videos/Publicité Eliksir.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/jxR9PJA_xfI?si=WwbJRWA2OlYCVIN7" frameborder="0" allowfullscreen></iframe>
</div>

<h1>À la une</h1>
<div class="heritage">
    <img src="public/images/ange.png" alt="">
    <p>Günther a reçu un carnet de son héritage nordique. Dans celui-ci,
        il y trouve diverses potions permettant d’acquérir chaque aptitude des vikings.
        Voulant partager son savoir, il créa Elixir afin que chacun puisse retrouver
        en soi les qualités que voulaient transmettre ces ancêtres !</p>
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
            <p class="pourcentage"><?= isset($biere['pourcentage_alcool']) ? $biere['pourcentage_alcool'] : 'Pourcentage' ?></p>
            <p class="prix"><?= isset($biere['prix']) ? $biere['prix'] : 'Prix inconnu' ?> €</p>
        </div>
    <?php endforeach; ?>
</section>

<section class="tous">
    <div class="etape">
        <h1 class="ex">Étape du brassage</h1>
        <p class="pi">Pour plus d'explications sur les différentes étapes du brassage réalisés par les GB, veuillez cliquer sur le bouton !</p>
    </div>
    <a href="brassage.php"><input class="bouton" type="button" value="En savoir plus"></a>
</section>

<!-- Ajout de la ligne blanche centrée -->
<div class="center-line-container">
    <div class="center-line"></div>
</div>

<h1>Qui sommes-nous ?</h1>
<section class="tout">
    <div class="nous">
        <p class="sto">Pour en savoir plus sur l'équipe ELIKSIR et en découvrir davantage sur son histoire, cliquez ici !</p>
        <img src="public/images/photos_groupe/photo_groupe.jpg" alt="">
    </div>
    <a href="qui_somme_nous.php"><input class="bouton2" type="button" value="En savoir plus"></a>
</section>
