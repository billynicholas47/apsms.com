<?php include ("includes/header.php"); ?>

<?php
if(isset($_POST['submit']))
{
include("../db_connect.php");

$pname = $_POST['pname'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$cat = $_POST['cat'];



//specifications for the photo
$filename = $_FILES['photo']['name'];

//renaming the photo
$extension = end(explode(".",$filename));
$filename = "Product_".rand(000,999).".".$extension;

$temp_folder = $_FILES['photo']['tmp_name'];
$folder = "../resources/images/products/" . $filename;
move_uploaded_file($temp_folder, $folder);
//end of specifications

$query = "INSERT INTO `products`(`product_name`, `description`, `price`, `img`, `category_id`) 
VALUES ('$pname','$desc','$price','$filename','$cat')";
$exec = mysqli_query($con,$query);

if($exec)
{
echo("<script type='text/javascript'>alert('Product added successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='products.php'</script>");
}
}
?>

<div class="main">
<div class="wrapper">
<h1>Add New Product</h1><br><br>
<div class="credentials">
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
<table class="tbl-wide">
<tr><td><label>Product Name: </label></td><td><input type="text" name="pname" required autofocus></td></tr>
<tr><td><label>Description: </label></td><td><textarea type="text" name="desc" required></textarea></td></tr>
<tr><td><label>Product Price: </label></td><td><input type="text" name="price" required></td></tr>
<tr><td><label>Select Photo: </label></td><td><input type="file" name="photo" required></td></tr>
<tr><td><label>Product Category: </label></td>
<td>
<select name="cat" required>
<option value=""></option>
<?php
include("../db_connect.php");
$sql = mysqli_query($con, "select * from categories");
while($rows = mysqli_fetch_array($sql))
{
echo ("<option value='$rows[0]'>$rows[1]</option>");
}
?>
</select>
</td>
</tr>
</table>
<div><br>
<center>
<button class="btn-secondary" type="reset" name="reset" id="rfr">Refresh</button>
<button class="btn-primary" type="submit" name="submit" id="save">Save Product Info</button>
</center>
</div>
</form>
</div>
</div>
</div>
<?php include ("includes/footer.php"); ?>
</body>
</html>