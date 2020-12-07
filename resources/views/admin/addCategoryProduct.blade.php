<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <link rel="stylesheet" href="backend/addCategoryProduct.css">
</head>
<body>
@extends('admin/homeAdmin')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h5>THÊM SẢN PHẨM</h5>
            </div>
        </div>
        <form action="{{route('post-add-category-product')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="nameProduct">TÊN SẢN PHẨM</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <input type="text" id="nameProduct" name="nameProduct" placeholder="TÊN SẢN PHẨM">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="pictureProduct">HÌNH ẢNH SẢN PHẨM</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <input type="file" name="pictureProduct" id="pictureProduct" placeholder="HÌNH ẢNH SẢN PHẨM" style="border:none;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="priceProduct">GIÁ</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <input type="number" name="priceProduct" id="priceProduct" placeholder="GIÁ SẢN PHẨM">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="describeProduct">MÔ TẢ SẢN PHẨM</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <textarea name="describeProduct" id="describeProduct" placeholder="MÔ TẢ SẢN PHẨM...">
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                   <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
CKEDITOR.replace('describeProduct', options);
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
$('textarea.describeProduct').ckeditor(options);
</script>
</body>
</html>