<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <form action="" method="post">
        <div class="form-group pt-4">
            <h2 class="text-center">ADMIN LOGIN</h2>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="SUBMIT" class="btn btn-info w-100">
        </div>
    </form>
</div>