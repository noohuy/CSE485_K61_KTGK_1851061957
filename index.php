<?php
    include 'header.php';
?>
  <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->
        <a href="addbn.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm Nhân viên</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ đệm</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Sửa thông tin</th>
                    <th scope="col">Xóa nhân viên</th>
                </tr>
            </thead>
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'connect.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT e.patientid,e.firstname,e.lastname,e.dateofbirth, e.gender, e.mobile FROM benhnhan e";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['patientid'].'</th>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['dateofbirth'].'</td>';
                            echo '<td>'.$row['gender'].'</td>';
                            echo '<td>'.$row['mobile'].'</td>';
                            echo '<td><a href="update.php?id='.$row['patientid'].'"><i class="fas fa-user-edit"></i></a></td>';
                            echo '<td><a href="delete.php?id='.$row['patientid'].'"><i class="fas fa-user-times"></i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>
<?php
    include 'footer.php';
?>