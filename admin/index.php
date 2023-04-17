<?php include ("../admin/includes/header.php"); ?>

<!-- main section starts here-->
<div class="main">
<div class="wrapper">
<h1>Dashboard</h1>
<div class="col-4 text-center">
<a href = "categories.php" style="text-decoration: none;">
<div class="col" style="border-radius:30px;">
<h1>
<?php
include("../db_connect.php");
$command = "select * from categories";
$cmd = mysqli_query($con, $command);
$row = mysqli_num_rows($cmd);
echo ($row);
?>
</h1>
<br>
Categories
</div></a>

<a href = "products.php" style="text-decoration: none;">
<div class="col" style="border-radius:30px;">
<h1>
<?php
include("../db_connect.php");
$command = "select * from products";
$cmd = mysqli_query($con, $command);
$row = mysqli_num_rows($cmd);
echo ($row);
?>
</h1>
<br>
Products
</div></a>

<a href = "users.php" style="text-decoration: none;">
<div class="col" style="border-radius:30px;">
<h1>
<?php
include("../db_connect.php");
$command = "select * from user";
$cmd = mysqli_query($con, $command);
$row = mysqli_num_rows($cmd);
echo ($row);
?>
</h1>
<br>
Registered Users
</div></a>
</div>
</div>
</div>
<!-- main section ends here-->

<?php include ("includes/footer.php"); ?>