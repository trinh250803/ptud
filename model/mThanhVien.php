<?php
    include_once('ketnoi.php');

    class mThanhVien{
        public function select1ThanhVien($taikhoan, $matkhau){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from thanhvien where SoDienThoai ='$taikhoan' and Password ='$matkhau' LIMIT 1";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function queryTV($idtv){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from thanhvien where IDThanhVien ='$idtv' LIMIT 1";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function SelectAllTV(){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from thanhvien order by IDThanhVien ASC";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function CapNhatTT($idtv,$tentv,$sdt,$email,$diachi)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "UPDATE `thanhvien` SET `TenThanhVien` = '$tentv', `SoDienThoai` = '$sdt', `DiaChi` = '$diachi', `email` = '$email' WHERE `thanhvien`.`IDThanhVien` = $idtv;";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function  deletetv($idtv)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "delete from  `thanhvien`  WHERE `thanhvien`.`IDThanhVien` = $idtv;";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq; 
        }
        public function createGhiDanh($idtv,$date)
        {
            
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "INSERT INTO `lichsutapluyen` (`NgayTap`, `IDThanhVien`) VALUES ('$date', '$idtv');";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq; 
        }
        public function DangKyTV($tentv,$sdt,$diachi,$email,$ngaythamgia,$password)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "INSERT INTO `thanhvien` (`IDThanhVien`, `TenThanhVien`, `SoDienThoai`, `DiaChi`, `email`, `NgayThamGia`, `Password`) VALUES (NULL, '$tentv', '$sdt', '$diachi', '$email', '$ngaythamgia', '$password');";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
    }
?>