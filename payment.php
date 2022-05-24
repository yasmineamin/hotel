<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
<?php

include "user_menu.php";
?>
<style>
	<!--body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	p {
		font-size: 24px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
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
	} -->
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
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
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
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
		$sql = "SELECT * from confirmed_booking";
		$result=mysqli_query($conn,$sql)or die( mysqli_error($conn));
		while ($row=mysqli_fetch_row($result))
	   	{
			if($bid==$row[14])
			{	
				$sql1 = "SELECT * FROM balance";
				$result1 = mysqli_query($conn,$sql1);
				$r = mysqli_fetch_row($result1);
				$r[0] = $r[0] + $row[13];
				$sql2 = "DELETE FROM balance";
				mysqli_query($conn, $sql2);
				$sql2 = "INSERT INTO balance VALUES ('$r[0]')";
				mysqli_query($conn, $sql2);
				$sql2 = "INSERT INTO booked_hist VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[13]','$row[14]')";
				mysqli_query($conn, $sql2);
				$sql2 = "DELETE FROM confirmed_booking WHERE book_id='$bid'";
				mysqli_query($conn, $sql2);
				$sql2 = "UPDATE rooms_count SET available_rooms = available_rooms+1, occupied_rooms = occupied_rooms-1 WHERE room_type='$row[3]'";
				mysqli_query($conn, $sql2);
				header("Location: payment1.php");
			}
		}
	?>
	
	<?php
		
		$sql = "SELECT * from temp_session";
		$result1=mysqli_query($conn, $sql)or die( mysqli_error($conn));
		$row=mysqli_fetch_row($result1); ?>

	<div style="margin-left:5%;padding:1px 16px;height:1000px;">
		<p>Payment has been done successfully.<br></p>
		<P><br>Click Next to get redirected to home.</P>
		<a href="user_view_details.php" style="width: 10%; text-align: center; color: black; border: 3px solid #e6b800;">Next</a>
	</div>
</body>
</html>


