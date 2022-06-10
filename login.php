<?php

$servername="localhost";
$username="root";
$password="";
$DB="login";

$conn = mysqli_connect($servername,$username,$password,$DB);
 
 if($_SERVER["REQUEST_METHOD"] == "POST") 
{
//login :email-password-role->check 
	$email=$_POST ['email'];
	$password=$_POST['password'];
	//$role= $_POST['role'];
	
$sql = "SELECT email,password,role FROM login WHERE email='$email' and password='$password'" ;

	

$result=mysqli_query($conn,$sql);
	if(mysqli_fetch_row($result)>0)
	{
		$r=mysqli_fetch_assoc($result);
		$SESSION['id']=$r['id'];
		header('location:room.php');
	}

		else
			echo '<script>alert("email does not exist please signup first")</script>';
}
/*if($result)
{
	
 //wrong email
 $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email) 
{
    echo "This email adress isn't valid!";
    exit(0);
}

}
if($row['role']=="recep")
	{
		
		header("location:recep_home.php");
		
		
	}
	
		if($row['role']=="guest")
	{
		
		header("location:index.php");
		
	}
	if($row['role']=="quality")
	{
		
		header("location:qc_home.php");
		die;
		
	}
*/


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
            <a href="#" class="facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Google
 Plus</a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
        </div>
        <form class="login-email" method="post">
            <p class="login-text">Login with email</p>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password"placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="login">Login</button>
            </div>
		<p class="login-signup-text">Don't have an account? <a href="signup.php">Signup Here</a>.</p>
        </form>
    </div>
</body>

</html>