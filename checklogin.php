<?php
include('inc/connect.php');

if(isset($_POST['login'])){
    $email = $_POST['taikhoan'];
    $upass  = $_POST['matkhau'];
    
    if ($email == "admin" && $upass == "admin") {
      header("Location: index.php?msg=1");
      $_SESSION['taikhoan'] = $email;
      
    } 
    else {
      header("Location: login.php?fail=1");
    }
}
 ?> 