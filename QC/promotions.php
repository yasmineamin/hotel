<?php
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QC</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/stylee.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<!---addtional-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <?php
session_start();
include "qc_menu.php";?>
</head>
	<body>

<!---start-->
	   <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                         Receptionist Accounts 
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include ('dp.php');
						$sql = "SELECT * FROM `login`";
						$re = mysqli_query($con,$sql)
				?>
				 <div class="row">
                    <div class="col-md-12">
					 <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
	<table class="table table-dark table-striped">
  <thead>
    <tr>
	
									

      <th scope="col">User ID</th>
      <th scope="col">User name</th>


	     <th scope="col">Promote</th> 
		
     
    </tr>
  </thead>
  <tbody>

 <?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											$us = $row['usname'];
										
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
													<td>".$id."</td>
													<td>".$us."</td>
												
														
												
													<td><a href= promote_recep.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Promote</button></td>

												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$id."</td>
													<td>".$us."</td>
													
													<td><a href= promote_recep.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Promote</button></td>
															
												
												
												</tr>";
											
											}
										
										}
										
									?>
  

                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                  
            
            
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
       
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   </body>
   </html>