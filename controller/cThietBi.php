<?php
    include_once('../model/mThietBi.php');
    class cThietBi{
        public function getAllTB()
        {
            $p = new mThietBi();
            
            $kq= $p->SelectAllTB();
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