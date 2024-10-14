<?php
    include_once('ketnoi.php');

    class mNguoiDung{
        public function select1NguoiDung($taikhoan, $matkhau){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from user where dienthoai ='".$taikhoan."' and password ='".$matkhau."' LIMIT 1";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
    }
?>