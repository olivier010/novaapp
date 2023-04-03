<?php
session_start();

//connection inclusion
include 'connection.php';
//collecting user information
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from user where email='$email' and password='$password'";
$result = mysqli_query($con,$sql);

$details = mysqli_fetch_array($result);
print_r($details);
 if(is_array($details)){
   $_SESSION['id'] = $details['id'];
   header("location: home.php");

}else{
    $message = "user not registered!";
    header("location: sign_in.php?message=$message");
}
?>