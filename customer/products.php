<?php include("../customer/includes/header.php"); ?>

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

<?php include("../customer/includes/footer.php"); ?>