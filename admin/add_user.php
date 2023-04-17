<?php include ("includes/header.php"); ?>

<?php
if(isset($_POST['submit']))
{
include("../db_connect.php");

$cname = $_POST['cname'];
$cad = $_POST['cad'];
$ctel = $_POST['ctel'];
$uname = $_POST['uname'];
$pass = md5($_POST['pass']);
$query = "insert into user(FullName, Address, Contact, Username, Password) 
values('$cname', '$cad', '$ctel', '$uname', '$pass')";
$exec = mysqli_query($con,$query);

if($exec)
{
echo("<script type='text/javascript'>alert('User added successfully!!!');</script>");
echo ("<script type='text/javascript'>window.location='users.php'</script>");
}
}
?>

<div class="main">
<div class="wrapper">
<h1>Add New User</h1><br><br>
<div class="credentials">
<form action="" method="post" autocomplete="off">
<label>Full Name: </label><input type="text" name="cname" required autofocus><br>
<label>Address: </label><input type="text" name="cad" required><br>
<label>Contact: </label><input type="tel" name="ctel" required><br>
<label>UserName: </label><input type="text" name="uname" required><br>
<label>Password: </label><input type="text" name="pass" required>

<div><br>
<center>
<button class="btn-secondary" type="reset" name="reset" id="rfr">Refresh</button>
<button class="btn-primary" type="submit" name="submit" id="save">Save User Info</button>
</center>
</div>
</form>
</div>
</div>
</div>
<?php include ("includes/footer.php"); ?>
</body>
</html>