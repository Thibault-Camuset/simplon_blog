<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
<?php session_destroy(); ?>

<p>Vous avez bien été déconnecté! Vous allez être redirigé vers la page d'accueil</p>

<?php header("refresh:3; url=./index.php"); ?>

</body>
</html>