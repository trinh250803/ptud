<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="login/css/qltb.css">
    <link rel="stylesheet" href="login/css/style.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
</head>
<style>
    
   
   .message {
    font-size: 12px; 
    font-weight: bold;
    color: #fff;
    padding: 12px;
    border-radius: 10px;
    margin: 10px;
    text-transform: uppercase;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3), -4px -4px 10px rgba(0, 0, 0, 0.3);
    background: linear-gradient(145deg, #8B0000, #B22222);
    animation: slideUp 2s ease-out; 
}

@keyframes slideUp {
    0% {
        transform: translateY(100px);
        opacity: 0; 
    }
    100% {
        transform: translateY(0);
        opacity: 1; 
    }
}
table {margin-bottom: 10px; margin-left: 20px; border-collapse: collapse; table-layout: fixed; white-space: nowrap; width: auto; }
input[type="submit"] { margin-top: 20px; }
input:not([type="submit"]) { width: 100%; box-sizing: border-box; }

</style>
<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="../index.php" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="../index.php" class="nav-item nav-link active">Trang chủ</a>
                    <a href="about.php" class="nav-item nav-link">Về chúng tôi</a>
                    <a href="feature.php" class="nav-item nav-link">Tin tức</a>
                    <a href="class.php" class="nav-item nav-link">Lớp học</a>

                    <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
                    <?php
                    if (!isset($_SESSION['dn'])) {
                        echo '<a href="dieukien.php" class="nav-item nav-link">Đăng nhập</a>';
                        echo '<a href="dangkitapthu.php" class="nav-item nav-link">Đăng ký tập thử</a>';
                    }
                    else{
                        if($_SESSION['dn']== 1 || $_SESSION['dn']==2 ||$_SESSION['dn']==3)
                        {
                            echo '<a href="thongtinchungnv.php" class="nav-item nav-link">Hồ sơ</a>';
                        }
                        else{
                            echo '<a href="thongtinchungtv.php" class="nav-item nav-link">Hồ sơ</a>';
                        }
                        echo '<a href="dangxuat.php" class="nav-item nav-link">Đăng xuất</a>';
                    }
                    ?>


                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Kế Toán</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Quản lý hóa đơn</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="left">
            <div class="sidebar">
                <div class="menu">
                    <p>Menu</p>
                    <ul>
                         <?php
                       if(!$_SESSION['dn'])
                       {
                        echo "<script>alert('Bạn không có quyền truy cập vào trang');</script>";
                        echo "<script>window.location.href = '../index.php';</script>";
                       }
                       echo '<li><a href="ThongTinchungNV.php">Thông tin chung</a></li>';
                       switch($_SESSION['dn'])
                       {
                        case 1:
                            {
                                echo' <li><a href="QLNV.php">Quản lý nhân viên</a></li>';
                                echo  '<li><a href="QLKM.php">Quản lý khuyến mãi</a></li>';
                                echo  '<li><a href="QLLLV.php">Quản lý lịch làm việc</a></li>';
                                echo  '<li><a href="QLGT.php">Quản lý Gói tập</a></li>';
                                break;
                            }
                            case 2:
                                {
                                    echo' <li><a href="QLTV.php">Quản lý Thành viên</a></li>';
                                    echo  '<li><a href="QLTB.php">Quản lý thiết bị</a></li>';
                                    break;
                                }
                            case 3: 
                                {
                                    echo' <li><a href="QLHD.php">Quản lý hóa đơn</a></li>';

                                    break;
                                }
                       }
                       
                        
                       

                     echo   '<li><a href="dangxuat.php">Logout</a></li>';

                        ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="right">
            <div class="qlhd">
            <?php 
session_start();
include_once("../model/mHoaDon.php");
include_once('../controller/cHoaDon.php');
include_once('../controller/cThanhVien.php');
include_once('../controller/cNhanVien.php');

if (isset($_POST["btThem"])) {

    $SOTIEN = $_POST["sotien"];
    $NGAYLAP = $_POST["ngaylap"];
    $HINHTHUCTHANHTOAN = $_POST["hinhthucthanhtoan"];
    $LOAIGIAODICH = $_POST["loaigiaodich"];
    $IDTHANHVIEN = $_POST["idthanhvien"];
    $IDNHANVIEN = $_POST["idnhanvien"];
    $obj = new mHoaDon();
    $IDHOADON = $obj->getNextIDHoaDon();
    $sql = "INSERT INTO hoadon (IDHoaDon, SoTien, TinhTrangThanhToan, HinhThucThanhToan, NgayThanhToan, NgayLapHoaDon, LoaiGiaoDich, IDThanhVien, IDNhanVien) 
            VALUES ('$IDHOADON', '$SOTIEN', 'Chưa thanh toán', '$HINHTHUCTHANHTOAN', NULL, '$NGAYLAP', '$LOAIGIAODICH', '$IDTHANHVIEN', '$IDNHANVIEN')";
    if ($obj->themdulieu($sql)) {
        $message = "Thêm hóa đơn thành công";
        $status = "success";
    } else {
        $message = "Thêm hóa đơn không thành công";
        $status = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tạo Hóa Đơn</title>
</head>
<body>
    <h1 align="center">Thêm Hóa Đơn</h1>
    
    <!-- Form Start -->
    <div class="container pt-5">
        <form method="post">
            <table width="90% ">
            <tr>
                    <td>ID thành viên</td>
                    <td><input type="number" name="idthanhvien" required /></td>
                </tr>
                <tr>
                    <td>ID nhân viên</td>
                    <td><input type="number" name="idnhanvien" required /></td>
                </tr>
                <tr>
                    <td width="25%">Số tiền</td>
                    <td><input type="number" step="0.01" name="sotien" required /></td>
                </tr>
               
                <tr>
                    <td>Hình thức thanh toán</td>
                    <td>
                        <select name="hinhthucthanhtoan" required>
                            <option value="">Chọn hình thức thanh toán</option>
                            <option value="Tiền mặt">Tiền mặt</option>
                            <option value="Chuyển khoản">Chuyển khoản</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Loại giao dịch</td>
                    <td><input type="text" name="loaigiaodich" required /></td>
                </tr>
                <tr>
                    <td>Ngày lập hóa đơn</td>
                    <td><input type="datetime-local" name="ngaylap" value="<?php echo date('Y-m-d\TH:i'); ?>" readonly /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"  >
                        <input type="submit" name="btThem" value="Thêm hóa đơn" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- Form End -->
    <?php if (isset($message)): ?>
        <div id="message" class="message"><?php echo $message; ?></div>
        <script>
            document.getElementById('message').style.display = 'block';
            setTimeout(function() {
                document.getElementById('message').style.display = 'none';
                window.location.href = 'qlhd.php';
            }, 3000);
        </script>
    <?php endif; ?>

</body>
</html>








    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Opening Hours</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
