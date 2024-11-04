<?php
include './model/ketnoi.php';
session_start();
error_reporting(1);
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
    <link href="./assets/img/logo.png" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.6.0-web/css/all.min.css">

    <!-- Flaticon Font -->
    <link href="./assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
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
                    <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                    <a href="./view/about.php" class="nav-item nav-link">Về chúng tôi</a>
                    <a href="./view/feature.php" class="nav-item nav-link">Tin tức</a>
                    <a href="./view/class.php" class="nav-item nav-link">Lớp học</a>
  
                    <a href="./view/contact.php" class="nav-item nav-link">Liên hệ</a>
                    <?php
                    if (!isset($_SESSION['dn'])) {
                        echo '<a href="view/dangkitapthu.php" class="nav-item nav-link">Đăng ký tập thử</a>';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Gói tập chỉ từ 299K</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Thanh Toán Chill - Hưởng thả ga</h2>
                        <a href="./view/dangnhap.php" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Mua gói trả tháng ngay</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Một sân chơi mới</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Định nghĩa lại sự quyến rũ </h2>
                        <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Trải nghiệm miễn phí</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mt-5">

        <h4 class="display-4 font-weight-bold d-flex justify-content-center">HỘI VIÊN</h4>
        <p class="comment-service text-center mt-3" id="">
            Gymnast cung cấp gói Hội viên Black Card và Classic. Cả hai đều cho bạn tham gia tập luyện không giới hạn trong không gian Không phán xét, nơi mọi người cảm thấy được chào đón khi bước vào.
        </p>

        <div class="row px-3 mt-5">
            <!-- card 1 -->
            <div class="col-md-6 p-0 ">
                <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white  px-4">
                    <div class="card-item mb-5 mt-lg-n5">
                        <h3 class="display-4 mb-3 text-white font-weight-bold">BLACK CARD</h3>
                        <label class="btn btn-lg px-4 btn-success rounded card-item__link ">Giá tốt nhất</label>
                    </div>
                    <div class="card-price">
                        <span class="price">
                            2.399.000
                            <sup>Đ</sup>
                        </span>
                        <small>/ 6 tháng</small>
                    </div>
                    <div class="card-notice body-2 inline-flex items-center gap-8 mt-2">
                        <em class="fa-solid fa-thumbs-up p-1"></em>
                        Tất Cả Quyền Lợi Trong Một
                    </div>

                    <p class="comment-service text-center">
                        Tập luyện tại toàn hệ thống Gymnast, chuyển nhượng gói tập, nhiều dịch vụ hấp dẫn
                        và nhiều hơn nữa!
                    </p>
                    <a class="btn btn-outline-primary mt-5 px-4 accept-item" href="#">Tham gia<i class="fa fa-angle-right"></i></a>
                </div>

            </div>
            <!-- card 2 -->
            <div class="col-md-6 p-0 ">
                <div class="gym-class-box basic d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white  px-4">
                    <div class="card-item mb-5 mt-lg-n5 ml-0">
                        <h3 class="display-4 mb-3 text-white font-weight-bold text-left ml-3 w-100 ">BASIC</h3>
                    </div>
                    <div class="card-price">
                        <span class="price">
                            299.000
                            <sup>Đ</sup>
                        </span>
                        <small>/ 1 tháng</small>
                    </div>
                    <div class="card-notice body-2 inline-flex items-center gap-8 mt-2">
                        <em class="fa-solid fa-thumbs-up p-1"></em>
                        Tham gia Gym cho mọi người
                    </div>

                    <p class="comment-service text-center">
                        Gói hội viên cơ bản của Gymnast, bạn được tập luyện không giới hạn tại câu lạc bộ đăng ký.
                    </p>
                    <a class="btn btn-outline-primary mt-5 px-4 accept-item" href="#">Tham gia<i class="fa fa-angle-right"></i></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class="container py-5 about-start">
        <div class="row align-items-between">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="./assets/img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6" style="margin-top: 140px;">
                <h2 class="display-3 font-weight-bold mb-4 text-light ">Chào mừng bạn đến với Gymnast</h2>
                <p class="about-start__item text-light">
                    Chúng tôi tạo ra một môi trường nơi mà mọi người đều có thể cảm thấy thoải mái tập luyện một mình hoặc cùng bạn bè của mình, bất kể trình độ thể chất và hiểu biết về gym như thế nào mà không bao giờ lo lắng về việc bị đánh giá.</p>

                <a href="" class="btn btn-lg px-4 btn-outline-primary about-start__more" style="background-color: #9b1b1b;border-bottom: 1px solid;outline:none">
                    <i class="fa-solid fa-arrow-right" style="color: #fff;"></i>
                    Tìm hiểu thêm
                </a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <h4 class="display-4 font-weight-bold d-flex justify-content-center">CÁC DỊCH VỤ CỦA CHÚNG TÔI</h4>
        <div class="row">
            <!--  dv 1 -->
            <div class="col-lg-4 p-0">
                <a href="" class="text-decoration-none  service-link">
                    <div class="d-flex align-items-center bg-secondary text-white px-5 service " style="min-height: 300px;">
                        <div class="img-service">
                            <img class="img-service__item" src="./assets/img/cardio.jpeg" alt="img-service"></img>
                        </div>
                        <div class="note-service">
                            <h2 class="text-white mb-3">CARDIO</h2>
                            <p class="comment-service__item">
                                Nơi hoàn hảo để bạn cải thiện thể chất và đốt cháy Kcalo, mỡ thừa.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- dv2 -->
            <div class="col-lg-4 p-0">
                <a href="" class="text-decoration-none service-link">
                    <div class="d-flex align-items-center bg-secondary text-white px-5 service" style="min-height: 300px;">
                        <div class="img-service">
                            <img class="img-service__item" src="./assets/img/dancee.jpeg" alt="img-service">
                        </div>
                        <div class="note-service">
                            <h2 class="text-white mb-3">DANCE</h2>
                            <p class="comment-service__item">
                                Sự kết hợp các điệu nhảy tự do với âm nhạc sôi động, giúp đốt cháy mỡ thừa,thư giãn cùng âm nhạc.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 p-0">
                <a href="" class="text-decoration-none service-link">
                    <div class="d-flex align-items-center bg-secondary text-white px-5 service" style="min-height: 300px;">
                        <div class="img-service">
                            <img class="img-service__item" src="./assets/img/yoga.jpeg" alt="img-service">
                        </div>
                        <div class="note-service">
                            <h2 class="text-white mb-3">YOGA</h2>
                            <p class="comment-service__item">Chương trình luyện tập yoga được thiết kế khoa học và phù hợp từ chuyên gia.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Tại sao nên chọn chúng tôi ?</h4>
            <h4 class="display-4 font-weight-bold">Lợi ích khi tham gia GYM của chúng tôi</h4>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="./assets/img/feature-1.jpg" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Chương trình tập luyện được cá nhân hóa</h4>
                        <p>Chúng tôi cung cấp các chương trình tập luyện được tùy chỉnh riêng theo mục tiêu của mỗi người, dù đó là giảm cân, tăng cơ, cải thiện sức bền hay chuẩn bị cho các sự kiện đặc biệt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="./assets/img/feature-2.jpg" alt="Image">
                        <i class="flaticon-training"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold"> Dịch vụ chăm sóc khách hàng tận tâm và chu đáo</h4>
                        <p>Đội ngũ nhân viên tận tình và luôn sẵn sàng hỗ trợ, tư vấn các thông tin cần thiết từ việc đăng ký gói tập, các chương trình khuyến mãi đến những thắc mắc trong quá trình tập luyện.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="./assets/img/feature-3.jpg" alt="Image">
                        <i class="flaticon-trends"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold">Đa dạng gói tập luyện linh hoạt</h4>
                        <p>Phòng gym cung cấp nhiều gói tập khác nhau, từ ngắn hạn đến dài hạn, phù hợp với mọi nhu cầu và ngân sách. Khách hàng có thể chọn gói tập hàng ngày, hàng tháng hoặc gói tập không giới hạn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="./assets/img/feature-4.jpg" alt="Image">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold"> Thiết bị hiện đại, đa dạng</h4>
                        <p>Phòng gym của chúng tôi trang bị những máy móc và dụng cụ tập luyện tối tân, từ cardio đến tập tạ và các thiết bị chuyên biệt giúp khách hàng có trải nghiệm tập luyện toàn diện.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    <div class="subscribe container-fluid my-5 py-5 text-center">
        <h4 class="display-4 text-white font-weight-bold mt-5 mb-3">Đăng ký tư vấn</h4>
        <p class="text-white mb-4">Để được hỗ trợ nhanh nhất,
            Bạn hãy để lại số điện thoại tại đây nhé.</p>
        <form class="form-inline justify-content-center mb-5" method="post" action="">
            <!-- name -->
            <div class="input-group">
                <input type="text" name="fullname-sp" class="form-control-lg" placeholder="Họ và tên">
            </div>
            <!-- sdt -->
            <div class="input-group">
                <input type="text" name="telephone-sp" class="form-control-lg" placeholder="Số điện thoại">
            </div>
            <div class="input-group-append">
                <input type="submit" class="btn btn-primary" value="Đăng ký"></input>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Lịch các lớp học</h4>
            <h4 class="display-4 font-weight-bold">Giờ làm việc và giờ học</h4>
        </div>
        <div class="tab-class">
            <ul class="nav nav-pills justify-content-center mb-4">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#class-all">All Lớp học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-cardio">Cardio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-crossfit">Dance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#class-powerlifting">Yoga</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-cardio" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>Antony
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-crossfit" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Dance</h5>Ng.Minh Quân
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-powerlifting" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td>
                                        <h5>Cardio</h5>Antony
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Dance</h5>Ng.Minh Quân
                                    </td>
                                    <td></td>
                                    <td class="bg-primary text-white">
                                        <h5 class="text-white">Yoga</h5>Maguire
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class="container-fluid position-relative bmi my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6">
                    <div class="pr-md-3 d-none d-md-block">
                        <h4 class="text-primary">Chỉ số khối cơ thể</h4>
                        <h4 class="display-4 text-white font-weight-bold mb-4">BMI là gì ??</h4>
                        <p class="m-0 text-white">Đo chỉ số BMI tại CITIGYM để đánh giá mức độ béo, gầy hay cân nặng lý tưởng của bạn
                            CITIGYM hỗ trợ hội viên đo chỉ số BMI trước và trong quá trình tập luyện để hội viên có thể theo dõi được kết quả tập luyện. BMI là chỉ số khối cơ thể (Body Mass Index), được các bác sĩ và chuyên gia sức khỏe dùng để xác định một người có bị béo phì, thừa cân hay quá gầy. Hãy để lại thông tin để Gymnast có thể giúp bạn phân tích sức khỏe và đưa ra những tư vấn phù hợp với thể trạng của bạn.</p>
                    </div>
                </div>
                <div class="col-md-6 bg-secondary py-5">
                    <div class="py-5 px-3">
                        <h1 class="mb-4 text-white">Tính chỉ số BMI của bạn</h1>
                        <form>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white" placeholder="Cân nặng (KG)">
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white" placeholder="Chiều cao (CM)">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white" placeholder="Tuổi">
                                </div>
                                <div class="col form-group">
                                    <select class="custom-select custom-select-lg bg-dark text-muted">
                                        <option>Giới tính</option>
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="button" class="btn btn-lg btn-block btn-dark border-light"
                                        value="Nhận kết quả">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Huấn Luyện Viên</h4>
            <h4 class="display-4 font-weight-bold">Huấn Luyện Viên Chuẩn Quốc Tế</h4>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="./assets/img/team-1.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">NGUYỄN MINH QUÂN</h4>
                        <p class="card-text">Chứng chỉ NASM Hoa Kỳ</p>
                        <p class="card-text bg-danger" style="width: 254px;margin-left: -19px;">5 năm kinh nghiệm</p>
                        <p class="card-text"> Chuyên môn:Yoga, Fitness, Karate, Boxing, Yudo,Hip hop</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="./assets/img/team-2.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">AN NGUYỄN</h4>
                        <p class="card-text">Chứng chỉ HLV xuất sắc</p>
                        <p class="card-text bg-danger" style="width: 254px;margin-left: -19px;">7 năm kinh nghiệm</p>
                        <p class="card-text"> Chuyên môn: Bungee Workout, Dance, Boxing, Karate</p>



                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="./assets/img/team-3.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">ANTONY</h4>
                        <p class="card-text"> Chứng chỉ HLV xuất sắc</p>
                        <p class="card-text bg-danger" style="width: 254px;margin-left: -19px;">5 năm kinh nghiệm</p>
                        <p class="card-text"> Chuyên môn:Bungee Workout, Cardio, Zumba, Dance FreeStyle.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="./assets/img/team-4.jpg" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary">MAGUIRE</h4>
                        <p class="card-text"> chứng chỉ HLV xuất sắc</p>
                        <p class="card-text bg-danger" style="width: 254px;margin-left: -19px;">8 năm kinh nghiệm</p>
                        <p class="card-text"> Chuyên môn: Dance Fitness, Yoga, Cardio, Dance FreeStyle.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial my-5">
        <div class="container">
            <div class="row px-3 align-items-center">
                <div class="col-md-6 bg-secondary">
                    <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="./assets/img/testimonial-1.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Duy Bảo</h4>
                                            <p class="m-0">Nhân viên văn phòng</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Tôi thấy phòng tập rất tốt, chất lượng máy móc tốt, giáo viên nhiệt tình, phòng tập sạch sẽ, thoáng đãng, rất thích hợp cho việc tập luyện
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="./assets/img/testimonial-2.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Nhường Em</h4>
                                            <p class="m-0">Chủ tịch</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Không gian rộng rãi, sạch sẽ. Đọi ngũ huấn luyện viên có tâm và giàu chuyên môn nhất mình từng gặp.
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="./assets/img/testimonial-3.jpg" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary">Đầy Trương</h4>
                                            <p class="m-0">Giám đốc Gara</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                        Quả là một phòng tập tuyệt vời, thiết bị hiện đại, đội ngũ chuyên nghiệp, xứng đáng là phòng gym số một Việt Nam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-3 d-none d-md-block">
                        <h4 class="text-primary">Cảm nhận khách hàng</h4>
                        <h4 class="display-4 mb-4 text-white font-weight-bold">Khách hàng nói gì về chúng tôi?</h4>
                        <!-- <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Bài viết</h4>
            <h4 class="display-4 font-weight-bold">Bài viết hữu ích</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="./assets/img/Nên uống nước gì trước, trong và sau khi tập gym_.jpeg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>20</small>
                        <strong class="text-uppercase m-0 text-white">Oct</strong>
                        <small>2024</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lần đầu tập gym nên lưu ý điều gì?</h3>
                        <div class="d-flex">
                            <!-- <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small> -->
                        </div>
                    </div>
                </div>
                <p>Lần đầu đi tập gym nên lưu ý điều gì, nên lưu ý điều gì khi tập gym, trước khi tập ăn gì, sau khi tập ....</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./view/feature.php">Đọc thêm <i class="fa fa-angle-right"></i></a>
                </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" style="height:51%; width: 100%;" src="./assets/img/Best “LISS Cardio” Workout Ideas for Weight Loss.jpeg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Oct</strong>
                        <small>2024</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">
                            Liss Cardio Là Gì? Các Bài Tập Liss Cardio Phổ Biến</h3>
                        <div class="d-flex">
                            <!-- <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small> -->
                        </div>
                    </div>
                </div>
                <p>
			Liss cardio là một bài tập mang lại hiệu quả rất tốt trong việc đốt mỡ và giảm cân. Bài tập này thường khá đơn ...		</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="./view/feature.php">Đọc thêm <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
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
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Về chúng tôi</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Lớp học</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Phổ biến</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Về chúng tôi</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Lớp học</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
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
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="./assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="./assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>
</body>

</html>

<?php

?>