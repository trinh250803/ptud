<?php
class clsketnoi {
    public function MoKetNoi() {
        return mysqli_connect("localhost","root","","ptud");
    }

    public function DongKetNoi($conn) {
        // Kiểm tra xem kết nối có tồn tại hay không trước khi đóng
        if($conn) {
            mysqli_close($conn);
        }
    }
}
?>