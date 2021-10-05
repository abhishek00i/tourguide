<?php

session_start();
include('connection.php');

// check user input if any errors

$missingemail='<p><strong>Please enter your email.</strong></p>';
$invalidemail='<p><strong>Please enter a valid email.</strong></p>';

//get email

if(empty($_POST["forgotemail"])){
    $errors.=$missingemail;
}else{
    $email=filter_var($_POST["forgotemail"], FILTER_SANITIZE_EMAIL);


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors.=$invalidemail;
}
}

// if there are any errors

if($errors){
    $resultmessages='<div class="alert alert-danger">'.$errors.'</div>';
    echo $resultmessages;
    exit;
}

//no errors
//prepare for the query and run query for further checks

$email=mysqli_real_escape_string($link, $email);

//run query to check if the email exist in users table or not

$sql = "SELECT*FROM users WHERE email='$email'";


$result=mysqli_query($link,$sql);

if(!$result){
    echo '<div class="alert alert-danger">Your email is not registered.</div>';
    exit;
}

$count=mysqli_num_rows($result);

if($count!=1){
    echo '<div class="alert alert-danger">That email is not registered.</div>';
    
}else{
    $_SESSION['mail']=$email;
    echo "success";
}






//else{
   // $_SESSION['email']=$email;


//}








?>