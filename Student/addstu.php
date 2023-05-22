<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once('../dbconnect.php');
//email check exist or not

if(isset($_POST['checkmail']) && isset($_POST['smail']))
{
        $smail=$_POST['smail'];
        $sql="select email from student where email='$smail'";
        $result=$conn->query($sql);
        $row=$result->num_rows;
        echo json_encode($row);
}

//insert student
if(isset($_POST['stusignup']) && isset($_POST['sname']) && isset($_POST['smail']) && isset($_POST['spass']))
{
    $sname=$_POST['sname'];
    $smail=$_POST['smail'];
    $spass=$_POST['spass'];

        $sql="insert into student(name,email,pass) values('$sname','$smail','$spass')";
        $conn->query($sql);
        if($conn->query($sql)==TRUE){
                echo json_encode("OK");
        }
        else{
            echo json_encode("FAIL");
        
        }

}

//student login
if(!isset($_SESSION['is_login'])){
        if(isset($_POST['stulogin']) && isset($_POST['lemail']) && isset($_POST['lpass']))
        {
        
            $lemail=$_POST['lemail'];
            $lpass=$_POST['lpass'];

            $sql="select email,pass from student where email='$lemail' and pass='$lpass'";
            $result=$conn->query($sql);
            $row=$result->num_rows;
            if($row>0){
                $_SESSION['is_login']=true;
                $_SESSION['lemail']=$lemail;
                echo json_encode($row);
                
            }
            else{
                
                echo json_encode($row);
            }
        }
}

?>

