<?php

session_start();

//connect to the database
include('connection.php');
//check user inputs define error messages
$missingemail='<p><strong>Please enter your email.</strong></p>';
$missingpassword='<p><strong>Please enter your password.</strong></p>';

//get email and password

if(empty($_POST["loginemail"])){
    $errors.=$missingemail;
}else{
    $email=filter_var($_POST["loginemail"], FILTER_SANITIZE_EMAIL);
}

if(empty($_POST["loginpassword"])){
    $errors.=$missingpassword;
}else{
    $password=filter_var($_POST["loginpassword"], FILTER_SANITIZE_STRING);
}

//if there are any errors

if($errors){
    $resultmessage="<div class='alert alert-danger'>".$errors."</div>";
    echo $resultmessage;
}else{
    //no errors

    $email=mysqli_real_escape_string($link,$email);

    $password=mysqli_real_escape_string($link,$password);

    //run combination of email and password already exit or not

    $sql="SELECT * From users WHERE email='$email' AND password='$password'";

    $result=mysqli_query($link,$sql);

    //count the no of row if one or more row matched with this query

    $count=mysqli_num_rows($result);

    if($count!==1){
        echo "<div class='alert alert-danger'>Wrong username or password</div>";
    }else{
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        $_SESSION['user_id']=$row['user_id'];

        $_SESSION['username']=$row['username'];
        
        $_SESSION['email']=$row['email'];

        if(empty($_POST["rememberme"])){
            //if the remember me box not checked

            echo "success";
        }else{
            //if checked
            //create two variable authentificator1 and authentificator2

            $authentificator1=bin2hex(openssl_random_pseudo_bytes(10));

            $authentificator2=openssl_random_pseudo_bytes(20);

            //share them in cookie
            
            function f1($a,$b){
                $c=$a.",".bin2hex($b);
                return $c;
            }

            $setcookievalue=f1($authentificator1,$authentificator2);
            
            setcookie("rememberme", $setcookievalue , time()+1296000);

            //run query to store them in remember me table

            function f2($a){
                $b=hash('sha256',$a);
                return $b;
            }

            $f2authentificator2=f2($authentificator1);

            $user_id= $_SESSION['user_id'];

            $expiration=date('Y-m-d H:i:s',time()+1296000);            

            $sql="INSERT INTO rememberme(authentificator1, authentificator2, user_id, expires) VALUES('$authentificator1','$f2authentificator2','$user_id','$expiration')";

            $result=mysqli_query($link,$sql);

            if(!$result){
                echo "<div class='alert alert-danger'>There was an error storing data in rememberme table!(login form line-102)</div>";
            }else{
                echo "success";
            }
        }
    }
}
                
?>