<?php 

    //Include constants.php file here
    $conn = mysqli_connect('localhost','root','','ktgk');
    if(!$conn){
        die("Không thể kết nối,kiểm tra lại các tham số kết nối");
    }

    // 1. get the ID of Admin to be deleted
    $manv = $_GET['reci_id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM blood_recipient WHERE reci_id=$manv";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='xoa';
        header("Location:index.php?response=$value");
    }else{
        echo 'xoa  tb';
    }
    mysqli_close($conn);

?>