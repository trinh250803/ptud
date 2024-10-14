<?php
    include_once('model/mNguoiDung.php');

    class cNguoiDung{
        public function get1NguoiDung($taikhoan, $matkhau){
            $p = new mNguoiDung();
            $matkhau = md5($matkhau);
            $con = $p->select1NguoiDung($taikhoan, $matkhau);
            if ($con === false) {
                echo "Lỗi truy vấn: " . mysqli_error($p->$con); // Kiểm tra lỗi của truy vấn
            } else {
                if(mysqli_num_rows($con)) {
                    while($r=mysqli_fetch_assoc($con)){
                        $_SESSION["dn"]=$r["idrole"];
                        $_SESSION["id"]=$r["iduser"];
                    }
                    echo "<script>alert('Đăng nhập thành công');</script>";
                    // Sau khi hiện alert, chuyển hướng người dùng
                    echo "<script>window.location.href = 'index.php';</script>";
                    exit();  // Kết thúc script sau khi chuyển hướng
                } else {
                    echo "<script>alert('Đăng nhập thất bại');</script>";
                    // Sau khi hiện alert, chuyển hướng người dùng về trang đăng nhập
                    echo "<script>window.location.href = 'index.php?dangnhap';</script>";
                    exit();  // Kết thúc script sau khi chuyển hướng
                }
            }
        }


    }   
?>