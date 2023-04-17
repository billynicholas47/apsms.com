<?php include("../customer/includes/header.php"); ?>

<!--search section-->
<section class="search text-center">
<div class="container">
<form action="search.php" method="post">
<input type="search" name="search" id="search" placeholder="Type keyword here....." autofocus>
<button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
</section>
<!--end of section-->

<!--categories section-->
<section class="categories" id="categories">
<div class="container">
<h2 class="text-center">Explore Our Categories</h2>
<div class="our_categories">

<?php
include("../db_connect.php");
$sql = "select * from categories";
$cmd = mysqli_query($con,$sql);
while($rows = mysqli_fetch_array($cmd))
{
?>
<div class="featured_boxes float-container"">
<a href="#">
<img src="../resources/images/categories/<?php echo($rows[2]) ?>" alt="<?php echo($rows[1]) ?>" class="img-full img-curved">
<h3 class="float-text text-blue"><?php echo($rows[1]) ?></h3>
</a>
</div>

<?php } ?>

</div>
</div>
</section>
<!--end of section-->

<!--products section-->
<section class="products" id="products">
<div class="container">
<h2 class="text-center">Our Products</h2>
<div class="wrapper">


<?php
include("../db_connect.php");
$sql = "select * from products";
$cmd = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($cmd))
{
?>
<div class="menu_items">
<div class="product-img"><img src="../resources/images/products/<?php echo($row[4]) ?>" alt="Beans" class="img-full img-curved"></div>
<div class="product-desc">
<h4><?php echo($row[1]) ?></h4>
<p class="price">Ugx. <?php echo($row[3]) ?>/=</p>
<p class="details"><?php echo($row[2]) ?></p><br>
<a href="#" class="btn btn-primary">Read More</a>
</div>
<div class="clear-fix"></div>
</div>

<?php } ?>


</div>
</div>
</section>
<!--end of section-->

<!--links section-->
<section class="links" id="links">
<div class="container text-center">
<h2 class="text-center">Connect With Us</h2>
<ul>
<a href="#"><li><img src="../resources/icons/twitter.png" alt="apsms.com"></li></a>
<a href="#"><li><img src="../resources/icons/twitter.png" alt="apsms.com"></li></a>
<a href="#"><li><img src="../resources/icons/twitter.png" alt="apsms.com"></li></a>
</ul>
</div>
</section>
<!--end of section-->

<?php include("../customer/includes/footer.php"); ?>