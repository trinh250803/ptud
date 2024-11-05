<?php
    include_once('ketnoi.php');
    class mGoiTap{
        public function selectAllGT(){
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from goitap order by IDGoiTap ASC";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
        public function select1GT($idgt)
        {
            $p = new clsketnoi();
            $con = $p->MoKetNoi();
            $query = "SELECT * from goitap where IDGoiTap ='$idgt' limit 1";
            $kq = mysqli_query($con, $query);
            $p->DongKetNoi($con);
            return $kq;
        }
    }
?>