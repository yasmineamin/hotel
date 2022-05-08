<?php

session_start();


include("saveconection.php");
include("fuctions.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(!empty($email)&& !empty($password) && !is_numeric($email))
	{
		
		//read from database
		$query=" select * from users where email=$email limit 1 ";
	    $result=mysqli_query($conn,$query); 
		
		if($result)
		{
			 if($result && mysqli_num_rows($result)>0)
		              {
		                	$user_data=mysqli_fetch_assoc($result);
			                 
							 if($user_data['password']===$password)
							 {
								 $_SESSION['user_data']=$user_data['user_id'];
								 header("location:index.php");
                                	die;
							 }
				
		              }   
		}
		echo "wrong info";
	
	}	
    else
	echo "please enter a valid information";


}

?>
<!DOCTYPE html>
<html>
<head>

<title>LOGIN</title>
</head>
<body>
<style type="text/css">
//textbox
#text{
	height:25px;
	border-radius:5px;
	padding:4px;
	border:solid thin #aaa;
}
#button{
	padding:10px;
	width:100px;
	color:white;
	background-color:ligthblue;
	
	
}
#box{
	background-color:grey;
	margin:auto;
	width:300px;
	padding:20px;
	
}
</style>
<div id="box">
<form method="post">
<div style="font-size:20px;margin:10px;COLOR:white;">LOGIN</div>
EMAIL<input type="text" name="username"><br>
PASSWORD<input type="password" name="password"><br>
<input type="submit" value="login"><br>

<a href="signup.php">CLICK TO SIGNUP</a><br>

</form>
</div>

</body>

</html>