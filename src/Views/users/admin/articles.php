<?php require __DIR__ . '/../../template/header.php'; ?>

<div id="article-list">
<?php foreach ($articles as $article) : ?>

    <div class="article-item">
        <div class="category-icon category-<?php echo $article->getCategory(); ?>"><p><?php echo $article->getCategory(); ?></p></div>
        <form class="delete-form">
            <input type="hidden" name="c" value="article"/>
            <input type="hidden" name="a" value="delete"/>
            <input type="hidden" name="id" value="<?php echo $article->getId(); ?>" />
            <input type="submit" class="delete-button" value="X"/>
        </form>
        <h3><?php echo $article->getTitle(); ?></h3>
        <p>Rédigé par <?php echo $article->getUser(); ?></>
        <p><?php echo $article->getContent(); ?></p>
        <form method="GET" action="">
            <input type="hidden" name="c" value="article"/>
            <input type="hidden" name="a" value="edit"/>
            <input type="hidden" name="id" value="<?php echo $article->getId(); ?>"/>
            <input type="submit" class="list-read-more" value="Modifier l'article"/>
        </form>
    </div>

<?php endforeach; ?>
</div>

<?php require __DIR__ . '/../../template/footer.php'; ?>