<html>
<head>
      <title>ContactUs</title>
    <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
     <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='style.css'>
        <link rel='stylesheet' href='style1.css'>
    <style>
        .black-container{
            background-color: black;
            display: flex;
            color:gainsboro;
            padding:10px 10px;
            
        }
        a{
            text-decoration: none;
            color:gainsboro;
}
        
        .in{
             padding:40px 70px;
            
        }
		p.sectext{
			text-align: center; 
			padding: 10px 30px;
		}
		h1{
			text-shadow: 2px 2px #ff0000;
		}
    </style>
    </head>
    
    <body>
        
        
      <div id='navbar' class='home-body-nav'  >
     <a id="logout" href="javascript:goBack()" ><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Back</a>
     
<script>
function goBack() {
  window.history.back();
}
</script>

        
     </div>
    <div class='contact-box'>
        <form id='mail'   class="mail-form" action= "mailto:vengadeshks777@gmail.com"  method="post"   enctype="text/plain">
            <center><h1><b><i>Contact us</i></b></h1></center> 
            <p class="sectext" ><h3><i>Do you have any questions? Please do not hesitate to contact us directly.<br>Our team will come back to you within a matter of hours to help you.</i></h3></p>
            <input type='name'  name='name' class='input-field' placeholder="Name" required><br><br>
              <input type='email' name='email' class='input-field' placeholder="Email" required><br><br>
              <input type='sub' name='sub' class='input-field' placeholder="Subject" required><br><br>
              <textarea name="message" class='input-field' placeholder='Message'></textarea><br><br>
             
               <button type='submit' class='class-btn'>Send</button>
        </form>
        
        </div>
        <div class='black-container'>
         <div class='in'>
            <div class='in-in'><a href="aboutus.html"><p>About Us</p></a>
            </div><div class='in-in'><a href=""><p>Terms & Conditions</p></a>
            </div><div class='in-in'><a href=""><p>Privacy and Policy</p></a>
            </div>
            </div> <div class='in'>
            <div class='in-in'><a href="login.php"><p>The Rooms and Suites</p></a>
            </div><div class='in-in'><a href="aboutus.html"><p>About US</p></a>
            </div><div class='in-in'><a href="contact.html"><p>Contact Us</p></a>
            </div><div class='in-in'><a href=""><p>Restaurant</p></a>
            </div>
            </div> <div class='in'>
            <div class='in-in'><a href=""><p>Address:No. 63, Mount Road, Guindy,<br>
            Chennai- 600032<br>
            Tamil Nadu, India<br><br>
            </p></a>
            </div><div class='in-in'><a href=""><p>Telephone Number: +9544 3220 0000</p></a>
            </div><div class='in-in'><a href=""><p>Email Id: pasific@itc.in</p></a>
            </div><div class='in-in'><a href="login.php"><p>Rooms</p></a>
            </div>
            </div>
            <div class='in'>
            <div class='in-in'><a href=""><p>Quick links </p></a>
            </div><div class='in-in-in'><a href="service.html"><p>Services</p></a>
            </div><div class='in-in-in'><a href="login.php"><p>Login</p></a>
            </div><div class='in-in-in'><a href="signup.php"><p>SignUp</p></a>
            </div><div class='in-in-in'><a href="gallery.html"><p>Gallery</p></a>
            </div>
            </div>
            
         
        
           
        </div>
    </body>

</html>