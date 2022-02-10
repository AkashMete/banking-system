<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bankingdata";
$port = 3307;
$conn =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database,$port);

if(!$conn){
	
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

?>