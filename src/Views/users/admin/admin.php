<?php require __DIR__ . '/../../template/header.php'; 
    
if($_SESSION['userRole'] == 'Admin') { ?>

<div class="flex-column align-center">
    
    <div class="flex-row">

        <p><a href="/user/adminarticles" class="admin-option" id="admin-article-option">
            Gestion des articles
        </a></p>

        <p><a href="/user/adminusers" class="admin-option" id="admin-user-option">
            Gestion des utilisateurs
        </a></p>

    </div>

    <div class="flex-row">

    <p><a href="/user/adminpictures" class="admin-option" id="admin-picture-option">
            Gestion des photos
        </a></p>

        <p><a href="/user/admincategories" class="admin-option" id="admin-categories-option">
            Gestion des Catégories
        </a></p>

    </div>

</div>

<?php } else {
    header("refresh:0; url=/"); 
} ?>

<?php require __DIR__ . '/../../template/footer.php'; ?>