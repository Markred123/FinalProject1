<?php 

/* 
Database Information, 

*/
define('DB_SERVER','den1.mysql5.gear.host');
define('DB_USERNAME','secureapp2');
define ('DB_PASSWORD', 'P@ssword123');
define ('DB_NAME', 'secureapp2');



$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);



// This will check if the database has been connected
if($link === false){
    die("ERROR: Connection not established.".mysqli_connect_error());
}














?>