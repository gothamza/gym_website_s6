<?php 
session_start(); 
 $conn=mysqli_connect('localhost','root','','gss');
if (!$conn) {
	echo "Connection failed!";
}
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: indexlogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexlogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM insc_person WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: indexlogin.php?error=Incorect User name or password");
		        exit();
			}
			

		     }

		   else{
			$sql = "SELECT * FROM admin WHERE login='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login'] === $uname && $row['password'] === $pass) {
            	$_SESSION['login'] = $row['login'];
            	$_SESSION['nom'] = $row['nnom'];
            	
            	header("Location:http://localhost/Monprojet/admin_html.php");
		        exit();}
		        else{
			header("Location: indexlogin.php?error=Incorect User name or password");
	        exit();
		       }
		    }
		       else{
			header("Location: indexlogin.php?error=Incorect User name or password");
	        exit();
		  }
	}
	

	header("Location: indexlogin.php");
	exit();
}}
?>