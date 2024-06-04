<?php foreach ($infos as $ainfos) : ?>
    <div class="carte">
        <a href="fiche.php?num=<?= $ainfos['id'] ?>">
            <?php
            if (isset($ainfos['photo'])) {
                $photo = 'groupe' . $ainfos['group'] . '/small/' . $ainfos['photo'];
            } else {
                $photo = 'defaut.png';
            }
            ?>
            <figure class="photo"><img src="public/images/<?= $photo ?>" alt="photo de <?= $ainfos['firstname'] ?> <?= $ainfos['lastname'] ?>">
            </figure>
            <div class="infos">
                <p class="nom"><?= $ainfos['firstname'] ?> <span><?= $ainfos['lastname'] ?></span></p>
                <p class="ddn"><?= $ainfos['birthdate'] ?></p>
                <p class="groupe">groupe <span><?= $$ainfos['group'] ?></span></p>
            </div>
        </a>
    </div>
<?php endforeach ?>






<?php foreach ($products as $id => $name) : ?>
    <?php echo $name; ?>
                <a href=" ">Ajouter au panier</a>
<?php endforeach; ?>

</ul>