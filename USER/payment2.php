<!DOCTYPE html>
<html>
<head>
	<title>User Payment</title>
	<?php

include "user_menu.php";
session_start();
?>

<style>
	body {
	  margin: 0;
	  background: #f2f2f2;
	}
	table {
		font-size: 22px;
	}
	#td1
	{
		background-color: rgba(09,41,98,0.9);
		color: white;
		border: 10px;
		margin-top: -10px;
		padding: 10px;
		text-align: center;
	}
	td {
		text-align: left;
	}
	th {
		font-weight: bold;
		text-align: left;
	}
	ul {
	  	list-style-type: none;
	  	margin: 0;
	  	padding: 0;
	  	width: 22%;
	  	font-size: 24px;
	  	background-color: rgba(09,41,98,0.9);
	  	text-decoration: none;
	  	position: fixed;
	  	height: 100%;
	  	overflow: auto;
	}
	li {
		color: white;
	}
	li a {
	  	display: block;
	  	color: white;
	  	padding: 8px 16px;
	  	text-decoration: none;
	}
	li a:active {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;		
	}
	li a:hover {
	  	background-color: #e6b800;
	  	color: white;
	  	text-decoration: underline;
	}
	.basic_box {
		border: 1px solid #ccc;
		border-radius: 15px;
		margin: auto;
		width: 600px;
		padding: 50px;
		box-shadow: 0 10px 20px rgba(0,0,0,0.19);
	}
	
</style>
</head>
<body>
<?php

include_once("functions.php");
include_once("saveconnection.php");
?>




  


  <div class="basic_box" style="margin-left:1%;padding:1px 16px;height:1000px;">
  

   

      <form method="POST" action="finalize.php" class="needs-validation mt-4" novalidate>
<p style="margin-left: 1%; margin-top: 5%; font-size: 28px;"></p>
<table>
        <tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Payment</b></p>
				</td>
       </tr>
	   <tr>
	   <th>Payment Method</th>
	   <tr>
	   <td><input id="credit" name="paymentMethod" value="credit" type="radio" class="form-check-input" checked required><label>Credit card</label></td>
		<td><input id="debit" name="paymentMethod" value="debit" type="radio" class="form-check-input" checked required><label>Debit card</label></td>
	   </tr>
	   <tr>
	   <th>Name on card</th>
	   <tr>
	   <td><input type="text" class="form-control" name="fname" placeholder="Enter name on card" required></td>
	   </tr>
	   <tr>
	   <th>Card number</th>
	   <tr>
	   <td><input type="text" class="form-control" name="c_number" placeholder="Enter card number " required></td>
	   </tr>
	   </tr>
	   <tr>
	   <th>Expiration</th>
	   <tr>
	   <td><input type="date" class="form-control" name="exp" placeholder="" required></td>
	   </tr>
	   </tr>
	   <tr>
	   <th>CVV</th>
	   <tr>
	   <td><input type="text" class="form-control" name="cvv" placeholder="CVV " required><td>
	   </tr>
	   </tr>
	   <tr>
	   <td style="text-align: center;"><button type="submit">Pay Now</button></td>
	   </tr>
	   <tr>
		
	   </tr>
	   </table>
	   
	   
        

  </div>
  
</body>
</html>
