<?php
    include_once('../model/mHoaDon.php');
    class cHoaDon{
        public function createHD($tongtien,$ngayLapHD,$idtv)
        {
            $p = new mHoaDon();
            $kq= $p->InsertHD($tongtien,$ngayLapHD,$idtv);
            return $kq;
        }
     
		
		public function getallhd() {
			$p = new mHoaDon();
			
			// Gọi phương thức lấy toàn bộ hóa đơn
			$kq = $p->selectAllHD(); 
			
			if ($kq && mysqli_num_rows($kq) > 0) {
				return $kq;
			} else {
				return false;
			}
		}
		

		public function getHDByName($keyword, $status = '') {
			$p = new mHoaDon();
			return $p->selectHDByName($keyword, $status); // Gọi model với cả tên và trạng thái thanh toán
		}

    public function updateTT($idhd, $trangThai) {
        $p = new mHoaDon();
        // Gọi phương thức UpdateTT để cập nhật trạng thái thanh toán
        return $p->UpdateTT($idhd, $trangThai);
    }




    // Phương thức lấy chi tiết hóa đơn
    public function getChiTietHoaDon($idhd) {
        $p = new mHoaDon();
        return $p->selectChiTietHD($idhd); // Gọi phương thức selectChiTietHD từ lớp mHoaDon
    }



// 	// cHoaDon.php
// public function getAIISPbyName($keyword){
// 	$p = new mHoaDon();
// 	$tblSP = $p->selectAIISPbyName($keyword);
// 	if($tblSP){
// 		if($tblSP->num_rows > 0){
// 			return $tblSP;
// 		}else{
// 			return -1; 
// 		}
// 	}else{
// 		return false;
// 	}
// }
        public function getallhdctt($idtv)
        {
            $p = new mHoaDon();
            
		$kq= $p->selectAllHDCTT($idtv);
		if(mysqli_num_rows($kq)>0)
		{
			return $kq;
		}
		else
		{
			return false;
		}
        }
        public function get1HD($idhd)
        {
            $p = new mHoaDon();
            
		$kq= $p->select1HD($idhd);
		if(mysqli_num_rows($kq)>0)
		{
			return $kq;
		}
		else
		{
			return false;
		}
        }
        public function CapNhatHD($idhd,$sotien,$HTTT,$ngayThanhToan)
        { $p = new mHoaDon();
            
            $kq= $p->UpdateHDTV($idhd,$sotien,$HTTT,$ngayThanhToan);
            return $kq;

        }



		public function createInvoice($IDThanhVien, $IDNhanVien, $LoaiGiaoDich, $SoTien, $TinhTrangThanhToan, $HinhThucThanhToan, $NgayThanhToan) {
			// Khởi tạo kết nối
			include_once("mHoaDon.php");
			$mHoaDon = new mHoaDon();
	
			// Gọi phương thức tạo hóa đơn từ model
			return $mHoaDon->insertInvoice($IDThanhVien, $IDNhanVien, $LoaiGiaoDich, $SoTien, $TinhTrangThanhToan, $HinhThucThanhToan, $NgayThanhToan);
		}
    }
?>
