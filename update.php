<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php
include "menu.php";
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "lab07";
 session_start();
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 $query = "SELECT * FROM user";
 $result = mysqli_query($conn,$query);
 
?>
<!DOCTYPE html>
<html>
<head>  
</head>
<body>
<table>

<tr>
<td>Id</td>
<td>First Name</td>

<td>Email id</td>
<td>Age</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
 
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["Id"]; ?></td>
<td><?php echo $row["First Name"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Age"]; ?></td>
<td><a href="UpdateAction.php?userid=<?php echo $row["Id"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
<?php
 include "Menu.php";
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "lab07";
 session_start();
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit'])) {
    $sql="UPDATE user set First Name='" . $_POST['first_name'] . "',Email='" . $_POST['email'] . "',Age='" . $_POST['age'] . "' WHERE Id='" .  $_GET['userid'] . "'";
 
    mysqli_query($conn,$sql);
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE Id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
 
</div>

First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['First Name']; ?>">
<br>
 
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>

Password: <br>
 
<input type="text" name="age"  value="<?php echo $row['Password']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>