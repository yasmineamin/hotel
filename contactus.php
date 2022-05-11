<?PHP

if(isset($_POST['submit']))
{
	
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "" ;
$subject = "Mail From website";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" ."CC: somebodyelse@example.com";
if($email!=NULL || $message!=NULL || $name!=NULL)
{
    mail($to,$subject,$txt,$headers);
	header("Location:contactus.php");
	
	die;
}


}


?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title> contact us </title>
<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body
{

  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background:radial-gradient(circle, rgba(15,34,84,1) 0%, rgba(61,73,118,1) 100%);
  
  }
  .container{
  max-width: 600px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 15px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
  
  h1{
	  text-align:center;
  }
  
  
  
  input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}


 button{
	   height: 40px;
   width: 10px;
   margin: 20px 0
  
   height: 50%;
   width: 50%;
   border-radius: 10px;
   border: none;
   color: #fff;
   font-size: 25px;
   font-weight: 300;
   letter-spacing: 1px;
   cursor: pointer;
 
   background: rgb(11,20,68);
   
 }
 button:hover{

  background:midnightblue;
  }
 @media(max-width: 200px){
 .container{
  max-width: 50%;
}
button{
  
 float : right;
  
  }




</style>
</head>

<body>
<main>

<h1> contact us</h1>
<p>
<form class="contact-form" action="contactus.php " method="post">
<div class="container">
FULL NAME<input type="text" name="name" placeholder="type your full name here">
EMAIL<input type="text" name="email" placeholder="type your email here">
MESSAGE<input type="text" name="message" placeholder="type your message here">
</div>
<button type="submit" name="submit">SUBMIT</button>


</form>









</main>
</body>
</html>