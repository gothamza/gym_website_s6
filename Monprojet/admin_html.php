<?php 
$servername="localhost";
$username="root";
$password="";

$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
 if (isset($_POST['EDIT'])) {
          
        $num=$_POST['number'];
        $msg=$_POST['msg'];


        $requete=" UPDATE number_visit SET number='$num',msg='$msg';";
          $query=mysqli_query($con,$requete);
    if ($query) {
      header("Location:admin_html.php");
    }}

    
        
        $sql="SELECT * FROM number_visit ;";
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);
        $num=$row['number'];
        $msg=$row['msg'];
      
?>
<html>
    <head>
       <meta charset="utf-8">
        <style type="text/css">

                       body{

                background-size: 100%;
                background-image: url(img/sallsp1.jpg);
                background-size: cover;
                 background-position: center;

                

            }
            a{
              text-decoration: none;
              color: white;
              font-style:none;
               

            }
             a:hover{
              text-decoration: none;
              color: white; 
            }
             a:visited{
              text-decoration: none;
              color: white; 
            }
            .carr{
                border: 5px groove #fff ;
                 width:50% ;
                 height:100% auto;
                 padding-top:1px;

                
                 margin-left:25%;
                 /*background-color:rgba(260,215,175,1); */
                 background-image:url(img/sport.jpg);
                 
                  background-size: cover;
                 background-position: center;
                 

                 

            }

            @keyframes animate {
              0%{
                background-image:url(img/img1.jpeg);
              }
               20%{
                background-image:url(img/img2.jpeg);
              }
               40%{
                background-image: url(img/sallsp1.jpg);
              }
               60%{
                background-image:url(img/img1.jpeg);
              }
               80%{
                background-image: url(img/sallsp1.jpg);
              }
               100%{
                 background-image:url(img/img2.jpeg);
              }
            }
            .block{
             border: 5px  groove black ;
                 width:25% ;
                 height:80px ;
                 margin-top:20px;
                 margin-left:3%;
                 padding-top:20px; 
                 padding-left:10px;
                 text-transform: capitalize;
                 font-size: 20px;
                 font-style: italic;
                 text-align: center;
                 float: left;
                 background-image:url(img/banner2.jpg);
                 background-size: 100%;


            }
            .entet{
             width:100%;
             height:210px;
              background-image: url(img/sallsp1.jpg);
                background-size: cover;
                 background-position: center;
                 transition:5s;
                 animation-name:animate;
                 animation-direction:alternate-reverse; 
                 animation-duration: 30s;
                 animation-fill-mode:forwards;
                 animation-iteration-count:infinite;
                 animation-play-state: running;
                 animation-timing-function:ease-in-out; 
            }
            .sall{

                
                 text-align:center;
                 color:white;
                 text-shadow:3px 3px 1px purple;
                 margin-left:0%;
                 padding: 50px;
            }
            .ferm:hover{
                cursor: pointer; 

          }
            .block:hover{
                 
                 box-shadow: 5px 5px 5px ;

                 

            }
              .block:onclick{
                 
                 box-shadow: 5px 5px 5px ;
                 }
             .number{

              width:40px;
              height:30px;
             }
            .comment{
               border: 2px  groove black ;
                 height:80px ;

            }
            textarea{
              margin-left:10px;
              margin-top:10px;
              color:white;
              background-color:black; 
              font-style:italic;
              opacity: 0.5;

            }

       .bell{
        text-decoration:underline;
                 text-align:center;
                 color:black;
                
                 margin-left:0%;
                 padding-left:13px;
                 color:white;
          size:10px;
          font-style:italic;


       }
       label{
          margin-top:10px;
         

       }
       input[type="number"]{
        height: 38px;
        width: 55px;
                margin-top:10px;
                color:white;
              background-color:black; 
              font-size: 30px; 
              font-family:times; 

       }

        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap');

           input[type=submit]{

            font-family: 'source sans pro',sans-serif;
                letter-spacing:4px;
                background-color: #25252A;
                text-align: center;
                width:60px;
                height:30px;
                border: none;
                color: white;
                background-color: rgb(205,10,6);
                border-radius: 4px;
                box-shadow: inset 0 0 0 #f9e506;
                transition: ease-out 0.3s;
                font-size: 0.5em;
                outline: none;}
                input[type=submit]:hover{
                     box-shadow: inset 100px 0 0 #f9e506;
                     cursor:pointer;
                     color: black;

                } 

          <?php
          
          ?>

        </style>
    </head>
    <body>
        <div class="carr">


            <!-- zone d'admin -->

            <div class="entet">
              <a href="logout.php"><img style="height: 40px;width:40px; margin-left:90%; margin-top:3%;  " src="row.png"></a>
          
             <h1 class="sall"  ">GESTION DE SALLE : .....
             </h1>
           
         
         <div class="line">
          <a href="inc_momber.php">
           <div class="block">inscrer memebers
            <img   style="width: 50px;height: 50px;display: block;padding-left: 50px;" src="logo_admin/ajouter_insc.png"></div>  </a>

            <a href="totalm.php" title="total members">
           <div class="block">total members
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px" src="logo_admin/totalm.png"></div> </a> 
            
            <a href="ajoutermv2.php">
           <div class="block">ajouter member
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px" src="logo_admin/add.png"></div>  </a>
          </div>
           </div>
        <div class="line">
            
           <a href="exp_m.php">
           <div class="block">Expered member
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px"" src="logo_admin/time.png"></div></a>
            <a href="list_ent.php">
           <div class="block">Liste d'Entreneur
            <img   style="width: 50px;height: 50px;display: block;padding-left: 50px;" src="logo_admin/lis_ent.png"></div>  </a>
            
             <a href="ajouterenv2.php">
           <div class="block">Ajouter Entreneur
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px"" src="logo_admin/add-user.png"></div></a>
          </div>
          <div class="line">
            <a href="line_produit.php">
           <div class="block">line_produits
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px" src="logo_admin/livr1.png"></div>  </a>
           
            <a href="list_produit.php">
                 <div class="block">list du produit
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px"" src="logo_admin/whey.png"></div></a>
            <a href="ajouterP.php">
           <div class="block">ajouter produit
            <img   style="width: 50px;height: 50px;display: block;padding-left: 50px;" src="logo_admin/whey_p.png"></div>  </a>
          
          </div>
          <div class="line">
            <a href="club.php">
             <div class="block">totale information
            <img  style="width: 50px;height: 50px;display: block;padding-left: 50px"" src="logo_admin/deadline1.png"></div></a>
          </div>
              
               <form action="admin_html.php" method="post">
              
                <label class="bell" >
                nombre de personne maintenant sur le club: </label>
                 <input  type="number"  name="number" min="0" max="100" value="<?php echo $num; ?>">

                <input type="submit" value="EDIT" name="EDIT">

                <textarea  name="msg" rows="4" cols="50" placeholder="<?php echo $msg; ?>" value=""></textarea>
             
                 </form>
              
         
        </div>
      </div>
         </body>
</html>