<?php require "connection.php" ;?>

<?php require "search.php" ?>
<?php
$id=$_GET['id'];

$sql="SELECT * FROM pacijenti WHERE id=$id";
$query=mysqli_query($db,$sql);
$result=mysqli_fetch_all($query,MYSQLI_ASSOC);

?>
<br>
<form action="update_record.php" method="post">
<?php foreach($result as $row): ?>
    <input type="hidden" name='id' value=<?php echo $row['id']; ?>>
    <div class="" style="border:1px solid black;margin-left:150px;margin-right:150px;background-color:lightgreen">
    
           <div class="row" style="margin-top:15px">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">Ime:</label>
      <input type="text" name="ime" style="width:320px;border:1px solid green" value=<?php echo $row['ime']; ?> class="col-sm-6 col-form-label">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Ime roditelja:</label>
      <input type="text" name="ime_roditelja" style="width:320px;border:1px solid green" value=<?php echo $row['ime_roditelja'] ?> class="col-sm-6 col-form-label">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">Prezime:</label>
      <input type="text" name="prezime" style="width:320px;border:1px solid green" value=<?php echo $row['prezime'] ?> class="col-sm-6 col-form-label">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Maticni broj:</label>
      <input type="text" name="maticni_broj" style="width:320px;border:1px solid green" value=<?php echo $row['maticni_broj'] ?> class="col-sm-6 col-form-label" >
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">E_mail:</label>
      <input type="email" name="email" style="width:320px;border:1px solid green" value=<?php echo $row['email'] ?> class="col-sm-6 col-form-label" >
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Broj telefona:</label>
      <input type="text" name="broj_telefona" style="width:320px;border:1px solid green" value=<?php echo $row['broj_telefona'] ?> class="col-sm-6 col-form-label">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
    <label for="name" style="margin-left:80px" class="col-sm-3 col-form-label">Adresa:</label>
      <input type="text" name="adresa"  style="width:320px;border:1px solid green" value=<?php echo $row['adresa'] ?> class="col-sm-6 col-form-label">
    </div>
    <div class="col">
    <label for="name" class="col-sm-3 col-form-label">Napomena:</label>
      <input type="text" name="napomena" style="width:320px;border:1px solid green" value=<?php echo $row['napomena'] ?> class="col-sm-6 col-form-label">
    </div>
  </div><br>
            <button type="submit"style="margin-left:370px;margin-bottom:10px;width:320px" class="btn btn-primary form-control">Sacuvaj izmjene</button>


</div>
</form>
<?php endforeach ?>
<?php
      mysqli_close($db);

      ?>