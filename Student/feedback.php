<?php



include('../components/profilehead.php');
include_once('../dbconnect.php');

$sql="select * from student where email='$smail'";
$res=$conn->query($sql);
if($res->num_rows>0)
{
    while($row=$res->fetch_assoc()){
            $sid=$row['id'];
            $name=$row['name'];
            $occ=$row['occ'];
            $img=$row['img'];
}
}

if(isset($_REQUEST['fsubmit']))
{
    if(($_REQUEST['content']=="")){
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
        $content=$_REQUEST["content"];
       

        $sql = "insert into feedback(content,sid) values('$content','$sid')";

        if($conn->query($sql)==true)
        {
        $msg= '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Data Submited successfully.</div>';

    // echo '<meta http-equiv="refresh" content="0">';
    // echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';



        }
        else{
        $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';

        }

    }
}



?>

<div class="col-sm-6 mt-5">
      <h1 class="col-sm-6 ml-5 text-center">Feedback</h1>
   <?php if(isset($msg)){echo $msg;} ?>

        <form class="mx-5" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="stuId">Student ID</label>
                <input type="text" class="form-control" id="stuId" name="stuId"
                    value=" <?php echo $sid; ?>" readonly>
            </div>
            <div class="form-group mt-4">
                <label for="content">Feedback</label>
                <textarea name="content" id="content" cols="88" rows="12"></textarea>
            </div>
          
            <div class="text-center mt-5">
            <button type="submit" class="btn btn-primary" name="fsubmit">Submit</button>

                </div>
           
        </form>
    </div>


    <?php  include('../components/footer.php');?>