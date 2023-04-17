<?php include ("includes/header.php"); ?>

<!-- main section starts here-->
<div class="main">
<div class="wrapper">
<h1>Manage User Accounts</h1>
<br><br>
<a href="add_user.php" class="btn-primary">Add User</a>
<br><br><br>
<table class="tbl-wider">
<tr>
<th>S.No</th>
<th>Full Name</th>
<th>Address</th>
<th>Contact</th>
<th>Username</th>
<th class="text-center">Actions</th>
</tr>



<?php
include ("../db_connect.php");
$display_command = "select * from user";
$exec = mysqli_query($con, $display_command);
$s_n = 1;
while($row = mysqli_fetch_array($exec))
{
echo ("<tr>");
echo ("<td>" . $s_n++ . ". </td>");
echo ("<td>" . $row[1] . "</td>");
echo ("<td>" . $row[2] . "</td>");
echo ("<td>" . $row[3] . "</td>");
echo ("<td>" . $row[4] . "</td>");
echo ("<td class='text-center'>");
echo ("<a href='update_user.php?update_id=$row[0]' class='btn-secondary'>" . "Update User" . "</a>");
echo (" <a href='delete_user.php?delete_id=$row[0]' class='btn-danger'>" . "Delete User" . "</a>");
echo ("</td>");
echo ("</tr>");
}
?>




</table>
</div>
</div> 
<!-- main section ends here-->

<?php include ("includes/footer.php"); ?>