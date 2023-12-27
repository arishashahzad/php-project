


<?php include "./header.php"; 

?>
<?php 
include "../admin/pages/config.php"
?>

  
        <!-- Swiper -->
        <!-- Swiper -->
        <div class="swiper mySwiper  mb-5">
            <div class="swiper-wrapper">
            <?php $select = "SELECT * FROM banners" ;
$select_run =  mysqli_query($conn,$select);


?>
<?php $i = 0; while($row = mysqli_fetch_assoc($select_run)) {?>
                <div class="swiper-slide " >
                    <img src="../admin/pages/uploads/<?php echo "$row[image]" ?>" width="100%" alt="" />
                </div>
                <?php }$i++?>
                <div class="swiper-pagination"></div>
            </div>
     </div>
     <div id="message"></div> 
 <section>
  <div class="container-fluid">
    <div class="row container-fluid mt-4 pb-3 ">
      <?php

  			$stmt = $conn->prepare('SELECT * FROM product where option = "Makeup"');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-2 mb-2 text-center">
        <div class="card-deck">
          <div class="card p-2  mb-2 special-img position-relative overflow-hidden" class="ok">
          <a href="product 1.php?id=<?php echo $row["id"]?>">  <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250"></a>
            <div class="card-body p-1">
             
            </div>
            <div class="mt-3 p-1">
                
              <form action="" class="form-submit">
              <h4 class="card-title  text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                <div class="row p-2">
                    <input type="hidden"  class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  <div class="col-md-12 text-center">
                  <button class=" addItemBtn mt-2 btn" style="border: 1px solid yellow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  </section>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container-fluid">
  <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <h1 style="font-size: 30px" class="heading">Best <span>Selling</span> </h1>
            </div>

 
    <div class="row container-fluid mt-2 pb-3 ">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product where option = "all"');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-2 mb-2 text-center">
        <div class="card-deck">
          <div class="card p-2  mb-2 special-img position-relative overflow-hidden" class="ok">
          <a href="product 1.php?id=<?php echo $row["id"]?>">  <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250"></a>
            <div class="card-body p-1">
             
            </div>
            <div class="mt-3 p-1">
                
              <form action="" class="form-submit">
              <h4 class="card-title  text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                <div class="row p-2">
                    <input type="hidden"  class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  <div class="col-md-12 text-center">
                  <button class=" addItemBtn mt-2 btn" style="border: 1px solid yellow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

  <section class="container-fluid">
  <?php $select12= "SELECT * FROM `banners` where option = 'cosmetic' " ;
$select_run12 =  mysqli_query($conn,$select12);

?> 
<?php $i = 0; while($row = mysqli_fetch_assoc($select_run12)) {?>
            
                    <img src="../admin/pages/uploads/<?php echo "$row[image]" ?>" width="100%" alt="" />
        
                <?php }$i++?>
  </section>


  <section>
  <div class="container-fluid">
    <div class="row container-fluid mt-2 pb-3 ">
      <?php

  			$stmt = $conn->prepare('SELECT * FROM product where option = "Oil"');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-2 mb-2 text-center">
        <div class="card-deck">
          <div class="card p-2  mb-2 special-img position-relative overflow-hidden" class="ok">
          <a href="product 1.php?id=<?php echo $row["id"]?>">  <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250"></a>
            <div class="card-body p-1">
             
            </div>
            <div class="mt-3 p-1">
                
              <form action="" class="form-submit">
              <h4 class="card-title  text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                <div class="row p-2">
                    <input type="hidden"  class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  <div class="col-md-12 text-center">
                  <button class=" addItemBtn mt-2 btn" style="border: 1px solid yellow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  </section>
  <section class="container-fluid">
  <?php $select12= "SELECT * FROM `banners` where option = 'shampo' " ;
$select_run12 =  mysqli_query($conn,$select12);

?> 
<?php $i = 0; while($row = mysqli_fetch_assoc($select_run12)) {?>
            
                    <img src="../admin/pages/uploads/<?php echo "$row[image]" ?>" width="100%" alt="" />
        
                <?php }$i++?>
  </section>

  <section>
  <div class="container-fluid">
    <div class="row container-fluid mt-2 pb-3 ">
      <?php

  			$stmt = $conn->prepare('SELECT * FROM product where option = "shampo"');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-2 mb-2 text-center">
        <div class="card-deck">
          <div class="card p-2  mb-2 special-img position-relative overflow-hidden" class="ok">
          <a href="product 1.php?id=<?php echo $row["id"]?>">  <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250"></a>
            <div class="card-body p-1">
             
            </div>
            <div class="mt-3 p-1">
                
              <form action="" class="form-submit">
              <h4 class="card-title  text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                <div class="row p-2">
                    <input type="hidden"  class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  <div class="col-md-12 text-center">
                  <button class=" addItemBtn mt-2 btn" style="border: 1px solid yellow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  </section>

  <section class="container-fluid">
  <?php $select12= "SELECT * FROM `banners` where option = 'Hair care' " ;
$select_run12 =  mysqli_query($conn,$select12);

?> 
<?php $i = 0; while($row = mysqli_fetch_assoc($select_run12)) {?>
            
                    <img src="../admin/pages/uploads/<?php echo "$row[image]" ?>" width="100%" alt="" />
        
                <?php }$i++?>
  </section>
  <section>
  <div class="container-fluid">
    <div class="row container-fluid mt-2 pb-3 ">
      <?php

  			$stmt = $conn->prepare('SELECT * FROM product where option = "Makeup"');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-2 mb-2 text-center">
        <div class="card-deck">
          <div class="card p-2  mb-2 special-img position-relative overflow-hidden" class="ok">
          <a href="product 1.php?id=<?php echo $row["id"]?>">  <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250"></a>
            <div class="card-body p-1">
             
            </div>
            <div class="mt-3 p-1">
                
              <form action="" class="form-submit">
              <h4 class="card-title  text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

                <div class="row p-2">
                    <input type="hidden"  class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  <div class="col-md-12 text-center">
                  <button class=" addItemBtn mt-2 btn" style="border: 1px solid yellow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  </section>
  <section class="container-fluid mt-5 mb-5">
  <h1 class="text-center mt-5 mb-5 " style="font-weight: bold;font-size: 35px;">Our latest blogs</h1>

<div class="row">
    <div class="col-lg-4 container text-center mt-2" style="box-shadow: 2px;font-size: 20px;line-height: 40px; ">
       
        <img src="./image//what-are-halim-seeds-its-nutriti.jpg" alt="">
        <h1 style="font-weight: bold;font-size: 25px;">Most Effective Herbal Teas - Benefits, Uses, Types & Treatments!</h1>
        <p>Herbal teas, sometimes called tisanes, are very similar to white teas, but they contain a blend of herbs, spices, fruits, other plants, and tea leaves. Herbal tea comes under the list of beverages with aroma, taste, and healing properties. Herbal teas don't contain Caffeine, which is why they're known for their calming properties</p>
        <a href="./Blog.php" class=" addItemBtn mt-2 btn" style="border: 1px solid yellow;color:white
        ">Read More...</a>
    </div>
    <div class="col-lg-4 text-center mt-2" style="box-shadow: 2px;font-size: 20px;line-height: 40px; ">
       
        <img src="./image//most-effective-herbal-teas-benef.jpg" alt="">
        <h1 style="font-weight: bold;font-size: 25px;">What Are Halim Seeds? - Its Nutritional Facts, Benefits, & Uses To Your Health!</h1>
        <p>
        Garden cress seeds, sometimes aliv, halon, or Halim seeds, are loaded with health advantages. These seeds are a type of "functional food" that promotes overall health and well-being, prevents disease, and serves as a source of nutrition. In this article, we'll discover the benefits of Aliv seeds and how to add them to</p>
        <a href="./Blog.php" class=" addItemBtn mt-2 btn" style="border: 1px solid yellow;color:white">Read More...</a>
    </div><div class="col-lg-4 text-center mt-2" style="box-shadow: 2px;font-size: 20px;line-height: 40px; ">
       
       <img src="./image//how-to-care-for-your-hand-feet-a.jpg" alt="">
       <h1 style="font-weight: bold;font-size: 25px;">How To Care For Your Hand & Feet? A Serum Can Do Wonders!</h1>
       <p>Two essential body parts for skin maintenance are your hands and feet. It can make the rest of your body appear unattractive if your hands and feet are dry and cracked. People will notice your hands and assume that you don't take fantastic care of yourself. Making ensuring your hands and feet are sufficiently hydrated is crucial</p>
       <a href="./Blog.php" class=" addItemBtn mt-2 btn" style="border: 1px solid yellow;color:white">Read More...</a>
   </div>
   
</div>
</section>
    <!-- footer -->

    <!-- end of footer -->
    <?php include "./footer.php"?>

    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
