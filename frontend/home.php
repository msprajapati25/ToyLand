<!DOCTYPE html>
<html>
<head>
<title>TOYLAND</title>
<!--CODE FOR FONT AWESOME CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--CODE FOR FONT AWESOME CDN-->
<!--code for linking css-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <!--header section-->
    <header class="header">
        <a href="#" class="logo" ><i class="fa fa-hand-peace-o" aria-hidden="true"></i>TOYLAND</a>
        <nav class="nav">
            <a href="#home">Home</a>
            <a href="about.html">About Us</a>
            <a href="#products">Products</a>
            <a href="#contact">Contact Us</a>
        </nav>
        <div class="icons">
            <div class="fa fa-bars" id="menu"></div>
        
            
            <div class="fa fa-user" id="log"></div>

        </div>
        <form class="search-form">
            <input type="search" id="search" placeholder="search here" >
            <label for="search" class="fa fa-search"></label>
        </form>
        <form action="#" class="login">
                        <div class="text-center">
                            <a href="logout.php" class="btn btn-danger" onclick= <?php session_unset(); ?>>Logout</a>
                            <a href="home.php" class="btn btn-secondary">Cancel</a>
        </form>

    </header>
    
<!--header section-->



<!--banner section-->

<section class="home" id="home">
<div class="content">
<h3>Best Quality And Pocket Friendly Toys For You </h3>
<p>WebShop for premium games & toys for kids online at Toyland India, the finest toy store in the world. Avail great offers & deals, Free Delivery. </p>
<a href="#" class="btn">Shop Now</a>


</div>


</section>

<!--banner section-->
<!--Product section-->
<section class="products" id="products" >
<h1 class="heading" >Our <span>Products</span></h1>
<div class=" Pslider">
    <?php
	session_start();
    $mongoConnection = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $database = "website39";
    $collection = "item";

    $filter = [];
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongoConnection->executeQuery("$database.$collection", $query);
    foreach ($cursor as $product) {
    ?>
        <div class=" box">
              <img src="image/<?php echo $product->image ?>">
              <h3><?php echo $product->name ?></h3>
              <div class="price"><?php echo $product->price ?></div>
              <a href="cart.php?p_id=<?php echo $product->_id; ?>" class="btn btn-primary">ADD TO CART</a>
        </div>
<?php
}
?>
</div>
 </section>

<!--Product section-->

<!--contact section-->
<section class="contact" id="contact">
    <div class="container">
        <table>
            <tr ><td>
        <div class="box">
            
              
            <h3> <i class="fa fa-hand-peace-o"></i>Toyland </h3>
            <p>Feel Free To Follow Us On Social Media <br>Handlers , All the Links Are Given Below. </p><br>
            <div class="share">
                <a href="https://www.facebook.com/profile.php?id=100014690583306" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/msprajapati25/" class="fa fa-instagram"></a>
                <a href="https://www.facebook.com/profile.php?id=100014690583306" class="fa fa-twitter"></a>
            </div>
        </td>
        </div>

        <td class="table">
        <div class="box">
                <h3> Contact Info</h3>
                <a href="#" class="links" ><i class="fa fa-phone"></i>+91 9876543210</a><br>
                <a href="#" class="links" ><i class="fa fa-phone"></i>+91 1234567890</a><br>
                <a href="#" class="links" ><i class="fa fa-envelope"></i>msprajapati25@gmail.com</a><br>
                <a href="#" class="links" ><i class="fa fa-map-marker"></i>Valsad , Gujarat , India</a>
    

        </div>
    </td>
    </tr>
        
    </table>
    </div>

    <div class="credit">Created By<span> @msprajapati </span>| All Rights Reserved</div>

    


</section>
<!--contact section-->

<!--code for linking javascript-->
<script src="js/javas.js"></script>
<!--code for linking javascript-->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</body>
</html>