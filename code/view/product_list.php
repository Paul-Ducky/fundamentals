<?php
 foreach ($products as $product) : ?>
        <div>
            <h2><?= $product->getName() ?></h2>
            <p>Price (tax included): €<?= $product->getTotPrice() ?></p>
        </div>
 <?php endforeach; ?>