<?php
$servername="localhost";
$username="root";
$password="";
$database="myguest_db";


//create connection
$conn= mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn){
  die("connection failed".mysqli_connect_error());
}


?>