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
    <div class="bg order-1 order-md-2" style="background-image: url('./login/images/Register_head2_1900x800.jpg'); background-style:cover">
      <h1 class="header-img">TRẢI NGHIỆM TẬP MIỄN PHÍ</h1>
      <h3 class="header-notification__img">Hãy để lại thông tin và chúng tôi sẽ liên hệ bạn trong vòng 24h!</h3>
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 style=" margin-left: 80px; margin-bottom:30px;"><strong>Đăng ký thành viên</strong></h3>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Họ tên</label>
                <input type="text" class="form-control" placeholder="Họ tên*" id="username">
              </div>
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="your-email@gmail.com*" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="text">Số điện thoại</label>
                <input type="text" class="form-control" placeholder="Số điện thoại*" id="telephone">
              </div>
              <!-- password -->
              <div class="form-group last mb-3">
                <label for="pass">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập Password" id="password">
              </div>

              <div class="form-group last mb-3">
                <label for="pass"> Nhập lại mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập Password" id="password-reset">
              </div>
              
              <input type="submit" value="Đăng ký" class="btn btn-block mt-5" style="background-color: #da2127; color: #fff6f4; font-weight: 600; font-size:1.2rem; ">


            </form>
            <a class="already-signup" href="./dangnhap.php">Bạn đã có tài khoản</a>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="./login/js/jquery-3.3.1.min.js"></script>
  <script src="./login/js/popper.min.js"></script>
  <script src="./login/js/bootstrap.min.js"></script>
  <script src="./login/js/main.js"></script>
</body>

<style>

/* h1 */
h1.header-img{
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

b, strong {
    font-weight: bolder;
    font-family: Oswald;
    font-size: 2rem;
    color: #da2127;
}

a.already-signup {
    text-decoration: none;
    margin-left: 60%;
}

a.already-signup:hover{
    color: #da2127;
}

</style>


</html>