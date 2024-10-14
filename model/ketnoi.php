<?php
class clsketnoi {
    public function MoKetNoi() {
        // Kết nối với cơ sở dữ liệu
        $conn = mysqli_connect("localhost", "root", "", "kiemtra");

        
        if($conn) {
            // Thiết lập bộ mã hóa ký tự
            mysqli_query($conn, "SET NAMES UTF-8");
        } else {
            // Hiển thị thông báo lỗi nếu kết nối thất bại
            die('Kết nối thất bại: ' . mysqli_connect_error());
        }
        
        // Trả về kết nối để sử dụng sau này
        return $conn;
    }

    public function DongKetNoi($conn) {
        // Kiểm tra xem kết nối có tồn tại hay không trước khi đóng
        if($conn) {
            mysqli_close($conn);
        }
    }
}
?>
