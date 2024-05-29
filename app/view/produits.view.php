

<main> 
    <ul class="listebiere">
        <li>  <!--A faire en boucle en fonction du nombre de bière-->
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
</main>