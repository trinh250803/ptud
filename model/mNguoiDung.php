<?php
    include_once('ketnoi.php');

    class mNguoiDung{
        public function select1NguoiDung($taikhoan, $matkhau){
            
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $truyvan = "SELECT * from user where username ='$taikhoan' and password ='$matkhau'";
            $kq = mysqli_query($con, $truyvan);
            $p->DongKetNoi($con);
            return $kq;
        }
    }
?>