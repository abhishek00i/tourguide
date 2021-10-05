<?php
 session_start();
 include('connection.php');

 $missingname="<p><strong>Please enter your name.</strong></p>";
 
 $missingemail="<p><strong>Please enter your email.</strong></p>";
 
 $invalidemail="<p><strong>Please enter a valid email.</strong></p>";
 
 $missingnumber="<p><strong>Please enter your number.</strong></p>";
 
 $missingmessage="<p><strong>Please write your message ,message length should be in between 1 to 500 characters.</strong></p>";


//GET NAME

if(empty($_POST['name'])){
    $error.=$missingname;
}else{
    $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);

}

//GET EMAIL

if(empty($_POST["email"])){
    $error.=$missingemail;
}else{
    $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);



if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error.=$invalidemail;
}
}

//get number

if(empty($_POST["contact"])){
    $error.=$missingnumber;
}else{
    $number=filter_var($_POST["contact"],FILTER_SANITIZE_STRING);
}

//GET MESSAGES

if(empty($_POST["message"])){
    $error.=$missingmessage;
}else{
    $message=filter_var($_POST["message"],FILTER_SANITIZE_STRING);
}

// IF THERE ARE ANY ERROR WE GONNA PRINT IT

if($error){
    $resultmessage="<div class='alert alert-danger'>".$error."</div>";

    echo $resultmessage;
    exit;
    
}else{
// no errors prepare variable for querry

$name=mysqli_real_escape_string($link,$name);

$email=mysqli_real_escape_string($link,$email);

$number=mysqli_real_escape_string($link,$number);

$message=mysqli_real_escape_string($link,$message);

//now insert all the data in mqsql database 


$sql="INSERT INTO message(name,email,number,message) VALUES('$name','$email','$number','$message')";

$result=mysqli_query($link,$sql);

if(!$result){
    echo "<div class='alert alert-danger'>There was an error inserting the user details in the database !</div>";
    
}else{
    
    echo "<div class='alert alert-success'>Thank you for contacting us, we will reach you as soon as possible.</div>";
}

}

?>