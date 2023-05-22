<?php

include('./component/header.php');
include('../dbconnect.php');


?>

  <section>
    <div class="col-sm-11 mt-5 mb-0">
        <p class="text-center bg-primary text-white p-2">List of course</p>
        <?php
        $sql="select * from course";
        $res=$conn->query($sql);
        if($res->num_rows>0){

        ?>
        <table class="table mt-0">
            <thead class="table-dark">
   
        <tr>
       
          <th scope="col">Course Id</th>
          <th scope="col">Name</th>
          <th scope="col">Author</th>
          <th scope="col">Duration</th>
          <th scope="col">Sell Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row=$res->fetch_assoc()){
        ?>
        <tr>
       
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td> <?php echo $row['author']; ?></td>
          <td> <?php echo $row['duration']; ?></td>
          <td> <?php echo $row['sell_price']; ?></td>
        
          <td>
          <form action="editcourse.php" method="GET" class="d-inline">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

         <button type="submit" class="btn btn-primary btn-sm" name="view">Edit</button>
          </form>
           
            <form action="" method="GET" class="d-inline">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <button type="submit" class="btn btn-danger btn-sm" name="delete">Remove</button>
            </form>
        </td>
        </tr>
  <?php  } ?>
      </tbody>
    </table>
<?php
}
else{
  echo "No result found";
}

//delete code

if(isset($_REQUEST['delete']))
{
  $sql="delete from course where id={$_REQUEST['id']}";
  if($conn->query($sql)==true)
  {
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';

  }else{
    echo "Unable to delete data.";
  }
}
?>
</div>

<div>
    <a href="addcourse.php" class="btn btn-danger box"><i class="fas fa-solid fa-plus"></i></a>
</div>
  </section>
  
  <script src=" js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script src="js/owl.carousel.min.js"></script>

</body>

</html>