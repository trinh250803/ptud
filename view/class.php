<!DOCTYPE html>
<lang="en">

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
                        <a href="about.php" class="nav-item nav-link">về chúng tôi</a>
                        <a href="feature.php" class="nav-item nav-link">Tin tức</a>
                        <a href="class.php" class="nav-item nav-link active">Lớp học</a>
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
                <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Lớp học</h4>
                <div class="d-inline-flex">
                    <p class="m-0 text-white"><a class="text-white" href="../index.php">Trang chủ</a></p>
                    <p class="m-0 text-white px-2">/</p>
                    <p class="m-0 text-white">Lớp học</p>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Gym Class Start -->
        <div class="container gym-class mb-5" style="margin-top: 90px;">
            <!-- dance -->
            <div class="row px-3">
                <div class="col-md-6 p-0">
                    <div class="gym-class-box d-flex flex-column align-items-end justify-content-center text-right text-white py-5 px-5">
                        <h3 class="display-4 mb-3 mt-3 text-black font-weight-bold dancer-header__item">Dance</h3>
                        <img class="img-fluid mb-4 mb-lg-0 w-100 dancer-header__img" src="../assets/img/dance-class.jpeg" alt="Image">
                        <p class="text-dark mt-3  dance-class__accept">
                            Nhảy hiện đại là một thể loại nhảy đương đại, phát triển mạnh mẽ từ những năm 1950 đến nay, đặc trưng bởi sự tự do sáng tạo và khám phá. Dưới đây là một số điểm nổi bật về nhảy hiện đại:

                            Bạn có thể tự do tạo ra và thể hiện cảm xúc, ý nghĩa thông qua các động tác và biểu cảm của mình, không bị ràng buộc bởi các quy tắc hay kỹ thuật cụ thể.

                            Nhảy hiện đại khuyến khích sự đa dạng và sáng tạo, cho phép người biểu diễn khám phá và phát triển phong cách riêng của mình thông qua việc thử nghiệm các kỹ thuật và ý tưởng mới.

                            Nhảy hiện đại thường được sử dụng để truyền đạt cảm xúc sâu sắc và ý nghĩa sâu xa thông qua các cử động linh hoạt và biểu cảm của cơ thể.

                            Đặc điểm của nhảy hiện đại là sự linh hoạt và mềm mại, với các động tác uốn cong và xoay vòng, đòi hỏi sự kiểm soát và linh hoạt của cơ thể.
                        </p>
                        <a href="#calculator" class="btn btn-lg btn-outline-dark mt-4 px-4">Xem lịch</a>
                    </div>
                </div>
                <!-- yoga -->
                <div class="col-md-6 p-0 mt-3" style="height:900px;">
                    <div class="gym-class-box d-flex flex-column align-items-start justify-content-center  text-left text-white py-5 px-5">
                        <h3 class="display-4 mb-3 text-dark font-weight-bold dancer-header__item">Yoga</h3>
                        <img class="img-fluid mb-4 mb-lg-0 w-100 dancer-header__img" src="../assets/img/yogayoga.jpeg" alt="Image">

                        <p class="text-dark mt-3  dance-class__accept">
                            Yoga là một hình thức tập luyện gồm các tư thế, hơi thở và thiền, nhằm cải thiện cả sức khỏe và tinh thần.

                            Yoga có nguồn gốc từ Ấn Độ và ngày nay đã trở thành một phần không thể thiếu của nền văn hóa và tập luyện trên toàn thế giới.

                            Các tư thế yoga nhằm tăng cường linh hoạt, sức mạnh và cân bằng cơ thể, trong khi hơi thở và thiền giúp giảm căng thẳng, tăng cường tập trung và mang lại cảm giác hạnh phúc.

                            Yoga có nhiều dạng và phong cách khác nhau, từ nhẹ nhàng đến năng động, mỗi phong cách tập trung vào một mục tiêu tập luyện riêng.

                            Yoga không chỉ là một hình thức tập luyện mà còn là một triết lý sống, giúp cân bằng và làm giàu cả cơ thể và tinh thần.
                        </p>
                        <a href="#calculator" class="btn btn-lg btn-outline-dark px-4 dance-class__submit">Xem lịch</a>

                    </div>
                </div>
                <!-- cardio -->
                <div class="col-md-12 p-0  cardio-class">
                    <div class="gym-class-box d-flex flex-column align-items-center justify-content-center  text-left text-white py-5 px-5">
                        <h3 class="display-4 mb-3 text-dark font-weight-bold dancer-header__item">Cardio</h3>
                        <img class="img-fluid mb-4 mb-lg-0 w-100 dancer-header__img" src="../assets/img//cardio-class.jpeg" alt="Image">

                        <p class="text-dark mt-3  dance-class__accept">
                            Cardio – viết tắt của Cardiovascular, là bài tập thể dục tăng cường sức khỏe tim mạch. Đây cũng là một phương pháp đốt cháy calo trong cơ thể hiệu quả, rất được khuyến khích cho người giảm cân hay những vận động viên cần xây dựng vóc dáng tiêu chuẩn.
                            Cardio không tập trung vào một nhóm cơ nhất định mà cần có sự phối hợp của nhiều nhóm cơ khác nhau để cơ thể rèn luyện toàn diện.

                            Chuỗi bài tập cardio rất đa dạng. Một số hoạt động tập cardio phổ biến bao gồm: chạy bộ, đạp xe, bơi lội, nhảy dây,… Tại phòng Gym, Cardio sẽ kết hợp với máy tập và tạ nhằm nâng cao hiệu quả tập luyện.
                        </p>
                        <a href="#calculator" class="btn btn-lg btn-outline-dark  mt-4 px-4 ">Xem lịch</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Gym Class End -->


        <!-- Class Timetable Start -->
        <div class="container gym-feature py-5" id="calculator">
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
        <!-- Footer Start -->
        <div class="footer container-fluid  mt-5 py-5 px-sm-3 px-md-5 text-white">
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
        .dancer-header__item {
            width: 100%;
            text-align: center;
            cursor: default !important;
        }

        .dancer-header__img {
            border-radius: 14px;
        }

        .dance-class__accept {
            text-align: justify;
        }

        .dance-class__submit {
            margin-left: 320px;
            margin-top: 72px;
        }
    </style>

    </html>