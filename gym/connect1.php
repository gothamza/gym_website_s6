<?php
    $conn=mysqli_connect('localhost','root','','gss');
   $name = $_POST['name'];
   $prenom=$_POST['prenom'];
   $birthdate = $_POST['birthdate'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password=$_POST['password'];
   $adress=$_POST['adress'];
    // Database connection
    $req="INSERT INTO insc_person (name,prenom,birthdate,gender,email,phone,password,adress) values ('$name','$prenom','$birthdate','$gender','$email','$phone','$password','$adress')";
    $res=mysqli_query($conn,$req);
    if ($res) {
       header("Location:indexlogin.php");
    }
   
?>