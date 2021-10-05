<?php

session_start();
include('connection.php');


$missingpassword="<p><strong>Please enter new password.</strong></p>";
$invalidpassword="<p><strong>Plese enter a valid password.</strong></p>";
$differentpassword="<p><strong>Password  don\'t match. </strong></p>";
$missingpassword2="<p><strong>Please re enter password.</strong></p>";

//get password

if(empty($_POST["password"])){
    $errors.=$missingpassword;
}elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$_POST["password"])){
    $errors.=$invalidpassword;
}else{
    $password=filter_var($_POST["password"],FILTER_SANITIZE_STRING);

    if(empty($_POST["re-password"])){
        $errors.=$missingpassword2;
    }else{
        $password2=filter_var($_POST["re-password"],FILTER_SANITIZE_STRING);

        if($password!==$password2){
            $errors.=$differentpassword;
            exit;
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

$password=mysqli_real_escape_string($link, $password);

$emailmatch=$_SESSION['mail'];


$sqli="UPDATE users SET password='$password' WHERE email='$emailmatch'";

$result1=mysqli_query($link,$sqli);

if(!$result1){

    echo "<div class='alert alert-danger'>There is a problem in storing the password.</div>";
    
}else{

// PHP program to pop an alert
// message box on the screen

// Display the alert box
echo '<script>alert("Your password is reset successfully. Please go back and sign in again.! ")</script>';


}
?>