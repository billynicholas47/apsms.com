<?php include ("includes/header.php"); ?>

<!-- main section starts here-->
<div class="main">
<div class="wrapper">
<h1>Products</h1>

<br><br>
<a href="add_product.php" class="btn-primary">Add New Product</a>
<br><br><br>
<table class="tbl-wider">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Description</th>
<th>Price (Ugx)</th>
<th>Photo</th>

<th class="text-center">Actions</th>
</tr>

<?php
include ("../db_connect.php");
$display_command = "select * from products";
$exec = mysqli_query($con, $display_command);
$s_n = 1;
while($row = mysqli_fetch_array($exec))
{
echo ("<tr>");
echo ("<td>" . $s_n++ . ". </td>");
echo ("<td>" . $row[1] . "</td>");
echo ("<td>" . $row[2] . "</td>");
echo ("<td>" . $row[3] . "</td>");

if($row[4]!="")
{
echo ("<td><img src='../resources/images/products/$row[4]' width='100px'></td>");
}
else
{
echo ("<td>" . "Image not uploaded" . "</td>");
}




echo ("<td class='text-center'>");
echo ("<a href='update_product.php?update_id=$row[0]' class='btn-secondary'>" . "Update" . "</a>");
echo (" <a href='delete_product.php?delete_id=$row[0]' class='btn-danger'>" . "Delete" . "</a>");
echo ("</td>");
echo ("</tr>");
}
?>

</table>

</div>
</div>
<!-- main section ends here-->

<?php include ("includes/footer.php"); ?>