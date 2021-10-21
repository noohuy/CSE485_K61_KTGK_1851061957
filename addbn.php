<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hệ thống quản lý bệnh việnviện</title>
  </head>
  <body>
    <?php
    include 'connect.php';
    ?>
  <h1 class="bg-warning">Hệ thống quản lý bệnh nhân</h1>
  <main class="container">
        <h2>Thêm thông tin bệnh nhân</h2>
        <form action="process.php" method="post">
            <div class="form-group row">
                <label for="empName" class="col-sm-2 col-form-label">Mã bệnh nhân:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="empName" name="empName" >
                </div>
            </div>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="empPosition" name="empPosition">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Họ đệm</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="empEmail" name="empEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Chiều cao</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Cân nặng</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Nhóm máu</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Ngày lập sổ</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="created_on" name="created_on">
                </div>
            </div>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Ngày cập nhật</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="modified_on">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
<?php
    include 'footer.php';
?>