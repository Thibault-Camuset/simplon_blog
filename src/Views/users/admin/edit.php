<?php require __DIR__ . '/../../template/header.php'; ?>


<form id="article-form" action="" method="POST">
    <input id="input-title" type="text" name="articleTitle" value="<?php echo $article->getTitle(); ?>"/>
    <textarea name="articleContent"><?php echo $article->getContent(); ?></textarea>

    <div class="flex-row" id="category-buttons">
        
    <label>Tech <input type="radio" name="articleCategory" value="Tech" <?php if ($article->getCategory() == 'Tech') {echo 'checked';} ?>/></label>
    <label>Code <input type="radio" name="articleCategory" value="Code" <?php if ($article->getCategory() == 'Code') {echo 'checked';} ?>/></label>
    <label>Games <input type="radio" name="articleCategory" value="Games" <?php if ($article->getCategory() == 'Games') {echo 'checked';} ?>/></label>
    <label>Series <input type="radio" name="articleCategory" value="Series" <?php if ($article->getCategory() == 'Series') {echo 'checked';} ?>/></label>
    <label>Science <input type="radio" name="articleCategory" value="Science" <?php if ($article->getCategory() == 'Science') {echo 'checked';} ?>/></label>
    </div>

    <input type="hidden" name="userName" value="<?php echo $_SESSION['userName']; ?>"/>

    <input id="input-submit-article" type="submit" value="Valider"/>
   
</form>


<?php require __DIR__ . '/../../template/footer.php'; ?>