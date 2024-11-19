<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./login/fonts/style.css">

    <link rel="stylesheet" href="./login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="./login/css/style.css">

    <title>Sign up</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url('./login/images/Register_head2_1900x800.jpg'); background-style:cover">
            <h1 class="header-img">TRẢI NGHIỆM TẬP MIỄN PHÍ</h1>
            <h3 class="header-notification__img">Hãy để lại thông tin và chúng tôi sẽ liên hệ bạn trong vòng 24h!</h3>
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3 style=" margin-left: 80px; margin-bottom:30px;"><strong>Đăng ký thành viên</strong></h3>
                        <form  method="post">
                            <div class="form-group first">
                                <label for="username">Họ tên</label>
                                <input type="text" class="form-control" placeholder="Họ tên*" id="username"
                                    name="username">
                                <span></span>
                                <small></small>
                            </div>

                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="your-email@gmail.com*" id="email"
                                    name="email">
                                <span></span>
                                <small></small>
                            </div>

                            <div class="form-group last mb-3">
                                <label for="telephone">Số điện thoại</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại*" id="telephone"
                                    name="telephone">
                                <span></span>
                                <small></small>
                            </div>

                            <div class="form-group last mb-3">
                                <label for="address">Địa chỉ </label>
                                <input type="text" class="form-control" placeholder="Địa chỉ" id="address"
                                    name="address">
                                <span></span>
                                <small></small>
                            </div>
                            <!-- password -->
                            <div class="form-group last mb-3">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập Password" id="password"
                                    name="password">
                                <span></span>
                                <small></small>
                            </div>

                            <div class="form-group last mb-3">
                                <label for="pass-reset"> Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập Password"
                                    id="pass-reset" name="pass-reset">
                                <span></span>
                                <small></small>
                            </div>

                            <input type="submit"   name="btn-dangky" class="btn btn-block mt-5" value="Đăng ký"
                                style="background-color: #da2127; color: #fff6f4; font-weight: 600; font-size:1.2rem; ">
                                

                        </form>
                        <?php
                            if (isset($_POST['btn-dangky']) && $_POST['btn-dangky'] == 'Đăng ký') 
                            { 
                               
                                include_once("../controller/cThanhVien.php");
                                $p = new cThanhVien();
                                $tentv=$_REQUEST['username'];
                                $sdt=$_REQUEST['telephone'];
                                $diachi=$_REQUEST['address'];
                                $email=$_REQUEST['email'];
                                $ngaythamgia= date("Y/m/d");
                                
                                $password=$_REQUEST['password'];
                                
                                $kq= $p->registerTK($tentv,$sdt,$diachi,$email,$ngaythamgia,$password);
                                if(!$kq)
                                {
                                    echo "<script>alert('Đăng ký ko thành công');</script>";
                                }
                                else{
                                    echo "<script>window.location.href = 'QLTV.php';</script>";
                                }
                            }
                    ?>
                        <a class="already-signup" href="./dangnhap-tv.php">Bạn đã có tài khoản</a>
                    </div>
                   
                </div>
            </div>
        </div>


    </div>


    <!-- <script src="./login/js/regester.js"></script> -->
    <script src="./login/js/jquery-3.3.1.min.js"></script>
    <script src="./login/js/popper.min.js"></script>
    <script src="./login/js/bootstrap.min.js"></script>
    <script src="./login/js/main.js"></script>
</body>

<style>
/* h1 */
h1.header-img {
    font-family: Oswald;
    font-style: normal;
    font-weight: 700;
    font-size: 64px;
    line-height: 90px;
    width: 60%;
    margin-top: 40%;
    color: #fff;
    margin-left: 80px;

}

h3.header-notification__img {
    font-family: Montserrat;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 22px;
    width: 70%;
    color: #fff;
    margin-left: 88px;
    margin-top: 30px;
}

b,
strong {
    font-weight: bolder;
    font-family: Oswald;
    font-size: 2rem;
    color: #da2127;
}

a.already-signup {
    text-decoration: none;
    margin-left: 60%;
}

a.already-signup:hover {
    color: #da2127;
}

.form-group.error {
    border-color: #e74c3c;
}

.form-group.succes {
    border-color: #2691d9;
}


.form-group input {
    width: 100%;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}

small {
    position: absolute;
    left: 0;
    top: 100%;
    margin-top: 3px;
    color: #e74c3c;
}

.form-group span::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #2691d9;
    transition: 0.3s;
}

.form-group input:focus~span::before {
    width: 100%;
}

form .form-group {
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 26px 0;
}
</style>


</html>