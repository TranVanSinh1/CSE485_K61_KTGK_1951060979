<?php
  if(isset($_POST['btnUpdate'])){
    $MaNn      = $_POST['txtMaNn'];
    $tenNn     = $_POST['txtHoTen'];
    $Ns    = $_POST['txtNamSinh'];
    $hp    = $_POST['txtNhomMau'];
    $sl     = $_POST['txtSl'];
    $gt  = $_POST['txtGioiTinh'];
    $ngay      = $_POST['txtNgay'];
    $sdt      = $_POST['txtMobile'];

    $conn = mysqli_connect('localhost','root','','ktgk');
    if(!$conn){
        die("Không thể kết nối,kiểm tra lại các tham số kết nối");
    }
    
    $sql = "UPDATE `blood_recipient` SET reci_name='$tenNn',reci_age = '$Ns', reci_bgrp='$hp', reci_bqnty='$sl',reci_sex='$gt',reci_reg_date='$ngay',reci_phno='$sdt' WHERE reci_id='$MaNn'";


    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='ok';
      header("Location:index.php?response=$value");
    }else{
      echo 'sua tb';
    }
    mysqli_close($conn);
  }
?>