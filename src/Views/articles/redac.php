<?php require __DIR__ . '/../template/header.php';?>




<form id="article-form" action="" method="POST">
    <input id ="input-title" type="text" name="articleTitle" placeholder="Titre"/>
    <textarea name="articleContent"></textarea>

    <div class="flex-row" id="category-buttons">
    <label>Tech <input type="radio" name="articleCategory" value="Tech"/></label>
    <label>Code <input type="radio" name="articleCategory" value="Code"/></label>
    <label>Games <input type="radio" name="articleCategory" value="Games"/></label>
    <label>Series <input type="radio" name="articleCategory" value="Series"/></label>
    <label>Science <input type="radio" name="articleCategory" value="Science"/></label>
    </div>

    <input type="hidden" name="userName" value="<?php echo $_SESSION['userName']; ?>"/>

    <input id="input-submit-article" type="submit" value="Valider"/>
   
</form>




<?php require __DIR__ . '/../template/footer.php'; ?>