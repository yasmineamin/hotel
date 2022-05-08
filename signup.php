<?php
session_start();


include("saveconection.php");
include("fuctions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$mobile_phone=$_POST['mobile_phone'];

	
	
	//sign up without filling the data 
	if(empty($fname)&& empty($fname) && empty($password) && empty($email)  && empty($mobile_phone) && empty($cpassword))
	{
		echo "please fill the data ";
		exit(0);
	}
	
  //check password
  
  
  //not matching
 if (!($password === $cpassword) )
 {
  echo "not matching passwords";
  exit(0);
 }
  
  
  
  $uppercase = preg_match('[A-Z]', $password);
  $lowercase = preg_match('[a-z]', $password);
  $number    = preg_match('[0-9]', $password);
  $specialchars = preg_match('[^\w]', $password);
  
  if (strlen($password) < 8)
  {
	echo "Password less than 8 characters";  
	 exit(0);
  }
  
  if(!$uppercase )
  {
	  echo "Password does not include uppercase character";  
	 exit(0);
  }
   if(!$lowercase )
   {
	   echo "Password does not include lowercase character";  
	 exit(0);
   }
   if(!$number )
   {
	   echo "Password oes not include a number ";  
	 exit(0);
   }
  if( !$specialchars ) 
  {
   
    echo "Password does not have special characters ";
	exit(0);
  }
  
 
 
	//wrong email
 $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email) 
{
    echo "This email adress isn't valid!";
    exit(0);
}




    //all data entered and valid 
	if(!empty($fname)&& !empty($lname) && !empty($password)&& !is_numeric($fname) && !empty($email) && !empty($mobile_phone) && !empty($cpassword))
	{
		//save to database
		$user_id=random_num(20);
		$query="insert into users(id,user_id,fname,lname,email,password,cpassword,mobile_phone) values('$id','$user_id','$fname','$lname','$email','$password','$cpassword','$mobile_phone')";
	$mysql=mysqli_query($conn,$query);
	header("location:index.php");
	die;
	}	

	
	
	//one of the required data is missing 
	else
         {
		echo "please enter all the required information";

         }

		  $check=mysqli_query($conn,"select * from users where email='$email' and password='$password'  ");
		 $checkrows=mysqli_num_rows($check);

		 
		 if($checkrows>0) 
		 {
           echo "customer exists";
         }
		 else 
		 {  
             //insert results from the form input
      $query = "INSERT IGNORE INTO users(email, password) VALUES('$email', '$password')";

      $result = mysqli_query($conn, $query) or die('Error querying database.');

      mysqli_close($conn);
    }
}
  ?>

		 
		 
		 
		 


<!DOCTYPE html>
<html>
<head>

<title>SIGNUP</title>
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
	width:500px;
	padding:20px;
	
}
</style>
<div id="box">
<form method="post">
<div style="font-size:20px;margin:10px;COLOR:white;">SIGNUP</div>
FIRST NAME<input type="text" name="fname">
<br>
LAST NAME<input type="text" name="lname">
<br>
EMAIL<input type="text" name="email">
<br>
PASSWORD<input type="password" name="password">
<br>
CONFIRM PASSWORD<input type="password" name="cpassword">
<br>
MOBILE PHONE<input type="text" name="mobile_phone">
<br>

<input type="submit" value="signup"><br>



</form>
</div>

</body>

</html>