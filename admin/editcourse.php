<?php
include('./component/header.php');
include('../dbconnect.php');

//update code

if(isset($_REQUEST['courseUpdate'])){

    if(($_REQUEST['course_name']=="") || ($_REQUEST['course_dec']=="") || ($_REQUEST['author']=="")|| ($_REQUEST['course_duration']=="")
    || ($_REQUEST['course_orgprice']=="") || ($_REQUEST['course_sellprice']=="")){
       
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
        $cid=$_REQUEST['course_id'];
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
        

        $sql="update course set name='$name',description='$desc',author='$author',duration='$duration',sell_price='$sprice'
        ,original_price='$ori_price',img='$img_folder' where id='$cid'";
      
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
        
        <div class="col-sm-6 mt-5 mx-3">
        <?php if(isset($msg)){echo $msg;}?>

            <h3 class="text-center">Update Course</h3>
            
            
            <?php 
                if(isset($_REQUEST['view'])){
                    $sql="select * from course where id={$_REQUEST['id']}";
                    $res=$conn->query($sql);
                    $row=$res->fetch_assoc();

                }

            ?>


            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="course_name">Course ID</label>
                    <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
                    echo $row['id'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="course_name">Course Name</label>
                    <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
                    echo $row['name'];?>">
                </div>
                <div class="form-group">
                    <label for="course_dec">Course Description</label><br>
                    <textarea name="course_dec" id="course_dec" name="course_dec" cols="87" rows="4"><?php
                    echo $row['description'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?php
                    echo $row['author'];?>">
                </div>
                <div class="form-group">
                    <label for="course_duration">Course Duration</label>
                    <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php
                    echo $row['duration'];?>">
                </div>
             
                <div class="form-group">
                    <label for="course_orgprice">Course Original Price</label>
                    <input type="text" class="form-control" id="course_orgprice" name="course_orgprice" value="<?php
                    echo $row['original_price'];?>">
                </div>
                <div class="form-group">
                    <label for="course_sellprice">Course selling Price</label>
                    <input type="text" class="form-control" id="course_sellprice" name="course_sellprice" value="<?php
                    echo $row['sell_price'];?>">
                </div>
                <div class="form-group">
                    <label for="course_img">Course Image</label>
                    <img src="<?php echo $row['img'];?>" class="img-thumbnail" width="150" height="80">
                    <input type="file" class="form-control" id="course_img" name="course_img" value="<?php
                    echo $row['img'];?>">
                    <p class="color-red">* If you don't want to update img then upload that old img but submit empty. </p>
                </div>
                <div class="form-group-row text-center mt-3">
                    <button type="submit" class="btn btn-primary" id="courseUpdate" name="courseUpdate" >Update</button>
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