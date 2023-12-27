<?php include "./header.php"; 
?>
<?php 
include "../admin/pages/config.php"
?>

  
     <div id="message"></div> 

  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container-fluid">
  <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <h1 style="font-size: 30px" class="heading">Best <span>Rings</span> </h1>
            </div>

 
    <div class="row container-fluid mt-2 pb-3 ">
      <?php
  			include 'config.php';
  			$select = ("SELECT * FROM product WHERE option ='Rings';");
  		
  			$result = mysqli_query($conn,$select);
        $i = 1;
  			while ($row = mysqli_fetch_assoc($result)){
  		?>
      <div class="col-sm-6 col-md-4 col-lg-2 mb-2 text-center">
        <div class="card-deck">
          <div class="card p-2  mb-2 special-img position-relative overflow-hidden" class="ok">
          <a href="product 1.php?id=<?php echo $row["id"]?>">  <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250"></a>
            <div class="card-body p-1">
             
            </div>
            <div class="mt-3 p-1">
                
              <form action="" class="form-submit">
              <h4 class="card-title  text-dark"><?= $row['product_name'] ?><br> Body Spray Mist Perfume 100ml</h4>
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
      <?php } $i++; ?>
    </div>
  </div>

  
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