<?php
include('./component/header.php');
include('../dbconnect.php');

?>
<section>
  <div class="container payment">
    <h1 class="text-center">Payment Status</h1>
    <form action="#">
      <div class="form-group mt-5 row order">
        <label for="colFormLabel" class="col-sm-2 col-form-label text-center">Order ID :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control text-center" id="checkid" name="checkid">
        </div>
        <div class="col-sm-4">
          <input type="submit" class="btn btn-primary btn-sm" value="Search" id="search" name="search">
        </div>
      </div>
    </form>
  </div>
  <?php
  $sql = "select id from purchase";
  $res = $conn->query($sql);
  while ($row = $res->fetch_assoc()) {

    if (isset($_REQUEST['checkid']) && ($_REQUEST['checkid'] == $row['id'])) {
      $sql = "select * from purchase where id={$_REQUEST['checkid']}";
      $res = $conn->query($sql);
      $row = $res->fetch_assoc();
      if (($row['id']) == ($_REQUEST['checkid'])) {


  ?>
        <h3 class="mt-5 bg-dark text-white text-center p-2">Payment Details</h3>
        <?php
        $sql = "select * from purchase where id={$_REQUEST['checkid']}";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
        ?>
          <table class="table mt-0">
            <thead class="table-dark">

              <tr>

                <th scope="col"> Id</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Id</th>
                <th scope="col">Course Price</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student ID</th>
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
                  <td><?php echo $row['cid']; ?></td>
                  <td><?php echo $row['cprice']; ?></td>
                  <td><?php echo $row['sname']; ?></td>
                  <td><?php echo $row['sid']; ?></td>
                  <td><?php echo $row['smail']; ?></td>
                  <td><?php echo $row['date']; ?></td>



                </tr>
              <?php  } ?>
            </tbody>
          </table>
  <?php
        }
      }
    }
    // else {
    //   $msg = '<div class="alert alert-danger col-sm-12 text-center" id="mg">
    //   No data Found.</div>';
    // }
  }


  ?>
  <?php if (isset($msg)) {
    echo '<div class="col-sm-6 mt-5 mx-3">' . $msg . '</div>';
  } ?>

  </div>


</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>