<?php
    include_once('model/mNguoiDung.php');

    class cNguoiDung{
        public function get1NguoiDung($taikhoan, $matkhau){
            $p = new mNguoiDung();
            $matkhau = md5($matkhau);
            echo $matkhau;
            $con = $p->select1NguoiDung($taikhoan, $matkhau);
            if(mysqli_num_rows($con)){
                while($r=mysqli_fetch_assoc($con)){
                    $_SESSION["dn"]=$r["idrole"];
                    $_SESSION["id"]=$r["iduser"];
                }
                echo "<script>alert('Đăng nhập thành công')</script>";
                header("refresh:0;url='admin.php'");
            }else{
                echo "<script>alert('Đăng nhập thất bại')</script>";
                header("refresh:0;url='index.php?dangnhap'");
            }
            
        }


    }   
?>