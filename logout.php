<?php 
    session_start(); 
    $_SESSION['Username'] = '';
    $_SESSION['Name'] = '';
    $_SESSION['Email'] = '';
    $_SESSION['Status'] = ''; 
    setcookie('Status',"");
    setcookie('Username',"");
    setcookie('Name',"");
    setcookie('Phone',"");
    setcookie('Email',"");
    unset($_SESSION['Username']);
    unset($_SESSION['Name']);
    unset($_SESSION['Email']);
    unset($_SESSION['Status']); 
    unset($_COOKIE['Status']);
    unset($_COOKIE['Username']);
    if(session_destroy())
    { 
      header('location:index.php'); 
    }
?>