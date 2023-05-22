<?php
include_once('../dbconnect.php');
if (!isset($_SESSION['is_login'])) {
    session_start();
    $smail =  $_SESSION['lemail'];
}

// else{
//     echo '<script>location.href="../index.php"</script>';
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Course</title>
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
        #videoarea {
            object-fit: initial;
            width: 990px;
            height: 500px;
        }

        /* .cname {
            position: relative;
            top: 0;
            left: 420px;
            text-align: center;
        } */
    </style>
</head>

<body>
    <div class="container-fluid bg-warning p-2">
        <?php
        $cid = $_GET['id'];

        $sql2 = "select * from course where id='$cid'";
        $res = $conn->query($sql2);
        if ($res->num_rows >= 0) {
            while ($row = $res->fetch_assoc()) {
                echo
                '<div>
                    <h3 class="d-inline-block ml-3">Welcome to E-learning</h3>
                </div>

                    <div class="text-center">
                         <h3 class="text-danger ">Course : ' . $row['name'] . '</h3>
                    
                    </div>
                   
                    <a href="./myCourse.php">  <button type="button" class="btn btn-primary btn-sm ">My Course</button></a>
                    
                   
                      

                    
                ';
            }
        }
        ?>



    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">

                <ul id="playlist" class="nav flex-column">
                    <?php
                    if (isset($_GET['id'])) {
                        $cid = $_GET['id'];

                        // echo $cid;
                        $sql = "select * from lesson where cid='$cid'";
                        $res = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            $n = 0;
                    ?>
                            <table class="table table-bordered style='border:2px solid black;' mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Lesson No.</th>
                                        <th scope="col" class="text-center">Lesson Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $res->fetch_assoc()) {
                                        $n++;
                                    ?>
                                        <tr>
                                            <th class="text-center" scope="row"><?php echo $n;  ?></th>
                                            <td width="400" class="text-center"><?php echo '<li class="nav-item border-bottom py-2" movieurl=' . $row['llink'] . ' style="cursor:pointer;">' . $row['lname'] . '</li>' ?>
                                            </td>
                                        </tr>
                                    <?php  }
                                    ?>
                                </tbody>
                            </table>
                    <?php
                        } else {
                            echo 'No lesson';
                        }
                    }

                    ?>


                </ul>
            </div>
            <div class="col-sm-8">
                <video id="videoarea" src="" class="mt-5 ml-2" controls></video>
            </div>
        </div>
    </div>
    <div class="mt-5">

        <?php
        include('../components/footer.php');
        ?>
    </div>
</body>
<script src=" ../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/ajaxrequest.js"></script>
<script type="text/javascript" src="../js/adminajax.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</html>