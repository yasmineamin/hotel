<html>
<head>
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
	<title>User Signed In</title>
	<style>
body {
	  margin: 0;
	  background: #f2f2f2;
	  width: 100%;
    }
	div.input-group{
	padding:10px 20px;
	font-size: 1rem;
	}
	form{
	margin-top:20px;
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
		
		
	<ul>
		<li><a href="user_view_details.php">My Info</a></li>
		<li><a href="booking.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
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