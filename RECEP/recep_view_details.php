<!DOCTYPE html>
<html>
<head>
<title>GRND | Recep view all users </title>
 <link href="icons.png" rel="icon">
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
<style>
body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table tr td:empty {
  width: 50px;
}
  
table tr td {
  padding-top: 10px;
  padding-bottom: 10px;
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
	button{
	align:center;
margin-left:-50px;
   left:50%;
   width:100px;
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


session_start();
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
$query = "SELECT * FROM login";
$result = mysqli_query($conn,$query)or die( mysqli_error($conn));
 

?>
<form method="post" action="">
<table >
<thead>
<tr>

	<th> Id</th>
	<th>Username</th>
	<th>Email</th>
	
  
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)or die( mysqli_error($conn))) 
{
    
?>
<tr>
  <!--
	<td><?= $row['Id']; ?></td>
	<td><?= $row['Username']; ?></td>
	<td><?=  $row['Email']; ?></td>
	
  -->
	 
</tr>
<?php
 
}
?>
</table>
 
</form>

</body>
</html>
</html>