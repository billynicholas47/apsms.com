<?php include ("includes/header.php"); ?>

<div class="main">
<div class="wrapper">
<h1>Update Category Details</h1><hr><br><br>
<div class="credentials">
<form action="" method="post" autocomplete="off">
<?php
include("../db_connect.php");

if(isset($_GET['update_id']))
{
$uid = $_GET['update_id'];
$query = "select * from categories where s_no = '$uid'";
$exec = mysqli_query($con,$query);

while($row = mysqli_fetch_array($exec))
{
echo("<label>Category Name: </label><input type='text' value='$row[1]' name='cname' required><br>");
 

if($row[2]!="")
{
echo("<label>Photo: </label><td><img src='../resources/images/categories/$row[2]' width='100px'></td>");
}
else
{
echo ("<td>" . "Image not uploaded" . "</td><br>");
}


echo("<br><br><label>Description: </label><input type='text' value='$row[3]' name='desc'required><br>");
}
}
?>
<div><br>
<center>
<button class="btn-secondary" type="reset" name="reset" id="rfr">Refresh</button>
<button class="btn-primary" type="submit" name="submit" id="save">Update Category Info</button>
</center>
</div>
</form>
</div>
</div>
</div>

<?php
if(isset($_POST['submit']))
{
$cname = $_POST['cname'];
$desc = $_POST['desc'];


$sql = "UPDATE `categories` SET `category_name`='$cname', `description`='$desc' WHERE s_no = '$uid'";

$exec = mysqli_query($con,$sql);
if($exec)
{
echo("<script type='text/javascript'>alert('$cname updated successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='categories.php'</script>");
}
}

?>
<?php include ("includes/footer.php"); ?>
</body>
</html>