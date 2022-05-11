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
<title>SIGN UP</title>
<!--<link rel="stylesheet" type="text/CSS"  href="stylesheet.css" />-->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(download (2).jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
div.container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
div.container p.signup-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}
div.container div.signup-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
}

div.container div.signup-social a {
    padding: 12px;
    margin: 10px;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    text-decoration: none;
    font-size: 1rem;
    text-align: center;
    color: #FFF;
    transition: .3s;
}

div.container div.signup-social a i {
    margin-right: 5px;
}
div.container div.signup-social a.facebook {
    background: #4267B2;
}

div.container div.signup-social a.twitter {
    background: #1DA1F2;
}

div.container div.signup-social a.google-plus {
    background: #db4a39;
}

div.container div.signup-social a.linkedin {
    background: #0e76a8;
}

div.container div.signup-social a.facebook:hover {
    background: #3d5fa3;
}

div.container div.signup-social a.twitter:hover {
    background: #1991db;
}

div.container div.signup-social a.google-plus:hover {
    background: #ca4334;
}

div.container div.signup-social a.linkedin:hover {
    background: #0b5c81;
}

div.container form.signup div.input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

div.container form.signup div.input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}

div.container form.signup div.input-group input:focus,
div.container form.signup div.input-group input:valid {
    border-color: #a29bfe;
}

div.container form.signup div.input-group button.btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

div.container form.signup div.input-group button.btn:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
}
p.login-signup-text {
    color: #111;
    font-weight: 600;
}

p.login-signup-text a {
    text-decoration: none;
    color: #6c5ce7;
}
@media (max-width: 430px) {
    div.container {
        width: 300px;
    }
    div.container div.signup-social {
        display: block;
    }
    div.container div.signup-social a {
        display: block;
    }
}
</style>
</head>
<body>


    <div class="container">
        <p class="signup-text">SignUp with social media</p>
        <div class="signup-social">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Google
 Plus</a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
        </div>
        <form class="signup">
		<p class="signup-text">Sign Up</p>
            <div class="input-group">
                <input type="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
			<div class="input-group">
                <input type="confirm-password" placeholder="Confirm Password" required>
            </div>
            <div class="input-group">
                <button class="btn">Sign Up</button>
            </div>
		<p class="login-signup-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>
    </div>
</body>

</html>
