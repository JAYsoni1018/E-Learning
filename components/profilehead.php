<?php
include_once('../dbconnect.php');

if (!isset($_SESSION['is_login'])) {
    session_start();
}


if (isset($_SESSION['is_login'])) {
    $smail =  $_SESSION['lemail'];
} else {
    echo '<script>location.href="../index.php"</script>';
}
if (isset($smail)) {

    $sql = "select * from student where email='$smail'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {

            $img = $row['img'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Lobster&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        /* .pimg{
            width:300px;
            height: 207px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        } */
        .elearn {
            position: relative;
            top: 0px;
            left: 60px;
        }

        .cards-wrapper {
            display: flex;
            /* justify-content: center; */

        }

        .card img {
            width: 70%;
            height: 30%;
        }

        .card {
            margin: 0 0.5em;
            box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
            border: none;
            border-radius: 0;
        }

        .carousel-inner {
            padding: 0.5em;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: #e1e1e1;
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        @media (min-width: 768px) {
            .card img {
                height: 11em;
            }
        }
    </style>
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
        <a class="navbar-brand elearn" href="profile.php">E-Learning</a>
    </nav>
    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px; ">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky" style="height:75vh;">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="<?php echo $img; ?>" alt="studentimage" class="img-thumbnail rounded-circle pimg">

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php"> <i class="fa-solid fa-user"></i>
                                Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myCourse.php"> <i class="fa-solid fa-book"></i>
                                My Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php"> <i class="fa-solid fa-message"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="changepass.php"><i class="fa-solid fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
            <script src=" js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/all.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script type="text/javascript" src="js/ajaxrequest.js"></script>
            <script type="text/javascript" src="js/adminajax.js"></script>
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>