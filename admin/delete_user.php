<?php include ("includes/header.php"); ?>

<div class="main">
<div class="wrapper">
<h1>Delete User Profile</h1><br><br>
<div class="credentials">

<?php
include("../db_connect.php");

if(isset($_GET['delete_id']))
{
$uid = $_GET['delete_id'];
$query = "delete from user where s_no = '$uid'";
$exec = mysqli_query($con,$query);

if($exec)
{
echo("<script type='text/javascript'>alert('User deleted successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='users.php'</script>");
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