<html>
<head>
<title>RECEP VIEW | Search rooms</title>
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
	table {
		font-size: 30px;
	}
	td {
		padding: 60px 0;
	}
	tr{
	padding:60px;
	}
	table tr td:empty {
  width: 50px;
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
table tr td {
  padding-top: 10px;
  padding-bottom: 10px;
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
	p.button{
	align:center;
margin-left:-70px;
   left:50%;
   width:100px;
	}
	div.container{
	
            width: 1000px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            padding: 40px 30px;
}
</style>
</head>
<body>


<?php
include_once "recep_menu.php";

session_start();
$servername="localhost";
$username="root";
$password="";
$DB="login";


// Create connection
$conn = mysqli_connect($servername,$username,$password,$DB);

$query = "SELECT * FROM rooms";
$result = mysqli_query($conn,$query)or die( mysqli_error($conn));

if(isset($_POST['save'])){
    $sql="SELECT * from rooms WHERE type='".$_POST['old']."'";
    $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

    echo"<table >
    <tr>
    
        <th>Room number</th>
        <th>Room type</th>
		<th>Availability</th>
        <th>Price</th>
        
      
         
    </tr>";
while($row = mysqli_fetch_array($result)) 
{
    ?>
    <tr>

    <td><?= $row['room_number']; ?></td>
	<td><?= $row['type']; ?></td>
	<td><?=  $row['available']; ?></td>
	<td><?= $row['price']; ?></td>
    </tr>
    <?php
}

}
?>
<div class="container">
<form method="post" action="">
Rooms
<input type="text" name="old">
 
<p><button type="submit" class="btn btn-success" name="save" >Search</button></p>
</div>


</body>
</html>