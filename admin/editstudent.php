<?php
include('./component/header.php');
include('../dbconnect.php');

//update code

if(isset($_REQUEST['stuUpdate'])){

    if(($_REQUEST['stu_id']=="") || ($_REQUEST['stu_name']=="") || ($_REQUEST['stu_email']=="")|| 
    ($_REQUEST['stu_pass']=="")|| ($_REQUEST['stu_occ']=="")){
       
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
       
        $sid=$_REQUEST['stu_id'];
        $name=$_REQUEST['stu_name'];
        $mail=$_REQUEST['stu_email'];
        $pass=$_REQUEST['stu_pass'];
        $occ=$_REQUEST['stu_occ'];
        
        

        $sql="update student set name='$name',email='$mail',pass='$pass',occ='$occ' where id='$sid'";
      
        if($conn->query($sql)==true)
        {
        $msg= '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Data Updated successfully.</div>';

        }
        else{
        $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';

        }

    }
    }
?>

    <section>
        <h1 class="text-center">Update Student</h1>
        
        <div class="col-sm-6 mt-5 mx-3 jumbotron">
            <?php if(isset($msg)){echo $msg;}?>

            <?php 
                if(isset($_REQUEST['edit'])){
                    $sql="select * from student where id={$_REQUEST['id']}";
                    $res=$conn->query($sql);
                    $row=$res->fetch_assoc();

                }

            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="stu_id">ID</label>
                    <input type="tel" class="form-control" id="stu_id" name="stu_id" value="<?php
                    echo $row['id'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="stu_name">Name</label>
                    <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php
                    echo $row['name'];?>">
                </div>
                <div class="form-group">
                    <label for="stu_email">Email</label>
                    <input type="email" class="form-control" id="stu_email" name="stu_email" value="<?php
                    echo $row['email'];?>">

                </div>
                <div class="form-group">
                    <label for="stu_pass">Password</label>
                    <input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php
                    echo $row['pass'];?>">

                </div>
                <div class="form-group">
                    <label for="stu_occ">Occupation</label>
                    <textarea name="stu_occ" id="stu_occ" cols="87" rows="6"><?php
                    echo $row['occ'];?></textarea>
                    <!-- <input type="text" class="form-control" id="stu_occ" name="stu_occ"> -->

                </div>
                <div class="text-center mt-5">
                    <button type="submit" id="stuUpdate" name="stuUpdate"  class="btn btn-primary btn-sm">Update</button>
                    <a href="student.php" ><button type="button" class="btn btn-danger btn-sm">Close</button></a>
                </div>
            </form>
        </div>
        
    </section>

    <script src=" js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/owl.carousel.min.js"></script>

</body>

</html>