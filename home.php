<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
  
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

 <!-- slider section start-->
 <div class="home" id="home">
     <div class="swiper home-slider">
         <div class="swiper-wrapper wrapper">
             <div class="swiper-slide slide slide1">
                 <div class="content">
                     <img src="./IMG/crown-symbol.png">

                     <h3>Delicious royate</h3>
                     <h1>Cheese Burger</h1>
                     <p>
                         give away your beloved customers
                     </p>
                     <a href="menu.php" class="btn"> order now</a>
                 </div>
             </div>

             <div class="swiper-slide slide slide2">
                 <div class="content">
                     <img src="./IMG/crown-symbol.png">

                     <h3>the best sale of us </h3>
                     <h1>fresh coffee</h1>
                     <p>
                         food Restaurant
                     </p>
                     <a href="menu.php" class="btn"> order now</a>
                 </div>
             </div>

             <div class="swiper-slide slide slide3">
                 <div class="content">
                     <img src="./IMG/crown-symbol.png">

                     <h3>We are sweet</h3>
                     <h1>desserts</h1>
                     <p>
                         You will love it
                     </p>
                     <a href="menu.php" class="btn"> order now</a>
                 </div>
             </div>
         </div>
         <div class="swiper-pagination"></div>
     </div>
 </div>
 <!-- slider section end-->

 <section class="category">

     <h1 class="title">food category</h1>
     <center>
         <h3 class="sub-heading"> ~ see what we offer ~ </h3>
     </center>

     <div class="box-container">

         <a href="category.php?category=fast food" class="box">
             <img src="./IMG/dish-7" alt="">
             <h3>fast food</h3>
         </a>

         <a href="category.php?category=main dish" class="box">
             <img src="./IMG/dish-9.png" alt="">
             <h3>main dishes</h3>
         </a>

         <a href="category.php?category=drinks" class="box">
             <img src="./IMG/coffee3.png" alt="">
             <h3>drinks</h3>
         </a>

         <a href="category.php?category=desserts" class="box">
             <img src="./IMG/cake1.png" alt="">
             <h3>desserts</h3>
         </a>

     </div>

 </section>
 <!-- fOOD MEnu Section Starts Here -->
 <section class="products">

<h1 class="title">MENU</h1>
<center>
      <h3 class="sub-heading"> ~ see what we offer ~ </h3>
  </center>

<div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
      <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
      <div class="name"><?= $fetch_products['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Ks</span><?= $fetch_products['price']; ?></div>
         <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
      </div>
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
   ?>

</div>

<div class="more-btn">
   <a href="menu.php" class="btn">veiw all</a>
</div>

</section>
 <!-- fOOD Menu Section Ends Here -->
 <!-- our team section start -->

 <!-- Team Start -->
 <div class="container-xxl pt-5 pb-3">
     <div class="chef-container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

             <h1 class="mb-5 title">Our Master Chefs</h1>
             <center>
                 <h3 class="sub-heading"> ~ see our talented chef ~ </h3>
             </center>
         </div>
         <div class="row g-4">
             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item text-center rounded overflow-hidden">
                     <div class="rounded-circle overflow-hidden m-4">
                         <img class="img-fluid" src="./IMG/team-1.jpg" alt="">
                     </div>
                     <h5 class="mb-0">Johan</h5>
                     <small><i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i></small>
                     <div class="d-flex justify-content-center mt-3">
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="team-item text-center rounded overflow-hidden">
                     <div class="rounded-circle overflow-hidden m-4">
                         <img class="img-fluid" src="./IMG/team-2.jpg" alt="">
                     </div>
                     <h5 class="mb-0">Doppy</h5>
                     <small><i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i></small>
                     <div class="d-flex justify-content-center mt-3">
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                 <div class="team-item text-center rounded overflow-hidden">
                     <div class="rounded-circle overflow-hidden m-4">
                         <img class="img-fluid" src="./IMG/team-3.jpg" alt="">
                     </div>
                     <h5 class="mb-0">Bruno</h5>
                     <small><i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i></small>
                     <div class="d-flex justify-content-center mt-3">
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                 <div class="team-item text-center rounded overflow-hidden">
                     <div class="rounded-circle overflow-hidden m-4">
                         <img class="img-fluid" src="./IMG/team-4.jpg" alt="">
                     </div>
                     <h5 class="mb-0">Mark</h5>
                     <small><i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i></small>
                     <div class="d-flex justify-content-center mt-3">
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Team End -->

<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
        var swiper = new Swiper(".home-slider", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 7500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
        });
    </script>
 

</body>
</html>