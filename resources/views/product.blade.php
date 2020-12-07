
<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tan_1/Product.css">
  <script src="tan_1/Product.js"></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
</style>
</head>
<body>
    <div>
        @include('nvarbar')
    </div>
    <section class="nav">
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-light">
            <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <i class="fas fa-angle-double-right"></i>
                    <li class="nav-item">
                    <a class="nav-link" href="#">ÁO, QUẦN, BỘ TRANG PHỤC VKD</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- thanh tìm kiếm -->
    <section class="find_product">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="search-container">
                        <form action="">
                            <input type="text" placeholder="tìm kiếm" name="searchProduct" id="searchProduct">
                            <button type="submit" id="search_button" class="rounded"><i class="fa fa-search"><b> tìm kiếm</b></i></button> 
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="dropdown">
                        <select class="listProduct"  onchange="location=options[selectedIndex].value;">
                            <option value="{{route('add-category-product')}}">ÁO, QUẦN, BỘ TRANG PHỤC VKD</option>
                            <option value="{{route('admin')}}">MŨ, KHẨU TRANG, GIẦY PHẪU THUẬT VKD</option>
                            <option value="{{route('login')}}">BĂNG TAM GIÁC; SĂNG MỔ VKD</option>
                            <option value="{{route('admin')}}">BĂNG CUỘN</option>                               
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    <!-- list sản phẩm -->
    <section class="ao-quan">
        <div class="container">
                
                <div class="row">
                @foreach($new_product as $new)
                    <div class="col-sm-6">
                        <a href="">
                            <img src="imgProduct/{{$new->pictureProduct}}">
                            <img id="iconProduct" src="http://phuchajsc.com.vn/images/line2.png">
                            <span>{{$new->nameProduct}}<br><b class="price">{{$new->priceProduct}} ₫</b></span>
                            
                        </a>
                    </div>
                    <!-- <div class="col-sm-6">
                        <a href="">
                            <img src="imgProduct/{{$new->pictureProduct}}">
                            <img id="iconProduct" src="http://phuchajsc.com.vn/images/line2.png">
                            <span>{{$new->nameProduct}}<br><b class="price">{{$new->priceProduct}} ₫</b></span>
                            
                        </a>
                    </div> -->
                @endforeach
                </div>
                <!-- </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="">
                            <img src="http://phuchajsc.com.vn/storage/photos/1/product/2.jpg">
                            <img id="iconProduct" src="http://phuchajsc.com.vn/images/line2.png">
                            <span>Bộ trang phục 7 Khoản<br><b class="price">236.000 ₫</b></span>
                            
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="">
                            <img src="http://phuchajsc.com.vn/storage/photos/1/product/2.jpg">
                            <img id="iconProduct" src="http://phuchajsc.com.vn/images/line2.png">
                            <span>Bộ áo liền quần Full size; KTT/ TT/ TTHT <br><b class="price">236.000 ₫</b></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="">
                            <img src="http://phuchajsc.com.vn/storage/photos/1/product/2.jpg">
                            <img id="iconProduct" src="http://phuchajsc.com.vn/images/line2.png">
                            <span>Bộ trang phục 7 Khoản<br><b class="price">236.000 ₫</b></span>
                            
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="">
                            <img src="http://phuchajsc.com.vn/storage/photos/1/product/2.jpg">
                            <img id="iconProduct" src="http://phuchajsc.com.vn/images/line2.png">
                            <span>Bộ trang phục 7 Khoản<br><b class="price">236.000 ₫</b></span>
                            
                        </a>
                    </div>
                </div>-->
        </div>
    </section>
</body>
</html>