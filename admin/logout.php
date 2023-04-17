<?php
include ("includes/header.php");
session_destroy();
echo("<script type='text/javascript'>alert('Logout successful!!!');</script>");
echo ("<script type='text/javascript'>window.location='../index.php'</script>");
?>