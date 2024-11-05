<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="login\css\thanhtoan.css">
    <link rel="stylesheet" href="login/css/style.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
    <style>
    button {
        margin: 10px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left,
    .right {
        margin: 10px;
    }

    .left {
        margin-right: 30px;
        /* Adjust for spacing between the menu and confirmation form */
    }

    .confirmation {
        border: 2px solid #ccc;
        border-radius: 10px;
        padding: 20px;
        width: 500px;
        height: fit-content;
        margin: auto;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .confirmation form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .confirmation table {
        width: 100%;
    }
    </style>
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="./index.php" class="navbar-brand">
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
                        echo '<a href="dangnhap-tv.php" class="nav-item nav-link">Đăng nhập</a>';
                        echo '<a href="dangkitapthu.php" class="nav-item nav-link">Đăng ký tập thử</a>';
                    }
                    else{
                        echo '<a href="thongtinchungtv.php" class="nav-item nav-link">Hồ sơ</a>';
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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Quản lý thiết bị</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Quản lý</p>
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
                        <li><a href="#home">Thông tin chung</a></li>
                        <li><a href="#profile">Quản lý thành viên</a></li>
                        <li><a href="#settings">Quản lý thiết bị</a></li>

                        <li><a href="#logout">Logout</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="right">
            <div class="update-info-container">
                <h1 align="center">Thanh Toán hóa đơn</h1>

                <form method="post">
                    <!-- Chọn gói gia hạn -->
                    <?php
                        include_once('../controller/cHoaDon.php');
                        $p= new cHoaDon();
                        $kq = $p->get1HD($_SESSION['IDHD']);
                        if($kq)
                        {
                           while($r=mysqli_fetch_assoc($kq))
                           {
                           $_SESSION['TongTien']=$r['SoTien'];
                            echo ' <div class="package-details">
                        <p align="center"><strong>Thông tin hóa đơn</strong></p>
                        <p><strong>Tổng tiền:</strong> &emsp; '.$r['SoTien'].'</p>
                        <p><strong>Tình trạng Thanh Toán:</strong> &emsp; '.$r['TinhTrangThanhToan'].'</p>
                        <p><strong>Ngày lập hóa đơn:</strong> &emsp; '.$r['NgayLapHoaDon'].'</p>
                        <p><strong>Ngày lập hóa đơn:</strong> &emsp; 05/11/2024</p>
                    </div>';
                   
                    
                           }
                        }
                    ?>

                    <!-- Hiển thị chi tiết gói -->

                    <?php
    include_once("../controller/cKhuyenMai.php");
    $q= new cKhuyenMai();
    $kq2=$q->getDKKM($_SESSION['TongTien']);
    if ($kq2) {
        echo '<fieldset>
                  <label style="align-self: center;" for="khuyenmai">Khuyến mãi:</label>';
        
        // Counter for unique IDs
        $counter = 1;
        
        while ($r = mysqli_fetch_assoc($kq2)) {
            
            $id = 'svelt' . $counter;  // Generate unique ID for each radio button
            echo '
                <div class="button-group">
                    <input type="radio" id="' . $id . '" class="svelt1" name="khuyenmai" value="' . ($r['MucGiamGia']) . '"     />
                    <label for="' . $id . '">' . ($r['TenKhuyenMai']) . '</label>
                </div>';
                
            $counter++;
        }
        
        echo '</fieldset>
        
        <input style="margin-left:5px; float:right  " name="apdung" type="submit" class="renew-button"
                            value="Áp dụng"><br>';
    }
    
?>

                    <?php
                    if(isset($_REQUEST['apdung']))
                    {
                        
                        $_SESSION['KM']=$_REQUEST['khuyenmai'];
                        $mucgiam=$_REQUEST['khuyenmai'];
                        $thanhtien=(float)$_SESSION['TongTien']-(float)$mucgiam;
                        echo'<div class="thanhtien">
                        <br>
                        <label style="float:right" for="Tthanhtien">Thành tiền: &emsp;'. (float)$_SESSION['TongTien']-(float)$mucgiam.'
                    </label>
                    <br>
            </div>';
            }
            else{
                $thanhtien=(float)$_SESSION['TongTien'];
                echo'<div class="thanhtien">
                <br>
                <label style="float:right" for="Tthanhtien">Thành tiền: &emsp;'. (float)$_SESSION['TongTien'].'
            </label>
            <br>
    </div>';
            }
            ?>

                    <br>





                    <label for="membership-plan">Chọn phương thức thanh toán:</label>
                    <select name="HTTT" style="width:fit-content" class="form-select"
                        aria-label="Default select example">
                        <option value="Tiền Mặt">Tiền mặt </option>
                        <option value="Chuyển Khoản ngân hàng">Chuyển khoản</option>

                    </select>

                    <br>



                    <!-- Nút Gia hạn -->


                    <div class="button" align="center"> <input type="submit" name="ThanhToan" class="renew-button"
                            value="Thanh Toán">
                    </div>

                </form>
                <?php 
                    if(isset($_REQUEST['ThanhToan']))
                    {
                        $HinhThucTT=$_REQUEST['HTTT'];
                        
                        $currentDateTime = date('Y-m-d H:i:s');
                       
                        if($HinhThucTT==='Tiền Mặt')
                        { $kq3=$p->CapNhatHD($_SESSION['IDHD'],$thanhtien,$HinhThucTT,$currentDateTime);
                            echo'<script>window.location.href="TienMat.php"</script>';
                        }
                        else
                        {
                            $kq3=$p->CapNhatHD($_SESSION['IDHD'],$thanhtien,$HinhThucTT,$currentDateTime);
                            echo'<script>window.location.href="TKNH.php"</script>';
                        }
                       
                        
                       
                    }
                    
                        
                       
                    
                ?>
            </div>
        </div>
    </div>
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