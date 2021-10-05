<?php

//if user has checked rememberme box then he gonna logged in

session_start();
include("connection.php");

//rememberme file

include("rememberme.php");

//logout

include("logout.php");


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="styling.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Tourist Guide</title>

    <!-- script section-->

    <style>


      
body{
    
    background: url("images/img1.jpg") no-repeat center ;
    background-attachment: fixed;
    background-size: cover;

}
ul{
    
    font-size: large;
    font-weight: bolder;
    margin-left: 30px;

}
.nav-item:hover{
    border-bottom: 2px solid #00FFBB;
    cursor: pointer;
    
}
.nav-link{
    font-family: sans-serif;
    font-style: initial;

    
}
.login{
    margin-left: auto;
}
.navbar-logo{
    height: 40px;
}
.navbar-brand{
    font-weight: bolder;
    font-family: sans-serif;
    
}
.nav-item{

    padding-right: 20px;
    
}
.jumbotron{
    margin-top: 5%;
    margin-left: 10%;
  
    text-align: center;
    letter-spacing: 2px;
    width: 80%;
    height: 80%;
    

}
.button{
    box-sizing:initial;
    box-shadow: seagreen;
}
.d1{
    background-color: rgba(156, 153, 150, 0.5);
    border-width: 10px,10px,10px,10px;
    margin-top: 50px;
    margin-left:10%;
    
    width: 80%;
    
  
}
.form-label{
    margin-left: 5%;
    margin-top: 3%;
}

.form-label{
    font-family:sans-serif;
    font-weight: bolder;
}
footer{
  margin-top: 20%;
}

      

.md-form{
    font-weight: bold;
    
}
.navbar-nav{
    color: white;
}
.navbar{
    color: white;
}






    </style>

<!--vdxdfffhf-->


	<!-- jQuery code to show the working of this method -->
	
	
 

  </head>
  <body>
    
    
    <!--navbar section -->


    <nav role="navigation"  class="navbar navbar-expand-lg navbar-light bg-dark bg-opacity-50 ">
        <div class="container-fluid ">
              <img src="images/logo.png" class="navbar-logo">
               <a class="navbar-brand"  href="#" style="color: white;">Tourist Guide</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>


              </button>

            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item active" ><a class="nav-link" href="index.php" style="color: white;">Home</a></li>
                  <li class="nav-item"><a class="nav-link"  href="more_travel.php" style="color: white;">More travel</a></li>
                 
                  <li class="nav-item"><a class="nav-link"  href="trip_ideas.php" style="color: white;">Trip Ideas</a></li>
                  <li class="nav-item"><a class="nav-link"  href="contact.php" style="color: white;">Contact us</a></li>
                </ul>
                  <ul class="nav navbar-nav login">
                    <li >

                      <a href="#" class="btn btn-default btn-rounded mb-4 btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin" type="button">
                        Sign in 
                      </a>

                    </li>
                  </ul>
                



            </div>

        </div>
    </nav>

    <!-- sign up section -->
    <div class="jumbotron" id="sign-up">

        <h1>
          Welcome to our Tourist guide portal !

        </h1>
        <h5>
          Here you can find all information , where u want travel..
        </h5>
        <h5>
          New here ? Please sign-up for continue .. 
        </h5>
        
        
        <h4>
          Already a member ? Please sign-in ..
        </h4>
    </div>

<!-- sign form codes     -->
	<div id="d1" class="form-control d1">
		<form id="signinform">
    <div id="signupmessages"></div> 
    <div > 
		  <!--<label for="userid" class="form-label " type="hidden">User-id</label>-->
			<input type="hidden" name="userid" id="userid" maxlength="30" placeholder="Enter id" class="form-control">
    </div>
    
    <div >	
      <label for="username" class="form-label ">Username :</label>
			<input type="text" name="username" id="username" class="form-control" placeholder="Enter your name" maxlength="30" required >
			
    </div>  

    <div >	
      <label for="email" class="form-label ">Email :</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" maxlength="30" required >
			
    </div>
    
    <div >	
      <label for="password" class="form-label ">Password :</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" maxlength="30" required >
			
    </div> 
    
    <div >	
      <label for="re-password" class="form-label ">Re enter your password :</label>
			<input type="password" name="re-password" id="re-password" class="form-control" placeholder="Re enter password" maxlength="30" required>
			
    </div>  
    
    
    
		</form> 
		<!-- click on this button -->
		<button type="submit" class="btn btn-primary" id="submit" class="submit" style="margin-top: 3%; margin-left:45%;" >Submit</button>
	</div>



   
    

    
 
        
    <!-- Modal -->
    
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="modalLoginForm" class="modalLoginForm">
      <div class="modal-body mx-3" id="modallogin">
        <div class="loginmessage" id="loginmessage"></div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
         
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email :</label>
          <input type="email" id="defaultFormemail" class="form-control validate" maxlength="30" placeholder="Enter email" name="loginemail">
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password :</label>
          <input type="password" id="defaultForm-pass" class="form-control validate" maxlength="30" placeholder="Enter password" name="loginpassword">
        </div>
        
        
        <div>
         
          <span class="fpws"><a href="#" data-bs-toggle="modal" data-bs-target="#forgotpassword" > forgot password</a></span>
        </div>
        

      </div>
      </form>

        <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default btn-primary"   id="loginform" class="loginform" >Login</button>
        </div>
      
    </div>
  </div>
</div>



<!-- forget password section -->




<div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    
  <form id="forgotpasswordform" method="POST">
    <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold">Forgot your password ?</h4>
      
   
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body mx-3">
      <div id="forgotpasswordmessage"></div>
      <div class="md-form mb-5">
        <i class="fas fa-envelope prefix grey-text"></i>
       
        <label data-error="wrong" data-success="right" for="defaultForm-email">Enter your email :</label>
        <input type="email" id="defaultForm-email" class="form-control validate" maxlength="30" placeholder="Enter email" name="forgotemail">
       
      </div>
      <p class="font-weight-light">Please enter your email, which you have used to register for sign up.</p>

      </div>
    </form>
    
    
    <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-default btn-primary"  id="forgetsubmit" class="forgetsubmit" >Submit</button>
    </div>
  </div>
</div>
</div>









    
    <!--footer  section  -->


    <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
  
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
   <!--social media link-->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with me on social networks :--</span>
    </div>
    <div>
      
      
      
      <a href="https://www.instagram.com/blvck.i__" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/abhishek-gupta-93b102171" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/abhishek00i" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    
  </section>
 

  <!-- Section: content  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Learning Purpose.
          </h6>
          <p>
            This site designed only for learning purpose.
          </p>
        </div>
        

        

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
         
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Gurgaon , Haryana (INDIA)</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            ag2416345@gmail.com
          </p>
          
          
        </div>
     
      </div>
   
    </div>
  </section>
   <!-- Copyright -->
   <div class="footer-copyright text-center py-3">© 2020 Copyright: Nill
    
  </div>
  
</footer>
<!-- Footer -->


                                              <!--script-->    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <script> 
    
    
    $(document).ready(function() {
        $("#submit").click(function() {
            var x = $("#signinform").serializeArray();
            
            console.log(x);

            //collect user input
        var datatopost= $("#signinform").serializeArray();  
        console.log(datatopost);  

        //send them to signup.php using ajax

        $.ajax({
          url:"signup.php",
          type:"POST",
          data:datatopost,
          success:function(data){
            if(data){

             
              $("#signupmessages").html(data);
              $("#signinform")[0].reset();
            }

          },
          error:function(){
            $("#signupmessages").html(
              "<div class='alert alert-success'>There was an error with the Ajax call ,Please try again later.</div>"
            )
          },


        });

        });
    });
    
    
    </script>

    <!--  login.php  -->
   
   
   
   
   <script> 
    
    
    $(document).ready(function() {
        $("#loginform").click(function() {
            var x = $("#modalLoginForm").serializeArray();
            
            console.log(x);

            //collect user input
        var datatopost= $("#modalLoginForm").serializeArray();  
        console.log(datatopost);  

        //send them to login.php using ajax

        $.ajax({
          url:"login.php",
          type:"POST",
          data:datatopost,
          success:function(data){
            if(data=="success"){
                window.location="loginmap.php";
              
            }else{

                $('#loginmessage').html(data);
            }

          },
          error:function(){
            $("#loginmessage").html(
              "<div class='alert alert-danger'>There was an error with the Ajax call ,Please try again later.</div>"
            )
          },


        });

        });
    });
    
    
    </script>
  



<!-- reset password ajax call-->






  
  <script> 
    
    
    $(document).ready(function() {
        $("#forgetsubmit").click(function() {
            var x = $("#forgotpasswordform").serializeArray();
            
            console.log(x);

            //collect user input
        var datatopost= $("#forgotpasswordform").serializeArray();  
        console.log(datatopost);  

        //send them to forgotpaasword.php using ajax

        $.ajax({
          url:"forgotpassword.php",
          type:"POST",
          data:datatopost,
          success:function(data){
            if(data=="success"){
                
              window.location="resetp.php";
              
            }else{

                $('#forgotpasswordmessage').html(data);
            }

          },
          error:function(){
            $("#forgotpasswordmessage").html(
              "<div class='alert alert-danger'>There was an error with the Ajax call ,Please try again later.</div>"
            )
          },


        });

        });
    });
    
    
    </script>
  


 


   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>