


<?php include "./header.php" ?>
<?php include 'config.php';
if (isset($_GET["id"])){ 
    $idget = $_GET["id"];

?>

    <style>
      
        .prodct-page{
            background-color: #ffffff;
        }
        .swiper {
            width: 100%;
            height: 100%;
            margin-top: -20px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 20%;
            width: 90%;
        }

        .mySwiper {
            height: 20%;
            width: 90%;
            box-sizing: border-box;
            padding: 10px 0;
            margin-top: 10px;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
 


        .product-list ul li {
            font-weight: bold;
            font-size: 20px;
            list-style: none;
            background-image: url(images/checked.png);
            background-position: left center;
            background-repeat: no-repeat;
            background-size: 18px;
            padding-left: 1.7rem;
            margin: 0.5rem 0;
            opacity: 0.9;
        }


    </style>

    <section id="contant" class="">

        <div class="container-fluid">
            <div class="produst-title">
                <nav aria-label="breadcrumb" class="py-3 mt-2 ms-4 mb-0">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item"><a href="index1.html" class="text-muted ">Home</a></li>
                        <li class="breadcrumb-item"><a href="Women.html" class="text-muted"> Hot Products</a></li>
                        <li class="breadcrumb-item active"><a href="Women.html" class="active ">Women</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row">

            <?php
                $stmt = $conn->prepare("SELECT * FROM `product` WHERE `id` =  '$idget'  ");
                $stmt->execute();
                $result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
                <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 p-2">
                    <div class="collection-img position-relative">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250">
                                </div>
                      
                               
                               

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>


                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper ">
                            <div class="swiper-slide">

                            <img src="../admin//pages/uploads/<?= $row['product_image'] ?>" class="card-img-top" height="250">

                            </div>
                           
                         
                        </div>
                    </div>

                </div>



                <div class="col-md-12 col-lg-6 col-xl-6 col-sm-12 mt-5">
                    <div class="container">
                        <div class="collection-title">
                        <form action="" class="form-submit">
                            <h5 class="fw-bold"> 
                                <h4 class="card-title  " style="font-size: 35px"><?= $row['product_name'] ?></h4>
                            </h5>
                            <div class="block_rating clearfix">
                                <fieldset class="block_rating__stars">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                                        title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label
                                        class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                                        title="Good - 4 stars"></label>
                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label
                                        class="half" for="star3half" title="Above average - 3.5 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                                        title="Average - 3 stars"></label>
                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label
                                        class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                                        title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label
                                        class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                                        title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half"
                                        for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
    
                                <span class="block_rating__avarage">4.25</span>
                                <span class="block_rating__reviews">(153 reviews)</span>
    
                            </div>
                            <h4 class="New-price mt-2"><h5 class="card-text text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>
                            <span style="margin-left: 200px;color: #ee2020; " class="">Free deleviry</span></h4><br>
                            <span class="fw-bold mt-5">Quantity:</span>
                            <div class="wrapper mt-2">
                            <input type="number"  class="form-control pqty" value="<?= $row['product_qty'] ?>">
                              </div>
                            <div class="Product-detail">
                                <h1 class="mt-3">About this Item:</h1>
                                <P class="mt-2">
                                    Lorem Ipsum simply Te obtinuit ut adepto satis somno. Aliisque institoribus iter
                                    deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum
                                    in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans
                                    ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.
                                    Lorem Ipsum simply Te obtinuit ut adepto satis somno. Aliisque institoribus iter
                                    deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum
                                </P>
                                <div class="product-list">
                                    <ul>
                                        <li>Available:<span> in stock</span></li>
                                        <li>Category:<span> shop products</span></li>
                                        <li>Shiping Arya:<span> All over the word</span></li>
                                        <li>Shiping Free:<span> Free</span></li>
                                    </ul>
                                </div>
                                <div class="purchase-info">
                                    <button type="button" >
                                    <button class=" addItemBtn mt-2 btn" style="border: 1px solid yellow"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                                    </button>
                                    <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php endwhile; ?>
            </div>


  
    
        <section id="Describtion">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12 ">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')">Describtion</Datag></button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Review</button>

                        </div>

                        <div id="London" class="tabcontent">
                            <div class="describtion-info ">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <h1 class=" ms-3 mt-3">Describtion</h1>
                                        <p class=" ms-3 mt-3">
                                        Cosmetics designed for skin care can be used to cleanse, exfoliate and protect the skin, as well as replenishing it, through the use of cleansers, toners, serums, moisturizers, and balms. Cosmetics designed for more general personal care, such as shampoo and body wash, can be used to cleanse the body.

Cosmetics designed to enhance one's appearance (makeup) can be used to conceal blemishes, enhance one's natural features (such as the eyebrows and eyelashes), add color to a person's face and—in the case of more extreme forms of makeup used for performances, fashion shows and people in costume—can be used to change the appearance of the face entirely to resemble a different person, creature or object. Techniques for changing appearance include contouring, which aims to give shape to an area of the face.
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <div class="conatiner-fluid">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12">
                                        <h2>1 Review for Men</h2>

                                        <div id="comment-2" class="comment_container">
                                            <img alt="" src="images/admin.png" class="">
                                            <div class="comment-text ms-3">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="star fa-solid fa-star"></i>
                                                <p class="meta">
                                                    <strong class="woocommerce-review__author">misbah </strong>
                                                    <span class="woocommerce-review__dash">–</span> <time
                                                        class="woocommerce-review__published-date"
                                                        datetime="2022-02-03T10:37:52+00:00">February 3, 2022</time>
                                                </p>
                                                <div class="description">
                                                    <p>Nice</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                            </div>
                            <form >


                                <h6 class="mt-5 fw-bold fs-4">Add to reveiw</h6>
                                <span>Your email address will not be published. Required fields are marked    </span><br>
                                    <span class="mt-5 fw-bold fs-4">User Rating</span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <p>4.1 average based on 254 reviews.</p>
                                    <hr style="border:3px solid #151414">
                                    
                                    <div class="row">
                                      <div class="side">
                                        <div>5 star</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container">
                                          <div class="bar-5"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>150</div>
                                      </div>
                                      <div class="side">
                                        <div>4 star</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container">
                                          <div class="bar-4"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>63</div>
                                      </div>
                                      <div class="side">
                                        <div>3 star</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container">
                                          <div class="bar-3"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>15</div>
                                      </div>
                                      <div class="side">
                                        <div>2 star</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container">
                                          <div class="bar-2"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>6</div>
                                      </div>
                                      <div class="side">
                                        <div>1 star</div>
                                      </div>
                                      <div class="middle">
                                        <div class="bar-container">
                                          <div class="bar-1"></div>
                                        </div>
                                      </div>
                                      <div class="side right">
                                        <div>20</div>
                                      </div>
                                    </div>
                                    
                                    <h6 class="mt-5 fw-bold fs-4"> Your review *</h6>
                                    <textarea id="comment" name="comment" cols="116" rows="3" required=""
                                        style="background-color: rgba(255, 255, 255, 0.227);border: none;"></textarea>
                             
                                <div class="row g-3">
                                    <div class="col-md-11 col-lg-11 col-sm-12 col-xl-11">
                                        <label for="validationDefault01" class="form-label" >Name *</label>
                                        <input type="text" class="form-control" id="validationDefault01" required>
                                    </div>
                                    <div class="col-md-11 col-lg-11 col-sm-12 col-xl-11">
                                        <label for="validationDefault02" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="validationDefault02" required>
                                    </div>

                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">

                                            Save my name, email, and website in this browser for the next time I
                                            comment.
                                        </label>
                                    </div>
                                    <div class="col-md-11 col-lg-11 col-sm-12 col-xl-11">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </div>
                               
                            </form>
                        </div>

                    </div>
                </div>
                <div class="container-fluid">

                </div>

        </section>
      


<?php 
} else {
    echo "";
   } 
?>
 <section>
  <div class="container-fluid">
    <h1 class="mt-5 text-center mb-4" style="font-size: 30px">You may also like</h1>
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
<?php include "./footer.php" ?>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<script>
    const plus = document.querySelector(".plus"),
minus = document.querySelector(".minus"),
num = document.querySelector(".num");
let a = 1;
plus.addEventListener("click", ()=>{
 a++;
 a = (a < 10) ? "0" + a : a;
 num.innerText = a;
});

minus.addEventListener("click", ()=>{
 if(a > 1){
   a--;
   a = (a < 10) ? "0" + a : a;
   num.innerText = a;
 }
});

</script>
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