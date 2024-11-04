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
            style="background-image: url('./login/images/login.jpeg'); background-style:cover; background-repeat: no-repeat;">
            <h1 class="header-img">TIÊU CHUẨN CỦA SỰ SANG TRỌNG</h1>
            <h3 class="header-notification__img">Bước vào để thay đổi- Bước ra để tự tin </h3>
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3 style=" margin-left: 112px; margin-bottom:30px;"><strong>Đăng nhập</strong></h3>
                        <form method="post">
                            <div class="form-group last mb-3">
                                <label for="text">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại*"
                                    id="telephone">
                                <span></span>
                                <small></small>
                            </div>
                            <div class="form-group last mb-3">
                                <label for="pass">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập Password" id="password"
                                    name="password">
                                <span></span>
                                <small></small>
                            </div>
                            <input type="submit" name="btn-dangnhap" value="Đăng nhập" id="Loginds" class="mt-3 mb-3">
                        </form>
                        <a class="already-signup" href="QuenMK1.php">Quên mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="./login/js/style.js"></script>
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
    margin-left: 58%;
    margin-top: 10px;
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
    margin: 40px 0;
}

#Loginds {
    width: 100%;
    height: 50px;
    border-radius: 10px;
    border: none;
    background-color: #da2127;
    color: white;
}

#Loginds:hover {
    background-color: #aa214b;
    color: white;
}
</style>


</html>

<?php




if((isset($_POST["btn-dangnhap"]))){ 
    include_once("../controller/cThanhVien.php");
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $p = new cThanhVien();
    $kq=$p->get1ThanhVien($phone, $password);
}


?>
<?php

?>