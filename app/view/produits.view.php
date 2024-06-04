<ul class="liste-de-biere">
        <?php foreach ($bieres as $biere): ?>
    <ul class="listebiere">
        <li>
            <h2><?php echo $biere["nom_produit"]; ?></h2>
            <img src="">
            <h3><?php echo $biere["prix"]; ?></h3>
            <p><?php echo $biere["quantite"]; ?></p>
            <h3><?php echo $biere["pourcentage_alcool"]; ?></h3>
        </li>
        <li>
                <a href=" ">Ajouter au panier</a>
            </li>
        <?php endforeach; ?>
</ul>