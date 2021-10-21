<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body>
  <?php
        // Kết nối Database
        $conn = mysqli_connect('localhost', 'root', '', 'ktgk');
        if (!$conn) {
            die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
        }
        $MaNn = $_GET['reci_id'];
        $query = mysqli_query($conn, "select * from blood_recipient `db_nhanvien` where reci_id='$MaNn'");
        $row = mysqli_fetch_assoc($query);
    ?>
      <header class="p-3  btn-success text-white">
          <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Khởi động" _mstaria-label="2264249"><use xlink:href="#bootstrap"></use></svg>
                  </a>

                  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="index.php" class="nav-link px-2 text-white" _msthash="1633359" _msttexthash="44122">Hệ thống quản lý</a></li>
                    
                   </ul>

                  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Tìm kiếm..." aria-label="Tìm kiếm" _mstplaceholder="1347073" _mstaria-label="1320163">
                 </form>

                  <div class="text-end">
                  <button type="button" class="btn btn-outline-light me-2" _msthash="1717859" _msttexthash="1457443">Đăng nhập</button>
                  </div>
              </div>
          </div>
      </header>
      <main class="mt-4">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>Sửa dữ liệu</h2>
                <form action="process-update-member.php" method="post">
                  <div class="row mb-3">
                    <label for="txtMaNn" class="col-sm-2 col-form-label">Mã người nhận</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $row['reci_id']; ?>" class="form-control" id="txtMaNn" name="txtMaNn">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtHoTen" class="col-sm-2 col-form-label">Tên người nhận</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $row['reci_name']; ?>" class="form-control" id="txtHoTen" name="txtHoTen">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtNamSinh" class="col-sm-2 col-form-label">Năm sinh</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $row['reci_age']; ?>" class="form-control" id="txtNamSinh" name="txtNamSinh">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm máu</label>
                    <div class="col-sm-10">
                      <input type="text"value="<?php echo $row['reci_bgrp']; ?>" class="form-control" id="txtNhomMau" name="txtNhomMau">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtSl" class="col-sm-2 col-form-label">Số lượng máu cần nhận</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $row['reci_bqnty']; ?>" class="form-control" id="txtSl" name="txtSl">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $row['reci_sex']; ?>" class="form-control" id="txtGioiTinh" name="txtGioiTinh">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtNgay" class="col-sm-2 col-form-label">Ngày đăng kí</label>
                    <div class="col-sm-10">
                      <input type="text" value="<?php echo $row['reci_reg_date']; ?>" class="form-control" id="txtNgay" name="txtNgay">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <div class="col-sm-10">
                      <input type="tel" value="<?php echo $row['reci_phno']; ?>" class="form-control" id="txtMobile" name="txtMobile">
                    </div>
                  </div>
                  <?php
                          $conn = mysqli_connect('localhost','root','','ktgk');
                          if(!$conn){
                              die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                          }
                          $sql = "SELECT * FROM blood_recipient" ;
                          $result = mysqli_query($conn,$sql);
                          mysqli_close($conn);
                        ?>
                  <button type="submit" class="btn btn-primary" name="btnUpdate">Sửa</button>
                </form>
              </div>
            </div>
        </div>
      </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>