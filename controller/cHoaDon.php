<?php
    include_once('../model/mHoaDon.php');
    class cHoaDon{
        public function createHD($tongtien,$ngayLapHD,$idtv)
        {
            $p = new mHoaDon();
            $kq= $p->InsertHD($tongtien,$ngayLapHD,$idtv);
            return $kq;
        }
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
    }
?>