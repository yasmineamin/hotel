<!DOCTYPE html>
<html>
<head>
	<title>User Payment</title>
	<?php

include "user_menu.php";
?>

<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
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
		width: 1000px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
table {
  border-spacing: 2em .7em;
  padding: 0 2em 1em 0;
  
}

td {
  width: 4em;
  height: 1.5em;
 
  text-align: center;
  vertical-align: middle;
}
	div.tab2{
	text-align-last: justify;
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
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql)or die( mysqli_error($conn));
		$row=mysqli_fetch_row($result); 
		?>
	
	<div style="margin-left:1%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 1%; margin-top: 5%; font-size: 28px;"></p>
			<div class="basic_box"><table>
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Payment</b></p>
				</td>
				</tr>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli($host,$username,$pass,$DB);
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from confirmed_booking";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result)or die( mysqli_error($conn)))
				    	{
				    		?>
				    		<td><?php echo $row[15]; ?></td>
				   			<td><?php echo $row[2]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				   			<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[6]; ?></td>
				    		<td><?php echo $row[14]; ?></td>
				</tr>
								<?php
									}
									mysqli_free_result($result); 
								}?>
				</table><br><br>
			</div>
			<div>
<table>
<tr>
	<th>Enter booking ID: </th>
	<td>
</tr>
	

</table>


</div>			
	
				
	
	</div>
	<table class="tab2">
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="payment2.php" method="post">
							<input type="number" name="book_id">
							</form>
					</td>
					<td style="text-align: center;"><button type="submit">Pay Now</button></td>
				</tr>
				
				</table>
</body>
</html>
