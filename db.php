<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "e-cos";


 //create connection
 $con = mysqli_connect($servername, $username, $password, $db);


 //check connection
 if(!$con){
 	die("connection failed: " .mysqli_connect_error());
 }




?>