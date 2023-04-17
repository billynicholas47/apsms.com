<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="600; url=index.php">
<title>apsms.com | Login</title>
<link href="css/style.css" rel="stylesheet">
<script src="js/script.js"></script>

</head>
<body onload="greet();">

<?php 
include ("db_connect.php");

if(isset($_POST["submit"]))
{
$u_name = $_POST['username'];
$u_pass = $_POST['password'];

$query = "select * from admin";
$command = mysqli_query($con,$query);
$row = mysqli_fetch_row($command);

$query2 = "select * from user";
$command2 = mysqli_query($con,$query2);
$row2 = mysqli_fetch_row($command2);

if(($u_name == $row[1]) && ($u_pass == $row[2]))
{
echo ("<script type='text/javascript'>alert('$row[0] Logged in Successfully!!!')</script>");
echo ("<script type='text/javascript'>window.location='admin/index.php'</script>");
$_SESSION['user'] = $u_name;
}
elseif(($u_name == $row2[4]) && ($u_pass == $row2[5]))
{
echo ("<script type='text/javascript'>alert('$row2[1] Logged in Successfully!!!')</script>");
echo ("<script type='text/javascript'>window.location='customer/index.php'</script>");
$_SESSION['user'] = $u_name;
}

else
{
echo ("<script type='text/javascript'>alert('Incorrect Username or Password!!!')</script>");
}
}
else
{
session_destroy();
}

?>

<div class="login">
<h1 class="text-center">JIBIDAYO AGRICULTURAL PRODUCE SHOP</h1>
<div class="login_box">
<center>
<div id="profile_pic">
<img id="pic" src="resources/icons/user.png" alt="Admin Profile Picture">
</div>
<form method="post" action="" onsubmit="return validateForm()">
<br>
<input id="username" type="text" name="username" placeholder="Username" autocomplete="off" autofocus><br><br>
<input id="password" type="password" name="password" placeholder="Password"><br><br>
<input id="go" type="submit" name="submit" value="Login"><br>
</form>
</center>
</div>
</div>
<h2 class="text-center">&copy; 2022. All rights reserved. <a href="index.php">apsms.com</a> - Atim Abel Atim</h2>

<script type="text/javascript">
function greet()
{
alert ("Welcome to Jibidayo Agricultural Produce Shop!!!");
}
</script>
</body>
</html>