
<?php 
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");

$nom_p="";
$prix_p="";
$Qte="";
$QTE_VEND="";
$img="";
$modifier="";
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
     
         $nom_p=$_POST['nom_produit'];
         $prix_p=$_POST['prix'];
         $Qte=$_POST['Qte'];
         $QTE_VEND=$_POST['QTE_VEND'];
         $img=$_POST['img_produit'];
       if(strlen($img)>2)
             {
        
         $sql= "UPDATE produit SET nom_p='$nom_p',prix_p='$prix_p',Qte='$Qte',QTE_VEND='$QTE_VEND',img_produit='$img' WHERE id_produit='$id_produit';";
             }
          else{
               $sql= "UPDATE produit SET nom_p='$nom_p',prix_p='$prix_p',Qte='$Qte',QTE_VEND='$QTE_VEND' WHERE id_produit='$id_produit';";

          }   
    $query=mysqli_query($con,$sql);
    
     header("Location:list_produit.php");
    }


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
                 height:90%;
               
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
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap');

           input[type=submit]{
            font-family:'source sans pro',sans-serif;
                letter-spacing:4px;
                background-color: #25252A;
                text-align: center;
                width:130px;
                height:80px;
                
                color: white;
                background-color: rgb(205,10,6);
                border-radius: 4px;
                box-shadow: inset 0 0 0 #f9e506;
                transition: ease-out 0.3s;
                font-size: 1em;
                outline: none;
                position: relative;
                outline: none;
                border:none; 
                z-index: 1;
              }
              input[type=submit]:hover{
                     box-shadow: inset 100px 0 0 #f9e506;
                     cursor:pointer;
                     color: black;

                } 
                input[type=submit]:hover{
                   
                   cursor:pointer;
                   color: #fff;


 /*
                }
                input[type=submit]:before{
                  transition: 0.5s all ease;
                  position: absolute;
                  top: 0;
                  left: 50%;
                  right: 50%;
                  bottom:0;
                  opacity: 0;
                  content: "";
                  background-color: #42FBF2;

                }
                input[type=submit]:hover:before{
                   transition: 0.5s all ease;
                   left: 0;
                  right: 0;
                  opacity: 0;
                  z-index: -1;
                }*/


        </style>
    </head>
    <body>
    
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="    " href="admin_html.php"><button class="ferm">X</button></a> 
            

            <form action="" method="post" > 
            <div class="entet">
              <h1 class="sall"  "><?php if($modifier==true){ echo "modifier produit";}
             else{
              echo "ajouter produit";}

              ?>
            </div>
    <?php if($modifier==true){ ?>
             <input class="not" type="txt" name="id_produit" placeholder="id de personne" value="<?php echo  $id_produit;?>"  disabled style="color:white; ">  
             <?php }  ?>

            <label>Nom du Produit</label>
            <input class="not" type="txt" name="nom_produit" placeholder="nom de produit" value="<?php echo  $nom_p;?>" autofocus required maxlength="12">
          
           <label>Prix du Produit</label>
            <input class="not" type="txt" name="prix" placeholder="prix du produit" value="<?php echo  $prix_p;?>" required maxlength="10">

             <label>Quentiter du Produit</label>
            <input class="not" type="txt" name="Qte" placeholder="QTE" value="<?php echo  $Qte;?>" required maxlength="10">

             <label>Qte vend</label>
            <input class="not" type="txt" name="QTE_VEND" placeholder="Qte vend" value="<?php echo  $QTE_VEND;?>" maxlength="10">
             <label>image</label>
            <input class="not" type="file" name="img_produit" placeholder="" value="<?php echo  $img;?>"  >

        <?php if($modifier==true){ ?>
            <input style="width: 100px; margin-left:40%; height: 25px;" type='submit' name="btn_edit" value="Modifier"/>
                             <?php } else{ ?>
 <input  style="width: 100px; margin-left:40%; height: 25px;" classe="dd"  type='submit' name="add" value="Ajouter"/>
                                                    <?php }?>
         
        
  </form>
        </div>
    
    </body>
</html>