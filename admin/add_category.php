<?php include ("includes/header.php"); ?>

<?php
if(isset($_POST['submit']))
{
include("../db_connect.php");

$cname = $_POST['cname'];
$desc = $_POST['desc'];

//specifications for the photo
$filename = $_FILES['photo']['name'];

//renaming the photo
$extension = end(explode(".",$filename));
$filename = "Category_".rand(000,999).".".$extension;

$temp_folder = $_FILES['photo']['tmp_name'];
$folder = "../resources/images/categories/" . $filename;
move_uploaded_file($temp_folder, $folder);
//end of specifications

$query = "INSERT INTO `categories`(`category_name`, `img`, `description`) 
VALUES ('$cname','$filename','$desc')";
$exec = mysqli_query($con,$query);

if($exec)
{
echo("<script type='text/javascript'>alert('Category added successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='categories.php'</script>");
}
}
?>

<div class="main">
<div class="wrapper">
<h1>Add New Category</h1><br><br>
<div class="credentials">
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
<table class="tbl-wide">
<tr><td><label>Category Name: </label></td><td><input type="text" name="cname" required autofocus></td></tr>
<tr><td><label>Select Photo: </label></td><td><input type="file" name="photo" required></td></tr>
<tr><td><label>Description: </label></td><td><textarea type="text" name="desc" placeholder="Enter category description.." cols="40" rows="5" required></textarea></td></tr>
</table>
<div><br>
<center>
<button class="btn-secondary" type="reset" name="reset" id="rfr">Refresh</button>
<button class="btn-primary" type="submit" name="submit" id="save">Save Category Info</button>
</center>
</div>
</form>
</div>
</div>
</div>
<?php include ("includes/footer.php"); ?>
</body>
</html>