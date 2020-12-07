<!DOCTYPE html>
<html lang="vi">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <script src=tan_1/gioithieu.js></script>
  <style>


    body {
     font-family: "DauphinPlain";
    }

.sidenav {
  height: 100%;
  width: 80px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
img {
  width: 100%;
  height: 100%;
}

.container{
  padding-top: 50px;
}
.container a:hover{
    text-decoration:none;
}
#img_smm{
  min-height:100px;
}



.header_logo img{
  max-height:100px;
}
.header_logo .container{
  padding:0px;
  max-height:100px;
}
.header_logo form{
  padding-top:19px;
}


.conveyor .container{
  padding: 0px;
  height:400px;
}
.conveyor .row{
  margin:0px;
}
.conveyor #img_b{
  height:400px;
  width:1140px;
  padding-left: 0px;
}
.conveyor .col-sm-5{
  float:right;
  margin-bottom:100px;
  box-shadow: 0 5px 15px rgba(rgba(240, 240, 240,0.7  ));
  background:rgba(240, 240, 240, 0.7);
  color:black;
}


.progress_bar .container{
  padding: 5px;
  font-size:15px;
  font-weight: 700;
}
.progress_bar .col-sm-2{
  padding: 0px;
}
.progress_bar .col-sm-1{
  padding: 0px;
}
.progress_bar a{
  padding: 0px;
  color:black;
}
.progress_bar a:hover {
  border-bottom: 3px solid #FF7F50;
}
.progress_bar a.active {
  border-bottom: 3px solid #FF7F50;
}
.subnav-content{
  display: none;
  position: absolute;
  left: 0;
  background-color:#F0F8FF;
  width: 100%;
  height:415px;
  z-index: 1;
  padding-top: 20px;
  font-size: 12px;
}
.subnav:hover .subnav-content{
  display: block;
  position:absolute;
  z-index: 100;
}
#img_bar{
  width:20px;
  height:18px;
}
.progress_bar hr{
  width:80%;
  margin-left: 0px;
}
.progress_bar #img_bar_bar{
  width:400px;
  height:300px;
  float:right;
}




#icon{
  width:20px;
  height:20px;
  padding-bottom: 5px;
}

.main_1 img{
  height:225px;
}

.main_1 button{
  height:120px;
  width:120px;
  border-radius:50%;
  margin:10px;
  background-color:#FF8C00;
  border:none;
}
.main_1 button:active{
  border:none;  
}
.main_1 .col-sm-4{
  height:180px;
  padding-top:10px;
}
.main_1 .col-sm-4 p{
  margin:10px;
}
.main_1 #bt{
  border-radius: 4px;
  width:95px;
  height:45px;
  border:none;
  transition:all 0.5s;
}
.main_1 #bt:hover span{
  transition:all 0.5s;
  padding-right:10px;
}
.main_1 #bt span::after{
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.main_1 #bt span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.main_2 .container{
  margin-top:50px;
}

.cursor{
  height:200px;
  width:200px;
  margin-left:20px;
}
.main_2 .owl-carousel{
  width:1110px;
  height:200px;
  margin-left:10px;
  margin-top: 20px;
}
.square {
    position:absolute;
    width: 1140px;
    height: 225px;
    margin-top: 40px;
    background: #0b5789;;
}
.trapezium{
  position:absolute;
    right:190px;
    top:1138px;
  height: 0;
  width: 500px;
  border-bottom: 50px solid #0b5789;;
  border-left: 80px solid transparent;
  border-right: 0px solid transparent;
}

.main_3 .col-sm-2{
  margin:10px;
  background-color:white;
  box-shadow:0px 0px 5px 0px black;
  max-width:170px;
}
.main_3 .col-sm-2 p{
  margin:10px;
  margin-left: 15px;
  font-size:12px;
  width:110px;
}
.main_3 .col-sm-2 img{
  height:120px;
  width:130px;
}

.main_4 .col-sm-4{
  height:200px;
}
.main_4 .col-sm-8 img{
  height:100px;
}


input[type=text], select, textarea {
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.carousel-indicators{
  position: absolute;
  margin-right:500px;
  margin-left:100px;
}
.conveyor #car_1{
  height:50px;
  width:200px;
  text-align:center;
  transform: skew(-30deg);
}
.conveyor #car_1 a{
  transform:skew(30deg);
  display:block;
  padding-top:12px;
  color:white;
}
.conveyor #car_1 a:hover{
  background-color:rgba(255, 229, 71, 0.4);
  transform:skew(-0deg);
  /* display:block; */
  height:100%;
}
.conveyor .active{
  background-color:#fdb528;
}
.thang_can{
  position:absolute;
  margin-top:340px;
  margin-left:0px; 
  float:left;
  width:850px;
  height:0;
  border-right:80px solid transparent;
  border-top:50px solid #0b5789;

  border-left: 0px solid transparent;
  z-index: 1;
}

.main_4 .cursor{
  box-shadow:0px 0px 2px 1px black;
  /* max-width:170px; */
  margin:10px;
}

.main_5 .footer_social{
  position:absolute;
  right:0px;
  top:2535px;
  width:850px;
  height:0;
  border-right:0px solid transparent;
  border-bottom:50px solid #fdb528;
  border-left: 60px solid transparent;
}

.main_5{
  margin-top:70px;
}

.main_5 .social{
  position:absolute;  
    right: 250px;
    top: 2547px;
  font-size: 18px;
  color:white;
  width:500px;
}
</style>
<script>
 function gio(){
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    if(m<10){
      m="0"+m;
    }
    if(s<10){
      s="0"+s;
    }
     setTimeout('gio()',1000);
    var _tb=h+":"+m+":"+s;
    document.getElementById("time").innerHTML=_tb+" || ";
 }
</script>
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


<section class="main_phu">
  <div class="container">
      
  </div>
</section>

<section class="conveyor">
  <div class="container">
    <div class="row" style="margin-top:-50px;">
        <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-indicators">
                    <div data-target="#demo" data-slide-to="0" class="active" id="car_1" >
                      <a href class="car_1_s" >Năng lực sản xuất</a> </div>
                    <div data-target="#demo" data-slide-to="1" id="car_1" >
                      <a href class="car_1_s">Đối tác chiến lược</a></div>
                    <div data-target="#demo" data-slide-to="2" id="car_1" >
                      <a href class="car_1_s">Sản phẩm& dịch vụ</a></div>
                </div>
                <div class="thang_can">

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img id="img_b" src="http://phuchajsc.com.vn/storage/photos/1/banner1.jpg" alt="flc" >
                        <div class="carousel-caption">
                          <div class="col-sm-5">
                            <h3>Năng lực sản xuất</h3>
                            <p>Phúc Hà là đơn vị y tế chuyên: Sản xuất bông băng gạc, khẩu trang y tế, trang phục chống dịch, trang phục chống dịch, kinh doanh, xuất - nhập khẩu các loại vật tư y tế và thiết bị y tế; Lắp đặt và sửa chữa trang thiết bị y tế; dịch vụ giặt tẩy, tẩy trùng; và dịch vụ hậu cần y tế.</p>
                          </div>
                        </div>   
                    </div>
                    <div class="carousel-item">
                    <img id="img_b" src="http://phuchajsc.com.vn/storage/photos/1/a2fcf91d61ed28b2861cb5daf988a025.jpg" alt="Chicago" >
                    <div class="carousel-caption">
                      <div class="col-sm-5">
                        <h3>Đối tác chiến lược</h3>
                        <p>Phúc Hà là đơn vị y tế chuyên: Sản xuất bông băng gạc, khẩu trang y tế, trang phục chống dịch, trang phục chống dịch, kinh doanh, xuất - nhập khẩu các loại vật tư y tế và thiết bị y tế; Lắp đặt và sửa chữa trang thiết bị y tế; dịch vụ giặt tẩy, tẩy trùng; và dịch vụ hậu cần y tế!</p>
                      </div>
                    </div>   
                    </div>
                    <div class="carousel-item">
                    <img id="img_b" src="http://phuchajsc.com.vn/storage/photos/1/pngtree-blue-minimalist-flat-medical-health-banner-image_261505.jpg" alt="New York"   >
                    <div class="carousel-caption">
                      <div class="col-sm-5">
                        <h3>Sản phẩm & dịch vụ</h3>
                        <p>Phúc Hà là đơn vị y tế chuyên: Sản xuất bông băng gạc, khẩu trang y tế, trang phục chống dịch, trang phục chống dịch, kinh doanh, xuất - nhập khẩu các loại vật tư y tế và thiết bị y tế; Lắp đặt và sửa chữa trang thiết bị y tế; dịch vụ giặt tẩy, tẩy trùng; và dịch vụ hậu cần y tế.</p>
                      </div>
                    </div>   
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>  
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
              </div>
        </div>
    </div>
  </div>
</section>
        
<section class="main_1">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h5><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">
        VỀ CHÚNG TÔI
        </h5>
        <p style="padding-top: 20px;">Phúc Hà là đơn vị y tế chuyên: Sản xuất bông băng gạc, khẩu trang y tế, trang phục chống dịch, trang phục chống dịch, kinh doanh, xuất - nhập khẩu các loại vật tư y tế và thiết bị y tế; Lắp đặt và sửa chữa trang thiết bị y tế; dịch vụ giặt tẩy, tẩy trùng; và dịch vụ hậu cần y tế.</p>
        <p>Hoạt động cửa Phúc Hà luôn tuân theo các chuẩn mực luật pháp hiện hành và các tiêu chuẩn quản lý quốc tế như : ISO 9001:2015, ISO 13485:2016, đã được chứng nhận bởi cơ quan chức năng. Bên cạnh đó, trong thực tiễn sản xuất kinh doanh Phúc Hà còn vận dụng các công cụ 5S và các tiêu chuẩn khác như GSP, ISO 14971, ISO 19001, ISO 14001, ISO10012, SA 8000...váo quản lý.</p>
        <a href=""> <button id="bt" class="button"><span>Xem thêm</span></button></a>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <img src="http://phuchajsc.com.vn/storage/photos/1/banner1.jpg">
          <div class="col-sm-4">
            <button class="button button5">4</button>
            <p>Năm xây dựng & hoạt động</p>
          </div>
          <div class="col-sm-4">
            <button class="button button5">500</button>
            <p>Đơn vị khách hàng</p>
          </div>
          <div class="col-sm-4">
            <button class="button button5">20</button>
            <p>Chứng chỉ dịch vụ</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="main_2">
  <div class="container">
    <div class="row">
      <div class="trapezium">
      </div>
      <div class="square">
      </div>
      <h5><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">NĂNG LỰC SẢN XUẤT</h5>
      <div class="owl-carousel owl-theme">
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/maxresdefault.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/benh-vien-dai-hoc-y-ha-noi.png"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/images1552292_ttxvn2803cach_ly_bach_mai.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/benh-vien-y-hoc-co-truyen-trung-uong.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/maxresdefault.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/benh-vien-dai-hoc-y-ha-noi.png"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/images1552292_ttxvn2803cach_ly_bach_mai.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/benh-vien-y-hoc-co-truyen-trung-uong.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/maxresdefault.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/benh-vien-dai-hoc-y-ha-noi.png"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/images1552292_ttxvn2803cach_ly_bach_mai.jpg"></div>
          <div class="item"><img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/nangluc/benh-vien-y-hoc-co-truyen-trung-uong.jpg"></div>
      </div>
    </div>
      </div>
</section>
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText:[
      "<img src='http://phuchajsc.com.vn/images/small-arrow-left.png' style='width:30px;height:30px;position:absolute;bottom:215px;left:800px;' >",
      "<img src='http://phuchajsc.com.vn/images/small-arrow-right.png' style='width:30px;height:30px;position:absolute;bottom:215px;left:840px;'>"
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  })
</script>


<section class="main_3">
  <div class="container">
    <div class="row">
      <h5><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">SẢN PHẨM VÀ DỊCH VỤ</h5>
      <div class="col-sm-12">
        <p>Tất cả sản phẩm của Phúc Hà sản xuất và cung cấp trên thị trường đều được sản xuất trong môi trường kín, tuân thủ các yêu cầu nghiêm ngặt của ISO 9001:2015, ISO 13485:2016 và đều được Bộ Y Tế cấp giấy chứng nhận lưu hành.</p>
      </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/1.png">
            <p>ÁO, QUẦN, BỘ TRANG PHỤC VKD</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/mu%20ao.png">
            <p>MŨ, KHẨU TRANG, GIẦY PHẪU THUẬT VKD</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/sang%20mo.png">
            <p>BĂNG TAM GIÁC; SĂNG MỔ VKD</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/bang%20cuon.png">
            <p>BĂNG CUỘN</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/bong.png">
            <p>BĂNG ĐẮP MẮT; BÔNG GẠC ĐẮP VẾT THƯƠNG</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/gac.png">
            <p>SẢN PHẨM BỘ/ GÓI LIÊN QUAN VỀ GẠC</p>
          </a>
        </div>
      </div>
    </div>
  </div>
   <div class="container">
    <div class="row">
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/gac%20phau%20thuat.png">
            <p>GẠC MIẾNG; GẠC PHẪU THẬT, GẠC KHÁC</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/30.jpg">
            <p>TẠP DỀ, TẤM TRẢI, TÚI</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/tap%20de.png">
            <p>TẠP DỀ VKD; KTT/TT</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/tam%20bong.png">
            <p>TĂM BÔNG, QUE XÉT NGHIỆM, ĐÈ LƯỠI</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/sp-khac.jpg">
            <p>SẢN PHẨM NHỰA Y TẾ</p>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="">
            <img src="http://phuchajsc.com.vn/storage/photos/1/product/trang%20lhuc%20y%20te.png">
            <p>TRANG PHỤC Y TẾ</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main_4">
  <div class="container">
    <div class="row">
      <h5><img id="icon" src="http://phuchajsc.com.vn/images/double-arrow.png">ĐỐI TÁC CHIẾN LƯỢC</h5>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <a href="">
          <img  src="http://phuchajsc.com.vn/storage/photos/1/doitac/phuc%20ha%20LOGO%20(1).png">
        </a>
      </div>
      <div class="col-sm-8">
        <div class="owl-carousel owl-theme">
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-14-24.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-07-20.png">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-08-12.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/BVTMHTW.png">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-05-34.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-09-51.png">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-11-45.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/BV%20108.gif">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/Logo%20BV%20Huu%20Nghi.jpg">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-09-51.png">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/logo%20benh%20vien%20rang%20ham%20mat%20trung%20uong.jpg.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/Logo%20Khai%20Hoan.jpg">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-14-24.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-07-20.png">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-09-51.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/2017-04-24_9-11-45.png">
            </div>
            <div class="item">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/logo%20benh%20vien%20rang%20ham%20mat%20trung%20uong.jpg.png">
              <img class="demo cursor" src="http://phuchajsc.com.vn/storage/photos/1/doitac/Logo%20Khai%20Hoan.jpg">
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:[
      "<img src='http://phuchajsc.com.vn/images/small-arrow-left.png' style='width:20px;height:20px;position:absolute;top:90px;left:30px;'>",
      "<img src='http://phuchajsc.com.vn/images/small-arrow-right.png' style='width:20px;height:20px;position:absolute;top:90px;right:0px;'>"
    ] ,
    // responsive:{
    //     0:{
    //         items:1
    //     },
    //     600:{
    //         items:3
    //     },
    //     1000:{
    //         items:5
    //     }
    // }
    items:3,
  });
</script>



<section class="main_5">
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
</section>

<script>
  gio();
</script>

<script>
    var d=new Date();
    var thu=["Chủ Nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7"];
    var thang=["1","2","3","4","5","6","7","8","9","10","11","12"];
    document.getElementById("date").innerHTML=thu[d.getDay()] + " ngày " +d.getDate()+" - "+ thang[d.getMonth()]+" - "+d.getFullYear();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

