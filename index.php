<!DOCTYPE html>
<html lang="en">

<!-- Start navbar -->
<?php
include('./components/head.php');

?>
<!-- end navbar -->
<!-- Start video -->
<div class="container-fluid vid-div">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/banvid.mp4" type="">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-contant">
        <h1 class="my-contant">Welcome to iSchool</h1>
        <small class="my-contant">Learn and Implement</small><br>
        <?php
        // session_start();
        if(isset($_SESSION['is_login']))
        {
            echo '<a href="Student/profile.php" class="btn btn-primary btn-sm mt-3">
                  My Profile</a>';
        }
        else{
            echo '<a href="#" class="btn btn-danger btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Get
            Started</a>';
        }
        ?>
     
    </div>
</div>
<!-- end video -->


<!-- Start text banner -->

<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner text-center">
        <div class="col-sm feature">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm feature">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm feature">
            <h5><i class="fas fa-keyboard mr-3"></i> Life Time</h5>
        </div>
        <div class="col-sm feature">
            <h5><i class="fas fa-rupee mr-3"></i> Money Back</h5>
        </div>
    </div>
</div>
<!-- end text banner -->
<!-- course section start -->
<?php
include('./courseSection.php');

?>
<!-- course section end -->

<!-- Start Contact Us -->
<?php
include('./contact.php');

?>
<!-- End Contact Us -->


<!-- Start Students Testimonial -->

    <?php
        include('./testimonial.php');

    ?>
<!-- end Students Testimonial -->
<!-- start social media -->
<div class="container-fluid bg-danger">
    <div class="row text-white text-center social p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </div>
</div>
<!-- end social media -->
<!-- Start About Section -->
<?php
include('./about.php');

?>
<!-- end About Section -->
<!-- start footer Section -->
<?php
include('./components/footer.php');

?>
<!-- end footer -->


</body>

</html>