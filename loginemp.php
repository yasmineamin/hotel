<?php

session_start();


include_once("saveconection.php");
include_once("fuctions.php");
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
	font-weight: 600;
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

@media (max-width: 430px) {
    div.container {
        width: 300px;
    }
    
}
</style>
</head>
<body>


    <div class="container">
        
        <form class="login-email">
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
