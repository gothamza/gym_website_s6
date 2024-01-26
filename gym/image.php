
<!DOCTYPE html>
<html lang="en">

<style type="text/css">
    
 .evrey2{
    
    margin-left:40%; 
    display:inline;
    
    
    
 }
 .evrey1{
    
   
     margin-left:39.5%;
     margin-bottom:90px; 

    
    
 }
  th:first-letter{
        color:red;
        font-family: verdana;
        text-transform: capitalize;



    }
    th{
      font-size:20px;   
    }  
 
 .prod{
 margin-top:20px; 
  height:300px; width:300px;border: 5px groove #fff ;
  
  
 }
 .number{

              width:40px;
              height:30px;
             }
             .button1{
                width:90px; 
                text-align:center; 
             }
             table{
         
          background-color:black;     
        }
        

</style>



<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
</head>





<body class="bg-white">
    <!-- Navbar Start -->
   <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">gym GH_BK</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="home.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About Us</a>
                    <a href="feature.html" class="nav-item nav-link">Our Features</a>
                    <a href="class.html" class="nav-item nav-link">Classes</a>
                    <a href="image.php" class="nav-item nav-link active">store</a>
                        
                    <a href="guid_for_machine.html" class="nav-item nav-link">guide for machine</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
 




    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">

        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
               <div style="float: right; ">
    <img style="width: 50px;height: 40px;margin-left:1150%; " src="images_clothes/panier2.png">
</div>
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Blog</h4>
            <div class="d-inline-flex">
                <p  class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Our Blog</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    
        </div >
    </div>
    <!-- Blog End -->

<div style="background-color:white; ">

<div class="row">

	<?php
	$bdd=new PDO('mysql:host=localhost;dbname=gss;charset=utf8','root','');
	$req=$bdd->query('SELECT * FROM produit ');

	while($donnees=$req->fetch()){ ?> 

   <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white" ><img style="margin-left:5px; " class="prod"  src="img_produits/<?php echo $donnees['img_produit'];?>">
        <div class="card-body bg-secondary" style="margin-left:0px; ">
            <table border="2">
                <tr>
                    <th>nom produit</th>
                    <th>Qte</th>
                    <th>Action</th>
                </tr>
                <tr>
                <td><label><?php echo $donnees['nom_p']; ?> <br><?php echo $donnees['prix_p']; ?></label></td>
                <td><label><?php echo $donnees['Qte']; ?></label></td>
                <td> <!--<input class="number" type="number" name="gte" min="1" max="<?php echo $donnees['Qte']; ?>"> -->
                   
                    
                    <form style="" action="ajoutcm.php?idp=<?php echo $donnees['id_produit']; ?>" method="post"><?php if (!$donnees['Qte']==0) {?><input class="number" type="number" name="gte" min="1" max="<?php echo $donnees['Qte']; ?>" required> <a onclick="return confirm('Etes vous domomdee ce produit?')" href=""><input class="button1" type="submit" name="comond" value="Domnder"> </a> <?php } ?> <?php if ($donnees['Qte']==0){?> ce produit est<br> invalable maintenant<?php } ?></form></td>
                    <!-- <a href="image.php?edit=<?php echo $donnees['id_produit'];?>"> </a>  -->
                </tr>
       
         
             
         
    
      
     </table>
      </div> 
 </div> 
    
    
</div>

<?php }
?>
</div>
 <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            <!--   <div class="d-flex justify-content-start mt-4" style="position: fixed;top: 550px;right:550px;">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: black; width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: black;width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: black;width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: black;width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>-->
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Opening Hours</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">gym GH_BK</a>. . Designed by bouktitia hamza  and ghiwane mohamed
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>
