
<?php

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
//----Requete Lister
$requete1 = "SELECT * FROM produit;";
$resultat1=mysqli_query($con,$requete1);

//----Requete suppression

if(isset($_GET['delete']))
{
	$id_produit=$_GET['delete'];
	$requete3="DELETE FROM produit WHERE id_produit='$id_produit'";
	$query=mysqli_query($con,$requete3);
	if($query){
	
	header("Location:list_produit.php");
	}}
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
                 height:100% auto;
                 
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
     table{
          margin-left:23px;
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
             <h1 class="sall"  ">LIST DU PRODUITS :
               <a  style="    " href="ajouterP.php"><button class="add_p">+</button></a> 
             </h1>
             
            </div>
    
          <table border="2">
            
        <tr>
          <th>image</th>
          <th>id_produit</th>
          <th>nom_p</th>
          <th>prix_p</th>
          <th>Qte</th>
          <th>QTE_VEND</th>
          <th>Action</th>
          
          
         </tr>
       
                          <?php while($data=mysqli_fetch_array($resultat1)){?>
				<tr>
          <td><img class="prod" src="img_produits/<?php echo $data['img_produit'];?>"></td>
				<td><label><?php echo $data['id_produit'];?></label></td>
					<td><label><?php echo $data['nom_p'];?></label></td>
					<td><label><?php echo $data['prix_p'];?></label></td>
               <td><label><?php echo $data['Qte'];?></label></td>
               <td><label><?php echo $data['QTE_VEND'];?></label></td>
				<td>
					<label><a onclick="return confirm('Etes vous sur de vouloir supprimer cette ligne?')" href="list_produit.php?delete=<?php echo $data['id_produit']; ?>"><img src="minus.png"></a>
					<label><a href="ajouterP.php?edit=<?php echo $data['id_produit']; ?>"><img src="favicon.png"></a>
					</label>
					</td>
				</tr>
    			<?php } ?>
                     
    </table>
        </div>
    </body>
</html>