<?php
include('./component/header.php');
?>
  <section>
    <div class="col-sm-9 mt-5">
      <div class="row mx-5 text-center">
        <div class="col-sm-4 mt-5">
          <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Student</div>
            <div class="card-body">
              <h4 class="card-title">
                5
              </h4>
              <a class="btn text-white" href="student.php">Students</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mt-5">
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">View</div>
            <div class="card-body">
              <h4 class="card-title">
                5
              </h4>
           <div class="p-2">View</div> 
            </div>
          </div>
        </div>
        <div class="col-sm-4 mt-5">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Course</div>
            <div class="card-body">
              <h4 class="card-title">
                5
              </h4>
              <a class="btn text-white" href="admincourses.php">Courses</a>
            </div>
          </div>
        </div>
      </div>
<div class="mx-5 mt-5 text-center">
  <p class="bg-primary text-white p-2">Course Ordered</p>

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Order Id</th>
          <th scope="col">Course Id</th>
          <th scope="col">Student Email</th>
          <th scope="col">Order Date</th>
          <th scope="col">Amount</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>22</td>
          <td>mayur12@gmail.com</td>
          <td>22/4/2022</td>
          <td>230</td>
          <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
        </tr>
  
      </tbody>
    </table>
    </div>
  </section>
 
  <script src=" js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/owl.carousel.min.js"></script>
</body>

</html>