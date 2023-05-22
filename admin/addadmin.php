<?php

if(!isset($_SESSION))
{
    session_start();
}
include_once('../dbconnect.php');
//admin login
if(!isset($_SESSION['is_admin_login'])){
        if(isset($_POST['adminlogin']) && isset($_POST['adminpass']) && isset($_POST['adminmail']))
        {
        
            $adminmail=$_POST['adminmail'];
            $adminpass=$_POST['adminpass'];

            $sql="select email,pass from admin where email='$adminmail' and pass='$adminpass'";
            $result=$conn->query($sql);
            $row=$result->num_rows;
            if($row>0){
                $_SESSION['is_admin_login']=true;
                $_SESSION['adminmail']=$adminmail;
                echo json_encode($row);               
            }
            else{
                echo json_encode($row);
            }
        }
}
?>
