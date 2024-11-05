<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymnast - Gym Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Bài viết</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="../index.php">Trang chủ</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Bài viết</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <img class="img-fluid mb-4" src="../assets/img/truoc-khi-tap-gym-nen-an-gi-3.jpg" alt="Image">
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
                            <span class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</span>
                            <span class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</span>
                            <span class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</span>
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
            <div class="col-12 pt-4">
                <div class="media bg-secondary text-white mb-4 p-5">
                    <img src="../assets/img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle p-3 bg-dark"
                        style="width:150px;">
                    <div class="media-body">
                        <h4 class="text-primary mb-3">John Doe</h4>
                        <p class="m-0">Consetetur elitr erat vero sanctus labore dolor ipsum et diam, tempor dolores eos
                            dolor consetetur lorem ipsum, ipsum accusam ipsum sit no ut est. Gubergren ea ipsum erat
                            consetetur magna kasd amet est, voluptua magna elitr ea sit justo sed sanctus. Accusam duo
                            duo sit sit. Ut eos ipsum sed takimata sed dolor justo, elitr no labore amet et et sanctus.
                            Duo invidunt magna diam no clita, ea eos vero sanctus est aliquyam et, dolores gubergren
                            eirmod sea invidunt no kasd. Amet ut sadipscing eirmod et dolore. Sed lorem stet aliquyam
                            ipsum eos.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4">
                <h3 class="mb-4 font-weight-bold">3 Comments</h3>
                <div class="media mb-4">
                    <img src="../assets/img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum
                            et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita
                            aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                        <button class="btn btn-sm btn-dark">Reply</button>
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="../assets/img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum
                            et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita
                            aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                        <button class="btn btn-sm btn-dark">Reply</button>
                        <div class="media mt-4">
                            <img src="../assets/img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                                style="width:60px;">
                            <div class="media-body">
                                <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-dark">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Leave Comment" class="btn btn-outline-primary px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Blog Detail End -->


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