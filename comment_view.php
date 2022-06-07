<!DOCTYPE html>
<html>
<head>
<style>
table {

  border-collapse: collapse;
  width: 70%;
}

th, td {

  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th{
background-color:cyan;
}

tr:hover {background-color: coral;}
</style>
</head>
<body>

<h2>COMMENTS</h2>



<table>
  <tr>
    <th>Full Name</th>
    <th>Email</th>
	<th>Message</th>
 
  </tr>
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$DB = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,email, message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["email"]." </td><td> ".$row["message"]."";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</table>

</body>
</html>
