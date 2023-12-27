<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--swiper link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--swiper 1 css link-->
    <link rel="Stylesheet" href="CSS/wiper 1.css">
    <link rel="Stylesheet" href="./CSS/style1.css">
    <link rel="Stylesheet" href="./CSS/style-prefix.css">
    <!--CSS link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="Stylesheet" href="CSS/Style.css ">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/hover.css" type="text/css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/style2.css">
    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="CSS/demo.css">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,300;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Garments Store</title>
    <style>
.panel-list-item a:hover{
background-color: #e99c2f;
color: white;
}
        .swiper {
            width: 100%;
            height:550px;
  
            cursor: pointer;
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
            height: 600px;
            object-fit: cover;
        }

        .sidebar {
            height: 130%;
            width: 0;

            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(255, 249, 249);

            color: black;
            transition: 0.5s;

        }
        
.special-img img {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  border-radius: 8%;
}

.special-img img:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #000;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.container {
  position: relative;

}

    </style>
</head>
<body style="background-color: white">
    
 <!-- <nav class="navbar navbar-expand-lg  fixed-top navbar-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <span style="color:#e99c2f; font-size:20px;" >Garment store</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 " style="align-items:center !important">
            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="./index1.php" class=" nav-link active">HOME</a>

                </div>
            </li>

            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="women.html" class=" nav-link active">WOMEN</a>

                </div>
            </li>
            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="men3.html" class=" nav-link active">MEN</a>

                </div>
            </li>
            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="kids.html" class=" nav-link active">KIDS</a>

                </div>
            </li>
            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="about us.html" class=" nav-link active">ABOUT US</a>

                </div>
            </li>

            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="contact us.html" class=" nav-link active">CONTACT US</a>
                </div>
            </li>
            <li class="nav-item px-2 py-2">
                <div class="dropdown ">
                    <a href="feedback.html" class=" nav-link active">FEEDBACK</a>
                </div>
            </li>
    

         <div class="">

        </ul> 
          
  </div>
 </div>
</nav>  -->

<header class="bg-dark ">



<div class="header-main ">

  <div class="container">

    <a href="#" class="header-logo">
     <h1 style="color: white;font-size: 23px" >ADDRESS <span style="color: #e99c2f;">BOOK</span> </h1>
    </a>

    <div class="header-search-container">

      <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

      <button class="search-btn">
      <i class="fa-solid fa-magnifying-glass"></i>
      </button>

    </div>

    <div class="header-user-actions">

      <button class="action-btn">
        <a href="./login.php"><i class="fa-solid fa-user" style="color: white"></i></a>
      
      </button>

      <button class="action-btn">
      <nav class="navbar navbar-expand-md ">


<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
  

    <li class="nav-item">
      <a  class="nav-link" href="cart.php" style="font-size:30px;color: #ffffff;background: none;"><i   class="fas fa-shopping-cart"></i> <span id="cart-item" style="color: white;margin-top: -2;" class="badge badge-danger "></span></a>
    </li>
  </ul>
 
</nav>


<button style="display: flex;align-items: center;justify-content: center;color: white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="10%" height="10%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">/text>';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'" class="bd-placeholder-img rounded-circle" width="50" height="50" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="10%" height="10%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text>   ';
         }
      ?>
      <i class="fa-solid fa-chevron-down mt-2 ms-2"></i>
</button>

<div style="width: 17%;height: 400px;margin-top: 100px;margin-right: 30px;" class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <div class="row">
        <div class="col-lg-12 text-center">
        <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" class="bd-placeholder-img rounded-circle" width="110" height="110" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">/text>';
         }else{
            echo '<img  style="margin-left: 50px" src="uploaded_img/'.$fetch['image'].'" class="bd-placeholder-img rounded-circle" width="110" height="110" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text> ';
         }
      ?>
<div class="row">
<div class="col-lg-12 mt-2">
    <h3 style="font-size: 30px"><?php echo $fetch['name']; ?></h3>
    <h6 style="font-size: 20px">    <?php echo $fetch['email']; ?></h6>

    </div>
  <div class="col-lg-12 mt-3" style="display: flex;align-items: center;justify-content: center">
  <a href="update_profile.php"  class="btn text-white">update profile</a>
  <a href="home.php?logout=<?php echo $user_id; ?>" class="btn  text-white">logout</a>
  </div>
      <div class="col-lg-12">
     
      </div>
    <div class="col-lg-12 mt-3 ">
    <p class="ms-1" style="display: flex;align-items: center;justify-content: center;font-size: 20px;letter-spacing: 1px;">New <a  href="login.php" class="ms-2 text-primary">login</a><span class="ms-2">or </span> <a href="register.php" class="ms-2 text-primary">register</a></p>

    </div>
    </div>
</div>
        </div>
      </div>

    </h5>
  
  </div>
  <div class="offcanvas-body row">
  
</div>

    </div>

  </div>

</div>

<nav class="desktop-navigation-menu "  >

  <div class="container">

    <ul class="desktop-menu-category-list ">

      <li class="menu-category">
        <a href="./index1.php" class="menu-title" style="color: white">Home</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title " style="color: white">Categories</a>

        <div class="dropdown-panel ms-5">

         

        <?php
        include "./config.php";
        $counter = 0;
                            $max = 3;
                            $select5 = "SELECT * FROM  `category`";
                            $select_run5 = mysqli_query($conn, $select5);
                            while ($row = mysqli_fetch_assoc($select_run5) and ($counter < $max)) {
                            ?>

          <ul class="dropdown-panel-list " >

            <li class="menu-title">
              <a href="#"><h4 class="card-title text-dark " ><?= $row['name'] ?><br></h4></a>
            </li>

            <li class="panel-list-item">
              <a href="./Earrings.php"  class="text-dark">Earrings</a>
            </li>

            <li class="panel-list-item">
              <a href="./Rings.php" class="text-dark">Rings</a>
            </li>

            <li class="panel-list-item">
              <a href="Naclas.php" class="text-dark">Nacklas</a>
            </li>

            <li class="panel-list-item">
              <a href="pendals.php" class="text-dark">pendals</a>
            </li>

            <li class="panel-list-item">
              <a href="./Braclet.php" class="text-dark">Braclet</a>
            </li>

            

          </ul>

          <ul class="dropdown-panel-list" style="color: white">

            <li class="menu-title">
              <a href="#">   <h4 class="card-title  text-dark"><?= $row['name'] ?><br></h4></a>
            </li>

            <li class="panel-list-item">
              <a href="./shampo.php" class="text-dark">Shampo</a>
            </li>

            <li class="panel-list-item">
              <a href="./perfuim.php" class="text-dark">perfume</a>
            </li>

            <li class="panel-list-item">
              <a href="./facewash.php" class="text-dark">Face wash</a>
            </li>

            <li class="panel-list-item">
              <a href="./lotion.php"class="text-dark">lotion</a>
            </li>

            <li class="panel-list-item">
              <a href="shurem.php" class="text-dark">Shurem</a>
            </li>
         
           
          </ul>
          <?php } $counter++; ?>
        </div>
      </li>

      <li class="menu-category" style="color: white">
        <a href="mens_groming.php" class="menu-title">Men's</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="mens_groming.php" class="text-dark">Men's Groming</a>
          </li>

        

        </ul>
      </li>

    

      <li class="menu-category" style="color: white">
        <a href="./Jewellery.php" class="menu-title">Jewelry</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="./Earrings.php" class="text-dark">Earrings</a>
          </li>

          <li class="dropdown-item">
            <a href="./Rings.php" class="text-dark">Couple Rings</a>
          </li>

          <li class="dropdown-item">
            <a href="./Naclas.php" class="text-dark">Necklace</a>
          </li>

          <li class="dropdown-item">
            <a href="./Braclet.php" class="text-dark">Bracelets</a>
          </li>

        </ul>
      </li>

      <li class="menu-category">
        <a href="./perfuim.php" class="menu-title" >Perfume</a>

        
      </li>

      <li class="menu-category">
        <a href="./Blog.php" class="menu-title">Blog</a>
      </li>

   

    </ul>

  </div>

</nav>

<div class="mobile-bottom-navigation">

  <button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="menu-outline"></ion-icon>
  </button>

  <button class="action-btn">
    <ion-icon name="bag-handle-outline"></ion-icon>

    <span class="count">0</span>
  </button>

  <button class="action-btn">
    <ion-icon name="home-outline"></ion-icon>
  </button>

  <button class="action-btn">
    <ion-icon name="heart-outline"></ion-icon>

    <span class="count">0</span>
  </button>

  <button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="grid-outline"></ion-icon>
  </button>

</div>

<nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

  <div class="menu-top">
    <h2 class="menu-title" style="color: white">Menu</h2>

    <button class="menu-close-btn" data-mobile-menu-close-btn>
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>

  <ul class="mobile-menu-category-list">

    <li class="menu-category">
      <a href="#" class="menu-title" style="color: white">Home</a>
    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title" style="color: white">Men's</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title " style="color: white">Shirt</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Shorts & Jeans</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Safety Shoes</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Wallet</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title" style="color: white">Women's</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Dress & Frock</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Earrings</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Necklace</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Makeup Kit</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title" style="color: white">Jewelry</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Earrings</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Couple Rings</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Necklace</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Bracelets</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">

      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title" style="color: white">Perfume</p>

        <div>
          <ion-icon name="add-outline" class="add-icon"></ion-icon>
          <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
        </div>
      </button>

      <ul class="submenu-category-list" data-accordion>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Clothes Perfume</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Deodorant</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Flower Fragrance</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Air Freshener</a>
        </li>

      </ul>

    </li>

    <li class="menu-category">
      <a href="#" class="menu-title" style="color: white">Blog</a>
    </li>

    <li class="menu-category">
      <a href="#" class="menu-title"style="color: white" >Hot Offers</a>
    </li>

  </ul>

 

</nav>

</header>
