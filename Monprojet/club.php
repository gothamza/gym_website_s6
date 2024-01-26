
<?php

$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
//----Requete Lister
$requete1 = "SELECT COUNT(*) AS totp FROM produit;";
$resultat1=mysqli_query($con,$requete1);
 $totp=mysqli_fetch_array($resultat1);
 $requete1 = "SELECT COUNT(*) AS totlin FROM line_produit;";
$resultat1=mysqli_query($con,$requete1);
 $totlin=mysqli_fetch_array($resultat1);

 $requete1 = "SELECT COUNT(*) AS totM FROM personne;";
$resultat1=mysqli_query($con,$requete1);
$totM=mysqli_fetch_array($resultat1);

$requete1 = "SELECT COUNT(*) AS totex FROM exp_personne;";
$resultat1=mysqli_query($con,$requete1);
$totex=mysqli_fetch_array($resultat1);

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
     table{
          margin-left:15px;
          background-color:white;  
          margin-bottom:20px;    
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
        font-size:30px; 
        text-align: center;
        height:40px; 
       }
       /*
CREATE TABLE `gss`. ( `id_com` INT(20) NOT NULL AUTO_INCREMENT , `id_p` INT(20) NOT NULL , `nom_p` VARCHAR(40) NOT NULL , `Qte_dm` INT(10) NOT NULL , `id_perssone` INT(10) NOT NULL , `nom_prenom` VARCHAR(50) NOT NULL , `telephone` INT(11) NOT NULL , PRIMARY KEY (`id_com`)) ENGINE = InnoDB;
       */

        </style>
    </head>
    <body>
        <div class="carr">
            <!-- zone d'admin -->
            <a  style="    " href="admin_html.php"><button class="ferm">X</button></a>
            
            <div class="entet">
             <h1 class="sall"  ">LES INFROMATION DU CLUB 
 
             </h1>
             
            </div>
    
          <table border="2">
            
        <tr>

          <th>totale mombers</th>
          <th>nober expered contra</th>
          <th>nomber de produit </th>
          <th>Les line_produits</th>
          
          
          
          
         </tr>
       
                         
				<tr>
          <td><?php echo $totM['totM'];?></td>
				<td><label><?php echo $totex['totex'];?></label></td>
					<td><label><?php echo $totp['totp'];?></label></td>
					<td><label><?php echo $totlin['totlin']; ?></label></td>
               
			
				</tr>
    			
                     
    </table>

    
        </div>
    </body>
</html>