<?php
include('./component/header.php');
include('../dbconnect.php');
$msg="";
?>

  <section>
  <h1 class="text-center">Leasones</h1>
  <div class="col-sm-11 mt-5 mx-3">

     
        <form action="" class="mt-3 form-inline d-print-none">
            <div class="form-group mt-5 row order">
                <label for="colFormLabel" class="col-sm-2 col-form-label text-center">Course ID :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control text-center" id="checkid" name="checkid">
                </div>
                <div class="col-sm-4">
                <button type="submit" class="btn btn-primary" id="search" name="search" >Search</button>

                </div>
              </div>
        </form>

        <?php
          $sql="select id from course";
          $res=$conn->query($sql);
          while($row=$res->fetch_assoc()){

            if(isset($_REQUEST['checkid'] ) && ($_REQUEST['checkid']==$row['id']) )
            {
              $sql="select * from course where id={$_REQUEST['checkid']}";
              $res=$conn->query($sql);
              $row=$res->fetch_assoc();
              if(($row['id'])== ($_REQUEST['checkid']))
              {

                $_SESSION['cid']=$row['id'];
                $_SESSION['cname']=$row['name'];
                ?>
              <h3 class="mt-5 bg-dark text-white text-center p-2">Course ID:  <?php if(isset($row['id'])){echo $row['id'];}   ?>
               &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;  Course Name:  <?php if(isset($row['name'])){echo $row['name'];}  ?></h3>
              <?php 
                $sql="select * from lesson where cid={$_REQUEST['checkid']}";
                $res=$conn->query($sql);
                if($res->num_rows>0){
                  ?>
                  <table class="table mt-0">
                      <thead class="table-dark">
             
                  <tr>
                 
                    <th scope="col">Lesson Id</th>
                    <th scope="col">Lesson Name</th>
                    <th scope="col">Course Id</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Lesson Description</th>
                  
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    while($row=$res->fetch_assoc()){
                  ?>
                  <tr>
                 
                    <td><?php echo $row['lid']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['cid']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                    <td width="600"><?php echo $row['ldesc']; ?></td>
             
                  
                    <td>
                  
                     
                      <form action="" method="GET" class="d-inline">
                          <input type="hidden" name="id" value="<?php echo $row['lid']; ?>">
                          <button type="submit" class="btn btn-danger btn-sm" name="delete">Remove</button>
                      </form>
                  </td>
                  </tr>
                  <?php  } ?>
                </tbody>
              </table>
          <?php
          }
            } 
            } 
            // else {
            //   $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
            //   No data Found.</div>';
      
            //   }
          }
          //delete code

                if(isset($_REQUEST['delete']))
                {
                  $sql="delete from lesson where lid={$_REQUEST['id']}";
                  if($conn->query($sql)==true)
                  {
                    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
                    $msg="";

                  }else{
                    echo "Unable to delete data.";
                  }
                }

        ?>
  <?php if(isset($msg)){
    echo '<div class="col-sm-6 mt-5 mx-3">'.$msg.'</div>';
   } ?>

    </div>
    <?php
      if(isset($_SESSION['cid']))
      {
        echo ' <div>
              <a href="addnlesson.php" class="btn btn-danger box"><i class="fas  fa-plus"></i></a>
               </div>';
      }
    ?>
   
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>