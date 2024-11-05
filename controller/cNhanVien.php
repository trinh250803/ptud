<?php
    include_once('../model/mNhanVien.php');

    class cNhanVien{
        public function get1nhanvien($taikhoan, $matkhau){
            $p = new mNhanVien();
            $matkhau = md5($matkhau);
            $con = $p->select1NhanVien($taikhoan, $matkhau);
            if ($con === false) {
                echo "Lỗi truy vấn: " . mysqli_error($p->$con); // Kiểm tra lỗi của truy vấn
            } else {
                if(mysqli_num_rows($con)) {
                    while($r=mysqli_fetch_assoc($con)){
                        session_start();
                        $_SESSION["dn"]=$r["IDRole"];
                        $_SESSION["id"]=$r["IDNhanVien"];
                    }
                    echo "<script>alert('Đăng nhập thành công');</script>";
                    // Sau khi hiện alert, chuyển hướng người dùng
                    echo "<script>window.location.href = '../view/ThongTinChungNV.php';</script>";
                    
                    exit();  // Kết thúc script sau khi chuyển hướng
                } else {
                    echo "<script>alert('Đăng nhập thất bại');</script>";
                    // Sau khi hiện alert, chuyển hướng người dùng về trang đăng nhập
                    echo "<script>window.location.href = 'dangnhap.php';</script>";
                    exit();  // Kết thúc script sau khi chuyển hướng
                }
            }
        }
        public function Query1NV($idnv)
        {
            $p = new mNhanVien();
            
		$kq= $p->queryNhanVien($idnv);
		if(mysqli_num_rows($kq)>0)
		{
			return $kq;
		}
		else
		{
			return false;
		}
        }
        public function getAllNV()
        {
            $p = new mNhanVien();
            
		$kq= $p->SelectAllNV();
		if(mysqli_num_rows($kq)>0)
		{
			return $kq;
		}
		else
		{
			return false;
		}
        }
        public function CapNhat($idnv,$tennv,$sdt,$email,$diachi)
        {
            $p = new mNhanVien();
            $kq= $p->CapNhatTT($idnv,$tennv,$sdt,$email,$diachi);
            return $kq;

        }

        


    }   
?>