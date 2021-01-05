<?php require __DIR__ . '/../../template/header.php'; ?>

<div id="category-list">
<?php foreach ($categories as $category) : ?>

    <div class="category-item">
        <!-- <form class="delete-form">
            <input type="hidden" name="c" value="article"/>
            <input type="hidden" name="a" value="delete"/>
     
            <input type="submit" class="delete-button" value="X"/>
        </form> -->
        <h3><?php echo $category->getName(); ?></h3>
       
        <!-- <form method="GET" action="">
            <input type="hidden" name="c" value="article"/>
            <input type="hidden" name="a" value="edit"/>
         
            <input type="submit" class="list-read-more" value="Modifier l'article"/>
        </form> -->
    </div>

<?php endforeach; ?>
</div>



<?php require __DIR__ . '/../../template/footer.php'; ?>