<?php


include ('dp.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `login` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User name is Added") </script>';
							
						
				}
			header("Location: receptionist.php");
		
?>

