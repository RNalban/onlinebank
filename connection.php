<?php
$username = "root";
$password = "";
$server = "localhost";
$db="bank";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

?>