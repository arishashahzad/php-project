<?php
include "header.php";
 ?>
 <?php


include "config.php";
 $select = "SELECT * FROM  `users1`";
$select_run = mysqli_query($conn,$select);


?>
<div class="row">
<div class="col-6">
<a href="./user_add.php" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i>Add New</a>

</div>
<div class="col-lg-6">
  <h3>All Users</h3>
</div>


   <div class="col-12 mt-0" >
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
    <td><?php echo $row["username"] ?></td>
    <td><?php echo $row["password"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><?php echo $row["created_at"] ?></td>
    <td style="width: 100px;"><img src="uploads/<?php echo trim($row["image"])?>" alt="" width="100%"></td>
    <td>
      <a href="user_upddat.php?id=<?php echo $row["id"]?>" class="btn btn-success">EDIT</a>
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
