<?php

$host="localhost";
$username="root";
$pass="";
$DB="login";


if(!$conn=mysqli_connect($host,$username,$pass,$DB))
{
	die("FAILED TO CONNECT");
}



?>