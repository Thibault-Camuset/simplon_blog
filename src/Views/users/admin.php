<?php require __DIR__ . '/../template/header.php'; 
    
if($_SESSION['userRole'] == 'Admin') { ?>

<div class="flex-column align-center">
    
    <div class="flex-row">

        <div class="admin-option" id="admin-article-option">
            <p>Gestion des articles</p>
        </div>

        <div class="admin-option" id="admin-user-option">
            <p>Gestion des utilisateurs</p>
        </div>

    </div>

    <div class="flex-row">

        <div class="admin-option" id="admin-picture-option">
            <p>Gestion des photos</p>
        </div>

        <div class="admin-option" id="admin-unknown-option">
            <p>???</p>
        </div>

    </div>

</div>

<?php } else {
    header("refresh:0; url=./index.php"); 
} ?>

<?php require __DIR__ . '/../template/footer.php'; ?>