<?php require __DIR__ . '/../template/header.php';

use App\Controller\ArticleController;
$articleController = new ArticleController();

$article = $articleController->articleRepository->selectBy($_GET['id']);


?>

<div id="article-box">
    <h3><?php echo $article->getTitle(); ?></h3>
    <p>Rédigé par: <?php echo $article->getUser(); ?></p>
    <p><?php echo $article->getContent(); ?></p>
</div>

<?php require __DIR__ . '/../template/footer.php'; ?>