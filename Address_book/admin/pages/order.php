<?php
include "header.php";
 ?>
 <?php


include "config.php";
 $select = "SELECT * FROM  `orders`";
$select_run = mysqli_query($conn,$select);


?>
<section class="container-fluid">

</section>
<div class="row">

<div class="col-lg-6">
  <h3>OUR ORDERS</h3>
</div>

</div>
<div class="row">
   <div class="col-lg-12 mt-0 container" >
          <div class="card ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            </div>
            <div class="card-body px-0 ms-3">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="text-center">
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>phone</th>
                      <th>Address</th>
                      <th>pmode</th>
                      <th>products</th>
                      <th>amount_paid</th>
                     </tr>
                  </thead>
                  <tbody>
    <?php $i=1;
     while($row= mysqli_fetch_assoc($select_run)){ ?>
    <tr class="text-center">
    <td style=""><?php echo $row["id"] ?></td>
    <td><?php echo $row["name"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><br><?php echo $row["phone"] ?></td>
    <td><br><?php echo $row["address"] ?></td>
    <td><br><?php echo $row["pmode"] ?></td>
    <td><br><?php echo $row["products"] ?></td>
    <td><br><?php echo $row["amount_paid"] ?></td>
    
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
