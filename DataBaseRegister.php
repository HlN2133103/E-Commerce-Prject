<?php
include "DatabaseConfig.php";

$name = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$Status = "User";

$sql = "Insert into User values(?,?,?,?,?,?)";

$result = $db -> prepare($sql);
$result->bind_param('sissss',$name,$phone,$email,$user,$pass,$Status);
$result->execute();
$result->store_result();

header("Location: index.php");

?>