<?php require __DIR__ . '/../template/header.php'; ?>
    
<?php session_destroy(); ?>

<p>Vous avez bien été déconnecté! Vous allez être redirigé vers la page d'accueil</p>

<?php header("refresh:3; url=./index.php"); ?>

<?php require __DIR__ . '/../template/footer.php'; ?>