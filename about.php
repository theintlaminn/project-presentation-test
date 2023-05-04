<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="about">
     <div class="about-content">
         <img src="./IMG/burger.png">
         <div class="about-text">
             <h1>About Us</h1>
             <h5>Foodie Foodie</h5>
             <p>Foodie is an American fast food restaurant chain headquartered in Louisville, Kentucky, that specializes in fried chicken. It is the most delicious fast food resturant among this city,foundend in 2022. The chain is a subsidiary of Yum!
               Our advantages are using the best quality products and cooking as homemade taste. Have a fun time with us!!!
             </p>
             <a href="menu.php"><button type="button">Order Now </button></a> 
         </div>
     </div>
 </div>

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="./IMG/people-1.jpg" alt="">
            <p> This restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>YoonJounghan</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="./IMG/people-2.jpg" alt="">
            <p> It’s a great experience. The ambiance is very welcoming and charming. Amazing juice, food and service. Staff are extremely knowledgeable and make great recommendations.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>S.coups</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="./IMG/people3.jpg" alt="">
            <p> Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining.I really like their coffee taste.I recommended for other try it. </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dogyeom</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="./IMG/people4.jpg" alt="">
            <p>This spot gives extraordinary service and yummy meals. One of my favourite restaurants around town. The meals served rapidly and the rates were reasonable. Highly recommended.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hoshi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="./IMG/people-5.jpg" alt="">
            <p> Delicious food, waiters are very attentive, and super nice atmosphere. Plus it’s all at an affordable price.
            Can totally recommend it and will definitely come back again.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Joshua</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<!-- reviews section ends -->

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>