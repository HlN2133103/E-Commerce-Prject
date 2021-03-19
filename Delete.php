<?php

include "DataBaseConfig.php";

$Id = $_GET['Id'];

$sql = "UPDATE items set Status ='Not-Available' where Id = ? ";
// Get image data from database 
$result = $db -> prepare($sql);
$result->bind_param('i',$Id);
$result->execute();
$result->store_result();

header("Location: products.php");
?>
