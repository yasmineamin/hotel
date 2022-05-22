<html>
<head>
</head>
<body>
<html>
	<head>
	<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
		<style>
			.topnav{
				background-color: purple;
				overflow:hidden;
				color: white;
				font-size: 17px;
				padding: 14px 16px;
				position:fixed;
			}
			.topnav a{
				float:left;
				display:block;
				color: white;
				text-align: center;
				padding: 0px 16px;
				text-decoration: none;
				font-size: 17px;
			}
			.topnav a:hover{
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
					echo"<a href='recep_home.php'>Home</a>";
					echo"<a href='recep_add.php'>Add User</a>";
					echo"<a href='recep_delete.php'>'Delete User</a>";
                    echo"<a href='recep_update.php'>Update User</a>";
                    echo"<a href='recep_view_details.php'>View All Users</a>";
                    echo"<a href='recep_search.php'>Search</a>";
				}
				else
				{
					echo"<a href='recep_home.php'>Home</a>";
					echo"<a href='recep_add.php'>Add User</a>";
					echo"<a href='recep_delete.php'>Delete User</a>";
                    echo"<a href='recep_update.php'>Update User</a>";
                    echo"<a href='recep_view_details.php'>View All Users</a>";
                    echo"<a href='recep_search.php'>Search</a>";
				}
				?>
		</div>
		<br><br>
	</body>
</html>













</body>    
</html>
