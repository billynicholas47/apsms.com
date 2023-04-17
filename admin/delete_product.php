<?php include ("includes/header.php"); ?>

<div class="main">
<div class="wrapper">
<h1>Delete Product Profile</h1><br><br>
<div class="credentials">

<?php
include("../db_connect.php");

if(isset($_GET['delete_id']))
{
$uid = $_GET['delete_id'];
$query = "delete from products where s_no = '$uid'";
$exec = mysqli_query($con,$query);

if($exec)
{
echo("<script type='text/javascript'>alert('Product deleted successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='products.php'</script>");
}
}
?>
<div><br>

</div>

</div>
</div>
</div>
<?php include ("includes/footer.php"); ?>
</body>
</html>