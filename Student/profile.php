<?php


include('../components/profilehead.php');
include_once('../dbconnect.php');

$sql = "select * from student where email='$smail'";
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $sid = $row['id'];
        $name = $row['name'];
        $occ = $row['occ'];
        $img = $row['img'];
    }
}

if (isset($_REQUEST['updateStuNameBtn'])) {
    if (($_REQUEST['stuOcc'] == "")) {
        $msg = '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    } else {

        $stuName = $_REQUEST["stuName"];
        $stuOcc = $_REQUEST["stuOcc"];
        $stu_image = $_FILES['stuImg']['name'];
        $stu_image_temp = $_FILES['stuImg']['tmp_name'];
        $img_folder = '../img/stu/' . $stu_image;
        move_uploaded_file($stu_image_temp, $img_folder);


        $sql = "update student set  occ='$stuOcc', name = '$stuName', img = '$img_folder' where email =
        '$smail'";

        if ($conn->query($sql) == true) {
            $msg = '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Data Updated successfully.</div>';

            echo '<meta http-equiv="refresh" content="0">';
            // echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';



        } else {
            $msg = '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';
        }
    }
}


?>
<!-- <h1 class="col-sm-6 mt-5 text-center">Password Change</h1> -->

<div class="col-sm-6 mt-5">
    <?php if (isset($msg)) {
        echo $msg;
    } ?>

    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" value=" <?php echo $sid; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stuEmail">Email</label>
            <input type="email" class="form-control" id="stuEmail" value="<?php echo $_SESSION['lemail']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stuName">Name</label>
            <input type="text" class="form-control" id="stuName" name="stuName" value="<?php echo
                                                                                        $name; ?>">
        </div>
        <div class="form-group">
            <!-- Student doesnt mean school student it also means learner -->
            <label for="stuOcc">Occupation</label>
            <textarea name="stuOcc" id="stuOcc" cols="87" rows="6"><?php echo $occ; ?></textarea>

        </div>
        <div class="form-group mt-4">
            <label for="stuImg">Upload Profile Image</label>
            <input type="file" class="form-control-file" id="stuImg" name="stuImg">
        </div>
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>

        </div>

    </form>
</div>


<div class="mt-5">

    <?php
    include('../components/footer.php');
    ?>
</div>