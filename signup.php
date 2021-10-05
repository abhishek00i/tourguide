<!--start session-->
<?php

session_start();
include('connection.php');

//define error messages
$missingUsername='<p><strong>Please enter a username.</strong></p>';
$missingEmail='<p><strong>Please enter your email. </strong></p>';
$invalidEmail='<p><strong>Please enter a valid email. </strong></p>';
$missingPassword='<p><strong>Please enter a password. </strong></p>';
$invalidPassword='<p><strong>Your password should be at least 8-12 characters long and include one capital letter
 and one number and in one of the following: !@#$% . </strong></p>';
$differetPassword='<p><strong>Password don\'t match. </strong></p>';
$missingPassword2='<p><strong>Please confirm your password </strong></p>';

//get userinputs

if(empty($_POST["username"])){
    $errors.=$missingUsername;
}else{
    $username=filter_var($_POST["username"], FILTER_SANITIZE_STRING);
}

// get email

if(empty($_POST["email"])){
    $errors.=$missingEmail;
}else{
    $email=filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors.=$invalidEmail;
}
}

//password

if(empty($_POST["password"])){
    $errors.=$missingPassword;
}elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$_POST["password"])){
    $errors.=$invalidPassword;
}else{
    $password=filter_var($_POST["password"],FILTER_SANITIZE_STRING);

    if(empty($_POST["re-password"])){
        $errors.=$missingPassword2;
    }else{
        $password2=filter_var($_POST["re-password"],FILTER_SANITIZE_STRING);

        if($password!==$password2){
            $errors.=$differetPassword;
        }
    }
}

//if there are any error we gonna print the error

if($errors){
    $resultmessages='<div class="alert alert-danger">'.$errors.'</div>';
    echo $resultmessages;
    exit;
}

//no error
//prepare variables for the query

$username=mysqli_real_escape_string($link, $username);
$email=mysqli_real_escape_string($link, $email);
$password=mysqli_real_escape_string($link, $password);



//if email exist in this user table print error

$sql = "SELECT*FROM users WHERE email='$email'";
$result=mysqli_query($link,$sql);

if(!$result){
    echo '<div class="alert alert-danger">Error running the querry !</div>';
    exit;
}

$results=mysqli_num_rows($result);

if($results){
    echo '<div class="alert alert-danger">That email is already registered , do you want to login ?</div>';
    exit;
}



if(!$errors){

$sql="INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";


$result=mysqli_query($link,$sql);

if(!$result){
    
    echo "<div class='alert alert-danger'>There was an error inserting the user details in the database !</div>";
    

}else{
    echo "<div class='alert alert-danger'>Thank you for registering ! Please login your account.</div>";   
       
}
}

?>