<?php
include('./component/header.php');

include('../dbconnect.php');

if(isset($_REQUEST['addlesson'])){

    if(($_REQUEST['course_id']=="") || ($_REQUEST['course_name']=="")|| ($_REQUEST['lesson_name']=="")
    || ($_REQUEST['lesson_dec']=="")){
       
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
        $cid=$_REQUEST['course_id'];
        $cname=$_REQUEST['course_name'];
        $lname=$_REQUEST['lesson_name'];
        $desc=$_REQUEST['lesson_dec'];
      
        $link=$_FILES['lesson_link']['name'];
        $lesson_link_temp=$_FILES['lesson_link']['tmp_name'];

        $lesson_folder='../lessonVIDEO/'.$link;
        move_uploaded_file($lesson_link_temp,$lesson_folder);

        $sql="insert into lesson(lname,ldesc,llink,cid,cname) values('$lname','$desc',
        '$lesson_folder','$cid','$cname')";
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

        <div class="col-sm-6 mt-5 mx-5 jumbotron">
            
              
              <?php if(isset($msg)){echo $msg;} ?>

            <h3 class="text-center">Add New Lesson</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="course_name">Course ID</label>
                    <input type="text" class="form-control" id="course_id" name="course_id"
                    value="<?php echo $_SESSION['cid']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="course_name">Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name"
                    value="<?php echo $_SESSION['cname']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="lesson_name">Lesson Name</label>
                    <input type="text" class="form-control" id="lesson_name" name="lesson_name">
                </div>
                <div class="form-group">
                    <label for="lesson_dec">Lesson Description</label><br>
                    <textarea name="lesson_dec" id="lesson_dec" cols="87" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="lesson_link">Lesson Link</label>
                    <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
                </div>
              
                <div class="form-group-row text-center mt-3">
                    <button type="submit" class="btn btn-primary" id="addlesson" name="addlesson" >Submit</button>
                    
                    <a href="adminleasones.php" > <button type="button" class="btn btn-dark">Close</button></a>
                    
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