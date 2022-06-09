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
						$sql = "SELECT * FROM `receptionist`";
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
	  <th scope="col">password</th>
	   <th scope="col">Status</th>
	     <th scope="col">Update</th> 
		 <th scope="col">Remove</th>
      <th scope="col">Enable</th>
	 <th scope="col">Disable</th>
     
    </tr>
  </thead>
  <tbody>

 <?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											$us = $row['usname'];
											$ps = $row['pass'];
											$stat=$row['status'];
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
													<td>".$id."</td>
													<td>".$us."</td>
													<td>".$ps."</td>
													<td>".$stat."</td>
														
													<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
															 Update 
													</button></td>
													<td><a href= receptionist_del.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
												
													<td><a href= enable.php?eid=".$id ." <button class='btn btn-success'> <i class='fa fa-edit' ></i> Enable</button></td>
													<td><a href= disable_recep.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Disable</button></td>
												</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$id."</td>
													<td>".$us."</td>
													<td>".$ps."</td>
													<td>".$stat."</td>
														<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
															 Update 
													</button></td>
													<td><a href= receptionist_del.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
													<td><a href= enable.php?eid=".$id ." <button class='btn btn-success'> <i class='fa fa-edit' ></i> Enable</button></td>
													<td><a href= disable_recep.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Disable</button></td>
												</tr>";
											
											}
										
										}
										
									?>
  

                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
					<div class="panel-body">
                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">
															Add New Admin
													</button>
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                                        </div>
										<form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Add new User name</label>
                                            <input name="newus"  class="form-control" placeholder="Enter User name">
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>New Password</label>
                                            <input name="newps"  class="form-control" placeholder="Enter Password">
											</div>
                                        </div>
										
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
                                           <input type="submit" name="in" value="Add" class="btn btn-primary">
										  </form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
						if(isset($_POST['in']))
						{
							$newus = $_POST['newus'];
							$newps = $_POST['newps'];
							
							$newsql ="Insert into receptionist (usname,pass) values ('$newus','$newps')";
							if(mysqli_query($con,$newsql))
							{
							echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
							
						
							}
						header("Location: receptionist.php");
						}
						?>
					<div class="panel-body">
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Change the User name and Password</h4>
                                        </div>
										<form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Change User name</label>
                                            <input name="usname" value="<?php echo $us; ?>" class="form-control" placeholder="Enter User name">
											</div>
										</div>
										<div class="modal-body">
                                            <div class="form-group">
                                            <label>Change Password</label>
                                            <input name="pasd" value="<?php echo $ps; ?>" class="form-control" placeholder="Enter Password">
											</div>
                                        </div>
										
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											
                                           <input type="submit" name="up" value="Update" class="btn btn-primary">
										  </form>
										   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <?php 
				if(isset($_POST['up']))
				{
					$usname = $_POST['usname'];
					$passwr = $_POST['pasd'];
					
					$upsql = "UPDATE `receptionist` SET `usname`='$usname',`pass`='$passwr' WHERE id = '$id'";
					if(mysqli_query($con,$upsql))
					{
					echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';
					
				
					}
				
				header("Location: receptionist.php");
				
				}
				ob_end_flush();
				
				
				
				
				?>
                                
                  
            
            
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
