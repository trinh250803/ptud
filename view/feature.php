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
    <link href="../assets/img/logo.png" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/style.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Tin Tức</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../index.php">Trang chủ</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Tin Tức</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid mb-4" src="../assets/img/an uong gym.jpeg" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 100px; height: 100px;">
                        <span>20</span>
                        <strong class="text-uppercase m-0 text-white">Oct</strong>
                        <span>2024</span>
                    </div>
                    <div class="pl-3">
                        <h1 class="font-weight-bold mb-3">Lần đầu đi tập gym nên lưu ý điều gì?</h1>
                        <div class="d-flex">
                        </div>
                    </div>
                </div>
                <p>Trước khi tập gym nên ăn gì?

                    Hãy chắc chắn rằng bạn cung cấp năng lượng cho cơ thể để bạn có đủ năng lượng để tập luyện. Tránh ăn
                    bất cứ thứ gì nặng bụng sẽ khiến bạn cảm thấy uể oải và hãy đảm bảo rằng bạn có đủ thời gian để cơ
                    thể tiêu hóa chúng.

                    Đồ ăn nhẹ như chuối, táo và bơ đậu phộng, phô mai, sinh tố trái cây hoặc bánh sandwich giàu protein
                    sẽ cung cấp cho bạn nguồn năng lượng cần thiết trước khi tập luyện.</p>

                <h2 class="mb-4 font-weight-bold">Khi đi tập nên chuẩn bị gì?</h2>
                <img class="w-50 float-left mr-4 mb-3" src="../assets/img/blog-1.jpg" alt="Image">
                <p>Khi đi tập bạn nên mang theo chai nước, ổ khoá, điện thoại di động để check-in vào phòng tập, khăn,
                    dây kháng lực và các dụng cụ hỗ trợ tập luyện cá nhân khác.</p>
                <h3 class="mb-4 font-weight-bold">Khi đi tập nên mặc gì?</h3>
                <img class="w-50 float-right ml-4 mb-3" src="../assets/img/blog-2.jpg" alt="Image">
                <p>
                    Tiêu chí quan trọng nhất khi chọn trang phục tập gym chính là sự thoải mái để bạn có thể dễ thực
                    hiện các động tác tập. Dưới đây là một số trang phục phổ biến thường được sử dụng trong tập luyện
                    như sau:
                    Áo thể thao là trang phục không thể thiếu của câu hỏi đi tập gym mặc gì. Với chất liệu vải thoáng
                    mát, thấm hút mồ hôi và rộng rãi đây là trang phục tập mà bạn nên ưu tiên chọn lựa. Phổ biến hiện
                    nay là các mẫu áo tank cực thoải mái cho cả nam và nữ. Bên cạnh đó, các loại áo croptop thể thao nữ
                    hay áo ngực thể thao với dây lưng bản to cũng được nhiều bạn trẻ lựa chọn.
                    Quần bó cơ với chất liệu thấm hút mồ hôi và độ co giãn tốt sẽ giúp cho việc tập luyện được thoải mái
                    nhất. Với đặc điểm ôm sát cơ thể và phần eo cao giúp tạo ra lực nén giúp rút ngắn thời gian phục hồi
                    cơ, giảm tình trạng bị chuột rút và giúp định hình vóc dáng. Vì những ưu điểm đó bạn không nên thiếu
                    loại quần này trong bộ sưu tập đi tập gym mặc gì nhé.
                    Quần short sẽ thích hợp cho việc luyện tập trong mùa hè với các bài tập chạy, cardio. Đây là mẫu
                    quần giúp việc luyện tập thoải mái, ko bị vướng víu khi thực hiện các động tác.
                    Quần jogger thun là loại quần tập luyện thể thao phổ biến mà cả nam và nữ đều cần phải có. Với kiểu
                    dáng thể thao form rộng, chất liệu co giãn và phần ống quần túm lại sẽ giúp thực hiện các hoạt động
                    được dễ dàng.
                    Giày thể thao là món đồ không thể thiếu cho việc tập gym. Một đôi giày thể thao vừa vặn sẽ hỗ trợ
                    việc luyện tập được hiệu quả hơn rất nhiều. Đây cũng là một items cần thiết trong danh sách đi tập
                    gym mặc gì mà bắt buộc mỗi người tập đều phải có. Một đôi giày tập không chỉ bảo vệ đôi bàn chân mà
                    còn thể hiện tính cách, gu ăn mặc sành điệu của bạn nữa đấy.
                    Cách chọn quần áo gym phù hợp
                    Kích cỡ
                    Việc chọn kích cỡ quần áo khi tập gym là một lựa chọn đáng lưu ý mà mọi người cần quan tâm. Quần áo
                    tập gym sẽ khác với những bộ quần áo bạn thường mặc ở nhà mặc dù chúng có độ rộng rãi, thoải mái như
                    nhau. Một số lưu ý để chọn size đồ tập như sau:
                    Chọn size vừa với số đo cơ thể, không quá rộng. Size đồ quá cỡ sẽ gây ra sự vướng víu, luộm thuộm
                    khi tập.
                    Tránh chọn size quá nhỏ, quá ôm sát. Điều này sẽ làm cho việc thấm hút mồ hôi bị hạn chế, đồng thời
                    gây mất tự tin và mất thẩm mỹ.
                </p>
            </div>
        </div>
    </div>
    <!-- Blog Detail End -->

    <!-- Liss cardio start -->
    <div class="container-background" style="background-color: #981d1b;">
        <div class="container py-5 ">
            <div class="row ">
                <div class="col-12">
                    <img class="img-fluid mb-4" src="../assets/img/liss cardio-1.jpeg" alt="Image">
                    <div class="d-flex align-items-center mb-4 font-white">
                        <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                            style="width: 100px; height: 100px;">
                            <span>20</span>
                            <strong class="text-uppercase m-0 text-white">Oct</strong>
                            <span>2024</span>
                        </div>
                        <div class="pl-3">
                            <h1 class="font-weight-bold mb-3 text-light">Liss Cardio Là Gì? Các Bài Tập Liss Cardio Phổ
                                Biến</h1>
                            <div class="d-flex text-light">
                            </div>
                        </div>
                    </div>
                    <p class="text-light">Liss Cardio Là Gì?
                        Liss Cardio (Low-Intensity Steady State) là hình thức cardio với cường độ thấp và ổn định. Thay
                        vì thực hiện các bài tập nặng nhọc, Liss tập trung vào các bài tập nhẹ nhàng và liên tục trong
                        một khoảng thời gian dài. Người tập duy trì nhịp tim ở mức 50-70% của nhịp tim tối đa, hoàn toàn
                        trái ngược với các bài tập cường độ cao như Hiit hoặc Tabata</p>
                    <img class="w-50 float-left mr-4 mb-3" src="../assets/img/liss cardio-2.jpeg" alt="Image">
                    <p class="text-light">Liss cardio dễ thực hiện và duy trì hơn so với Hiit hoặc các bài tập khác vì
                        nó không yêu cầu kỹ thuật phức tạp và không gây mất sức nhanh chóng. Tuy nhiên, nếu luyện tập
                        đều đặn, Liss vẫn mang lại những kết quả đáng mong đợi.
                    </p>
                    <!-- tac dung -->
                    <h3 class="mb-4 font-weight-bold text-light">Tác dụng của Liss cardio </h3>
                    <img class="w-50 float-right ml-4 mb-3" src="../assets/img/liss-cardio-3.jpeg" alt="Image">'
                    <h4 class="text-light"> 1. Hỗ trợ phục hồi cơ thể</h4>
                    <p class="text-light">
                        Liss cardio được thực hiện với nhịp độ nhẹ nhàng, có tác động tích cực đến các tế bào và cơ quan
                        trong cơ thể, giúp thúc đẩy quá trình phục hồi tự nhiên. Phương pháp này giúp cải thiện tuần
                        hoàn máu, đặc biệt đến các vùng bị tổn thương, từ đó làm giảm các cơn đau nhức và tình trạng
                        căng cứng cơ. Đối với những người tham gia các chương trình tập luyện cường độ cao thì việc kết
                        hợp linh hoạt Liss cardio có thể giúp hạn chế chấn thương do quá tải và hỗ trợ phục hồi hiệu quả
                        các nhóm cơ sau những buổi tập nặng.
                    </p>
                    <h4 class="text-light"> 2. Cải thiện sức mạnh cho cơ thể</h4>
                    <p class="text-light">
                        Đối với những người mới bắt đầu tập Gym hoặc quay lại sau thời gian dài nghỉ ngơi thì Liss
                        cardio là chính lựa chọn lý tưởng. Đây là bài tập giúp cơ thể dần thích nghi với nhịp độ luyện
                        tập, tăng cường sức bền và hỗ trợ quá trình đốt cháy mỡ thừa một cách hiệu quả, tạo nền tảng
                        vững chắc cho các giai đoạn tập luyện cao hơn.
                    </p>
                    <h4 class="text-light"> 3. Hỗ trợ giảm cân và đốt cháy mỡ thừa</h4>
                    <p class="text-light">
                        Mặc dù có cường độ thấp hơn so với các bài tập phổ biến như Hiit hay cardio nhưng Liss cardio
                        vẫn được đánh giá cao nhờ khả năng đốt mỡ hiệu quả, đặc biệt là đối với người mới bắt đầu. Khi
                        thực hiện Liss cardio, cơ thể sẽ tiếp nhận lượng oxy ổn định, giúp quá trình đốt cháy mỡ thừa
                        diễn ra tốt hơn.
                    </p>

                    <!-- bai tap -->
                    <h3 class="mb-4 font-weight-bold text-light">Một số bài tập Liss cardio phổ biến hiện nay </h3>
                    <p class="text-light">
                        Nhảy dây: Đây là bài tập đơn giản với chỉ một dụng cụ hỗ trợ là dây nhảy. Để đạt hiệu quả tối
                        ưu, bạn nên nhảy dây từ 15 – 25 phút mỗi buổi tập và duy trì 3 lần mỗi tuần.
                    </p>
                    <img class="w-50 float-left mr-4 mb-3" src="../assets/img/nhay day.jpeg" alt="Image">
                    <p class="text-light">
                        Chạy bộ: Chạy bộ cũng là một bài tập Liss cardio dễ thực hiện. Với một đôi giày tốt, bạn có thể
                        tập 2 lần/tuần, mỗi lần từ 20 – 30 phút. Hãy chú ý bổ sung đủ nước và khoáng chất sau mỗi buổi
                        tập.
                    </p>
                    <p class="text-light">
                        Đi bộ: Đây là hình thức tập luyện Liss cardio đơn giản, dễ thực hiện nhất. Bạn có thể đi bộ 150
                        phút mỗi tuần, tùy chỉnh thời gian theo lịch cá nhân
                    </p>
                    <p class="text-light">
                        Bơi lội: Bơi là bài tập Liss cardio giúp tăng cường thể lực và thư giãn tinh thần. Thời gian lý
                        tưởng là từ 10 đến 30 phút mỗi lần, duy trì từ 2 đến 5 buổi mỗi tuần.
                    </p>
                    <p class="text-light">
                        Đạp xe: Bạn có thể thực hiện bài tập này ngoài trời hoặc trên máy đạp xe trong nhà. Đạp xe không
                        gây áp lực lớn lên các khớp, giúp làm ấm cơ thể, cải thiện tuần hoàn máu và đốt cháy calo hiệu
                        quả. Nên khởi động chậm trong 5 – 10 phút đầu và sau đó tăng tốc trong 20 – 30 phút cuối. Đạp xe
                        3 buổi/tuần sẽ mang lại kết quả tốt nhất.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="footer container-fluid  mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Gymnast</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>4 Nguyễn Văn Bảo, Gò Vấp, Thành phố Hồ Chí Minh</p>
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

</html>