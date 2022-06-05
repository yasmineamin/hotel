<?php

session_start();


include_once("saveconnection.php");
include_once("functions.php");
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
	 	$result=mysqli_query($conn,$sql);
		 
 
}

}
/* $username = $_POST['username'];
    $userpass = $_POST['password']; 

    if (strcmp($username, "3495062250") && strcmp($password, "12smith00") ) { 
    header('location: account-dashboard/client_349506_2243/index.html');

   } else{ header('location: error.html'); }*/
   
	/*  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $con->real_escape_string($_POST['username']);
      $password = $con->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM staff WHERE username = '$username'";
        $result1 = $con->query($query);
        if($result1->num_rows > 0){
            $row = $result1->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['fname'] = $row['fname'];
            header("Location:recep_home.php");
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }*/
?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
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
	background:radial-gradient(circle, rgba(15,34,84,1) 0%, rgba(61,73,118,1) 100%);
}
div.container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
div.container p.login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}
div.container div.login-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
}

div.container div.login-social a {
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

div.container div.login-social a i {
    margin-right: 5px;
}
div.container div.login-social a.facebook {
    background: #4267B2;
}

div.container div.login-social a.twitter {
    background: #1DA1F2;
}

div.container div.login-social a.google-plus {
    background: #db4a39;
}

div.container div.login-social a.linkedin {
    background: #0e76a8;
}

div.container div.login-social a.facebook:hover {
    background: #3d5fa3;
}

div.container div.login-social a.twitter:hover {
    background: #1991db;
}

div.container div.login-social a.google-plus:hover {
    background: #ca4334;
}

div.container div.login-social a.linkedin:hover {
    background: #0b5c81;
}

div.container form.login-email div.input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

div.container form.login-email div.input-group input {
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

div.container form.login-email div.input-group input:focus,
div.container form.login-email div.input-group input:valid {
    border-color: #a29bfe;
}

div.container form.login-email div.input-group button.btn {
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

div.container form.login-email div.input-group button.btn:hover {
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
    div.container div.login-social {
        display: block;
    }
    div.container div.login-social a {
        display: block;
    }
}
</style>
</head>
<body>


    <div class="container">
        <p class="login-text">Login with social media</p>
        <div class="login-social">
            <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="https://twitter.com/i/flow/login" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="https://myaccount.google.com/" class="google-plus"><i class="fa fa-google-plus"></i> Google
 Plus</a>
            <a href="https://www.linkedin.com/login" class="linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
        </div>
        <form class="login-email">
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Enter your E-mail or username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Enter your password" required>
            </div>
            <div class="input-group">
                <button class="btn">Login</button>
            </div>
			<p class="login-signup-text">Don't have an account? <a href="signup.php">Register Here</a>.</p>
        </form>
    </div>
</body>

</html>