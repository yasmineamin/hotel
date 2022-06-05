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
	mysqli_query($conn,$sql)or die( mysqli_error($conn));
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

<div style="margin-left:2%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p>
				</td>
				<tr>
					<td><b>ID: </b></td>
					<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
					<td><?php echo $row[2] ?><br></td>
					<?php
					}
					?>
				</tr>
				<tr>
					<td><b>First name: </b></td>
					<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
					<td><?php echo $row[0] ?><br></td>
					<?php
					}
					?>
				</tr>
				<tr>
					<td><b>Email address: </b></td>
					<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
					<td><?php echo $row[3] ?><br></td>
					<?php
					}
					?>
				</tr>
				<tr>
					<td><b>Age: </b></td>
					<?php
 
while($row = mysqli_fetch_array($result)) 
{
    
?>
					<td><?php echo $row[5] ?><br></td>
					<?php
					}
					?>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
	<div class="button">
<button type="submit" class="btn btn-success" name="save">DELETE</button>
</div>

</body>
</html>
