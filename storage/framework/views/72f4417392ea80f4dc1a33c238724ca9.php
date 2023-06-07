<form method="POST" action="/submit-form">
    <?php echo csrf_field(); ?>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <button type="submit">Submit</button>
</form>
<?php /**PATH D:\mylav_project\first_project\resources\views/form.blade.php ENDPATH**/ ?>