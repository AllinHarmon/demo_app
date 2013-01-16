<?php
//sitewide configuration data here

//set local timezone
putenv('TZ=US/Eastern');

//create DB constants
define('HOST', 'localhost');
define('DBNAME', 'silvriv_imd410test');
define('USER', 'silvriv_allinh');
define('PASS', 'Ky1@r_$t3rN');

//connect to DB
$db = new mysqli(HOST, USER, PASS, DBNAME);

if(mysqli_connect_errno())
{
	echo 'Error: Could not connect to database. Pleae try again later.';
	exit();	
}

?>