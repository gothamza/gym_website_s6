<?php  
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");


 $idsearch='ata';

  $requete1 = "SELECT * FROM personne ORDER BY nom,prenom WHERE nom='$idsearch';";
                   
          $resultat5=mysqli_query($con,$requete1);
          
  

header("Location:totalm.php?srch=0");
?>
