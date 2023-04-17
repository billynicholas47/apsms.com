<?php include("../customer/includes/header.php"); ?>

<!-- search Section Starts Here -->
<section class="search text-center">
<div class="container">
<?php
include("../db_connect.php");
//get the search keyword
//$search = $_POST['search'];
$search = mysqli_real_escape_string($con, $_POST['search']);

?>

<h2>Products on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

</div>
</section>
<!-- Section Ends Here -->



<!-- product Section Starts Here -->
<section class="products" id="products">
<div class="container">
<h2 class="text-center">Our Products</h2>

<?php
include("../db_connect.php");
//sql query to get products based on search kwyword
$sql = "SELECT * FROM products WHERE product_name LIKE '%$search%' OR description LIKE '%$search%'";

//execute the query
$res=mysqli_query($con, $sql);

//count rows
$count = mysqli_num_rows($res);

//check whether product is available or not
if($count>0)
{
//product available
while($row = mysqli_fetch_assoc($res))
{
//get all the values
$s_no=$row['s_no'];
$product_name=$row['product_name'];
$price=$row['price'];
$description=$row['description'];
$img=$row['img'];

?>

<div class="menu_items">
<div class="product-img">

<?php
//check whether image is available or not
if($img=="")
{
//image not available
echo "<div>Image Not Available. </div>";
}
else
{
//image available
?>
<img src="../resources/images/products/<?php echo($row['img']) ?>" alt="<?php echo($row[1]) ?>" class="img-curved">
<?php
}
?>


</div>

<div class="menu_items">
<h4><?php echo $product_name; ?></h4>
<p class="price">$<?php echo $price; ?></p>
<p class="details">
<?php echo $description; ?>
</p>
<br>

<a href="#" class="btn btn-primary">Read More</a>
</div>
</div>
<hr>
<?php

}
}
else
{
//product not available
echo "<div>Product Not Available.</div>";
}


?>



<div class="clearfix"></div>

</div>

</section>
<!-- products Section Ends Here -->

<?php include("../customer/includes/footer.php"); ?>