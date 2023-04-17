<?php 
session_start();
if(!isset($_SESSION['user']))
{
echo ("<script type='text/javascript'>alert('Please login first!!!')</script>");
echo ("<script type='text/javascript'>window.location='../index.php'</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>apsms.com | Customer home</title>
<link rel="stylesheet" href="../css/customer.css">
</head>
<body>
<!--nav-bar section-->
<section class="nav-bar">
<div class="upper">
<a href="index.php"><div class="logo"><img src="../resources/icons/logo.png" alt="apsms.com" class="img-full"></div></a>
<div class="menu text-right">
<ul class="text-big">
<li><a href="../customer/index.php">Home</a></li>
<li><a href="../customer/categories.php">Our Categories</a></li>
<li><a href="../customer/products.php">Our Products</a></li>
<li><a href="../customer/contact.php">Contact Us</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="clear-fix"></div>
</div>
</section>
<!--end of section-->