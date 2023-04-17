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
<title>apsms.com | Admin Home</title>
<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<!-- menu section starts here-->
<div class="menu text-center">
<div class="wrapper">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="categories.php">Categories</a></li>
<li><a href="products.php">Products</a></li>
<li><a href="users.php">Manage Accounts</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>
<!-- menu section ends here-->