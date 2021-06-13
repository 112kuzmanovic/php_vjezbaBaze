<?php
require "connection.php";
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];



if($name=="" || $email=="" || $password==""){
    echo("MORATE POPUNITI SVA POLJA");
}else{
    $sql="INSERT INTO doktori VALUES (NULL,'$name','$surname','$email','$password')";

    $query=mysqli_query($db,$sql);
    header('Location: login.view.php');
}
// header('Location: login.view.php');


?>

 

