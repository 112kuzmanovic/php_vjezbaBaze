<?php require "partials/head.php"?>
<?php require "partials/footer.php"?>



<?php require "partials/navbar.php"?>
<div clas="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="POST">
            <input type="text" name="name" placeholder="name" class="form-control"><br>
            <input type="text" name="surname" placeholder="surname" class="form-control"><br>
            <input type="email" name="email" placeholder="email" class="form-control"><br>
            <input type="password" name="password" placeholder="password" class="form-control"><br>
            <button type="submit" id="submit" class="btn btn-primary form-control">Register</button>


            </form>
        </div>
    </div>
</div>


