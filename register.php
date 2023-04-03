<?php
//connection inclusion
include 'connection.php';
//collect user information

$targetfile = "./uploadedImage/".basename($_FILES['image']['name']);
$imageToUpload = $_FILES['image']['name'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];

//query to create user
$sql = "insert into user(email,firstname,lastname,password,image)
 values('$email','$firstname','$lastname','$password','$imageToUpload')";

 $result= mysqli_query($con,$sql);
 if($result){
    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);
    header("location: sign_in.php");
 }
?>