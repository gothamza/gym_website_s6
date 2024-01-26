
<?php

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
//----Requete Lister


$requete1 = "SELECT * FROM entreneur;";
$resultat1=mysqli_query($con,$requete1);

//----Requete suppression

if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	$requete3="DELETE FROM entreneur WHERE id_ent='$id'";
	$query=mysqli_query($con,$requete3);
	if($query){
	
	header("Location:list_ent.php");
	}}
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
                 width:70% ;
                 height:100% auto;
                 
                 margin-left:15%;
                 background-image:url(img/sport.jpg);
                 background-size:100%;

                  
                 

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
          margin-left:13px;
          background-color:white;     
        }
   th:first-letter{
        color:purple;
        font-family: verdana;



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
        margin-left:95%;
        margin-top:10px ;
        border-radius: 50%;
        text-align: center;
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
        height:80px;
        border-radius:50%;
        background-position:center;

       }
       .add_p{
        background-color:green;
        color:white;
        font-size:30px; 
        width:40px;
        height: 40px;
        
        border-radius: 50%;
        
       } 
       td{
        text-align: center;
       }  
       .add_p:hover{
                cursor: pointer; 

          }

        </style>
    </head>
    <body>
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="    " href="admin_html.php"><button class="ferm">X</button></a>
            <div class="entet">
             <h1 class="sall"  "> list d'entreneur :<a  style="    " href="ajouterenv2.php"><button class="add_p">+</button></a> 
             </h1>
            </div>
    
          <table border="2">
            
        <tr>
          <th>id</th>
          <th>image</th>
          <th>nom</th>
          <th>prenom</th>
          <th>email</th>
          <th>telephone</th>
          <th>prix d'engagment</th>
          <th>Experence</th>
          <th>Action</th>
          
         </tr>
       
                          <?php while($data=mysqli_fetch_array($resultat1)){?>
				<tr>
				<td><label><?php echo $data['id_ent'];?></label></td>
        <td><img class="prod" src="img_m/<?php echo $data['img_e'];?>"></td>
					<td><label><?php echo $data['nom_e'];?></label></td>
					<td><label><?php echo $data['prenom_e'];?></label></td>
               <td><label><?php echo $data['email_e'];?></label></td>
               <td><label><?php echo $data['telephone_e'];?></label></td>
                 <td><label><?php echo $data['slair'];?></label></td>
					<td><label><?php echo $data['experence'];?></label></td>
					<td>
					<label><a onclick="return confirm('Etes vous sur de vouloir supprimer cette ligne?')" href="list_ent.php?delete=<?php echo $data['id_ent']; ?>"><img src="minus.png"></a>
					<label><a href="ajouterenv2.php?edit=<?php echo $data['id_ent']; ?>"><img src="favicon.png"></a>
					</label>
					</td>
				</tr>
    			<?php } ?>
                     
    </table>
        </div>
    </body>
</html>