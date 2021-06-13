<?php 
require 'connection.php';
$prazno="---";
$ime=$_POST['ime'];
$ime_roditelja=$_POST['ime_roditelja'];
$prezime=$_POST['prezime'];
$maticni_broj=$_POST['maticni_broj'];
$email=$_POST['email'];
$broj_telefona=$_POST['broj_telefona'];
$adresa=$_POST['adresa'];
$napomena=$_POST['napomena'];

if($email==""){
    $email=$prazno;
}if($broj_telefona==""){
    $broj_telefona=$prazno;
}if($adresa==""){
    $adresa=$prazno;
}if($napomena==""){
    $napomena=$prazno;
}

if($ime!="" && $prezime!="" && $maticni_broj!="" && $ime_roditelja!=""){
$sql="INSERT INTO pacijenti VALUES(NULL,'$ime','$ime_roditelja','$prezime','$maticni_broj','$email','$broj_telefona','$adresa','$napomena')";

$query=mysqli_query($db,$sql);

    header('Location: search.php');

}
else{
    echo("Morate popuniti gornja 4 polja");
}
?>