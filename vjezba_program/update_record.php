<?php
    require "connection.php";
    $id=$_POST['id'];
    $ime=$_POST['ime'];
    $ime_roditelja=$_POST['ime_roditelja'];
    $prezime=$_POST['prezime'];
    $maticni_broj=$_POST['maticni_broj'];
    $email=$_POST['email'];
    $broj_telefona=$_POST['broj_telefona'];
    $adresa=$_POST['adresa'];
    $napomena=$_POST['napomena'];
    $prazno="---";

    if($email==""){
        $email=$prazno;
    }if($broj_telefona==""){
        $broj_telefona=$prazno;
    }if($adresa==""){
        $adresa=$prazno;
    }if($napomena==""){
        $napomena=$prazno;
    }


    if($ime!="" && $ime_roditelja!="" && $prezime!="" && $maticni_broj!=""){
        $sql="UPDATE pacijenti SET ime='$ime',ime_roditelja='$ime_roditelja',prezime='$prezime',
        maticni_broj='$maticni_broj',email='$email',broj_telefona='$broj_telefona',adresa='$adresa',napomena='$napomena'
        WHERE id=$id";
        $query=mysqli_query($db,$sql);
        header("Location: search.php");  
    }else{
        echo("Morate popuniti prva cetiri polja");
    }
    

?>