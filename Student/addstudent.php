<?php
include_once('../dbconnect.php');

if(isset($_POST['Signup']))
{
    $sname=$_POST['name'];
    $smail=$_POST['mail'];
    $spass=$_POST['password'];
if($sname==""||$smail==""||$spass==""){
echo "fill data";
   

}
    else{

    
        $sql="insert into student(stu_name,stu_email,stu_pass) values('$sname','$smail','$spass')";
        $conn->query($sql);
        if($conn->query($sql)==TRUE){

echo "success";

        }
        else{
         echo "fail";

          

        }

}
}

?>

