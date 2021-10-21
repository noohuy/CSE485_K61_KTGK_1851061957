<?php
    include 'connect.php';
    $id = $_GET['id'];
    settype($id,"int");
    $sql = "DELETE from qlbv where patientid ='$id'";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }
    mysqli_close($conn);

?>