<?php

//$username = "root";
//$password = "";
//$server = "localhost";
//$db="bank";
$username = "b602f590bbebec";
$password = "d9aafa23";
$server = "us-cdbr-east-03.cleardb.com";
$db="heroku_75f8b5c954546c4";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

?>
