<html>

<head>
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

<?php
session_start();
include "recep_menu.php";?>
<title>Add User</title>
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
	
	table {
  border-spacing: 1em .5em;
  padding: 0 2em 1em 0;
  border: 1px solid orange;
}

td {
  width: 1.5em;
  height: 1.5em;
  background: #d2d2d2;
  text-align: center;
  vertical-align: middle;
}
</style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$DB="login";

$conn = mysqli_connect($servername,$username,$password,$DB);
?>



 
<form action="" method="post">
<h1>Rooms</h1>
<hr>
<h3>Add new room</h3>

<div class="input-group">
 Room Type <br>
 <input type="text" placeholder="Single ,double ,triple,etc.">
 <br>
 Room Name <br>
 <input type="text" placeholder="Deluxe, Luxury, Family,etc.">
 <br>
  <div class="input-group">
  <input type="submit" value="Add" name="Add">
 </div>
</form>
<?php
include_once "recep_menu.php";


$conn =new mysqli('localhost', 'root', '' , 'login');

$query = '';
$sqlScript = file('login.sql');
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($conn,$query) or die( mysqli_error($conn));
		$query= '';		
	}
}



?>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$DB="login";


// Create connection
$conn = mysqli_connect($servername,$username,$password,$DB);
$query = "SELECT * FROM rooms";
$result = mysqli_query($conn,$query)or die( mysqli_error($conn));
 

?>
<h2> List of rooms</h2>
<form method="post" action="">
<table >
<thead>
<tr>

	<th> Room Number</th>
	<th>Room Name</th>
	<th>Type</th>
	<th>Price per night</th>
  <th>Actions</th>
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)or die( mysqli_error($conn))) 
{
    
?>
<tr>
  
	<td><?= $row['room_number']; ?></td>
	<td><?= $row['room_name']; ?></td>
	<td><?=  $row['type']; ?></td>
	<td><?=  $row['price']; ?></td>
	<td><?=  $row['actions']; ?></td>
	
  
	 
</tr>
<?php
 
}
?>
</table>
 
</form>









</body>
</html>