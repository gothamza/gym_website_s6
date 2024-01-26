
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
$face="";
$insta="";
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
    $insta=$_POST['insta'];
    $face=$_POST['face'];

$requete="INSERT INTO entreneur(nom_e,prenom_e,experence,adresse_e,email_e,telephone_e,slair,img_e,insta,face) VALUES ('$nom','$prenom','$date_fin','$adress','$email','$phone','$prix','$img','$insta','$face');";
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

         $sql= "UPDATE entreneur SET nom_e='$nom',prenom_e='$prenom',experence='$date_fin', email_e='$email',adresse_e='$adresse',telephone_e='$phone', slair='$prix',img_e='$img' WHERE `entreneur`.`id_ent`='$id';";
         
       }
        else{
               $sql= "UPDATE entreneur SET nom_e='$nom',prenom_e='$prenom',experence='$date_fin', email_e='$email',adresse_e='$adresse',telephone_e='$phone', slair='$prix' WHERE `entreneur`.`id_ent`='$id';";
             }

    $query=mysqli_query($con,$sql);
    if($query){
     header("Location:ajouterenphp.php");
    }}


?>
<html>
    <head>
       <meta charset="utf-8">
        <style type="text/css">
        
            body{

                background-size: 100%;
                background-image: url(img/sallsp1.jpg);
            }
            .carr{
                border: 10px groove #fff;
                 width:50% ;
                 height:90% auto;
               
                 margin-left:25%;
                 background-image:url(img/sport.jpg);
                  
                 

            }
            .ferm:hover{
                cursor: pointer; 

          }
            
            .entet{
             width:100%;
             height:20% ;
             
             background-size: 100%;
            
            }
            .sall{

                text-decoration:underline;
                 text-align:center;
                 color: red;
                 text-shadow:-1px 1px 1px orange;
                 margin-left:0%;
                 padding: 50px;
                 font-style: oblique;
         
          }
           @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap');

           input[type=submit]{
            font-family: 'source sans pro',sans-serif;
                letter-spacing:4px;
                background-color: #25252A;
                text-align: center;
                width:130px;
                height:80px;
                border: none;
                color: white;
                background-color: rgb(205,10,6);
                border-radius: 4px;
                box-shadow: inset 0 0 0 #f9e506;
                transition: ease-out 0.3s;
                font-size: 1em;
                outline: none;}
                input[type=submit]:hover{
                     box-shadow: inset 100px 0 0 #f9e506;
                     cursor:pointer;
                     color: black;

                } 
   
       .ferm{
        background-color: red;
        color:white;
        font-size:20px; 
        width:40px;
        height: 40px;
        margin-left:90%;
        margin-top:10px ;
        border-radius: 50%;
       }   

       
     
       .infopers:onclick{
              background-color:red;


       }
       .infopers:hover{
        background-color:green;
       }
     .not{
         
         display:block;
         border: none;
  border-bottom: 2px solid red;
   width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left:10%;
    box-sizing: border-box;


       }
       input[type=text]:focus {
       border: 3px solid #555;
            }
       label{
          margin-left:13%;
          font-size:15px;
          font-family:verdana;
          color: red;
          text-shadow: 1px 1px 0px orange; 

       }
       .dd{

        width: 100px; margin-left:40%; height: 25px;
       }

        </style>
    </head>
    <body>
    
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="    " href="admin_html.php"><button class="ferm">X</button></a> 
            

            <form action="ajouterenphp.php" method="post" > 
            <div class="entet">
             <h1 class="sall"  "><?php if($modifier==true){ echo "modifier entreneur";}
             else{
              echo "ajouter entreneur";}

              ?>

             </h1>
            </div>
            <?php if($modifier==true){ ?>
             <input class="not" type="txt" name="id_personne" placeholder="id de personne" value="<?php echo  $id;?>"  disabled style="color:white; " > <<?php } ?>
            <label>Nom</label>
            <input class="not" type="txt" name="name" placeholder="nom de produit" value="<?php echo  $nom;?>" autofocus required maxlength="12">
          
           <label>Prenom</label>
            <input class="not" type="txt" name="prenom" placeholder="prix du produit" value="<?php echo  $prenom;?>" required maxlength="10">

             <label>Email</label>
            <input class="not" type="mail" name="email" placeholder=".....@gmail.com" value="<?php echo  $email;?>" required >

             <label>Tell</label>
            <input class="not" type="txt" name="phone" placeholder="Tell" value="<?php echo  $phone;?>" maxlength="">
             <label>Adresse</label>
            <input class="not" type="txt" name="adress" placeholder="adress" value="<?php echo  $adress?>" required >
             <label>Experence</label>
            <input class="not" type="txt" name="date_fin" placeholder="experence" value="<?php echo  $date_fin?>">
            <label>salair</label>
            <input class="not" type="txt" name="prix" placeholder="salair" value="<?php echo  $prix ;?>" required >
            <label>Facebook</label>
            <input class="not" type="txt" name="face" placeholder="....." value="<?php echo  $face;?>"  >
            <label>Instagrame</label>
            <input class="not" type="txt" name="insta" placeholder="....." value="<?php echo  $insta;?>"  >
             
               
             <label>image</label>
            <input class="not" type="file" name="img" placeholder="" value="<?php echo  $img;?>"  >

        <?php if($modifier==true){ ?>
            <input style="width: 100px; margin-left:40%; height: 25px;" type='submit' name="btn_edit" value="Modifier"/>
                             <?php } else{ ?>
 <input  style="width: 100px; margin-left:40%; height: 25px;" classe="dd"  type='submit' name="add" value="Ajouter"/>
                                                    <?php }?>
         
        
  </form>
        </div>
    
    </body>
</html>