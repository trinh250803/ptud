<?php
    include_once('../model/mKhuyenMai.php');
    class cKhuyenMai{
        public function getAllKM()
        {
            $p = new mKHuyenMai();
            
            $kq= $p->SelectAllKM();
            if(mysqli_num_rows($kq)>0)
            {
                return $kq;
            }
            else
            {
                return false;
            }
        }
        public function  getDKKM($TongTien)
        {
            $p = new mKhuyenMai();
            
            $kq= $p->selectDKKM($TongTien);
            if(mysqli_num_rows($kq)>0)
            {
                return $kq;
            }
            else
            {
                return false;
            }
        }
    }
?>