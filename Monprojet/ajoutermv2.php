
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
$modifier2="";
$img="";

  
  $requete2="UPDATE personne SET now=current_timestamp() ;";
$resultat2=mysqli_query($con,$requete2);
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
$requete="INSERT INTO personne(nom,prenom,date_fin,adresse,email,telephone,prix,img_m) VALUES ('$nom','$prenom','$date_fin','$adress','$email','$phone','$prix','$img');";
    $query=mysqli_query($con,$requete);
    $requete2= "INSERT INTO `exp_personne` (`id_personne`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `date_fin`, `prix`, `img_m`,`date_insc`,`now`)
SELECT * FROM personne WHERE date_fin<now;
";
$resultat2=mysqli_query($con,$requete2);
$requete2="DELETE FROM personne WHERE date_fin<now;";
$resultat2=mysqli_query($con,$requete2);



  if($query){
header("Location:totalm.php");
}}
//----Requet de modification
  if(isset($_GET['editt'])){
    $id=$_GET['editt'];
    $sql="SELECT * FROM personne WHERE id_personne='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    $id=$row['id_personne'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $date_fin=$row['date_fin'];
         $adress=$row['adresse'];
        $email=$row['email'];
        $phone=$row['telephone'];
      $prix=$row['prix'];
       $img=$row['img_m'];

      $modifier=true;
       
  }
  //add insc
  if(isset($_GET['addin'])){
    $id=$_GET['addin'];
    $sql="SELECT * FROM insc_person WHERE id='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    $id=$row['id'];
        $nom=$row['name'];
        $prenom=$row['prenom'];
       
         $adress=$row['adress'];
        $email=$row['email'];
        $phone=$row['phone'];

        
        
  }
  //----Requet de modification exp_m
  if(isset($_GET['edit2'])){
    $id=$_GET['edit2'];
    $sql="SELECT * FROM exp_personne WHERE id_personne='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
    $id=$row['id_personne'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $date_fin=$row['date_fin'];
         $adress=$row['adresse'];
        $email=$row['email'];
        $phone=$row['telephone'];
      $prix=$row['prix'];
       $img=$row['img_m'];

      $modifier2=true;
      
       
  }

   //Button de modification
    if(isset($_POST['btn_edit'])){
        
         $nom=$_POST['name'];
    $prenom=$_POST['prenom'];
    $date_fin=$_POST['date_fin'];
    $adress=$_POST['adress'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $prix=$_POST['prix'];
    
     $img2=$_POST['img_m'];
    
     if(strlen($img2)>2)
      {
          
          $img=$img2;
          $sql= "UPDATE personne SET nom='$nom',prenom='$prenom',date_fin='$date_fin', email='$email',adresse='$adress',telephone='$phone', prix='$prix',img_m='$img',now='$now' WHERE id_personne='$id';";
      }
      else{
        $sql= "UPDATE personne SET nom='$nom',prenom='$prenom',date_fin='$date_fin', email='$email',adresse='$adress',telephone='$phone', prix='$prix' WHERE id_personne='$id';";
      }

       
    $query=mysqli_query($con,$sql);
      $requete2= "INSERT INTO `exp_personne` (`id_personne`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `date_fin`, `prix`, `img_m`,`date_insc`,`now`)
SELECT * FROM personne WHERE date_fin<now;
";
$resultat2=mysqli_query($con,$requete2);
$requete2="DELETE FROM personne WHERE date_fin<now;";
$resultat2=mysqli_query($con,$requete2);
    if($query){
     header("Location:totalm.php");
    }}
    //Button de modification  E X P MEMBER
    if(isset($_POST['btn_edit2'])){
        $id=$_POST['id_personne'];
         $nom=$_POST['name'];
    $prenom=$_POST['prenom'];
    $date_fin=$_POST['date_fin'];
    $adress=$_POST['adress'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $prix=$_POST['prix'];
    $img=$_POST['img_ex'];
     $img2=$_POST['img_m'];

    
     if(strlen($img2)>2)
      {
          
          $img=$img2;
          $sql= "INSERT INTO personne( id_personne,nom,prenom,date_fin,adresse,email,telephone,prix,img_m) VALUES ('$id','$nom','$prenom','$date_fin','$adress','$email','$phone','$prix','$img');";
      }
      else{
        $sql= "INSERT INTO personne(id_personne,nom,prenom,date_fin,adresse,email,telephone,prix,img_m) VALUES ('$id','$nom','$prenom','$date_fin','$adress','$email','$phone','$prix','$img');";

      }

       
    $query=mysqli_query($con,$sql);
    $requete2="DELETE FROM exp_personne WHERE id_personne='$id';";
$resultat2=mysqli_query($con,$requete2);


   $requete2= "INSERT INTO `exp_personne` (`id_personne`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `date_fin`, `prix`, `img_m`,`date_insc`,`now`)
SELECT * FROM personne WHERE date_fin<now;
";
$resultat2=mysqli_query($con,$requete2);
$requete2="DELETE FROM personne WHERE date_fin<now;";
$resultat2=mysqli_query($con,$requete2);
    if($query){
     header("Location:exp_m.php");
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
          .ferm:hover{
                cursor: pointer; 

          }
   
       .ferm{
        background-color: red;
        color:white;
        font-size:20px; 
        width:40px;
        height: 40px;
        margin-left:90%;
        margin-top:5px ;
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

       label{
          margin-left:13%;
          font-size:15px;
          font-family:verdana;
          color: red;
          text-shadow: 1px 1px 0px orange; 

       }
       .nimg{
          background-color:inherit;
          width:1px;
          border:none;
          color:inherit;


       }
       .dd{

        width: 100px; margin-left:40%; height: 25px;
       }


        </style>
    </head>
    <body>
    
        <div class="carr">
            <!-- zone d'admin -->
            <a   href="admin_html.php"><button class="ferm">X</button></a> 
            

            <form action="" method="post" > 
            <div class="entet">
             <h1 class="sall"  "><?php if($modifier==true){ echo "modifier momber";}
             elseif ($modifier2==true) {
               echo "modifier expered momber";
             }else{
              echo "ajouter momber";}


              ?>

             </h1>
            </div>
            <?php if($modifier==true){ ?>
             <input class="not" type="txt" name="id_personne" placeholder="id de personne" value="<?php echo  $id;?>"  disabled style="color:white; ">
             <?php } elseif ($modifier2==true) { ?>
             <input class="not" type="txt" name="id_personne" placeholder="id de personne" value="<?php echo  $id;?>" readonly style="color:red; ">
               
               <?php } ?>

            <label>Nom</label>
            <input class="not" type="txt" name="name" placeholder="nom de produit" value="<?php echo  $nom;?>" autofocus required maxlength="12">
          
           <label>Prenom</label>
            <input class="not" type="txt" name="prenom" placeholder="prix du produit" value="<?php echo  $prenom;?>" required maxlength="10">

             <label>Email</label>
            <input class="not" type="mail" name="email" placeholder=".....@gmail.com" value="<?php echo  $email;?>" required >

             <label>Tell</label>
            <input class="not" type="txt" name="phone" placeholder="Tell" value="<?php echo  $phone;?>" >
             <label>Adresse</label>
            <input class="not" type="txt" name="adress" placeholder="adress" value="<?php echo  $adress?>" required >
             <label>date fin</label>
            <input class="not" type="date" name="date_fin" placeholder="date_fin" value="<?php echo  $date_fin?>">
            <label>prix</label>
            <input class="not" type="txt" name="prix" placeholder="prix" value="<?php echo  $prix ;?>" required >
             
             
             <label>image </label>
             <input class="nimg" type="txt" name="img_ex" value="<?php echo  $img ;?>">
              <?php if($modifier==true or $modifier2==true){ ?>
             
           <input class="not" type="file" name="img_m" placeholder="" value=""  ><?php } else{ ?>
           
           <input class="not" type="file" name="img" placeholder="" value=""  >
           <?php }?>
        <?php if($modifier2==true){ ?>
        <input style="width: 100px; margin-left:40%; height: 25px;" type='submit' name="btn_edit2" value="UPDATE"/>
                             <?php } else{ ?>
        <?php if($modifier==true){ ?>
            <input style="width: 100px; margin-left:40%; height: 25px;" type='submit' name="btn_edit" value="Modifier"/>
                             <?php } else{ ?>
         <input  style="width: 100px; margin-left:40%; height: 25px;" classe="dd"  type='submit' name="add" value="Ajouter"/>
                                                    <?php } }?>
         
        
  </form>
        </div>
    
    </body>
</html>