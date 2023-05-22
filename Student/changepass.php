<?php



include('../components/profilehead.php');
include_once('../dbconnect.php');

$sql="select * from student where email='$smail'";
$res=$conn->query($sql);
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc()){
            $sid=$row['id'];
            $name=$row['name'];
            $occ=$row['occ'];
            $img=$row['img'];
}
}

if(isset($_REQUEST['cngpass']))
{
    if(($_REQUEST['newpass']=="")){
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
        
      $newpass=$_REQUEST['newpass'];

        $sql = "update student set pass='$newpass' where email ='$smail'";

        if($conn->query($sql)==true)
        {
        $msg= '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Password Updated successfully.</div>';

        }
        else{
        $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';

        }

    }
}


?>
  <!-- <h1 class="col-sm-6 mt-5 text-center">Password Change</h1> -->
  
  <div class="col-sm-6 mt-5 mx-3 jumbotron">
      <h1 class="text-center">Password Change</h1>
      <?php if(isset($msg)){echo $msg;}?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php
                    echo $smail;?>" readonly>
                </div>
                <div class="form-group mt-5">
                    <label for="newpass">New Password</label>
                    <input type="password" class="form-control" id="newpass" name="newpass">
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-sm" name="cngpass" id="cngpass">Update</button>
                </div>
</form>
</div>



    <?php  include('../components/footer.php');?>