<!DOCTYPE html>
<html>
<head>
<title>Confirm Room Book</title>
	<?php

include "user_menu.php";
?>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	
	p {
		font-size: 24px;
	}
	
	a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
</style>
</head>
<body>
	<?php
		session_start();


include_once("saveconnection.php");
include_once("functions.php");
		$conn = new mysqli($host,$username,$pass,$DB);
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$bid = $_POST["book_id"];
		$sql = "SELECT * from user_room_book";
		$result=mysqli_query($conn,$sql) or die( mysqli_error($conn));
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[15])
			{				
				$sql1 = "DELETE FROM user_room_book WHERE book_id='$bid'";
				mysqli_query($conn,$sql1);
				header("Location: user_cancel_room1.php");
				break;
			}
		}
	?>
	
	
	<div style="margin-left:5%;padding:1px 16px;height:1000px;">
		<p>Room Booking has been cancelled successfully.<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<a href="user_view_details.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>

