<?php
  if(isset($_POST['btnSave'])){
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

    $sql = "INSERT INTO blood_recipient(reci_id, reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date,reci_phno)
    VALUES('$MaNn','$tenNn','$ns','$hp','$sl','$gt','$ngay','$sdt')";

    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='successfully';
      header("Location:index.php?response=$value");
    }else{
      $value='existed';
      header("Location:index.php?response=$value");
    }
    mysqli_close($conn);
  }
?>