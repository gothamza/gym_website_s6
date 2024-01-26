<?php 
$servername="localhost";
$username="root";
$password="";
session_start();

$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");

if (isset($_GET['idp'])) {
       $id=$_GET['idp']; 
        $QTE_dmn=$_POST['gte'];
       

        $id_p=$_SESSION['id']; 
        
$requete="INSERT INTO line_produit(id_perssone,id_p,QTE_dmn) VALUES ('$id_p','$id','$QTE_dmn');";
        $query=mysqli_query($con,$requete);
    if ($query) {
      header("Location:image.php");
    
  }}

 ?>