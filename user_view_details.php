<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
	<title>User Signed In</title>
	<?php

include "user_menu.php";
?>
</head>
<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 30px;
	}
	td {
		padding: 15px;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	.decor {
		font-family: Times New Roman;
	}
</style>
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
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql)or die( mysqli_error($conn));
		$row=mysqli_fetch_row($result);
		?>
		
	<div style="margin-left:2%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p>
				</td>
				<tr>
					<td><b>Name: </b></td>
					<td><?php echo $row[2] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone number: </b></td>
					<td><?php echo $row[0] ?><br></td>
				</tr>
				<tr>
					<td><b>Email address: </b></td>
					<td><?php echo $row[3] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of birth: </b></td>
					<td><?php echo $row[5] ?><br></td>
				</tr>
				<tr>
					<td><b>ID Proof: </b></td>
					<td><?php echo $row[4] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
</html>
