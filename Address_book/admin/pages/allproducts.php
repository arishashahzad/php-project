 <?php
include "header.php";
 ?>
 <?php


include "config.php";
 $select = "SELECT * FROM  `PRODUCT`";
$select_run = mysqli_query($conn,$select);


?>
<section class="container-fluid">

</section>
<div class="row">
<div class="col-6">
<a href="./index1.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i>Add New</a>

</div>
<div class="col-lg-6">
  <h3>All product</h3>
</div>

</div>
<div class="row">
   <div class="col-lg-12 mt-0 container" >
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Detail</th>
                      <th>Image</th>
                      <th>Action</th>

                     </tr>
                  </thead>
                  <tbody>
    <?php $i=1;
     while($row= mysqli_fetch_assoc($select_run)){ ?>
    <tr>
    <td style=""><?php echo $row["id"] ?></td>
    <td><?php echo $row["product_name"] ?></td>
    <td><?php echo $row["product_price"] ?></td>
    <td><br><?php echo $row["product_code"] ?></td>
    <td style="width: 100px;"><img src="uploads/<?php echo trim($row["product_image"])?>" alt="" width="100%"></td>
    <td>
      <a href="update.php?id=<?php echo $row["id"]?>" class="btn btn-success">EDIT</a>
      <a href="delete.php?id=<?php echo $row["id"]?>" class="btn btn-danger">DELETE</a>
    </td>
    </tr>
    <?php $i++; } ?>  
  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
</div>




 
              

 


 
       





<?php include "footer.php"; ?>
