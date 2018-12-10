<?php
define('DB_USER', "admin"); // db user
define('DB_PASSWORD', "admin"); // db password (mention your db password here)
define('DB_DATABASE', "androiddeft"); // database name
define('DB_SERVER', "172.17.0.3"); // db server
 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
?>