<?php require __DIR__ . '/../template/header.php'; ?>



<div id="categories-buttons">
                <form method="GET" action="">
                    <input type="hidden" name="c" value="category"/>
                    <input type="hidden" name="a" value="Tech"/>
                    <input type="submit" id="category-tech" value="Tech"/>
                </form>
                <form method="GET" action="">
                    <input type="hidden" name="c" value="category"/>
                    <input type="hidden" name="a" value="Code"/>
                    <input type="submit" id="category-code" value="Code"/>
                </form>
                <form method="GET" action="">
                    <input type="hidden" name="c" value="category"/>
                    <input type="hidden" name="a" value="Games"/>
                    <input type="submit" id="category-games" value="Games"/>
                </form>
                <form method="GET" action="">
                    <input type="hidden" name="c" value="category"/>
                    <input type="hidden" name="a" value="Series"/>
                    <input type="submit" id="category-series" value="Series"/>
                </form>
                <form method="GET" action="">
                    <input type="hidden" name="c" value="category"/>
                    <input type="hidden" name="a" value="Science"/>
                    <input type="submit" id="category-science" class="category-selected" value="Science"/>
                </form>
    </div>




<div class="category-articles">
<?php foreach ($category_articles as $category_article) : ?>

<div class="article-item">
    <div class="category-icon category-<?php echo $category_article->getCategory(); ?>"><p><?php echo $category_article->getCategory(); ?></p></div>
    <h3><?php echo $category_article->getTitle(); ?></h3>
    <p>Rédigé par <?php echo $category_article->getUser(); ?></>
    <p><?php echo $category_article->getContent(); ?></p>
    <form method="GET" action="">
        <input type="hidden" name="c" value="article"/>
        <input type="hidden" name="a" value="read"/>
        <input type="hidden" name="id" value="<?php echo $category_article->getId(); ?>"/>
        <input type="submit" class="list-read-more" value="Lire la suite"/>
    </form>
</div>

<?php endforeach; ?>
</div>




<?php require __DIR__ . '/../template/footer.php'; ?>