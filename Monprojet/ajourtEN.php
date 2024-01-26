<?php
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
mysqli_select_db($con,"gss");
$id="";
$nom="";
$prenom="";
$date_naiss="";

$adresse="";
$email="";
$phone="";
$password="";
$modifier="";
$exp="";
$salair="";
//Ajouter Nouveau personne
	if(isset($_POST['ajouter'])){
		
		$nom=$_POST['name'];
		$prenom=$_POST['prenom'];
		$birthdate=$_POST['birthdate'];
		$adress=$_POST['adress'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$exp=$_POST['exper'];
		$salair=$_POST['salair'];
$requete="INSERT INTO personne(nom,prenom,date_nais,adresse,email,telephone,password) VALUES ('$nom','$prenom','$birthdate','$adress','$email',$phone,$password);
             INSERT INTO entreneur(nom_e,prenom_e,date_nais_e,adresse_e,email_e,telephone,password_e,salaire,experience	)VALUES ('$nom','$prenom','$birthdate','$adress','$email',$phone,$password,$salair,$exp)";
		$query=mysqli_query($con,$requete);
		if($query){
header("Location:list_ent.php");
}}
//----Requet de modification
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		$sql="SELECT * FROM personne WHERE id_personne='$id'";
		$query=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($query);
		$id=$row['id_personne'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $date_naiss=$row['date_nais'];
         $adresse=$row['adresse'];
        $email=$row['email'];
        $phone=$row['telephone'];
		  $password=$row['password'];
		  $modifier=true;
       
	}
	 //Button de modification
    if(isset($_POST['btn_edit'])){
        $id=$_POST['id_personne'];
         $nom=$_POST['name'];
         $prenom=$_POST['prenom'];
         $date_nais=$_POST['birthdate'];
         $adresse=$_POST['adress'];
         $email=$_POST['email'];
         $phone=$_POST['phone'];
         $password=$_POST['password'];
         $sql= "UPDATE personne SET nom='$nom',prenom='$prenom',date_nais='$date_nais', email='$email',adresse='$adresse',telephone='$phone', password='$password' WHERE id_personne='$id'";
    $query=mysqli_query($con,$sql);
    if($query){
     header("Location:totalm.php");
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</style>
</head>
<body >
	
	<div class="limiter">

       
		<div class="container-login100">
			<div class="wrap-login100">
				
					<span class="login100-form-title p-b-26">
					  Ajouter Entreneur
					</span>
				


					 
                    <form action="index.php" method="POST">
							<div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Id" readonly="true" name="id_personne" value="<?php echo  $id;?>">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Name" name="name" value="<?php echo  $nom;?>">
                        </div>
								<div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Prenom" name="prenom" value="<?php echo  $prenom;?>">
                        </div>

                      <div class="wrap-input100 validate-input">
                            <input class="input100 js-datepicker" type="date" placeholder="Birthdate" name="birthdate" value="<?php echo  $date_naiss;?>">
                           
                        </div>

                       <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Adresse" name="adress" value="<?php echo  $adresse;?>">
                        </div>  

                       
                       <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" value="<?php echo  $email;?>">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>  
                     
                    <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Phone" name="phone" value="<?php echo  $phone;?>">
                    </div>
                    <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="experience" name="exper" value="<?php echo  $exp;?>">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="salair" name="salair" value="<?php echo  $salair;?>">
                        </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" value="<?php echo  $password;?>">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
   

					<div class="container-login100-form-btn">
						
							<div class="login100-form-bgbtn"></div>
							<?php if($modifier==true){ ?>
                                                    <input type='submit' name="btn_edit"value="Modifier"/>
                                                    <?php } else{ ?>
                                                    <input type='submit' name="ajouter" value="Ajouter"/>
                                                    <?php }?>
								
							
						
						
					</div>


					<div class="text-center p-t-115">
				

						<a href="../admin_html.html" class="nav-item nav-link">
							fermer
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>