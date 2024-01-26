
<?php

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
//----Requete Lister

 
  
  
  



    
    


$nblim=7;
$requete1 = "SELECT * FROM insc_person ;";
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
    
     $requete1 = "SELECT * FROM insc_person ORDER BY name,prenom LIMIT $this_first,$nblim;";
$resultat5=mysqli_query($con,$requete1);
//----Requete suppression

if(isset($_GET['delete']))
{
	$id_personne=$_GET['delete'];
	$requete3="DELETE FROM insc_person WHERE id='$id_personne'";
	$query=mysqli_query($con,$requete3);
	if($query){
	
	header("Location:inc_momber.php");
	}}
   //----Requet de modification
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
//------search
 /* if (!isset($_GET['search'])) {
    $nomsh=0;

  }
  else{
     $nomsh=$_GET['search'];
     $requete1 = "SELECT * FROM personne WHERE nom='$nomsh';";
$resultat5=mysqli_query($con,$requete1);

  }
*/ 
 
?>
<html>
    <head>
       <meta charset="utf-8">
        <style type="text/css">
        
            body{

                background-size: 100%;
                background-image: url(img/sallsp1.jpg);
            }
            .ferm:hover{
                cursor: pointer; 

          }
            .carr{
                border: 10px groove #fff ;
                 width:60em ;
                 height:100% auto;
                 
                 margin-left:15%;
                 background-image:url(img/sport.jpg);
                 background-size:100%;

                  
                 

            }
            .search{
  transition: width 0.4s ease-in-out;
}

/*.search:focus {
  width: 50%;
}*/
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

            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap');

           input[type=submit]{
            font-family: 'source sans pro',sans-serif;
                letter-spacing:2px;
                background-color: #25252A;
                text-align: center;
                width:45px;
                height:40px;
                border: none;
                color: white;
                background-color: rgb(205,10,6);
                border-radius: 4px;
                box-shadow: inset 0 0 0 #f9e506;
                transition: ease-out 0.3s;
                font-size:20px;
                outline: none;}
                input[type=submit]:hover{
                     box-shadow: inset 100px 0 0 #f9e506;
                     cursor:pointer;
                     color: black;
                     font-size:22px; 

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
                 margin-left:3em; 
                 font-style: oblique;
         
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
        height:50px; 
       }  
       .add_p:hover{
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


        </style>
    </head>
    <body>
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="" href="admin_html.php"><button class="ferm">X</button></a>
            <div class="entet">
             <h1 class="sall"  ">LES INSCREPTION SUR LA SITE : 
             </h1>
            </div>

           <!--
            <input class="search" type="txt" name="idsearch" placeholder="Search.." autofocus >
           
            

                <input class="" type="submit" name="btnsh" value="GO"/> 
              <form action="totalm.php" method="post">
              <?php echo $_GET['search']; ?>
               
            </form>

              <a href="totalm.php?search=<?php echo $_POST['srch']; ?>"> <input class="" type="submit" name="btnsh" value="GO"> </a>
        
            <input class="" type="submit" name="btnsh" value="GO">

           
           
            <label><a href="totalm.php?idsearch=<?php $_POST['serch']; ?>"><img src="favicon.png"></a>
          </label>
    -->
          <table border="2">
            
        <tr>
          <th>id</th>
          
          <th>nom</th>
          <th>prenom</th>
          <th>email</th>
           <th>telephone</th>
          <th>adresse</th>
          <th>mode de passe</th>
          <th>date de naissance</th>
          <th>Action</th>
          
         </tr>
       
   <?php while($data=mysqli_fetch_array($resultat5)){?>
				<tr>
				<td><label><?php echo $data['id'];?></label></td>
					<td><label><?php echo $data['name'];?></label></td>
					<td><label><?php echo $data['prenom'];?></label></td>
               <td><label><?php echo $data['email'];?></label></td>
               <td><label><?php echo $data['phone'];?></label></td>
               <td><label><?php echo $data['adress'];?></label></td>
                 <td><label><?php echo $data['password'];?></label></td>
					<td><label><?php echo $data['birthdate'];?></label></td>
					<td>
					<label><a onclick="return confirm('Etes vous sur de vouloir supprimer cette perssone?')" href="inc_momber.php?delete=<?php echo $data['id']; ?>"><img src="minus.png"></a>
					<label><a href="ajoutermv2.php?addin=<?php echo $data['id']; ?>"><img style="width:20px ; height:17px; " src="add2.png"></a>
					</label>
					</td>
				</tr>
    			<?php } ?> 
         

                     
    </table>
    <p class="pages">
     <..
    <?php  
    
           for ($page=1; $page <=$nbpages; $page++) { 
             echo '<a href="inc_momber.php?page='.$page.'">'.$page.'--</a>';
           }
          ?>
            ..><!-- <input style="" type="submit" name="last" value="last">
            <input type="submit" name="next" value="next">-->
          </p>
        </div>
    </body>
</html>