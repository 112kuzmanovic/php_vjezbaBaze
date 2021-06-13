<?php session_start();?>
<?php require "partials/head.php"?>
<?php require "partials/navbar.php"?>


<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
        <?php if(isset($_SESSION['id'])): ?>

                <div class="" style="height:500px;width:900px;background-color:darkgray;margin-left:-150px">
               <a href='search.php' style="margin-left:280px;width:350px;margin-top:200px;font-size:35px" class="btn btn-primary form-control-sm">Search</a> 
        </div>
        
        <?php else : ?>
            <h1>LOGIN OR REGISTER </h1>
            <img src="slika.png" style="height:500px;width:700px">
            
        <?php endif ?>    
             
        </div>
    </div>
</div>



<?php require "partials/footer.php"?>
    
