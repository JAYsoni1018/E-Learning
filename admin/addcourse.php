<?php
include('./component/header.php');

include('../dbconnect.php');

if(isset($_REQUEST['courseSubmit'])){

    if(($_REQUEST['course_name']=="") || ($_REQUEST['course_dec']=="") || ($_REQUEST['author']=="")|| ($_REQUEST['course_duration']=="")
    || ($_REQUEST['course_orgprice']=="") || ($_REQUEST['course_sellprice']=="")){
       
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
        $name=$_REQUEST['course_name'];
        $desc=$_REQUEST['course_dec'];
        $author=$_REQUEST['author'];
        $duration=$_REQUEST['course_duration'];
        $sprice=$_REQUEST['course_sellprice'];
        $ori_price=$_REQUEST['course_orgprice'];
        $img=$_FILES['course_img']['name'];
        $course_img_temp=$_FILES['course_img']['tmp_name'];

        $img_folder='../img/courseIMG/'.$img;
        move_uploaded_file($course_img_temp,$img_folder);

        $sql="insert into course(name,description,author,img,duration,sell_price,original_price) values('$name','$desc',
        '$author','$img_folder','$duration','$sprice','$ori_price')";
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
            
              
              <?php if(isset($msg)){echo $msg;}
              
              ?>

            <h3 class="text-center">Add New Course</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="course_name">Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name">
                </div>
                <div class="form-group">
                    <label for="course_dec">Course Description</label><br>
                    <textarea name="course_dec" id="course_dec" name="course_dec" cols="87" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group">
                    <label for="course_duration">Course Duration</label>
                    <input type="text" class="form-control" id="course_duration" name="course_duration">
                </div>
             
                <div class="form-group">
                    <label for="course_orgprice">Course Original Price</label>
                    <input type="text" class="form-control" id="course_orgprice" name="course_orgprice">
                </div>
                <div class="form-group">
                    <label for="course_sellprice">Course selling Price</label>
                    <input type="text" class="form-control" id="course_sellprice" name="course_sellprice">
                </div>
                <div class="form-group">
                    <label for="course_img">Course Image</label>
                    <input type="file" class="form-control" id="course_img" name="course_img">
                </div>
                <div class="form-group-row text-center mt-3">
                    <button type="submit" class="btn btn-primary" id="courseSubmit" name="courseSubmit" >Submit</button>
                    <!-- <a href="#"  class="btn btn-primary btn-sm">Submit</a> -->
                    
                    <a href="admincourses.php" > <button type="button" class="btn btn-dark">Close</button></a>
                    
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