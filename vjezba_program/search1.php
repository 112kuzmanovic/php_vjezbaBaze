<?php
require 'connection.php';
require 'search.php';

$search=$_GET['search'];

$sql="SELECT pacijenti.ime,pacijenti.prezime,pacijenti.maticni_broj,pacijenti.id
      FROM pacijenti
      WHERE pacijenti.ime='$search'
      OR pacijenti.prezime='$search'
      OR pacijenti.maticni_broj='$search'
      OR pacijenti.adresa='$search'";

      $query=mysqli_query($db,$sql);
      $result=mysqli_fetch_all($query,MYSQLI_ASSOC);

      ?>

      
      <?php foreach ($result as $row): ?>
      <?php echo $row['ime'] . ' ' .  $row['prezime'] . ' ' .  $row['maticni_broj'] . ' ' ; ?><a href="delete.php?id=<?php echo $row['id'] ;?>">Delete</a> <a href="karton.php?id=<?php echo $row['id'] ?>">Otvori</a><hr>
      <?php endforeach ?>
<?php
      mysqli_close($db);

      ?>
      