<?php foreach ($articles as $article):?>
    <div>
        <h2><?= $article->getTitle() ?></h2>
        <a href="?page=articles&action=details&article_slug=<?= $article->getSlug() ?>">Tell me more</a>
    </div>
<?php endforeach; ?>

