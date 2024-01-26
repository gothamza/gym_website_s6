
<?php
    $conn=mysqli_connect('localhost','root','','gss');
    $nom_p=$_POST['nom_produit'];
        $prix_p=$_POST['prix'];
        $Qte=$_POST['Qte'];
        $QTE_VEND=$_POST['QTE_VEND'];
    // Database connection
    $req="INSERT INTO produit(nom_p,prix_p,Qte,QTE_VEND) VALUES ('$nom_p','$prix_p','$Qte','$QTE_VEND');";
    $res=mysqli_query($conn,$req);

header("location:list_produit.php");

//----Requet de modification
    if(isset($_GET['edit'])){
        $id_produit=$_GET['edit'];
        $sql="SELECT * FROM produit WHERE id_produit='$id_produit'";
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);
        $id_produit=$row['id_produit'];
        $nom_p=$row['nom_p'];
        $prix_p=$row['prix_p'];
        $Qte=$row['Qte'];
         $QTE_VEND=$row['QTE_VEND'];
       
          $modifier=true;
       
    }
     //Button de modification
    if(isset($_POST['btn_edit'])){
        $id_produit=$_POST['id_produit'];
         $nom_p=$_POST['nom_p'];
         $prix_p=$_POST['prix'];
         $Qte=$_POST['Qte'];
         $QTE_VEND=$_POST['QTE_VEND'];
        
         $sql= "UPDATE produit SET nom_p='$nom_p',prix_p='$prix_p',Qte='Qte',QTE_VEND='$QTE_VEND' WHERE id_produit='$id_produit'";
    $query=mysqli_query($con,$sql);
    if($query){
     header("Location:list_produit.php");
    }}

?>