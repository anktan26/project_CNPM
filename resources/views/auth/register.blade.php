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
  <link rel="stylesheet" href="tan_1/nvar.css">
  <script src="tan_1\time.js"></script>
  <style>
    
    .login_1 input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    height:10px;
    }
 .login_1 h5{
    margin-left:15px; margin-bottom:0px;

 }
.login_1 button {
    background-color:white;
  padding:0px 0px 0px 0px;
  color: black;
  margin: 8px 0;
  margin-left: 100px;
  border: none;
  cursor: pointer;
  width: 500px;
  height:22px;
  border:1px solid rgb(11, 87, 137);
  font-size:11px;
  
}

.login_1 button:hover {
  opacity: 0.8;
  background-color:rgb(11, 87, 137);
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}
.login_1 .col-sm-8{
    margin-left: 200px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }

}
.main_5 .footer_social{
  position:absolute;
  right:0px;
  top:650px;
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
    top: 660px;
  font-size: 18px;
  color:white;
  width:500px;
}

.login_1 h5{
    color:rgb(11, 87, 137);
}
.login_1 .close{
    
    padding:0px;
    margin:0px;
    width: 17px;

}
.modal-body{
    padding:0px;
    padding-top:5px;
}
.login_1 option{
    font-size:11px;
}

.login_1 option{
    font-size:11px;
}
   
  </style>

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
            <a class="nav-link" href="">
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
                            <a href="#"><img id="img_bar" src="http://phuchajsc.com.vn/images/sub-arrow.png"> ÁO, QUẦN, BỘ TRANG PHỤC VKD</a>
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

    <section class="login_1">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                        <h5><b>ĐĂNG NHẬP MUA HÀNG NGAY !</b></h5>
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>

                        @endif
                        <form action="{{route('auth')}}" method="post">
                        @csrf
                        <div class="container">
                            <label for="uname"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email_lo" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password_lo" required>
                                
                            <button type="submit">ĐĂNG NHẬP</button>
                            <label>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <hr style=" background-color:rgb(11, 87, 137);height:2px;"/>
        <div class="container">
            <div class="row">
                <div class="col-sm-8" style="padding-left: 0px;margin-left: 230px;padding-right: 40px;">
                    <h5 style="margin-left:0px;"><b>THÀNH VIÊN MỚI !</b></h5>
                    <p style="font-size:12px;">Đăng ký ngay để theo dõi tình trạng đơn hàng trực tuyến và giúp bạn đặt hàng dễ dàng hơn trong tương lai. Tại đây, bạn cũng có thể đăng ký chương trình khách hàng thân thiết của chúng tôi cùng lúc . Giao hàng miễn phí cho tất cả các thành viên của Phúc Hà.</p>
                    <button type="button"  style="margin-left: 105px;" data-toggle="modal" data-target="#register">Đăng kí tại đây !</button>
                </div>
            </div>
            <div class="modal fade" id="register">
                        <div class="modal-dialog model-xl">
                            <div class="modal-content" style="padding-left: 10px;padding-right: 10px;">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h5><b>FORM ĐĂNG KÍ CHO KHÁCH HÀNG</b></h5>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>

                                <!-- Modal body -->
                                    <div class="modal-body">
                                    <p style="font-size:11px;">Đăng ký ngay! Tài khoản khách hàng mang lại nhiều lợi thế: thanh toán nhanh chóng và không phức tạp, bạn có thể theo dõi trạng thái đơn hàng trực tuyến, lịch sử đơn hàng của bạn vẫn được lưu trữ và nhiều hơn thế nữa.</p>
                                    <hr style="background-color:rgb(11, 87, 137);height:1px;"/>
                                    </div>
                                    <form action="{{route('register')}}" method="post" name="form_register" id="form_register">
                                       @csrf
                                        <!-- gioi tinh -->
                                        <label style="font-size:11px;margin-bottom:0px;">Giới tính *</label>
                                        <select class="form-control" name="gioitinh" id="gioitinh" style="width:140px;padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                            <option disabled selected>-Chọn</option>
                                            <option>Nữ</option>
                                            <option>Nam</option>
                                        </select>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" placeholder="Tên *" style="width:140px;padding:0px;padding-left:10px;height:30px;margin-top:5px;" >
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="ho" placeholder="Họ *" style="width:140px;padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                            </div>
                                        </div>
                                        <label style="font-size:11px;margin-bottom:0px;">Ngày sinh *</label>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <select class="form-control" id="day" name="day"  style="width:140px;padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                                    <option disabled selected>Ngày</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                    <option>18</option>
                                                    <option>19</option>
                                                    <option>20</option>
                                                    <option>21</option>
                                                    <option>22</option>
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option>25</option>
                                                    <option>26</option>
                                                    <option>27</option>
                                                    <option>28</option>
                                                    <option>29</option>
                                                    <option>30</option>
                                                    <option>31</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="month" name="month" style="width:140px;padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                                    <option disabled selected>Tháng</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="year" id="year"  style="width:140px;padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                                    <option disabled selected>Năm sinh</option>
                                                    <option>	2020	</option>	
                                                    <option>	2019	</option>	
                                                    <option>	2018	</option>	
                                                    <option>	2017	</option>	
                                                    <option>	2016	</option>	
                                                    <option>	2015	</option>	
                                                    <option>	2014	</option>	
                                                    <option>	2013	</option>	
                                                    <option>	2012	</option>	
                                                    <option>	2011	</option>	
                                                    <option>	2010	</option>	
                                                    <option>	2009	</option>	
                                                    <option>	2008	</option>	
                                                    <option>	2007	</option>	
                                                    <option>	2006	</option>	
                                                    <option>	2005	</option>	
                                                    <option>	2004	</option>	
                                                    <option>	2003	</option>	
                                                    <option>	2002	</option>	
                                                    <option>	2001	</option>	
                                                    <option>	2000	</option>	
                                                    <option>	1999	</option>	
                                                    <option>	1998	</option>	
                                                    <option>	1997	</option>	
                                                    <option>	1996	</option>	
                                                    <option>	1995	</option>	
                                                    <option>	1994	</option>	
                                                    <option>	1993	</option>	
                                                    <option>	1992	</option>	
                                                    <option>	1991	</option>	
                                                    <option>	1990	</option>	
                                                    <option>	1989	</option>	
                                                    <option>	1988	</option>	
                                                    <option>	1987	</option>	
                                                    <option>	1986	</option>	
                                                    <option>	1985	</option>	
                                                    <option>	1984	</option>	
                                                    <option>	1983	</option>	
                                                    <option>	1982	</option>	
                                                    <option>	1981	</option>	
                                                    <option>	1980	</option>	
                                                    <option>	1979	</option>	
                                                    <option>	1978	</option>	
                                                    <option>	1977	</option>	
                                                    <option>	1976	</option>	
                                                    <option>	1975	</option>	
                                                    <option>	1974	</option>	
                                                    <option>	1973	</option>	
                                                    <option>	1972	</option>	
                                                    <option>	1971	</option>	
                                                    <option>	1970	</option>	
                                                    <option>	1969	</option>	
                                                    <option>	1968	</option>	
                                                    <option>	1967	</option>	
                                                    <option>	1966	</option>	
                                                    <option>	1965	</option>	
                                                </select>
                                            </div>
                                        </div>
                                        <label style="font-size:11px;margin-bottom:0px;margin-top:5px;">Email*</label>
                                        <br>
                                        <input type="text" name="email" id="email" placeholder="Email *"  style="padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                        <br>
                                        <input type="text" name="email_confirmnation" id="email_confirmnation" placeholder="Email Confirmnation *"  style="padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                        <br>
                                        <label style="font-size:11px;margin-bottom:0px;">Password *</label>
                                        <br>
                                        <input type="password" name="password" id="password" placeholder="Password"  style="padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                        <br>
                                        <input type="password" name="password_confirmnation" id="password_confirmnation" placeholder="Password Confirmnation *"  style="padding:0px;padding-left:10px;height:30px;margin-top:5px;">
                                        <br>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger" >register</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
            </div>
        </div>
    </section>

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
