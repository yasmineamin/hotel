
<html>
	<head>
	<link href="icons.png" rel="icon">
	<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
		<style>
			.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
nav.navbar.navbar.dark{
color:                 rgba($white, .55);
}
<!--
navbar-dark-hover-color:           rgba($white, .75);
navbar-dark-active-color:          $white;
navbar-dark-disabled-color:        rgba($white, .25);
navbar-dark-toggler-icon-bg:       url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#{$navbar-dark-color}' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
navbar-dark-toggler-border-color:  rgba($white, .1);-->
		</style>
	</head>
	<body>	
<div class="topnav">	
		<nav class="navbar navbar-dark bg-dark">
 
			<?php
				if(!empty($_SESSION['ID'])) 
				{
					echo "Welcome ".$_SESSION['Name'];
					
				}
				?>
				<a class="navbar-brand" href="Myproject/home.html">
					<img src="icons.png" alt="hotel_logo" width="30" height="24" class="d-inline-block align-text-top">
				</a>
				<a href="recep_home.php">Home</a>
				<a href='recep_add.php'>Add User</a>
				<a href='recep_delete.php'>Delete User</a>
				<a href='recep_update.php'>Update User</a>
				<a href='recep_view_details.php'>View all Users</a>
				<a href='recep_search.php'>Search User</a>
		</nav>
		</div>
		<br><br>
	</body>
</html>