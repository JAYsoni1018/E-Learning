<?php
include('./component/header.php');
include('../dbconnect.php');

$email= $_SESSION['adminmail'];
if(isset($_REQUEST['cngpass'])){

   
  if(($_REQUEST['newpass']=="")){
     
      $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
      Fill All Details.</div>';
  }
  else{
       
    
    $pass=$_REQUEST['newpass'];
   

    $sql="update admin set pass='$pass' where email='$email'";
    if($conn->query($sql)==true)
    {
    $msg= '<div class="alert alert-success col-sm-12 text-center" id="mg">
    Password change successfully.</div>';

    }
    else{
    $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
    Something went wrong.</div>';

    }

}
  }
?>
  <section>
  <h1 class="text-center">Password Change</h1>
        
        <div class="col-sm-6 mt-5 mx-3 jumbotron">
            <?php if(isset($msg)){echo $msg;}?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php
                    echo $email;?>" readonly>
                </div>
                <div class="form-group mt-3">
                    <label for="newpass">New Password</label>
                    <input type="password" class="form-control" id="newpass" name="newpass">
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-sm" name="cngpass" id="cngpass">Update</button>
                  <a href="admin.php">  <button type="button" class="btn btn-danger btn-sm">Close</button></a>
                </div>
</form>
</div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>