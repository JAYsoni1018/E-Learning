<?php



include('../components/profilehead.php');
include_once('../dbconnect.php');

//search student 
$sql4 = "select * from student where email='$smail'";
$res = $conn->query($sql4);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $sid = $row['id'];
        $name = $row['name'];
        $occ = $row['occ'];
        $img = $row['img'];
        $_SESSION['Sid'] = $sid;
        $_SESSION['Sname'] = $name;
    }
}
//insert into purchase 



?>

<div class="col-sm-10 mt-5">
    <h1 class="col-sm-6 text-center">Courses</h1>


    <div class="container mt-5">

        <div class="row mt-3">
            <?php



            $sql = "select * from course as c join purchase as p on c.id=p.cid where p.smail='$smail' ";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    $dummy = $row['img'];
                    $img = str_replace('..', '.', $dummy);
                    $cid = $row['cid'];
                    // $_SESSION['pcourse_id']=$cid;
            ?>
                    <div class="col-lg-4 col-md-8 mb-4">
                        <div class="card ">
                            <img src="<?php echo $dummy; ?>" class="card-img-top cimg">
                            <div class="card-body">
                                <h5 class="card-title"><b>Course Name</b>:
                                    <?php echo $row['name'];  ?>
                                </h5>
                                <p class="card-text mt-2"><b>Description</b> :
                                    <?php echo $row['description'];  ?>
                                </p>
                                <p class="card-text"> <b>Duration</b>:
                                    <?php echo $row['duration'];  ?>
                                </p>

                                <p class="card-text d-inline"><b>Price</b>: <small><del>&#8377
                                            <?php echo $row['original_price'];  ?>
                                        </del></small> <span class="font-weight-bolder">&#8377
                                        <?php echo $row['sell_price'];  ?><span></p>




                                <a href="course_lesson.php?id=<?php echo $row['cid'];  ?>" class="btn btn-primary btn-sm ml-5">Start Course</a>
                            </div>
                        </div>
                    </div>




            <?php

                }
            } else {
                echo "No course";
            }

            ?>
        </div>

    </div>
</div>



<?php include('../components/footer.php'); ?>