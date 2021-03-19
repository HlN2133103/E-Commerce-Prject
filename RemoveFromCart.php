<?php
include "DatabaseConfig.php";

$Id = $_POST['id'];
$Username = $_COOKIE['Username'];

$sql = "DELETE FROM cartitems where Id = ? AND Username = ?";
// Get image data from database 
$result = $db -> prepare($sql);
$result->bind_param('is',$Id,$Username);
$result->execute();
header("Location: Cart.php")?>