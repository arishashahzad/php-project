
<?php

include "config.php";
include "header.php"; 
// Insert 
if(isset($_POST["submit"])){
  $name = $_POST["product_name"];
  $price = $_POST["product_price"];
  $product_code = $_POST["product_code"];
  $option = $_POST["option"];
  $filename = $_FILES["product_image"]["name"];
  $tempname = $_FILES["product_image"]["tmp_name"];
  $folder = "uploads/" . $filename;

  $insert = "INSERT INTO `product`(`product_name`, `product_price`, `product_code`, `product_image`,`option`) VALUES (' $name',$price,'$product_code','$filename','$option')";
  $result = mysqli_query($conn, $insert);

  var_dump($insert);
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
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="product_name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" name="product_price" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Detail</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Detail" name="product_code" required>
                  </div>
              
                  
                  <div class="form-group">
                      <label for="">Select Image</label>
                      <input type="file"  id="fileToUpload" name="product_image">
                      <!-- <input type="submit" name="submit" value="Submit"> -->
                  </div>
                </div>
                <select style="width: 20%;font-size: 20px; " class="ms-4" name="option" required>SELECT
                <option  selected>--SELLECT--</option>
                <option >all</option>
                <option >perfume</option>
                <option >Shampo</option>
                <option >akeup</option>
                <option >Earrings</option>
                <option >Rings</option>
                <option >   Braclet</option>
                <option >J_all</option>
                <option >Facewash</option>
                <option > Lotion</option>
                
                <option >Shurem</option>
             
                <option >Pendals</option>
                <option >Naclas</option>
                <option > mens_groming</option>
                <option >Speacial</option>
                <option >Blog</option>
                <option >Oil</option>
              </select>
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
$target_files = $target_dir . basename($_FILES["product_image"]["name"]);
$uploadOk = 1;
$imageFiletype = strtolower(pathinfo($target_files,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
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
    if(move_uploaded_file($_FILES["product_image"]["tmp_name"],$target_files))
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