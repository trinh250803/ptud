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
    <div class="bg order-1 order-md-2" style="background-image: url('./login/images/login.jpeg'); background-style:cover; background-repeat: no-repeat;">
      <h1 class="header-img">TIÊU CHUẨN CỦA SỰ SANG TRỌNG</h1>
      <h3 class="header-notification__img">Bước vào để thay đổi- Bước ra để tự tin </h3>
    </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 style=" margin-left: 112px; margin-bottom:30px;"><strong>Đăng nhập</strong></h3>
            <form action="#" method="post">
              <div class="form-group last mb-3">
                <label for="text">Số điện thoại</label>
                <input type="text" class="form-control" placeholder="Số điện thoại*" id="telephone">
              </div>
              <div class="form-group last mb-3">
                <label for="pass">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập Password" id="password">
              </div>
              <input type="submit" value="Đăng nhập" class="btn btn-block mt-5" style="background-color: #da2127; color: #fff6f4; font-weight: 600; font-size:1.2rem; ">

            </form>
            <a class="already-signup" href="./dangky.php">Bạn chưa có tài khoản</a>
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
</style>


</html>