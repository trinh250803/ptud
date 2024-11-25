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
     
        
        public function selectAllHD() {
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            $con->set_charset('utf8');
            if ($con) {
                $sql = "SELECT hd.*, tv.TenThanhVien
                        FROM hoadon hd
                        LEFT JOIN thanhvien tv ON hd.IDThanhVien = tv.IDThanhVien";
                $result = $con->query($sql);
                $p->dongKetNoi($con);
                return $result;
            } else {
                return false; // Lỗi kết nối
            }
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
    

    public function UpdateTT($idhd, $trangThai) {
        // Mở kết nối với cơ sở dữ liệu
        $p = new clsketnoi();
        $con = $p->MoKetNoi();
        $con->set_charset('utf8');

        // Cập nhật trạng thái thanh toán
        $truyvan = "UPDATE hoadon SET TinhTrangThanhToan = '$trangThai' WHERE IDHoaDon = $idhd";
        
        // Thực thi truy vấn
        $ketqua = mysqli_query($con, $truyvan);
        
        // Đóng kết nối
        $p->DongKetNoi($con);

        return $ketqua;
    }






    // Phương thức lấy chi tiết hóa đơn
    public function selectChiTietHD($idhd) {
        $p = new clsketnoi();
        $con = $p->MoKetNoi();
        $con->set_charset('utf8');
        
        // Truy vấn để lấy chi tiết hóa đơn từ bảng hoadon, thông tin thành viên từ bảng thanhvien và tên nhân viên từ bảng nhanvien
        $truyvan = "SELECT hd.*, tv.TenThanhVien, nv.TenNhanVien
                    FROM hoadon hd 
                    LEFT JOIN thanhvien tv ON hd.IDThanhVien = tv.IDThanhVien
                    LEFT JOIN nhanvien nv ON hd.IDNhanVien = nv.IDNhanVien
                    WHERE hd.IDHoaDon = $idhd";
        
        $ketqua = mysqli_query($con, $truyvan);
        
        // Đóng kết nối
        $p->DongKetNoi($con);
        
        return $ketqua;
    }




        // Method tìm kiếm theo tên thành viên
// mHoaDon.php

public function selectHDByName($keyword, $status = '') {
    $p = new clsKetNoi(); // Khởi tạo đối tượng kết nối
    $con = $p->moKetNoi(); // Mở kết nối
    $con->set_charset('utf8'); // Đặt bộ ký tự

    if ($con) {
        // Bắt đầu xây dựng truy vấn SQL
        $truyvan = "SELECT hd.*, tv.TenThanhVien, nv.TenNhanVien
                    FROM hoadon hd
                    LEFT JOIN thanhvien tv ON hd.IDThanhVien = tv.IDThanhVien
                    LEFT JOIN nhanvien nv ON hd.IDNhanVien = nv.IDNhanVien
                    WHERE 1"; // Điều kiện mặc định là tất cả

        // Thêm điều kiện tìm kiếm theo tên
        if (!empty($keyword)) {
            $truyvan .= " AND tv.TenThanhVien LIKE '%" . $con->real_escape_string($keyword) . "%'";
        }

        // Thêm điều kiện tìm kiếm theo trạng thái thanh toán
        if (!empty($status)) {
            $truyvan .= " AND hd.TinhTrangThanhToan = '" . $con->real_escape_string($status) . "'";
        }

        $ketqua = mysqli_query($con, $truyvan);
        
        // Đóng kết nối
        $p->dongKetNoi($con);

        return $ketqua;
    } else {
        return false; // Lỗi kết nối
    }
}

    
        // // Method lấy tất cả hóa đơn (dùng khi không tìm kiếm)
        // public function getallhd() {
        //     $p = new clsketnoi();
        //     $con = $p->MoKetNoi();
        //     $query = "SELECT * FROM hoadon";
        //     $result = mysqli_query($con, $query);
        //     return $result;
        // }
        

    // Method lấy tất cả hóa đơn (dùng khi không tìm kiếm)
    public function getallhd() {
        $p = new clsketnoi();
        $con = $p->MoKetNoi();
        $query = "SELECT * FROM hoadon";
        $result = mysqli_query($con, $query);
        return $result;
    }


    public function insertInvoice($IDThanhVien, $IDNhanVien, $LoaiGiaoDich, $SoTien, $TinhTrangThanhToan, $HinhThucThanhToan, $NgayThanhToan) {
        $p = new clsKetNoi();
        $con = $p->moKetNoi();
        
        $query = "INSERT INTO hoadon (IDThanhVien, IDNhanVien, LoaiGiaoDich, SoTien, TinhTrangThanhToan, HinhThucThanhToan, NgayThanhToan) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $con->prepare($query);
        $stmt->bind_param("iisssss", $IDThanhVien, $IDNhanVien, $LoaiGiaoDich, $SoTien, $TinhTrangThanhToan, $HinhThucThanhToan, $NgayThanhToan);

        $result = $stmt->execute();
        $stmt->close();
        $p->dongKetNoi($con);

        return $result;
    }


}
?>
