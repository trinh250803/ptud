<?php
    include_once('ketnoi.php');

    class mNhanVien{
        public function select1NhanVien($taikhoan, $matkhau){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from nhanvien where SoDienThoai ='$taikhoan' and Password ='$matkhau' LIMIT 1";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function queryNhanVien($idnv){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from nhanvien n join vaitro v on v.IDRole= n.IDRole where IDNhanVien ='$idnv' LIMIT 1";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function SelectAllNV(){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from nhanvien order by IDNhanVien ASC";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
    }
?>