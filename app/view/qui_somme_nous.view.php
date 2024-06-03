<h1 class="titre">Notre Équipe</h1>
<img src="public/images/photos_groupe/photo_groupe.jpg" alt="Équipe Eliksir" class="intro-image">
<p class="paragraphe">
    Bienvenue dans les coulisses d’Eliksir, où l’on peut voir les membres de l’entreprise.
    L’entreprise a été créée par Gunther, qui a pour but de transmettre les valeurs nordiques de ses ancêtres
    d'où le nom de la bière principale ‘Héritage’. Notre service communication, qui est chargée d’étendre la notoriété
    de la marque sur les réseaux sociaux et de la création des étiquettes, est aussi chargée de la création du logo et
    de
    la charte graphique. On a décidé d’appeler la marque Eliksir en référence au mot potion en norvégien qui rappelle
    les pouvoirs qu’apportent nos bières, en prenant appui sur les légendes Nordiques et Vikings qui font partie de
    l’héritage
    de Gunther, le créateur. Chaque bière a sa rune qui fait référence au pouvoir qu’elle procure.
</p>

</section>
    <section class="team">
        <?php foreach ($members as $member): ?>
            <div class="member">
                <div class="image-container">
                    <img src="<?= $member['image_default']; ?>" alt="<?= $member['nom']; ?>" class="default-img">
                    <img src="<?= $member['image_hover']; ?>" alt="<?= $member['nom']; ?> Hover" class="hover-img">
                </div>
                <h2 class="personne"><?= $member['nom']; ?></h2>
                <p><?= $member['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>



<section class="storytelling">
    <h1 class="titre">StoryTelling</h1>

    <div class="image-alexis-ange">
        <img id="ange" src="public/images/ange.png" alt="Ange" class="storytelling-img">
        <img id="alexis" src="public/images/alexis.png" alt="Alexis" class="storytelling-img">
    </div>

    <p>
        Günther, fasciné par les pouvoirs insoupçonnés de ces potions, décida de les partager avec le monde sous la
        forme
        de la marque de bière "Eliksir". Chaque bière de la gamme Eliksir était imprégnée de l'énergie et de l'esprit
        des Vikings,
        incarnant une qualité distincte grâce aux ingrédients spécifiques et à la symbolique des runes associées. La
        bière principale,
        "Héritage", symbolisait la tradition et les liens familiaux, rappelant aux buveurs l'importance de leurs racines
        nordiques. Avec sa
        couleur verte et ses baies de genévriers, elle offrait une expérience rafraîchissante tout en évoquant la
        richesse de l'héritage viking.
        Günther lui-même avait goûté à chacune de ces potions, vivant des expériences transformantes à chaque fois.
        Lorsqu'il buvait la bière
        "Courage", imprégnée de la rune Tiwaz, sa timidité cédait la place à un courage inébranlable. Inspiré par cette
        nouvelle confiance,
        il décida de partager sa découverte avec le monde, surmontant ainsi sa réserve habituelle. La bière "Rage",
        associée à la rune Hagalaz,
        transformait Günther en un combattant intrépide, prêt à affronter les défis avec une détermination féroce. Sous
        l'influence de la bière
        "Richesse", imprégnée de la rune Fehu, il trouva la fortune là où il n'avait connu que la pauvreté, illustrant
        ainsi le pouvoir d'abondance
        et de prospérité des Vikings. La bière "Découverte" l'entraîna dans une aventure inattendue en Norvège, révélant
        les secrets enfouis de
        son héritage familial. Avec la bière "Résilience", il découvrit une force intérieure inébranlable, lui
        permettant de surmonter les épreuves
        avec une détermination indomptable. Enfin, la bière "Séduction" fit de lui un être magnétique, attirant les
        autres à lui avec une aura de
        charisme et de générosité. Günther réalisa alors que les enseignements de ses ancêtres pouvaient véritablement
        transformer les vies, inspirant
        les autres à embrasser leurs propres héritages et à développer leurs qualités cachées. Ainsi, grâce à l'Eliksir
        et aux potions créées par Günther,
        chacun pouvait désormais puiser dans la sagesse et la force des Vikings, révélant ainsi le véritable potentiel
        de leur héritage nordique.
    </p>
</section>