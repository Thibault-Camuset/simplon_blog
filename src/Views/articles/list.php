<?php require __DIR__ . '/../template/header.php'; ?>

  <div id="categories-buttons">
                <input type="button" id="category-tech" value="Tech"/>
                <input type="button" id="category-code" value="Code"/>
                <input type="button" id="category-video-games" value="Video Games"/>
                <input type="button" id="category-series" value="Series"/>
                <input type="button" id="category-science" value="Science"/>
    </div>

<div id="article-list">
<?php foreach ($articles as $article) : ?>

    <div class="article-item">
        <h3><?php echo $article->getTitle(); ?></h3>
        <p>Rédigé par <?php echo $article->getUser(); ?></>
        <p><?php echo $article->getContent(); ?></p>
        <form method="GET" action="">
            <input type="hidden" name="c" value="article"/>
            <input type="hidden" name="a" value="read"/>
            <input type="hidden" name="id" value="<?php echo $article->getId(); ?>"/>
            <input type="submit" class="list-read-more" value="Lire la suite"/>
        </form>
    </div>

<?php endforeach; ?>
</div>



<?php require __DIR__ . '/../template/footer.php'; ?>