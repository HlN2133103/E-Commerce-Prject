<?php
include "DatabaseConfig.php";

$Id = $_GET['id'];
$Username = $_COOKIE['Username'];
$Quantity = $_GET['qty'];
$Storage = $_GET['str'];

$sql = "INSERT into cartitems (Id,Username,Quantity,Storage) values (?,?,?,?)";
// Get image data from database 
$result = $db -> prepare($sql);
$result->bind_param('isis',$Id,$Username,$Quantity,$Storage);
$result->execute();
$result->store_result();
header("Location: Cart.php")?>