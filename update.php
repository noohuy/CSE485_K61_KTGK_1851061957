<?php
    include 'header.php';
    include 'connect.php';
    $id = $_GET['id'];
    settype($id,"int");
?>

    <main class="container">
    <h2>Sửa thông tin bệnh nhân</h2>
        <form action="process-add.php" method="post">
            <div class="form-group row">
                <label for="empName" class="col-sm-2 col-form-label">Tên:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label">Họ đệm</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empEmail" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="gender" name="gender">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="mobile" name="mobile">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Chiều cao</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="height" name="height">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Cân nặng</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="weight" name="weight">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label">Cân nặng</label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="weight" name="weight">
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