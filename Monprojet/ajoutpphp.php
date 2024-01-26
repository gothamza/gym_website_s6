<?php 
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
//Ajouter Nouveau personne
   
    if (isset($_POST['add'])) {
          
        $nom_p=$_POST['nom_produit'];
        $prix_p=$_POST['prix'];
        $Qte=$_POST['Qte'];
        $QTE_vend=$_POST['QTE_VEND'];
        $img=$_POST['img_produit'];
       
$requete="INSERT INTO produit(nom_p,prix_p,Qte,QTE_VEND,img_produit) VALUES ('$nom_p','$prix_p','$Qte','$QTE_vend','$img');";
        $query=mysqli_query($con,$requete);
    if ($query) {
      header("Location:list_produit.php");
    }

 
  
       
    }
     //Button de modification
    if(isset($_GET['btn_edit'])){
        $id_produit=$_GET['id_produit'];
         $nom_p=$_POST['nom_p'];
         $prix_p=$_POST['prix'];
         $Qte=$_POST['Qte'];
         $QTE_VEND=$_POST['QTE_VEND'];
        
         $sql= "UPDATE produit SET nom_p='$nom_p',prix_p='$prix_p',Qte='$Qte',QTE_VEND='$QTE_VEND' WHERE id_produit='$id_produit';";
    $query=mysqli_query($con,$sql);
     if ($query) {
    header("Location:list_produit.php");
    
    }}



     ?>