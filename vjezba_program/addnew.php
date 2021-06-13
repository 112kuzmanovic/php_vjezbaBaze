<?php
session_start();
require 'connection.php';
require 'partials/navbar.php';
require 'partials/head.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
</head>
<body>
        <h2 style="margin-left:550px">Unesi podatke</h2>
        <form action="insert.php" method="POST">
<div class="" style="border:1px solid black;margin-left:20px;margin-right:20px;background-color:lightblue">
           <div class="row" style="margin-top:15px">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">Ime:</label>
      <input type="text" name="ime" style="width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi ime...">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Ime roditelja:</label>
      <input type="text" name="ime_roditelja" style="margin-right:150px;width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi jednog ime roditelja...">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">Prezime:</label>
      <input type="text" name="prezime" style="width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi prezime">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Maticni broj:</label>
      <input type="text" name="maticni_broj" style="margin-right:150px;width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi maticni broj...">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">E_mail:</label>
      <input type="email" name="email" style="width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi email...">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Broj telefona:</label>
      <input type="text" name="broj_telefona" style="margin-right:150px;width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi broj telefona...">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">Adresa:</label>
      <input type="text" name="adresa"  style="width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Unesi adresu...">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Napomena:</label>
      <input type="text" name="napomena" style="margin-right:150px;width:320px;border:1px solid green" class="col-sm-6 col-form-label" placeholder="Napomena...">
    </div>
  </div><br>
            <button type="submit" id="submit" style="margin-left:500px;margin-bottom:10px;width:320px" class="btn btn-primary form-control">Register</button>

</div>
        </form>
       
</body>
</html>