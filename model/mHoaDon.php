<?php
    include_once('ketnoi.php');
    class mHoaDon{
        public function InsertHD($tongtien,$ngayLapHD,$idtv)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $truyvan = "INSERT INTO `hoadon` (`IDHoaDon`, `SoTien`, `TinhTrangThanhToan`, `NgayLapHoaDon`, `IDThanhVien`, `IDNhanVien`) VALUES (NULL,'$tongtien', 'Chưa Thanh Toán', '$ngayLapHD', '$idtv', '1');";
			$ketqua = mysqli_query($con, $truyvan);
            $p->DongKetNoi($con);
            return $ketqua;
        }
        public function selectAllHDCTT($idtv)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $truyvan = "SELECT * FROM `hoadon` WHERE `TinhTrangThanhToan` LIKE 'Chưa Thanh Toán' AND `IDThanhVien` = '$idtv' ORDER BY `TinhTrangThanhToan` DESC";
			$ketqua = mysqli_query($con, $truyvan);
            $p->DongKetNoi($con);
            return $ketqua;
        }
        public function select1HD($idhd)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $truyvan = "SELECT * FROM `hoadon` WHERE  `IDHoaDon` = '$idhd' ";
			$ketqua = mysqli_query($con, $truyvan);
            $p->DongKetNoi($con);
            return $ketqua;
        }
        public function UpdateHDTV($idhd,$sotien,$HTTT,$ngayThanhToan)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $truyvan = "UPDATE `hoadon` SET `SoTien`= '$sotien',`TinhTrangThanhToan` = 'Chờ xác nhận', `HinhThucThanhToan` = '$HTTT', `NgayThanhToan` = '$ngayThanhToan' WHERE `hoadon`.`IDHoaDon` = $idhd;";
			$ketqua = mysqli_query($con, $truyvan);
            $p->DongKetNoi($con);
            return $ketqua;
        }
    }
?>