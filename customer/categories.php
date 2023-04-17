<?php include("../customer/includes/header.php"); ?>

<section class="categories" id="categories">
<div class="container">
<h2 class="text-center">Showing All Categories</h2>
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

<?php include("../customer/includes/footer.php"); ?>