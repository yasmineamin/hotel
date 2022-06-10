<!DOCTYPE html>
<html>
<head>
	<title>Recepitionist Room Book</title>
		<?php

include "recep_menu.php";
?>
</head>
<style>
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
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
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
	input#Cancel:hover{
		background-color:red;
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
	
	<div style="margin-left:1%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 1%; margin-top: 5%; font-size: 28px;"></p>
			<table class="basic_box">
				<tr>
					<th colspan="3"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Room Details</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Number of beds</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>Single Bedded</td>
					<td>1</td>
					<td>1000</td>
				</tr>
				<tr>
					<td>Double Bedded</td>
					<td>2</td>
					<td>1800</td>
				</tr>
				<tr>
					<td>Triple Bedded</td>
					<td>3</td>
					<td>2250</td>
				</tr>
				<tr>
					<td>Four Bedded</td>
					<td>4</td>
					<td>3000</td>
				</tr>
			</table><br><br>
			<form class="basic_box" action="booking1.php" method="post">
				<table>
					<br><br>
					<tr>
					<td>Number of adults:<input type="text" name="noadults"></td>
					</tr>
					<tr>
					<td>Number of children:<input type="text" name="nochild"></td>
					</tr>
					<tr>
						<td style="text-align: left;">Select room type:</td>
						<td style="text-align: left;">
							<select name="rooms" required>
								<option value="">Select</option>
								<option value="Single bed">Single bedded</option>
								<option value="Double bed">Double bedded</option>
								<option value="Triple bed">Triple bedded</option>
								<option value="Four bed">Four bedded</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-in date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkin">
						</td>
					</tr>
					<tr>
						<td style="text-align: left;">Enter check-out date:</td>
						<td style="text-align: left;">
							<input type="date" name="checkout">
						</td>
					</tr>
				</table>
				<table>
					<br>
					<tr>
						<th>Features</th>
						<th>Service Cost per day</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="ac" value="on">AC</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="breakfast" value="on">Breakfast</td>
						<td style="text-align: center;">150</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="lunch" value="on">Lunch</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="snacks" value="on">Evening Snacks</td>
						<td style="text-align: center;">120</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="dinner" value="on">Dinner</td>
						<td style="text-align: center;">250</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="swimming" value="on">Swimming Pool Access</td>
						<td style="text-align: center;">300</td>
					</tr>
					<tr><br></tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
						</tr>
						<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Cancel" id="Cancel"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>