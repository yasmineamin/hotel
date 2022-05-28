<html>
	<head>
	<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
		<style>
			div.topnav{
			    
				background-color: purple;
				overflow:hidden;
				color: white;
				font-size: 17px;
				padding: 14px 16px;
				position:fixed;
			}
			div.topnav a{
				float:left;
				display:block;
				color: white;
				text-align: center;
				padding: 0px 16px;
				text-decoration: none;
				font-size: 17px;
			}
			div.topnav a:hover{
				background-color: #CBC3E3;
				color: white;
			}
		</style>
	</head>
	<body>		
		<div class="topnav" >
			<?php
				if(!empty($_SESSION['ID'])) 
				{
					echo "Welcome ".$_SESSION['Name'];
					echo"<a href='user_home.php'>Home</a>";
					echo"<a href='user_view_details.php'>My Info</a>";
                    echo"<a href='user_room_status.php'>Show Booking Status</a>";
                    echo"<a href='user_booking_history.php'>Booking History</a>";
                    echo"<a href='user_cancel_room.php'>User cancel room</a>";
					echo"<a href='booking.php'>Book A Room</a>";
					echo"<a href='user_payment.php'>Payment</a>";
					echo"<a href='logout.php'>Logout</a>";
				}
				
				else
				{
					echo"<a href='user_home.php'>Home</a>";
					echo"<a href='user_view_details.php'>My Info</a>";
                    echo"<a href='user_room_status.php'>Show Booking Status</a>";
                    echo"<a href='user_booking_history.php'>Booking History</a>";
                    echo"<a href='user_cancel_room.php'>User cancel room</a>";
					echo"<a href='booking.php'>Book A Room</a>";
					echo"<a href='user_payment.php'>Payment</a>";
					echo"<a href='logout.php'>Logout</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>