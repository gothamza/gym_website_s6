


<?php

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");

//----Requete Lister
  
  $requete2="UPDATE personne SET now=current_timestamp() ;";
$resultat2=mysqli_query($con,$requete2);

 $requete2="UPDATE exp_personne SET now=current_timestamp() ;";
$resultat2=mysqli_query($con,$requete2);


//Ajouter Nouveau personne

$requete2= "INSERT INTO `exp_personne` (`id_personne`, `nom`, `prenom`, `adresse`, `email`, `telephone`, `date_fin`, `prix`, `img_m`,`date_insc`,`now`)
SELECT * FROM personne WHERE date_fin<now;
";
$resultat2=mysqli_query($con,$requete2);

$requete2="DELETE FROM personne WHERE date_fin<now;";
$resultat2=mysqli_query($con,$requete2);

$requete2="SELECT TIMESTAMPDIFF(DAY,date_fin,now) AS days FROM exp_personne;";
$resultat2=mysqli_query($con,$requete2);



 
 $nblim=7;
$requete1 = "SELECT * FROM exp_personne ;";
$resultat1=mysqli_query($con,$requete1);
$results_r=mysqli_num_rows($resultat1);
   $nbpages=ceil($results_r/$nblim);

  if (!isset($_GET['page'])) {
      $page=1;
    }
    else{
      $page=$_GET['page'];
    }
    
    $this_first=($page-1)*$nblim;
    
     $requete1 = "SELECT * FROM exp_personne ORDER BY nom,prenom LIMIT $this_first,$nblim;";
$resultat1=mysqli_query($con,$requete1);

/*  SELECT TIMESTAMPDIFF(DAY,date_fin,now) AS days FROM exp_personne*/





//----Requete suppression

if(isset($_GET['delete']))
{
	$id_personne=$_GET['delete'];
	$requete4="DELETE FROM exp_personne WHERE id_personne='$id_personne'";
	$query=mysqli_query($con,$requete4);
	if($query){
	
	header("Location:exp_m.php");
	}}
   //----Requet de modification
	if(isset($_GET['edit2'])){
		$id=$_GET['edit2'];
    $id2=$_GET['edit2'];
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
                 width:65em ;
                 height:100% auto;
                 
                 margin-left:10em;
                 background-image:url(img/sport.jpg);
                 background-size:100%;

                  
                 

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
                 padding: 10px;
                 font-style: oblique;
         
          }
          .ferm:hover{
                cursor: pointer; 

          }
           .pages{
            text-align: center;
            text-decoration:underline;
                 text-align:center;
                 color: red;
                 text-shadow:-1px 1px 1px orange;
                 margin-left:0%;
                 margin-left:3em; 
                 font-style: oblique;
                 font-size: 20px;

          }
     table{
          margin-left:0px;
          background-color:white; 
          width:100%;    
        }
   th:first-letter{
        color:red;
        font-family: verdana;
        



    }
    th{
      font-size:20px; 
      text-transform: capitalize;  
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
             .search{
  transition: width 0.4s ease-in-out;
}

.search:focus {
  width: 50%;
}
.search{
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('img/magnifying-glass.png');
  background-size:30px; 
  background-position: 7px 7px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
  opacity: 0.7;
}
            

        </style>
    </head>
    <body>
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="" href="admin_html.php"><button class="ferm">X</button></a>
            <div class="entet">
             <h1 class="sall"  "> contrats expires
             </h1>
            </div>
          <!--
          <input class="search" type="search" name="search" placeholder="Search..">-->
          <table border="2">
            
        <tr>
          <th>id</th>
          <th>image</th>
          <th>nom</th>
          <th>prenom</th>
          <th>email</th>
           <th>telephone</th>
          <th>adresse</th>
          <th>prix d'engagment</th>
          <th>date_fin</th>
          <th>jours passer</th>
          <th>Action</th>

          
         </tr>
       
               <?php while($data=mysqli_fetch_array($resultat1)){   
                           $days=mysqli_fetch_array($resultat2);
                              ?>
				<tr>
				<td><label><?php echo $data['id_personne'];?></label></td>
        <td><img class="prod" src="img_m/<?php echo $data['img_m'];?>"></td>
					<td><label><?php echo $data['nom'];?></label></td>
					<td><label><?php echo $data['prenom'];?></label></td>
               <td><label><?php echo $data['email'];?></label></td>
               <td><label><?php echo $data['telephone'];?></label></td>
               <td><label><?php echo $data['adresse'];?></label></td>
                 <td><label><?php echo $data['prix'];?></label></td>
					<td><label><?php echo $data['date_fin'];?></label></td>
					<td><label><?php echo $days['days'];?></td>
          <td>
					<label><a onclick="return confirm('Etes vous sur de vouloir supprimer cette ligne?')" href="exp_m.php?delete=<?php echo $data['id_personne']; ?>"><img src="minus.png"></a>
					<label><a href="ajoutermv2.php?edit2=<?php echo $data['id_personne']; ?>"><img src="favicon.png"></a>
					</label>
					</td>
				</tr>
    			<?php } ?>
                     
    </table>
     <p class="pages">pages <..
    <?php  
    
           for ($page=1; $page <=$nbpages; $page++) { 
             echo '<a href="exp_m.php?page='.$page.'">'.$page.'--</a>';
           }
          ?>
            ..>
          </p>
        </div>
    </body>
</html>