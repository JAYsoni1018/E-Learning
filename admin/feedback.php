<?php
include('./component/header.php');
include('../dbconnect.php');

?>
<section>
<div class="col-sm-12 mt-5 mb-0">
        <p class="text-center bg-primary text-white p-2">List of feedback</p>
        <?php
        $sql="select * from feedback";
        $res=$conn->query($sql);
        if($res->num_rows>0){

        ?>
        <table class="table mt-0">
            <thead class="table-dark">
   
        <tr>
       
          <th scope="col">Feedback Id</th>
          <th scope="col">Content</th>
          <th scope="col">Student ID</th>
          
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
          while($row=$res->fetch_assoc()){
        ?>
        <tr>
       
          <td><?php echo $row['fid']; ?></td>
          <td width="600"><?php echo $row['content']; ?></td>
          <td> <?php echo $row['sid']; ?></td>
        
        
          <td>
            
          <form action="" method="GET" class="d-inline">
                <input type="hidden" name="id" value="<?php echo $row['fid']; ?>">
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
  $sql="delete from feedback where fid={$_REQUEST['id']}";
  if($conn->query($sql)==true)
  {
    echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';

  }else{
    echo "Unable to delete data.";
  }
}
?>
</div>


  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>