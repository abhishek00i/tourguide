
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    
    <title>Sign in</title>


<style>
/*same in all page*/ 
body{
    
    background: url("images/img1.jpg") no-repeat center ;
    background-attachment: fixed;
    background-size: cover;

}
.navbar-logo{
    height: 40px;
}

.footersignin {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:rgb(48, 46, 46);
    color: white;
    text-align: center;
}

.navbar-brand{
    font-weight: bolder;
    font-family: sans-serif;
    
}

 /* till here */
 /*reset form section */

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
</style>
        

  </head>
  <body class="body">
    
    
    <!--navbar section -->


    <nav role="navigation"  class="navbar navbar-expand-lg navbar-light bg-dark bg-opacity-50 ">
        <div class="container-fluid ">
              <img src="images/logo.png" class="navbar-logo">
               <a class="navbar-brand"  href="#" style="color: white;">Tourist Guide</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>


              </button>

            
         

        </div>
    </nav>

    <!-- reset  section -->
    <!-- reset form codes     -->




	<div id="d1" class="form-control d1">
		<form id="resetpassword" >
    <div id="resetpasswordmessages"></div> 
  
    <div >	
      <label for="password" class="form-label ">Enter new password :</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" maxlength="30" required >
			
    </div> 
    
    <div >	
      <label for="re-password" class="form-label ">Re-enter your password :</label>
			<input type="password" name="re-password" id="re-password" class="form-control" placeholder="Re enter password" maxlength="30" required>
			
    </div>  
    
    
    
		</form> 
		<!-- click on this button -->
		<button type="submit" class="btn btn-primary" id="submit" class="submit" style="margin-top: 3%; margin-left:40%;" >Reset password</button>
	</div>


      





      



    <!--footer section  -->


    

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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  



     <!--reset password modal ajax call -->


    <script> 
    
    
    $(document).ready(function() {
        $("#submit").click(function() {
            var x = $("#resetpassword").serializeArray();
            
            console.log(x);

            //collect user input
        var datatopost= $("#resetpassword").serializeArray();  
        console.log(datatopost);  

        //send them to signup.php using ajax

        $.ajax({
          url:"resetpassword.php",
          type:"POST",
          data:datatopost,
          success:function(data){
            if(data){
              $("#resetpasswordmessages").html(data);
              $("#resetpassword")[0].reset();
            }

          },
          error:function(){
            $("#resetpasswordmessages").html(
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

      
