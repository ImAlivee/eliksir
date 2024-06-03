
<ul class="liste-de-bière">
        <?php foreach ($bieres as $type => $listeBieres): ?>
            <?php foreach ($listeBieres as $biere): ?>
                <li>
                    <h3><?php echo $bieres["nom"]; ?></h3>
                    <p>Prix: <?php echo $bieres["prix"]; ?>€</p>
                    <p>Taille: <?php echo $bieres["taille"]; ?></p>
                </li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
    <ul class="listebiere">
        <li>  A faire en boucle en fonction du nombre de bière
            <h2>Nom de la bière</h2>
            <img src="">
            <h3>Prix</h3>
            <p>Liste des ingrédients</p>
            <h3>Pourcentage d'alcool</h3>
        </li>

<?php foreach ($products as $id => $name) : ?>
            <li>
                <?php echo $name; ?>
                <a href="?add=<?php echo $id; ?>">Ajouter au panier</a>
            </li>
<?php endforeach; ?>

</ul>