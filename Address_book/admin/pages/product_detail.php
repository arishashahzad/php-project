<?php

include "config.php";
include "header.php"; 
// Insert 
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $price = $_POST["price"];
  $detail = $_POST["detail"];
  $filename = $_FILES["image"]["name"];
  $tempname = $_FILES["image"]["tmp_name"];
  $folder = "uploads/" . $filename;

  $insert = "INSERT INTO `product_detail`(`name`, `price`, `detail`, `image`) VALUES (' $name',$price,'$detail','$filename')";
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
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" name="price" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Detail</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Detail" name="detail" required>
                  </div>
                  
                  <div class="form-group">
                      <label for="">Select Image</label>
                      <input type="file"  id="fileToUpload" name="image">
                      <!-- <input type="submit" name="submit" value="Submit"> -->
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


$target_dir = "uploads/";
$target_files = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFiletype = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image";
        $uploadOk =0;
    }
}
if($uploadOk == 0){
    // echo "Sorry, your file was not uploaded";
} else {
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_files))
    {
        // echo "The file" . htmlspecialchars( basename($_FILES["image"]["name"])). "has been uploaded";
    }
    else{
        // echo "Sorry, your file was not uploaded";
    }
}



?>
</div>




<?php include "footer.php"; ?>