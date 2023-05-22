<div class="container mt-5 " id="Contact">
    <!--Start Contact Us Container-->
    <h1 class="text-center mb-4">Contact Us</h1> <!-- Contact Us Heading -->
    <div class="row">
        <!--Start Contact Us ROW-->
        <div class="col-md-8 mt-5 form-division">
            <!--Start Contact Us 1st Column -->
            <form action="#" method="post">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name"><br>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"><br>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"><br>
                <textarea class="form-control" name="message" id="message" placeholder="How can we help you?" style="height:150px" ;></textarea><br>
                <input class="btn btn-primary" value="Send" type="submit" id="con" name="con"><br><br>
            </form>
            <?php
            include('./dbconnect.php');
            if (isset($_REQUEST['con'])) {
                if (($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")
                ) {

                    $msg = '<div class="alert alert-warning col-sm-12 text-center" id="mg">
                Fill All Details.</div>';
                } else {
                    $name = $_REQUEST['name'];
                    $sub = $_REQUEST['subject'];
                    $mail = $_REQUEST['email'];
                    $msgg = $_REQUEST['message'];


                    $sql = "insert into contact(name,subject,email,comment) values('$name','$sub',
                '$mail','$msgg')";
                    if ($conn->query($sql) == true) {
                        $msg = '<div class="alert alert-success col-sm-12 text-center" id="mg">
                Message sent successfully.</div>';
                    } else {
                        $msg = '<div class="alert alert-danger col-sm-12 text-center" id="mg">
                Something went wrong.</div>';
                    }
                }
            }



            ?>
            <div class="col-sm-6 mx-5">
                <?php if (isset($msg)) {
                    echo $msg;
                }

                ?>
            </div>
        </div>
        <!--end Contact Us 1st Column -->
        <div class="col-md-4 stripe text-white text-center">
            <!-- Start Contact Us 2nd Column -->
            <h4>iSchool</h4>
            <p>iSchool, Near Police Camp II, Bokaro,
                Jharkhand - _834005<br>
                Phone: +00000000 <br>
                www.ischool.com </p>
        </div> <!-- End Contact Us 2nd Column -->
    </div> <!-- End Contact Us ROW-->
</div> <!-- End Contact Us Container-->