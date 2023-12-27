<?php



include "config.php";


include "header.php"; 
 // redirect with javascript
 $redirect = 
    '<script>
        setTimeout(function(){
        window.location = "allproducts.php";
        }, 1500);
    </script>';
 // redirect with javascript

if(isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["product_name"];
    $price = $_POST["product_price"];
    $detail = $_POST["product_code"];
    $filename = $_FILES["product_image"]["name"];
    $tempname = $_FILES["product_image"]["tmp_name"];
    $folder = "uploads/" . $filename;
    
    $update = "UPDATE `product` SET `id`='$id',`product_name`='$name',`product_price`='$price',`product_code`='$detail',`product_image`='$filename' WHERE `id`=$id";

    $update_run = mysqli_query($conn, $update);
    if($update_run){
        $_SESSION['status'] = "Data Updated Successfully";
        $_SESSION['status_code'] = "success";
        // header("Location:show.php");
        echo "$redirect";
        
    } else {
        $_SESSION['status'] = "Data Not Updated";
        $_SESSION['status_code'] = "error";

    }
}





if (isset($_GET["id"])) { 
    $idget = $_GET["id"];
    $select = "SELECT * FROM `product` WHERE `id` = $idget";

    $select_run = mysqli_query($conn, $select);

    if ($select_run) { 
        while ($row = mysqli_fetch_assoc($select_run)){
            $id = $row["id"];
            $name = $row["product_name"];
            $price = $row["product_price"];
            $detail = $row["product_code"];
            $filename = $row["product_image"];
           

        }
    } else {
        echo "Error";
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
              <div class="card-header">
                <h3 class="card-title">UPDATE PRODUCTS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" enctype="multipart/form-data" method="POST" >
                <div class="card-body">

                <div class="form-group">
                     <input class="form-control" type="hidden" required name="id" value="<?php echo $id ?>">
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="product_name" required value="<?php echo $name ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Price" name="product_price" required value="<?php echo $price ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Detail</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Detail" name="product_code" required value="<?php echo $detail ?>">
                  </div>
                  <div class="form-group">
                      <label for="">Product Image</label>

                      <img src="./uploads/<?php echo trim($filename)?>"alt="" width="10%">
                       <input type="file"  id="fileToUpload" name="product_image" value="<?php echo $filename ?>">
                      <!-- <input type="submit" name="submit" value="Submit"> -->
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="submit" class="btn btn-primary" name="update" value="update">
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

<?php

} else {
 echo "";
} 

?>

<div style="visibility: hidden;">
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