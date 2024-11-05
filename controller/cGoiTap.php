<?php
    include_once('../model/mGoiTap.php');
    class cGoiTap{
        public function getAllGT()
        {
            $p = new mGoiTap();
            
            $kq= $p->selectAllGT();
            if(mysqli_num_rows($kq)>0)
            {
                return $kq;
            }
            else
            {
                return false;
            }
        }
        public function  get1GT($idgt)
        {
            $p = new mGoiTap();
            
            $kq= $p->select1GT($idgt);
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