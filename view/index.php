<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án 1</title>
  <link rel="stylesheet" href="./src/css/style.css">
  <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <div id="wrapper">
    <?php
    include "./page/website/header.php"
    ?>
    <div>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="./assets/img/SlideShow_1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./assets/img/SlideShow_2.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="./assets/img/SlideShow_3.avif" style="width:100%">
        </div>
        <!-- Nút điều khiển mũi tên-->
        <a class="prev ti-arrow-circle-left" onclick="plusSlides(-1)"></a>
        <a class="next ti-arrow-circle-right" onclick="plusSlides(1)"></a>
      </div>
      <br>
      <!-- Nút tròn điều khiển slideshow-->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>

    <div id="wp-products">
      <h2>Món ngon phải thử </h2>
      <ul id="list-products">
        
      </ul>
    </div>
    <div id="footer">
      <div class="box">
        <div class="logo">
          <img src="assets/logo.png" alt="">
        </div>
      </div>
      <div class="box">
        <h3>Nội dung</h3>
        <ul class="quick-menu">
          <div class="item">
            <a href="#">Khuyến mãi</a>
          </div>
          <div class="item">
            <a href="#">Thực đơn</a>
          </div>
          <div class="item">
            <a href="#">Theo dõi đơn hàng</a>
          </div>
          <div class="item">
            <a href="#">Về chúng tôi</a>
          </div>
        </ul>
      </div>
      <div class="box">
        <h3>Contact</h3>
        <form action="">
          <input type="text" placeholder="Email Address">
          <button>Nhận tin</button>
        </form>
      </div>

    </div>
    <div class="end">
      <p class="" style="color: white;">
        Copyright &copy;
        <script>
        document.write(new Date().getFullYear());
        </script> | This template is made with by Group 7</a>
      </p>
    </div>
  </div>
  <script src="/src/js/script.js"></script>
</body>

</html>