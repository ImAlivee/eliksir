


   

          <?php foreach ($bières as $biere): ?>
            <ul>
            <div class="carte-biere">
                <li>    <?php if (isset($biere['nom_produit'])): ?>
                 <h2><?php echo $biere['nom_produit']; ?></h2>
                <?php endif; ?>  </li>  

                <li>     <?php if (isset($biere['prix'])): ?>
                    <p>Prix: <?php echo $biere['prix']; ?> €</p>
                <?php endif; ?>  </li>
                <li>     <?php if (isset($biere['taux_alcool'])): ?>
                    <p>Taux d'alcool: <?php echo $biere['taux_alcool']; ?>%</p>
                <?php endif; ?>   </li>
            </div>
            <li>    
                <?php echo $name; ?>
                <a href=" ">Ajouter au panier</a>
            </li>
            </ul>
        <?php endforeach; ?>





<?php foreach ($products as $id => $name) : ?>
            
<?php endforeach; ?>

</ul>