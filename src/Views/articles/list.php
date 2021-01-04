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
                    <input type="submit" id="category-science" value="Science"/>
                </form>
    </div>

<div id="article-list">
<?php foreach ($articles as $article) : ?>

    <div class="article-item">
        <div class="category-icon category-<?php echo $article->getCategory(); ?>"><p><?php echo $article->getCategory(); ?></p></div>
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

<ul id="pagination-nav">
    <?php 
    for ($i=1; $i<=$nbPages; $i++ ) {
    ?>

    <li><a href="/article/list/<?php echo $i;?>"><?php echo $i; ?></a></li>

    <?php } ?>
</ul>

<?php require __DIR__ . '/../template/footer.php'; ?>