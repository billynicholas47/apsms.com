<?php include ("includes/header.php"); ?>

<div class="main">
<div class="wrapper">
<h1>Update Product Details</h1><hr><br><br>
<div class="credentials">
<form action="" method="post" autocomplete="off">
<?php
include("../db_connect.php");

if(isset($_GET['update_id']))
{
$uid = $_GET['update_id'];
$query = "select * from products where s_no = '$uid'";
$exec = mysqli_query($con,$query);

while($row = mysqli_fetch_array($exec))
{
echo("<label>Product Name: </label><input type='text' value='$row[1]' name='pname' required><br>"); 
echo("<label>Product Description: </label><input type='text' value='$row[2]' name='desc' required><br>");
echo("<label>Product Price (Ugx): </label><input type='text' value='$row[3]' name='price' required><br>");
if($row[4]!="")
{
echo("<label>Photo: </label><td><img src='../resources/images/products/$row[4]' width='100px'></td>");
}
else
{
echo ("<td>" . "Image not uploaded" . "</td><br>");
}

echo("<br><label>Category: </label>");
?>
<select name="cat" required>
<option value="<?php echo($row[5]);?>"><?php echo($row[5]);?></option>
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



<?php
}
}
?>
<div><br>
<center>
<button class="btn-secondary" type="reset" name="reset" id="rfr">Refresh</button>
<button class="btn-primary" type="submit" name="submit" id="save">Update Product Info</button>
</center>
</div>
</form>
</div>
</div>
</div>

<?php
if(isset($_POST['submit']))
{
$pname = $_POST['pname'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$cat = $_POST['cat'];


$sql = "UPDATE `products` SET `product_name`='$pname',`description`='$desc',`price`='$price',`category`='$cat' WHERE s_no = '$uid'";

$exec = mysqli_query($con,$sql);
if($exec)
{
echo("<script type='text/javascript'>alert('$pname updated successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='products.php'</script>");
}
}

?>
<?php include ("includes/footer.php"); ?>
</body>
</html>