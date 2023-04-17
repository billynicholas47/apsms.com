<?php include ("includes/header.php"); ?>

<!-- main section starts here-->
<div class="main">
<div class="wrapper">
<h1>Categories</h1>

<br><br>
<a href="add_category.php" class="btn-primary">Add New Category</a>
<br><br><br>
<table class="tbl-wider">
<tr>
<th>S.No</th>
<th>Category Name</th>
<th>Category Photo</th>
<th>Description</th>
<th class="text-center">Actions</th>
</tr>

<?php
include ("../db_connect.php");
$display_command = "select * from categories";
$exec = mysqli_query($con, $display_command);
$s_n = 1;
while($row = mysqli_fetch_array($exec))
{
echo ("<tr>");
echo ("<td>" . $s_n++ . ". </td>");
echo ("<td>" . $row[1] . "</td>");

if($row[2]!="")
{
echo ("<td><img src='../resources/images/categories/$row[2]' width='100px'></td>");
}
else
{
echo ("<td>" . "Image not uploaded" . "</td>");
}



echo ("<td>" . $row[3] . "</td>");
echo ("<td class='text-center'>");
echo ("<a href='update_category.php?update_id=$row[0]' class='btn-secondary'>" . "Update" . "</a>");
echo ("  <a href='delete_category.php?delete_id=$row[0]' class='btn-danger'>" . "Delete" . "</a>");
echo ("</td>");
echo ("</tr>");
}
?>

</table>

</div>
</div>
<!-- main section ends here-->

<?php include ("includes/footer.php"); ?>