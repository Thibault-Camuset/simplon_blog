<?php require __DIR__ . '/../../template/header.php'; ?>

<div id="user-list">
<?php foreach ($users as $user) : ?>

    <div class="user-item">
        
        <h3><?php echo $user->getName(); ?></h3>
        <p><?php echo $user->getRole(); ?></>
        <p><?php echo $user->getFirstName(); ?></p>
        <p><?php echo $user->getLastName(); ?></p>
        
        
    </div>

<?php endforeach; ?>
</div>

<?php require __DIR__ . '/../../template/footer.php'; ?>