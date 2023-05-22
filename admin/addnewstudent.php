<?php
include('./component/header.php');
include('../dbconnect.php');

if(isset($_REQUEST['add'])){

   
    if(($_REQUEST['stu_name']=="") || ($_REQUEST['stu_email']=="")|| 
    ($_REQUEST['stu_pass']=="")|| ($_REQUEST['stu_occ']=="")){
       
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
       
        $name=$_REQUEST['stu_name'];
        $mail=$_REQUEST['stu_email'];
        $pass=$_REQUEST['stu_pass'];
        $occ=$_REQUEST['stu_occ'];

        $sql="insert into student(name,email,pass,occ) values('$name','$mail',
        '$pass','$occ')";
        if($conn->query($sql)==true)
        {
        $msg= '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Data Entered successfully.</div>';

        }
        else{
        $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';

        }

    }
   
}
?>

    <section>

    <h1 class="text-center">Add Student</h1>
        
        <div class="col-sm-6 mt-5 mx-3 jumbotron">
            <?php if(isset($msg)){echo $msg;}?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="stu_name">Name</label>
                    <input type="text" class="form-control" id="stu_name" name="stu_name">
                </div>
                <div class="form-group">
                    <label for="stu_email">Email</label>
                    <input type="email" class="form-control" id="stu_email" name="stu_email">

                </div>
                <div class="form-group">
                    <label for="stu_pass">Password</label>
                    <input type="password" class="form-control" id="stu_pass" name="stu_pass">

                </div>
                <div class="form-group">
                    <label for="stu_occ">Occupation</label>
                    <textarea name="stu_occ" id="stu_occ" cols="87" rows="6"></textarea>

                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary btn-sm" name="add" id="add">Submit</button>
                  <a href="student.php">  <button type="button" class="btn btn-danger btn-sm">Close</button></a>
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