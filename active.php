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
    
    if (isset($_GET['id'])){
  
  
        $status_id=$_GET['id'];
  
    
        $sql="UPDATE `login` SET 
             `status`=1 WHERE id='$status_id'";
  
        mysqli_query($con,$sql);
    }
//redirect to the page of quality control
    header('location: cq_comment_view.php');
?>