<?php
    include_once 'sp_mz.php';
	include_once 'database.php';
   
?>

 <div id="okno">
  <?php
  
   $zadeva =$_POST['zadeva'];
   $posiljatelj =$_POST['posiljatelj'];
   $prejemnik =$_POST['prejemnik'];
   $sporocilo=$_POST['sporocilo'];
   $datoteka=$_POST['datoteka'];
  
     $query =   "INSERT INTO sporocila (posiljatelj,prejemnik,zadeva,sporocilo,datoteka)
				VALUES ('$posiljatelj','$prejemnik','$zadeva','$sporocilo','$datoteka');";
     mysqli_query($link, $query);

  ?>
  </div> 

  <a href="sporocila_meni.php">Sporočilo je bilo uspešno poslano. Nazaj na stran.</a>


<?php
    include_once 'footer.php';
?>
    </body>
</html>