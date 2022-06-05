<html>

<head>
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">

<?php
session_start();
include "recep_menu.php";?>
<title>Add User</title>
<style>
body {
	  margin: 0;
	  background: #f2f2f2;
	  width: 100%;
    }
	div.input-group{
	padding:10px 20px;
	font-size: 1rem;
	}
	form{
	margin-top:20px;
	}
</style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$DB="login";

$conn = mysqli_connect($servername,$username,$password,$DB);
$emailError="";

if(isset($_POST['Submit'])){  
	 
    $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
    if ($email == true) {
    
      } else {
        echo("$email is not a valid email address");
      }
     if( strlen($_POST["Password"])<6)
     {
        echo("Password Not valid");
     }
  
 

if (filter_var($_POST["Age"], FILTER_VALIDATE_INT) ==true) {
 
} else {
  echo("Integer is not valid");
}
 
        
		$sql="insert into user(First Name,Email,Password,Age) values(".$_POST['Name']."','".$_POST["Email"]."','".$_POST["Password"]."',,'".$_POST["Age"]."')";
	 	$result=mysqli_query($conn,$sql)or die( mysqli_error($conn));
		 
 
}
?>

 
<form action="" method="post">
<div class="input-group">
  Name:<br>
  
  <input type="text" name="Name"><br> 
  </div>
  <div class="input-group">
  Email:<br>
  <input type="text" name="Email"> <br> 
  </div>
  <div class="input-group">
  Password:<br>
  <input type="Password" name="Password"><br>
  </div>
  <div class="input-group">
  Age:<br>
  <input type="Password" name="Age"><br>
  </div>
  <div class="input-group">
  <input type="submit" value="Add" name="Add">
 </div>
</form>









</body>
</html>