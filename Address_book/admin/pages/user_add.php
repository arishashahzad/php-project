<?php

include "config.php";
include "header.php"; 
// Insert 
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $creat = $_POST["created_at"];


  $insert = "INSERT INTO `user1`(`username`, `password`, `email`,`created_at`) VALUES (' $username',$password,'$email','$creat')";
  $result = mysqli_query($conn, $insert);
  if($result){
      $_SESSION['status'] = "Registered/Inserted Successfully";
      $_SESSION['status_code'] = "success";
  } else {
      $_SESSION['status'] = "Data Not Registered/Inserted";
      $_SESSION['status_code'] = "error";
  }
}
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
             
            
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" enctype="multipart/form-data" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" name="password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Detail" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Detail" name="creat" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



  <div style="visibility: hidden;">

  <!-- image to folder -->
    <?php




?>
</div>




<?php include "footer.php"; ?>