<?php include ("includes/header.php"); ?>

<div class="main">
<div class="wrapper">
<h1>Update User Profile</h1><hr><br><br>
<div class="credentials">
<form action="" method="post" autocomplete="off">
<?php
include("../db_connect.php");

if(isset($_GET['update_id']))
{
$uid = $_GET['update_id'];
$query = "select * from user where s_no = '$uid'";
$exec = mysqli_query($con,$query);

while($row = mysqli_fetch_array($exec))
{
echo("<label>Full Name: </label><input type='text' value='$row[1]' name='cname' required><br>");
echo("<label>Address: </label><input type='text' value='$row[2]' name='cad' required><br>");
echo("<label>Contact: </label><input type='tel' value='$row[3]' name='ctel' required><br>");
echo("<label>UserName: </label><input type='text' value='$row[4]' name='uname' required><br>");
/*echo("<label><font color='red'>*Optional</font></label><br>");
echo("<label>Old Password: </label><input type='text' value='$row[5]' name='pass' required><br>");
echo("<label>New Password: </label><input type='text' value='$row[5]' name='pass' required><br>");
echo("<label>Confirm New Password: </label><input type='text' value='$row[5]' name='pass' required>");*/
}
}
?>
<div><br>
<center>
<button class="btn-secondary" type="reset" name="reset" id="rfr">Refresh</button>
<button class="btn-primary" type="submit" name="submit" id="save">Update User Info</button>
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
$cad = $_POST['cad'];
$ctel = $_POST['ctel'];
$uname = $_POST['uname'];
//$pass = md5($_POST['pass']);
$sql = "UPDATE `user` SET `FullName`='$cname',`Address`='$cad',`Contact`='$ctel',`Username`='$uname' WHERE s_no = '$uid'";
//,`Password`='[value-6]'
$exec = mysqli_query($con,$sql);
if($exec)
{
echo("<script type='text/javascript'>alert('$cname updated successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='users.php'</script>");
}
}

?>
<?php include ("includes/footer.php"); ?>
</body>
</html>