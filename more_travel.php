<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <title>more travel</title>


<style>
/*same in all page*/ 
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
.login{
    margin-left: auto;
}
.navbar-brand{
    font-weight: bolder;
    font-family: sans-serif;
    
}
.nav-item{
    padding-right: 20px;
    
}
 /* till here */

/*form styling*/


.travel{
  color: black;
  font-size: 25px;
  font-weight: bold;
  width: 80%;
  text-align: center;
  background-color: rgba(156, 153, 150, 0.5);
  margin-top: 40px;
 

}
.form{
  background-color:rgba(156, 153, 150, 0.5);


}
.form:hover{

  border-bottom: 2px solid #161616;
  
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

            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item active" ><a class="nav-link" href="index.php" style="color: white;">Home</a></li>
                  <li class="nav-item"><a class="nav-link"  href="more_travel.php" style="color: white;">More travel</a></li>
                 
                  <li class="nav-item"><a class="nav-link"  href="trip_ideas.php" style="color: white;">Trip Ideas</a></li>
                  <li class="nav-item"><a class="nav-link"  href="contact.php" style="color: white;">Contact us</a></li>
                </ul>
                  <ul class="nav navbar-nav login">
                    <li >

                    
                    </li>
                  </ul>
                



            </div>

        </div>
    </nav>

    <!-- more travel section -->

    <div class="container-fluid form-control travel">
      <form class="form">
         <div class="stays form-control form">
             <a href="https://www.oyorooms.com" class="btn"><img src="images/HOTEL.png">&nbsp STAYS</a>
         </div>
      
         <div class="Flights form-control form">
             <a href="https://www.air.irctc.co.in" class="btn"><img src="images/FLIGHT.png">&nbspFLIGHTS</a>
         </div>
      
         <div class="cars form-control form">
              <a href="https://www.olacabs.com" class="btn"><img src="images/CAR.png">&nbsp&nbspCARS</a>
         </div>

         <div class="packages form-control form">
          <a href="https://www.makemytrip.com" class="btn"><img src="images/LUGGAGE.png">&nbspPACKAGES</a>
         </div>

         
         <div class="train form-control form">
          <a href="https://www.irctc.co.in/nget/train-search" class="btn"><img src="images/TRAIN.png">&nbspTRAIN</a>
         </div>
  
      
      </form>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>