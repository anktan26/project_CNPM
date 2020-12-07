<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.green.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src=tan_1/time.js></script>
    <link rel="stylesheet" href="tan_1/nvar.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light" style="padding: 0px;height:40px;">
        <ul class="navbar-nav" style="padding-left:30px;">
        <li class="nav-item" style="padding-top: 10px;">
            <p>Hotline:0389643578 Email:anktan26@gmail.com</p>
        </li>
        <li class="nav-item" style="padding-top: 10px;">
            <p id="time" style="padding-left: 250px;"></p>
        </li>
        <li class="nav-item" style="padding-top: 10px;">
            <p id="date"></p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="" style="padding-left: 250px;" >
                <img src="http://phuchajsc.com.vn/storage/photos/1/giaodien/en.png" class="rounded"  style="width: 50px;height: 30px;">
            </a>
        </li>
        <li>
            <a class="nav-link" href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/giaodien/vi.png" class="rounded" style="width: 50px;height: 30px;">
            </a>
        </li>
        <li >
            <a class="nav-link" href="{{route('login')}}">
            <i class="fas fa-user-astronaut" style="font-size: 25px;padding-top: 2px;"> DANG NHAP</i>
            </a>
        </li>
        </ul>
    </nav>
    <script>date();</script>
    <script> gio();</script>

<section class="header_logo">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <a href="" target="_blank" title="">
          <img src="http://phuchajsc.com.vn/storage/photos/1/doitac/phuc%20ha%20LOGO%20(1).png"> 
        </a>
      </div>
      <div class="col-sm-4">
          <img src="http://phuchajsc.com.vn/storage/photos/1/iso.jpg">
      </div>
      <div class="col-sm-4">
          <form class="form-inline" action="" method="">
            <input class="form-control mr-sm-2" type="text" placeholder="search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
      </div>
    </div>
  </div>
</section>


<section class="progress_bar">
  <div class="container">
      <div class="navbar">
        <a class="active" href="#">TRANG CHỦ</a>
        <div class="subnav">
          <a class="subnavbtn" href="#">GIỚI THIỆU</a>
          <div class="subnav-content">
            <a id="gt" href=""><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> GIỚI THIỆU</a>
            <hr/> 
          </div>
        </div>
        <div class="subnav">
          <a class="subnavbtn" href="#">SẢN PHẨM</a>
          <div class="subnav-content" style="overflow:scroll;">
            <div class="row">
              <div class="col-sm-6">
                <a href="{{route('product')}}"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> ÁO, QUẦN, BỘ TRANG PHỤC VKD</a>
                <hr/>
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> MŨ, KHẨU TRANG, GIẦY PHẪU THUẬT VKD</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> BĂNG TAM GIÁC; SĂNG MỔ VKD</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> BĂNG ĐẮP MẮT; BÔNG GẠC ĐẮP VẾT THƯƠNG</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> SẢN PHẨM BỘ/ GÓI LIÊN QUAN VỀ GẠC</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> GẠC MIẾNG; GẠC PHẪU THẬT, GẠC KHÁC</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> TẠP DỀ, TẤM TRẢI, TÚI</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> TẠP DỀ VKD; KTT/TT</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> TĂM BÔNG, QUE XÉT NGHIỆM, ĐÈ LƯỠI</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> SẢN PHẨM NHỰA Y TẾ</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> TRANG PHỤC Y TẾ</a>
                <hr/> 
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> SẢN PHẨM HÓA CHẤT CƠ BẢN</a>
                <hr/>
              </div>
                <img id="img_bar_bar" src="http://phuchajsc.com.vn/storage/photos/1/product/1.png">
            </div>
          </div>
        </div> 
        <div class="subnav">
          <a class="subnavbtn" href="#">NĂNG LỰC</a>
          <div class="subnav-content">
            <hr/> 
          </div>
        </div>
        <div class="subnav">
          <a class="subnavbtn" href="#">TIN TỨC</a>
          <div class="subnav-content">
            <div class="row">
              <div class="col-sm-6">
                <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> TIN TỨC</a>
                <hr/>
              </div>
                <img id="img_bar_bar" src="http://phuchajsc.com.vn/storage/photos/1/img_avatar3.png"></img>
            </div>
          </div>
        </div>
        <div class="subnav">
          <a class="subnavbtn" href="#">TUYỂN DỤNG</a>
          <div class="subnav-content">
            <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> GIỚI THIỆU</a>
            <hr/> 
          </div>
        </div>
        <a href="#">Liên hệ</a>
      </div>
    </div>
</section>

<!-- <section class="main_5">
  <div class="footer_social">

  </div>
  <div class="social">
    <b>Kết nối với chúng tôi</b> 
    <a href=""><img src="http://phuchajsc.com.vn/images/zalo.png" style="width:30px;height:30px;margin-left:200px;"></a>
    <a href=""><i class="fab fa-facebook-f" style="color:#3F5C9A;margin-left:20px;font-size:30px;"></i></a>
    <a href=""><i class="fab fa-facebook-messenger" style="color:#4389FE;margin-left:20px;font-size:30px"></i></a>
  </div>
    <div class="jumbotron bg-primary text-white">
      <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h5 style="font-size:14px;"><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">THÔNG TIN LIÊN HỆ</h5>
          <p style="font-size:14px;">CÔNG TY CỔ PHẦN DƯỢC VÀ THIẾT BỊ Y TẾ PHÚC HÀ (PHUC HA PHARMA.,JSC)</p>
          <p style="font-size:14px;">PHUC HA PHARMACEUTICAL AND MEDICAL EQUIPMENT JOINT STOCK COMPANY</p>
          <p>Địa chỉ: Tổ dân phố thượng 1, P.Tây Tựu, Q.Bắc Từ Liêm, TP.Hà Nội</p>
          <p>Điện thoại: 024 3230 3555/ 2215 3722 </p>
          <p>Hotline/Zalo: 0964 596 368</p>
          <p>Email: phuchajsc.vn@gmail.com</p>
          <p> phuchajsc.com.vn</p>          
        </div>
        <div class="col-sm-4">
          <h5 style="font-size:14px;"><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">BẢN ĐỒ MAP</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.954111076716!2d106.7086283147493!3d10.814823792295511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175289741790d39%3A0x95362685e34cec2f!2zQuG6v24gWGUgTWnhu4FuIMSQw7RuZyDEkGluaCBC4buZIEzEqW5o!5e0!3m2!1sen!2sus!4v1606056131626!5m2!1sen!2sus" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
          </iframe>
        </div>
        <div class="col-sm-4">
          <h5 style="font-size:14px;"><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">THÔNG TIN LIÊN HỆ</h5>
          <form action="" method="">
            <label for="hoten">Họ tên</label>
            <input type="text" id="hoten" name="hoten" placeholder="">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="">
            <label for="zalo">Zalo</label>
            <input type="text" id="zalo" name="zalo" placeholder="">
            <label for="content">Nội dung</label>
            <textarea id="content" name="content" placeholder="" style="height:100px;"></textarea>
            <input type="submit" value="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</section> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>