<?php

session_start();
//connect to the database
$link=mysqli_connect("sql301.epizy.com","epiz_29793771","QcuHAXB24qTb","epiz_29793771_guide");
if(mysqli_connect_error()){
    die("Error: Unable to connect : ".mysqli_connect_error());
}


?>