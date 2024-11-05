<?php
    include_once('ketnoi.php');
    class mKhuyenMai{
        public function SelectAllKM(){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from khuyenmai order by IDKhuyenMai ASC";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function selectDKKM($TongTien)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from khuyenmai where DieuKien <= '$TongTien' ";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
    }
?>