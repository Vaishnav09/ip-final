<?php

extract($_POST);
include("config.php");
include('encrypt.php');
session_start();
$phone=encrypt_decrypt("encrypt",$phone);
$email=encrypt_decrypt("encrypt",$email);
$query = "INSERT INTO orders1(Firstname,Lastname,address,PhoneNo,EmailID,Username) VALUES('" . $firstname . "', '" .$lastname . "','".$address."' ,'".$phone."','" . $email . "','". $_SESSION['username'] . "')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");

$_SESSION['message']= '<div class="alert alert-success">You have successfully placed the order!</div>';
header('location:order.php');


// echo "<br><br><br><div class=head1>Your Order Placed Sucessfully</div>";
// echo "<br><div class=head1>Click <a href=home.php>here</a> to go back to the home page.</div>";

mysqli_close($con);
?>
