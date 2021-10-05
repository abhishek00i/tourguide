<?php 

session_start();

if(!isset($_SESSION['user_id'])){
  header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
    
  <head>
    <title>Sign in </title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    
    
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

      body{
    
    background-color:lightblue;
    background-attachment: fixed;
    background-size: cover;

}
#mapform{
    
    border-width: 10px,10px,10px,10px;
    margin-top: 20px;
    
    
    width:auto;
    
  
}
.formclass{
  background-color:lightblue;
}

#map {
  height: 100%;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

/*navbar and footer*/
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
footer{
  margin-top: 10%;
}

#messages{
  text-align: center;
  font-size: 1.5em;
  margin: 20px auto;

}

   </style>
  
  
  </head>


  <body>
    
  <!-- navbar  section  -->

  <nav role="navigation"  class="navbar navbar-expand-lg bg-light bg-dark bg-opacity-50 ">
        <div class="container-fluid ">
              <img src="images/logo.png" class="navbar-logo">
               <a class="navbar-brand "  href="#" style="color: white;">Tourist Guide</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>


              </button>

            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                 
                  
                </ul>
                  <ul class="nav navbar-nav login">
                    <li >

                      <a href="index.php?logout=1" class="btn btn-default btn-rounded mb-4 btn-primary"  type="button" name="logout">
                        Sign Out 
                      </a>

                    </li>
                  </ul>
                



            </div>

        </div>
    </nav>
  
  <div class="jumbotron">
    <div class="container-fluid">
      <h1>Find distance between two places. </h1>
      <p> Help you to calculate your travelling distance , trvelling time and in showing routes.</p>
</div>
  </div>
<div class="form-control" id="mapform">


  <form id="formmap">
    <div class="form-control formclass">
    <div class="">
     
    <label for="from" class=""> <img src="https://fonts.gstatic.com/s/i/googlematerialicons/place/v15/24px.svg"/><b>From :</b></label>
      
    <div class="">
      <input type="text" class="from form-control" placeholder="Origin" name="origin" id="origin">
      </div>
    </div>

    <div class="">
      
      <label for="to" class="" > <img src="https://fonts.gstatic.com/s/i/googlematerialicons/place/v15/24px.svg"/><b>To :</b></label>
      
      <div  class="">
      <input type="text" class="to  form-control " placeholder="Destionation" name="destination" id="destination"> 
      </div>  
    </div>
    
    </div>
  </form>
  <div class="form-control">
      <button class="btn btn-info"  id="submit" onclick="calculateroute()">Search</button>
    </div>

</div>
  
  
  <!--messages section  for distance travel time ,,  -->
<div class="" id="messages">

<h4>Here u will see details of your origin point, destination point, diriving distance and trip duration in hours.</h4>

</div>
  
  
<!--map section. -->  
  
<div id="map"></div>



<!--footer section-->
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

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5XcIFNEk9Z8HSfbQgv67bx_syW31r6NA&libraries=places"
      
    ></script>
   
    <script>
      //create a direction service object to use the route method and get  directions
var directionsService = new google.maps.DirectionsService();
var directionsRenderer = new google.maps.DirectionsRenderer();
var directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
var mylatlng = {lat:28.7041 , lng:77.1025};
var options={
  center : mylatlng,
  zoom : 10,
  mapTypeId : google.maps.MapTypeId.ROADMAP,
};

//create map 

var  map = new google.maps.Map(document.getElementById("map"),
  options);

//create autocomplete object feature for origin and destination ..

var mapoptions = {
  types : ['(cities)']
};
var input1 = document.getElementById("origin");
var autocomplete1 = new google.maps.places.Autocomplete(input1 , mapoptions);

var input2 = document.getElementById("destination");
var autocomplete2 = new google.maps.places.Autocomplete(input2 , mapoptions);

// bind the directions renderer to the map

directionsDisplay.setMap(map);

//call the function now 

function calculateroute(){
  // create request
  var request ={
    origin : document.getElementById("origin").value,
    destination : document.getElementById("destination").value,
    travelMode : google.maps.TravelMode.DRIVING,
    unitSystem : google.maps.UnitSystem.MATRIC,
  };
  //pass the request to the route method

  directionsService.route(request , function(result , status){
    if(status == google.maps.DirectionsStatus.OK){
      //get distance and time
      console.log(result);/// for only debugging purpose and for finding route purpose 
      const output = document.querySelector("#messages");
      output.innerHTML = "<div class='alert alert-info'>Origin : "+document.getElementById("origin").value+".<br /> Destination : "+document.getElementById("destination").value+".<br /> Driving distance : "+result.routes[0].legs[0].distance.text+".<br /> Duration : "+result.routes[0].legs[0].duration.text+".</div>";
      const output2 =document.querySelector("#steps");
      
      //display the routes

      directionsDisplay.setDirections(result);

    }else{
      //delete the route from map

      directionsDisplay.setDirections({routes:[]});

      //center map again

      map.setCenter(mylatlng);

      //show error messages

      output.innerHTML = "<div class='alert danger'>could not retrieve driving distance</div>";

    }
  });
}





</script>



  </body>
</html>