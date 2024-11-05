<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymnast - Payment Status Update</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Gym website template" name="keywords">
    <meta content="Gym website template" name="description">

    <!-- Favicon -->
    <link href="../assets/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="login/css/LSTT.css">
    <link rel="stylesheet" href="login/css/style.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
    <style>
    /* Styling the table container for center alignment */
    .table-container {
        width: 80%;
        margin: auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }

    table th,
    table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #e31c25;
        color: black;
        font-weight: bold;
    }



    table tr:hover {
        background-color: #f1f1f1;
    }

    /* Center-aligns and styles text in cells */
    table td {
        color: #333;
    }

    /* Responsive table on smaller screens */
    @media (max-width: 768px) {
        .table-container {
            width: 100%;
            padding: 10px;
        }

        table th,
        table td {
            padding: 10px;
            font-size: 14px;
        }
    }
    </style>
</head>

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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Quản Lý Hóa Đơn</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../index.php">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Kế Toán</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Search form -->
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
                      
                       
                                echo  '<li><a href="ThongTinChungTV.php">Xem thông tin tài khoản</a></li>';
                                echo' <li><a href="GiaHantv-1.php">Gia hạn </a></li>';
                                echo  '<li><a href="Thanhtoan1.php">Thanh toán</a></li>';
                                echo  '<li><a href="LSTT.php">Xem lịch sử thanh toán</a></li>';
                               
             

                     echo   '<li><a href="dangxuat.php">Logout</a></li>';

                        ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="right">
            <div class="update-info-container">
           
    
                <?php
    include_once("../controller/cHoaDon.php");
    $p= new cHoaDon();
    $kq= $p->getallhd($_SESSION['id']);
    if($kq)
    {
        
        echo '
   
        <h3 align="center"><strong>Lịch Sử Thanh Toán</strong></h3>
            <form action="" method="POST">
        <div class="table-container">
        
        <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Số Tiền</th>
                <th>Trạng Thái Thanh Toán</th>
                <th>Ngày Thanh Toán</th>
                <th>Ngày Lập Hóa Đơn</th>
             
            </tr>
        </thead>
        <tbody>
            <!-- Replace this part with PHP code to dynamically generate rows -->
          
            <!-- Repeat table rows as needed -->
        
                    
               
    ';
    $stt=1;
    while($r=mysqli_fetch_assoc($kq))
    {
        echo'  <tr>
                <td>'.$stt.'</td>
                <td>'.$r['SoTien'].'</td>
                <td>'.$r['TinhTrangThanhToan'].'</td>
                <td>'.$r['NgayThanhToan'].'</td>
                <td>'.$r['NgayLapHoaDon'].'</td>
             
            </tr>';
                    $stt++;
    }
    echo' </tbody>
    </table>
</div>
    </form>';
    }
?>

            </div>

        </div>
    </div>
    </div>

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
            <!-- Additional Footer Content -->
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.
                Designed by
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
    <script src="../assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../assets/mail/contact.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>