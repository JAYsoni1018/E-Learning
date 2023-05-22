<?php
include('./components/head.php');
include('./dbconnect.php');
?>

<body>
    <div class="container-fluid">
        <div class="row couese-img">
            <img src="img/books.jpg" alt="book.jpg">
        </div>
    </div>

    <!-- Start Main Content -->
    <div class="container mt-5">
        <?php
        if (isset($_GET['id'])) {
            $cid = $_GET['id'];
            // search student
            $sql4 = "select * from student where email='{$_SESSION['lemail']}'";
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

            $sql = "select * from course where id='$cid'";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    $dummy = $row['img'];
                    $img = str_replace('..', '.', $dummy);
                    $_SESSION['sprice'] = $row['sell_price'];
                    $_SESSION["cid"] = $cid;
                    $_SESSION["cname"] = $row['name'];
                    $id = $row['id'];

        ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo $img; ?>" class="card-img-top cimg">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><b>Course Name</b>: <?php echo $row['name'];  ?></h5>
                                <p class="card-text mt-2"><b>Description</b> : <?php echo $row['description'];  ?></p>
                                <p class="card-text"> <b>Duration</b>: <?php echo $row['duration'];  ?></p>

                                <p class="card-text d-inline"><b>Price</b>: <small><del>&#8377 <?php echo $row['original_price'];  ?>
                                        </del></small> <span class="font-weight-bolder">&#8377 <?php echo $row['sell_price'];  ?><span></p>
                                <input type="hidden" name="id" value="'<?php $row['sell_price']; ?>'">


                                <form action="#" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?php echo $cid; ?>">
                                    <!-- <a class="btn btn-primary btn-sm text-white font-weight-bolder float-right" name="buy" id="buy"
                        style="position:relative;top:5px;left:420px;" href="Student/myCourse.php?id=<?php echo $id; ?>">Buy Now
                       </a> -->
                                    <button class="btn btn-primary btn-sm text-white font-weight-bolder float-right" name="buy" id="buy" style="position:relative;top:5px;left:420px;">Buy Now</button>
                                </form>
                                <?php
                                if (isset($_REQUEST['buy'])) {

                                    if (isset($_SESSION['is_login']) && $_SESSION['lemail'] != "") {
                                        //insert into purchase 
                                        $date = date('Y-m-d H:i:s');
                                        $sql = "insert into purchase(cid,cname,cprice,sid,sname,smail,date) values('{$_SESSION['cid']}','{$_SESSION['cname']}'
                                    ,'{$_SESSION['sprice']}','{$_SESSION['Sid']}','{$_SESSION['Sname']}','{$_SESSION['lemail']}','$date')";

                                        if ($conn->query($sql) == true) {
                                            $msg = '<div class="alert alert-success col-sm-12 text-center" id="mg">
                                            Course Entered successfully.</div>';
                                        } else {
                                            $msg = '<div class="alert alert-danger col-sm-12 text-center" id="mg">
                                            Something went wrong.</div>';
                                        }




                                        echo "<script>location.href='Student/myCourse.php';</script>";
                                        // echo "hi";

                                    } else {
                                        echo '<script>document.getElementById("buy").disabled=true;</script>';
                                        echo '<b><p class="text-danger" style="display:inline-block;position:relative;top:58px;right:222px;" >* Please login Before Purchase a Course...</p></b>
                                <a href="#" class="btn btn-dark btn-sm" style="display:inline-block;position:relative;top:58px;left:30px;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Login</a>';
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }

        ?>
    </div>
    <div class="container mt-3">
        <div class="row">
            <?php
            $sql = "select * from lesson where cid='$cid'";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                $n = 0;
            ?>
                <table class="table table-bordered style='border:2px solid black;'">
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
                                <td class="text-center"><?php echo $row['lname'];  ?></td>
                            </tr>
                        <?php  }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo 'No lesson';
            }

            ?>

        </div>
    </div>
    <?php
    include('./components/footer.php');
    ?>