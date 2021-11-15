<?php
include('inc/connect.php');


if(isset($_POST['addkhachhang'])){
    $hoten = $_POST['hoten'];
    $gioitinh  = $_POST['gioitinh'];
    $ngaysinh  = $_POST['ngaysinh'];
    $sodienthoai = $_POST['sodienthoai'];
    $email  = $_POST['email'];
    $diachi  = $_POST['diachi'];
    $nghenghiep = $_POST['nghenghiep'];
    $socmnd  = $_POST['socmnd'];
  $query = "INSERT INTO nguoidung ( hoten, gioitinh, ngaysinh, sodienthoai, email, diachi, nghenghiep, socmnd, role ) VALUES ( '{$hoten}', '{$gioitinh}', '{$ngaysinh}', '{$sodienthoai}', '{$email}','{$diachi}', '{$nghenghiep}', '{$socmnd}', 1 ) ";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: khachhang.php?msg=1");
  } 
  else {
      header("Location: khachhang.php?msg=2");
  }
}
if(isset($_POST['editkhachhang'])){
    $hoten = $_POST['hoten'];
    $gioitinh  = $_POST['gioitinh'];
    $ngaysinh  = $_POST['ngaysinh'];
    $sodienthoai = $_POST['sodienthoai'];
    $email  = $_POST['email'];
    $diachi  = $_POST['diachi'];
    $nghenghiep = $_POST['nghenghiep'];
    $socmnd  = $_POST['socmnd'];
  $id  = $_POST['id'];
  $query = "UPDATE `nguoidung` SET `hoten`='{$hoten}',`gioitinh`='{$gioitinh}',`ngaysinh`='{$ngaysinh}',`sodienthoai`='{$sodienthoai}',`email`='{$email}',`diachi`='{$diachi}',`nghenghiep`='{$nghenghiep}',`socmnd`='{$socmnd}' WHERE `id`='{$id}'";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: khachhang.php?msg=1");
  } 
  else {
      header("Location: khachhang.php?msg=2");
  }
}
if(isset($_POST['deletenguoidung'])){
  $id  = $_POST['id'];
  $query = "DELETE FROM nguoidung WHERE `id`='{$id}'";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: khachhang.php?msg=1");
  } 
  else {
      header("Location: khachhang.php?msg=2");
  }
}
if(isset($_POST['addnv'])){
  $hoten = $_POST['hoten'];
  $gioitinh  = $_POST['gioitinh'];
  $ngaysinh  = $_POST['ngaysinh'];
  $sodienthoai = $_POST['sodienthoai'];
  $email  = $_POST['email'];
  $diachi  = $_POST['diachi'];
  $nghenghiep = $_POST['nghenghiep'];
  $socmnd  = $_POST['socmnd'];
$query = "INSERT INTO nguoidung ( hoten, gioitinh, ngaysinh, sodienthoai, email, diachi, nghenghiep, socmnd, role ) VALUES ( '{$hoten}', '{$gioitinh}', '{$ngaysinh}', '{$sodienthoai}', '{$email}','{$diachi}', '{$nghenghiep}', '{$socmnd}', 2 ) ";
$result = mysqli_query($connect, $query);
if ($result) {
  header("Location: nhanvien.php?msg=1");
} 
else {
    header("Location: nhanvien.php?msg=2");
}
}
if(isset($_POST['editnv'])){
  $hoten = $_POST['hoten'];
  $gioitinh  = $_POST['gioitinh'];
  $ngaysinh  = $_POST['ngaysinh'];
  $sodienthoai = $_POST['sodienthoai'];
  $email  = $_POST['email'];
  $diachi  = $_POST['diachi'];
  $nghenghiep = $_POST['nghenghiep'];
  $socmnd  = $_POST['socmnd'];
$id  = $_POST['id'];
$query = "UPDATE `nguoidung` SET `hoten`='{$hoten}',`gioitinh`='{$gioitinh}',`ngaysinh`='{$ngaysinh}',`sodienthoai`='{$sodienthoai}',`email`='{$email}',`diachi`='{$diachi}',`nghenghiep`='{$nghenghiep}',`socmnd`='{$socmnd}' WHERE `id`='{$id}'";
$result = mysqli_query($connect, $query);
if ($result) {
  header("Location: nhanvien.php?msg=1");
} 
else {
    header("Location: nhanvien.php?msg=2");
}
}
if(isset($_POST['deletenv'])){
$id  = $_POST['id'];
$query = "DELETE FROM nguoidung WHERE `id`='{$id}'";
$result = mysqli_query($connect, $query);
if ($result) {
  header("Location: nhanvien.php?msg=1");
} 
else {
    header("Location: nhanvien.php?msg=2");
}
}
if(isset($_POST['adddl'])){
  $tendl = $_POST['tendl'];
  $chush  = $_POST['chush'];
  $diachi  = $_POST['diachi'];
  $sodienthoai = $_POST['sodienthoai'];
  $email  = $_POST['email'];
  $nganhban  = $_POST['nganhban'];
  $ngaydk = $_POST['ngaydk'];
  $mahd  = $_POST['mahd'];
  $query = "INSERT INTO daily ( tendaily, chusohuu, diachi, sodienthoai, email, nganhban, ngaydangky, hopdong) VALUES ( '{$tendl}', '{$chush}', '{$diachi}', '{$sodienthoai}', '{$email}','{$nganhban}', '{$ngaydk}', '{$mahd}') ";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: daily.php?msg=1");
  } 
  else {
      header("Location: daily.php?msg=2");
  }
}
if(isset($_POST['deletedl'])){
  $id  = $_POST['id'];
  $query = "DELETE FROM daily WHERE `id`='{$id}'";
  $result = mysqli_query($connect, $query);
  if ($result) {
    header("Location: daily.php?msg=1");
  } 
  else {
      header("Location: daily.php?msg=2");
  }
}
if(isset($_POST['editdl'])){
  $tendl = $_POST['tendl'];
  $chush  = $_POST['chush'];
  $diachi  = $_POST['diachi'];
  $sodienthoai = $_POST['sodienthoai'];
  $email  = $_POST['email'];
  $nganhban  = $_POST['nganhban'];
  $ngaydk = $_POST['ngaydk'];
  $mahd  = $_POST['mahd'];
$id  = $_POST['id'];
$query = "UPDATE `daily` SET `tendaily`='{$tendl}',`chusohuu`='{$chush}',`diachi`='{$diachi}',`sodienthoai`='{$sodienthoai}',`email`='{$email}',`nganhban`='{$nganhban}',`ngaydangky`='{$ngaydk}',`hopdong`='{$mahd}' WHERE `id`='{$id}'";
$result = mysqli_query($connect, $query);
if ($result) {
  header("Location: daily.php?msg=1");
} 
else {
    header("Location: daily.php?msg=2");
}
}
 ?> 