<?php
    include_once('ketnoi.php');
    class mThietBi{
        public function selectAllTB(){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from ThietBi order by IDThietBi ASC";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
       
    }
?>