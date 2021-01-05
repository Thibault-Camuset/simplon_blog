<?php require __DIR__ . '/../../template/header.php'; ?>

<div id="user-list">
<?php foreach ($users as $user) : ?>

    <div class="user-item flex-row">
        

    <form class="delete-form">
            <input type="hidden" name="c" value="user"/>
            <input type="hidden" name="a" value="delete"/>
            <input type="hidden" name="id" value="<?php echo $user->getName(); ?>" />
            <input type="submit" class="delete-button" value="X"/>
        </form>
        <p><?php echo $user->getName(); ?></p>
        <p><?php echo $user->getRole()['name']; ?></p>
        <p><?php echo $user->getFirstName(); ?></p>
        <p><?php echo $user->getLastName(); ?></p>
        
        
    </div>

<?php endforeach; ?>
</div>

<?php require __DIR__ . '/../../template/footer.php'; ?>