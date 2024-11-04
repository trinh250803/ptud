<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="../assets/img/logo.png" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="../index.php" class="nav-item nav-link">Trang chủ</a>
                    <a href="about.php" class="nav-item nav-link active">Về chúng tôi</a>
                    <a href="feature.php" class="nav-item nav-link">Tin tức</a>
                    <a href="class.php" class="nav-item nav-link">Lớp học</a>
                    <a href="contact.php" class="nav-item nav-link">Liên hệ</a>
                    <?php
                    if (!isset($_SESSION['dn'])) {
                        echo '<a href="./dangkitapthu.php" class="nav-item nav-link">Đăng ký tập thử</a>';
                    }
                    ?>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Về chúng tôi</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../index.php">Trang chủ</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Về chúng tôi</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="../assets/img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">Không chỉ là một phòng tập thể dục</h2>
                <p>Tại GymNast, bạn nhận được nhiều hơn số tiền bạn phải trả! Bạn có thể tận hưởng tư cách thành viên linh hoạt,
                    các lớp học không giới hạn và quyền truy cập 24/7, nhưng đó không chỉ là những thứ bạn mong đợi từ một phòng tập thể dục,
                    mà còn là giá trị bổ sung. Hãy nghĩ đến những người bạn mới, nhiều thời gian hơn, các nhóm thân thiện và một không gian không phán xét để tập luyện và cảm thấy thoải mái.
                    Không có gì ngạc nhiên khi chúng tôi là phòng tập thể dục yêu thích của Việt Nam.</p>

            </div>
        </div>

    </div>
    <!-- 2 -->
    <div class="py-5 px-5" style="background-color:#981d1b;">
        <div class="row mt-5">
            <!-- nhiem vu -->
            <div class="col-lg-4 ">
                <h5 class=" text-light about-item">TẦM NHÌN</h5>
                <p class=" text-light">
                    Trở thành Công ty Thể dục Uy tín và Chất lượng dịch vụ tốt nhất Việt Nam
                </p>
            </div>
            <!-- su menh -->
            <div class="col-lg-4">
                <h5 class=" text-light about-item ">SỨ MỆNH</h5>
                <p class=" text-light">
                    Đối với Cộng đồng: Khỏe, đẹp cho cuộc sống chất lượng. Đối với Đối tác
                    Nhà Đầu tư: Gymnast là nơi đáng tin cậy để hợp tác cùng phát triển và tạo nên những giá trị vững bền.
                    Đối với Nhân viên: GymNastlà nơi công việc và đam mê luôn song hành.
                </p>
            </div>
            <!-- gia tri -->
            <div class="col-lg-4">
                <h5 class=" text-light about-item ">GIÁ TRỊ</h5>
                <p class=" text-light">
                    Sức khỏe là ưu tiên hàng đầu. Uy tín: GymNast luôn giữ uy tín với khách hàng, đối tác, cam kết lời nói đi đôi với hành động.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="footer container-fluid mt-3 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Gymnast</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>4 Nguyễn Văn Bảo, Gò Vấp, Thành phố Hồ Chí Minh</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Liên kết</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                    <a class="text-white mb-2" href="./about.php"><i class="fa fa-angle-right mr-2"></i>Về chúng tôi</a>
                    
                    <a class="text-white mb-2" href="./class.php"><i class="fa fa-angle-right mr-2"></i>Lớp học</a>
                    <a class="text-white" href="./contact.php"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Phổ biến</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                    <a class="text-white mb-2" href="./about.php"><i class="fa fa-angle-right mr-2"></i>Về chúng tôi</a>
                    
                    <a class="text-white mb-2" href="./class.php"><i class="fa fa-angle-right mr-2"></i>Lớp học</a>
                    <a class="text-white" href="./contact.php"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Giờ mở cửa</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
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


<style>
.about-item{
    width: 100px;
    line-height: 30px;
}


</style>

</html>