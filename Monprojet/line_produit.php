
<?php

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
//----Requete Lister
$requete1 = "SELECT * FROM line_produit;";
$resultat1=mysqli_query($con,$requete1);


//----Requete suppression

if(isset($_GET['delete']))
{
	$id_produit=$_GET['delete'];
	$requete3="DELETE FROM line_produit WHERE id_com='$id_produit'";
	$query=mysqli_query($con,$requete3);
	if($query){
	
	header("Location:line_produit.php");
	}}
   //----Requet de modification
	if(isset($_GET['edit'])){
		 $id_line=$_GET['edit'];
     $requete1 = "SELECT * FROM line_produit WHERE id_com='$id_line';";
     $resultat1=mysqli_query($con,$requete1);
          $row1=mysqli_fetch_array($resultat1);
          $id_produit=$row1['id_p'];
          $id_perssone=$row1['id_perssone'];
     
$requete3= "SELECT QTE_VEND,Qte FROM produit WHERE id_produit='$id_produit';";

$resultat3=mysqli_query($con,$requete3);
$row3=mysqli_fetch_array($resultat3);

      
     $gte_v=$row3['QTE_VEND']+$row1['QTE_dmn'];
     $gte_res=$row3['Qte']-$row1['QTE_dmn'];
          
     $sql1="UPDATE `produit` SET `QTE_VEND` = '$gte_v' WHERE `produit`.`id_produit`=$id_produit;";
     $query1=mysqli_query($con,$sql1);
       
     $sql1="UPDATE `produit` SET `Qte` = '$gte_res' WHERE `produit`.`id_produit`=$id_produit;";
     $query1=mysqli_query($con,$sql1);

        $sql="DELETE FROM line_produit WHERE id_com='$id_line'";
        $query=mysqli_query($con,$sql);
    if($query1){
  
  header("Location:line_produit.php");
  }
       
         
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
                 width:80%  ;
                 height:100% auto;
                 
                 margin-left:10%;
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
     table{
          margin-left:15px;
          background-color:white;     
        }
   th:first-letter{
        color:red;
        font-family: verdana;
        text-transform: capitalize;



    }
    th{
      font-size:20px;   
    }  
       .ferm{
        background-color: red;
        color:white;
        font-size:30px; 
        width:40px;
        height: 40px;
        margin-left:90%;
        margin-top:10px ;
        border-radius: 50%;
       }   
       .add_p:hover{
                cursor: pointer; 

          }
       
        .add_p{
        background-color:green;
        color:white;
        font-size:30px; 
        width:40px;
        height: 40px;
        
        border-radius: 50%;
        
       }   
       .infopers:hover{


       }
       th{
         background-color: black;
         color:white;

       }
       .infopers:onclick{
              background-color:red;


       }
       .infopers:hover{
        background-color:green;
       }
       .prod{
        width: 100px;
        height: 50px;
       }
       td{
        text-align: center;
       }

        </style>
    </head>
    <body>
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="    " href="admin_html.php"><button class="ferm">X</button></a>
            
            <div class="entet">
             <h1 class="sall"  ">LIST DU COMMONDS 
                
             </h1>
             
            </div>
    
          <table border="2">
            
        <tr>
          <th>id_line</th>
          <th>id_produit</th>
          <th>image</th>
          <th>nom_p</th>
          <th>prix_p</th>
          <th>Qte</th>
          <th>Qte domander</th>
          <th>id perssone</th>
          <th>nom prenom</th>
          <th>tell</th>
          <th>temps de domande</th>
          <th>action</th>
          
          
         </tr>
       
                          <?php while($row1=mysqli_fetch_array($resultat1)){ 
          $id_produit=$row1['id_p'];
$id_perssone=$row1['id_perssone'];
$requete2= "SELECT name,prenom,phone FROM insc_person WHERE id='$id_perssone';";

$resultat2=mysqli_query($con,$requete2);
$row2=mysqli_fetch_array($resultat2);

$requete3= "SELECT nom_p,prix_p,img_produit,Qte FROM produit WHERE id_produit='$id_produit';";

$resultat3=mysqli_query($con,$requete3);
$row3=mysqli_fetch_array($resultat3);

 ?>
				<tr>
          <td><label><?php echo $row1['id_com'];?></label></td>
          <td><label><?php echo $row1['id_p'];?></label></td>
          <td><img class="prod" src="img_produits/<?php echo $row3['img_produit'];?>"></td>
				
					<td><label><?php echo $row3['nom_p'];?></label></td>
					<td><label><?php echo $row3['prix_p'];?></label></td>
          <td><label><?php echo $row3['Qte'];?></label></td>
               <td><label><?php echo $row1['QTE_dmn'];?></label></td>
               <td><label><?php echo $row1['id_perssone'];?></label></td>
               <td><label><?php echo $row2['name'];?> <?php echo $row2['prenom'];?></label></td>
               <td><label><?php echo $row2['phone'];?></label></td>
               <td><label><?php echo $row1['now_line'];?></label></td>
				<td>
					<label><a onclick="return confirm('Etes vous sur de vouloir supprimer cette ligne?')" href="line_produit.php?delete=<?php echo $row1['id_com']; ?>"><img src="minus.png"></a>
            <?php if($row3['Qte']>=$row1['QTE_dmn']) {
              # code...
            ?>
					<label><a href="line_produit.php?edit=<?php echo $row1['id_com']; ?>"><img style="width:20px ; height:17px; " src="add2.png"></a>

					</label>
          <?php  } ?>
        <?php  if($row3['Qte']<$row1['QTE_dmn']){ ?>
        <label><a href="line_produit.php" onclick="return confirm('la quentite pas suffisant de ce produit !!!')"><img style="width:20px ; height:20px; " src="add3.jpg"></a>
          <?php } ?>

					</td>
				</tr>
    			<?php } ?>
                     
    </table>
        </div>
    </body>
</html>