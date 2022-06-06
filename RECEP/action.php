<?php
if(isset($_POST["action"])){
    include('database_connection.php');
    if($_POST["action"]=='fetch'){
        $output='';
        $query = " SELECT * FROM user_details WHERE user_type=' 
        user' ORDER BY user_name ASC;
        $statement = $connect->prepare($query);
        $statement ->execute();
        $result = $statement->fetchAll();
        $output='< table class="table table-bordered table-striped">
        <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Status</td>
        <td>Action</td>
        </tr>
        ';
       foreach($result as $row){
           $status='';
           if($row["user_status"]=='Active')
           {
               $status='<span class="label label-success">
               Active</span>';
           }
           else{
               $status='< <span class="label label-danger">
               Inactive</span>';
           }
           $output.='
           <tr>
           <td>'.$row["user_name"].'</td>
           <td>'.$row["user_email"].'</td>
           <td>'.$status.'</td>
           <td><button type="button" name="action" class="btn
           btn-info btn-xs action" data-user-id="'.$row[" 
           user_id"].'" data_user_status="'.$row["
           user_status"].'">Action</button> </td>
           </tr>
           ';
        }
        $output.='</table'>;
        echo $output;
    }
}
?>