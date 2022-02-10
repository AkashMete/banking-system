<?php
$mysql_hostname = "remotemysql.com";
$mysql_user = "EeMQv0iRGM";
$mysql_password = "HK2n9UyJss";
$mysql_database = "bankingdata";
$port = 3306;
$conn =  mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database,$port);

if(!$conn){
	
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

?>
