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

<!-- course section start -->
<div class="container mt-5">
    <h1 class="text-center">All Courses</h1>


    

    <div class="row text-center mt-3">
          
            <?php
            $sql="select * from course";
            $res=$conn->query($sql);
            if($res->num_rows>0)
            {
                while($row=$res->fetch_assoc())
                {
                    $id=$row['id'];
                    echo '
                    <div class="col-lg-4 col-md-8 mb-4">
                    <div class="card p-0 rounded-3">
                    <img src="'.str_replace('..','.',$row['img']).'" class="card-img-top" >
                    <div class="card-body">
                    <h2 class="card-title">'.$row['name'].'</h2>
                    <p class="card-text">'.$row['description'].'</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['original_price'].'</del></small> <span
                                class="font-weight-bolder">&#8377 '.$row['sell_price'].'<span></p>
                                &nbsp;&nbsp;&nbsp;&nbsp; 
                                <a class="btn btn-primary btn-sm text-white font-weight-bolder float-right" 
                        href="coursedetail.php?id='.$id.'">Enroll</a>
                    </div>
                     </div>
                     </div>
                    ';
                }
            }
            ?>
            
        </div>
       

   

  
   
</div>

<?php
include('./contact.php');
?>
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