<?php
// Création du tableau de bières
$bieres = array(
    "bière1" => array(
        "nom" => "nom1",
        "prix" => 2.99,
        "taille" => "taille1"
    ),
    "bière2" => array(
        "nom" => "nom2",
        "prix" => 2.99,
        "taille" => "taille2"
    ),
    "bière3" => array(
        "nom" => "nom3",
        "prix" => 2.99,
        "taille" => "taille3"
    ),
    "bière4" => array(
        "nom" => "nom4",
        "prix" => 2.99,
        "taille" => "taille4"
    ),
    "bière5" => array(
        "nom" => "nom5",
        "prix" => 2.99,
        "taille" => "taille5"
    ),
    "bière6" => array(
        "nom" => "nom6",
        "prix" => 2.99,
        "taille" => "taille6"
    )
);

?>

<ul class="liste-de-bière">
        <?php foreach ($bieres as $type => $listeBieres): ?>
            <?php foreach ($listeBieres as $biere): ?>
                <li>
                    <h3><?php echo $biere["nom"]; ?></h3>
                    <p>Prix: <?php echo $biere["prix"]; ?>€</p>
                    <p>Taille: <?php echo $biere["taille"]; ?></p>
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