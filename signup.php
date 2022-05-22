<?php




$servername="localhost";
$username="root";
$password="";
$DB="login";

$conn = mysqli_connect($servername,$username,$password,$DB);
  

if(isset($_POST['submit']))
{
	 $username= $_POST['username'];
	$email=  $_POST ['email'];
	$password=   $_POST['password'];
	$cpassword= $_POST ['cpassword'];
	
  
	$sql="INSERT INTO users(username,email,password,cpassword) VALUES ('$username','$email','$password','$cpassword')";

$result=mysqli_query($conn,$sql);
if($result)
{

  //not matching
 if (!($password == $cpassword) )
 {
  echo "not matching passwords";
  die;
 }
 //wrong email
 $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email) 
{
    echo "This email adress isn't valid!";
    exit(0);
}

 else
 {
	 
	header("location:index.php");
	die;
 }
 
  
  /*
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
	 ///exit(0);
  }
   if(!$lowercase )
   {
	   echo "Password does not include lowercase character";  
	 //exit(0);
   }
   if(!$number )
   {
	   echo "Password oes not include a number ";  
	// exit(0);
   }
  if( !$specialchars ) 
  {
   
    echo "Password does not have special characters ";
	//exit(0);
  }
  echo "r111";
 
 
	//wrong email
 $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email) 
{
    echo "This email adress isn't valid!";
    exit(0);
}
*/

 
 
 
 
 
 
 
 
 
 
 
}
	else 
		echo"please re-enter the data";
}


//check password
  
  
  


	

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
            background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(download (2).jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: white;
        }

        div.container {
            width: 400px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
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
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
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

        div.container form.signup div.input-group input#actual-btn:focus,
        div.container form.signup div.input-group input#actual-btn:valid {
            border-color: #a29bfe;
        }

        div.container form.signup div.input-group button.btn:hover {
            transform: translateY(-5px);
            background: #6c5ce7;
        }

        div.container form.signup div.input-group button.btn2 {
            display: inline-block;
            width: auto;
            padding: 6px 12px;
            text-align: center;
            border: none;
            background: #a29bfe;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s;
            width: 200px;
            margin: 0 auto;
            height: 34px;
            margin-left: -10px;
        }

        div.container form.signup div.input-group button.btn2:hover {
            transform: translateY(-5px);
            background: #6c5ce7;
        }

        p.login-signup-text {
            color: #111;
            text-align: center;
            font-weight: 600;
        }

        p.login-signup-text a {
            text-decoration: none;
            color: #6c5ce7;
        }

        div.container form.signup div.input-group input#actual-btn {
            display: block;
            width: 100%;
            padding: 15px 20px;
            text-align: center;
            border: none;
            border: 2px solid #e7e7e7;
            border-radius: 30px;

            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;

            cursor: pointer;
            transition: .3s;
        }

        div.container form.signup div.input-group input#actual-btn:hover {
            transform: translateY(-5px);

        }

        div.container form.signup div.input-group input[type='radio'] {


            border-radius: 50%;
            width: 25px;
            height: 25px;

            border: 2px solid #999;
            transition: 0.2s all linear;
            margin-right: 5px;

            position: relative;
            top: 4px;
            padding: 10px;
        }

        div.container form.signup div.input-group label.dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        div.container form.signup div.input-group #dot-1:checked label .one,
        div.container form.signup div.input-group #dot-2:checked label .two,
        div.container form.signup div.input-group #dot-3:checked label .three {
            background: midnightblue;
            border-color: #d9d9d9;
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

        .mt-2 {
            margin-top: 3rem;
        }

        .btn222{
            display: inline-block;
            padding: 6px 12px;
            text-align: center;
            border: none;
            background: #a29bfe;
            outline: none;
            border-radius: 30px;
            font-size: 1.2rem;
            color: #FFF;
            cursor: pointer;
            transition: .3s;
            width: 200px;
            margin-left: 4rem;
            height: 34px;
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
        <form class="signup" method="POST" action="signup.php">
            <p class="signup-text">Sign Up</p>

            <div class="input-group">
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
            </div>
            <div class="input-group">

                <input type="text" placeholder="Enter your number" required>
            </div>


            <div class="input-group">
                <span class="details"> National Id or birth certificate</span>
            
                <input type="file" id="actual-btn" required>
            </div>



            <div class="input-group mt-2">
                <label for="gender" class="gender-title">Gender :</label>
                <select name="gender" id="gender">
                    <option name="male" value="Male">Male</option>
                    <option name="female" value="Female">Female</option>
                    <option name="none" value="none">Prefer not to say</option>
                </select>

            </div>


            <div class="input-group">
                <button type="submit" name="submit" class="btn">Sign Up</button>
            </div>
            <div class="input-group">
                <p class="login-signup-text">Have an account? </p>
                <a href="login.php" class="btn222">
                    Login
                </a>
            </div>
        </form>
    </div>
</body>

</html>
