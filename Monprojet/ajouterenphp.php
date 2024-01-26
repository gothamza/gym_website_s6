<?php
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
$id="";
$nom="";
$prenom="";
$date_fin="";

$adress="";
$email="";
$phone="";
$prix="";
$modifier="";
//Ajouter Nouveau personne
  if(isset($_POST['add'])){
    
    $nom=$_POST['name'];
    $prenom=$_POST['prenom'];
    $date_fin=$_POST['date_fin'];
    $adress=$_POST['adress'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $prix=$_POST['prix'];
    $img=$_POST['img'];
$requete="INSERT INTO entreneur(nom_e,prenom_e,experence,adresse_e,email_e,telephone_e,slair,img_e) VALUES ('$nom','$prenom','$date_fin','$adress','$email','$phone','$prix','$img');";
    $query=mysqli_query($con,$requete);
  
header("Location:list_ent.php");
}
//----Requet de modification
 if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $sql="SELECT * FROM entreneur WHERE id_ent='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    $id=$row['id_ent'];
        $nom=$row['nom_e'];
        $prenom=$row['prenom_e'];
        $date_fin=$row['experence'];
         $adress=$row['adresse_e'];
        $email=$row['email_e'];
        $phone=$row['telephone_e'];
        $prix=$row['slair'];
        $img=$row['img_e'];
       $modifier=true;
  }
  
   //Button de modification
    if(isset($_POST['btn_edit'])){
       
      $id=$_POST['id_personne'];
     $nom=$_POST['name'];
    $prenom=$_POST['prenom'];
    $date_fin=$_POST['date_fin'];
    $adress=$_POST['adress'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $prix=$_POST['prix'];
    $img=$_POST['img'];
     if(strlen($img)>2)
             {

         $sql= "UPDATE entreneur SET nom_e='$nom',prenom_e='$prenom',experence='$date_fin', email_e='$email',adresse_e='$adresse',telephone_e='$phone', slair='$prix',img_e='$img' WHERE id_ent='$id';";
       }
        else{
               $sql= "UPDATE entreneur SET nom_e='$nom',prenom_e='$prenom',experence='$date_fin', email_e='$email',adresse_e='$adresse',telephone_e='$phone', slair='$prix' WHERE id_ent='$id';";
             }

    $query=mysqli_query($con,$sql);
    if($query){
     header("Location:list_ent.php");
    }}


?>