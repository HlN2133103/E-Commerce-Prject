<?php
include "DatabaseConfig.php";
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT * from user WHERE username='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>