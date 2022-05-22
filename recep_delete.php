<style>
table, th, td {
  border: 1px solid black;
}
table{
margin-top:20px;
}
body{
background: #f2f2f2;	
}
</style>
<?php
include "recep_menu.php";

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
	$checkbox = $_POST['check'];
	for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i]; 
    $sql="DELETE FROM user WHERE Id='".$del_id."'";
	mysqli_query($conn,$sql);
    $message = "Data deleted successfully !";
    echo ($message);
}
}
?>
<html>
<head>
<title>Delete User</title>
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
</head>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>

	<th> Id</th>
	<th>First Name</th>
	<th>Email</th>
	<th>Age</th>
    <th>Delete </th>
	 
</tr>
</thead>
<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
<tr>
  
	<td><?= $row['Id']; ?></td>
	<td><?= $row['First Name']; ?></td>
	<td><?=  $row['Email']; ?></td>
	<td><?= $row['Age']; ?></td>
    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["Id"]; ?>"></td>
	 
</tr>
<?php
 
}
?>
</table>
<p><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
</form>

</body>
</html>
</html>
