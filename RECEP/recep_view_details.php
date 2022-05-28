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
 

?>
<html>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th> Id</th>
	<th>First Name</th>
	<th>Email</th>
	<th>Age</th>
  
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)or die( mysqli_error($conn))) 
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
?>
</table>
 
</form>

</body>
</html>
</html>