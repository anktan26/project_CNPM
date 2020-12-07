<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <scrip src="https://code.jquery.com/jquery-latest.js"></scrip>
        <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="backend/sidebar.css">
        <style>
        </style>
    </head>
    <body>
        <section class="side_bar_1">

            <button class="dropdown-btn">DANH MỤC SẢN PHẨM<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-container">
                <a href="{{route('add-category-product')}}">link</a>
                <a href="{{route('all-category-products')}}">link1</a>
            </div>
        </section>
        <script>
             var dropdown = document.getElementsByClassName("dropdown-btn");
             var i;
             for(i = 0; i < dropdown.length; i++){
                 dropdown[i].addEventListener("click", function(){
                     this.classList.toggle("active");
                     var dropdownContent=this.nextElementSibling;
                     if(dropdownContent.style.display==="block"){
                        dropdownContent.style.display="none";
                     }else{
                         dropdownContent.style.display="block";
                     }
                 })
             }  

        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>