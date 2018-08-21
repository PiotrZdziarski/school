<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Title-->
    <title>@yield('title')</title>

    <!-- SEO Meta-->
    <meta name="description" content="Education theme by EchoTheme">
    <meta name="keywords" content="HTML5 Education theme, responsive HTML5 theme, bootstrap 4, Clean Theme">
    <meta name="author" content="education">

    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
    <link rel="shortcut icon" href="assets/img/favicon/114x114.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/favicon/96x96.png">


    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500;">


    <!-- Icon fonts-->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/fonts/themify-icons/css/themify-icons.css">


    <!--stylesheet-->
    <link rel="stylesheet" href="assets/css/vendors.bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{url('/assets/css/myown.css')}}">

</head>

<body>


{{--<div class="site-search">
    <div class="site-search__close bg-black-0_8"></div>
    <form class="form-site-search" action="#" method="POST">
        <div class="input-group">
            <input type="text" placeholder="Search" class="form-control py-3 border-white" required="">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
            </div>
        </div>
    </form>
</div> <!-- END site-search-->--}}

{{--LEFT SLIDE IN PLAN LEKCJI BUT LOOK DISGUSTING --}}
{{--<div class="wow slideInLeft" style="position: fixed; width: 75px; height: 74px; z-index: 9999999; color: #444444; box-shadow: 0 5px 10px gray; font-family: Montserrat, sans-serif; font-size: 18px; background: #f6f6f6; border-bottom-right-radius: 10px; border-top-right-radius: 10px; left: 0; top: 47.5%; bottom: 52.5%; display: flex; align-items: center; text-align: center; "> Plan Lekcji</div>--}}


@yield('content')





<div class="scroll-top">
    <i class="ti-angle-up"></i>
</div>

<script src="assets/js/vendors.bundle.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>