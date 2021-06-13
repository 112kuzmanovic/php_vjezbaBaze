<?php require "partials/head.php"?>

<?php require "partials/navbar.php"?>
<div clasS="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="unesi email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button class="btn btn-info form-control">Login</button>
        </div>
    </div>
</div>

<?php require "partials/footer.php"?>