
<?php 

session_start();
require "connection.php";

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM doktori WHERE email = '$email' AND password = '$password'";
$query=mysqli_query($db,$sql);
$id=mysqli_fetch_assoc($query)['id'];
if($id){
    $_SESSION ['id'] = $id;
    header('Location: search.php');
}else{
    header('Location: login.view.php');
}
?>


