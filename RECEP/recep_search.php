<html>
<head>
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
		padding: 60px;
	}
	tr{
	padding:60px;
	}
	table tr td:empty {
  width: 50px;
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

$query = "SELECT * FROM user";
$result = mysqli_query($conn,$query)or die( mysqli_error($conn));

if(isset($_POST['save'])){
    $sql="SELECT * from user WHERE Email='".$_POST['old']."'";
    $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

    echo"<table >
    <tr>
    
        <th> Id</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Age</th>
      
         
    </tr>";
while($row = mysqli_fetch_array($result)) 
{
    ?>
    <tr>

    <td><?= $row['Id']; ?></td>
	<td><?= $row['First Name']; ?></td>
	<td><?=  $row['Email']; ?></td>
	<td><?= $row['Age']; ?></td>
    </tr>
    <?php
}

}
?>

<form method="post" action="">
User Email:
<input type="text" name="old">
 
<p><button type="submit" class="btn btn-success" name="save" >Search</button></p>



</body>
</html>