<!DOCTYPE html>
<html lang="en">

<?php
include('./components/head.php');
include('./dbconnect.php');

?>
<div class="container-fluid">
    <div class="row couese-img">
        <img src="img/books.jpg" alt="book.jpg">
    </div>
</div>

<div class="container payment">
    <h1 class="text-center">Payment Status</h1>
    <form action="#" method="post" class="d-inline">
        <div class="form-group mt-5 row order">
            <label for="colFormLabel" class="col-sm-2 col-form-label text-center">Your Email :</label>
            <div class="col-sm-4">
                <input type="email" class="form-control text-center" id="pay" name="pay">
            </div>
            <div class="col-sm-4">
                <input type="submit" class="btn btn-primary btn-sm" value="Search" id="find" name="find">
            </div>
        </div>
    </form>
    <?php
    if (isset($_REQUEST['pay'])) {

        if (isset($_SESSION['is_login']) && $_SESSION['lemail'] != "") {
            if ($_SESSION['lemail'] == $_REQUEST['pay']) {
                $sql = "select * from purchase where smail='{$_REQUEST['pay']}'";
                $res = $conn->query($sql);
                if ($res->num_rows > 0) {
    ?>
                    <table class="table mt-4">
                        <thead class="table-dark">

                            <tr>

                                <th scope="col"> Id</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Price</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $res->fetch_assoc()) {
                            ?>
                                <tr>

                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['cname']; ?></td>
                                    <td><?php echo $row['cprice']; ?></td>
                                    <td><?php echo $row['sname']; ?></td>
                                    <td><?php echo $row['smail']; ?></td>
                                    <td><?php echo $row['date']; ?></td>



                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo '<b><p class="text-danger mb-5" style="display:inline-block;position:relative;top:58px;left:422px;" >No Course is purchased.</p></b>';
                }

                ?>

    <?php
            } else {
                echo '<b><p class="text-danger mb-5" style="display:inline-block;position:relative;top:58px;left:422px;" > Please Enter Email By Which You Had Purchased The Course.</p></b>';
            }
        } else {
            echo '<script>document.getElementById("find").disabled=true;</script>';
            echo '<b><p class="text-danger mb-5" style="display:inline-block;position:relative;top:58px;left:422px;" >* Please Login Before Cheke Payment Status.</p></b>
                                <a href="#" class="btn btn-dark btn-sm" style="display:inline-block;position:relative;top:58px;left:500px;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Login</a>';
        }

        // if ($_REQUEST['pay'] == "") {
        //     echo '<b><p class="text-danger mb-5" style="display:inline-block;position:relative;top:58px;left:422px;" >Empty field not allowed.</p></b>';
        // }
    }
    ?>
</div>

<!--Start Contact Us ROW-->
<?php
include('./contact.php');
?>
<!-- End Contact Us -->
<?php
include('./about.php');
?>


<?php
include('./components/footer.php');
?>
<script src=" js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
</body>

</html>