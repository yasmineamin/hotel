<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
	$user_name=$_POST['user_name'];
	$rating=$_POST['rating'];
	$review=$_POST['review'];
	
	
	$sql = "INSERT INTO rating(user_name,rating ,review) values ('$user_name','$rating','$review')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "your review has been sent";
	
}
else
{
	echo "fail to insert";
}


}

$conn->close();
?>

<html>
  <body>

  <p>Let us know how we're doing!</p>

  <form action="rating.php" method="POST">

      Your name: <input type="text" name="user_name" required><br><br>

      How many stars would you give us? 
        <select name="rating">
          <option value="1">1 star</option>
          <option value="2">2 stars</option>
          <option value="3">3 stars</option>
          <option value="4">4 stars</option>
          <option value="5">5 stars</option>
        </select><br><br>

      Your review: <br>
        <textarea name="review" rows="10" cols="30"></textarea><br><br>

      <input type="submit" value="Submit" name="submit">

  </form>

</body>
</html>