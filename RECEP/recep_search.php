<html>
<head></head>
<body>
<style>
body {
	  margin: 0;
	  background: #f2f2f2;
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
</style>

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
<html>
<form method="post" action="">
Email Mail:
<input type="text" name="old">
 
<p><button type="submit" class="btn btn-success" name="save">Search</button></p>

</html>












</body>
</html>