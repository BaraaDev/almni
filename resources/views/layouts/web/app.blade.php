<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/educrat-html/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 22:21:55 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>عlmin</title>
    @include('layouts.web.css')
    @yield('css')

</head>

<body class="preloader-visible" data-barba="wrapper">

    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->

    <!-- barba container start -->
    <div class="barba-container" data-barba="container">


        <main class="main-content">

            @include('layouts.web.header')


            <div class="content-wrapper js-content-wrapper">
                @yield('content')
                @include('layouts.web.footer')
            </div>
        </main>
    </div><!-- barba container end -->

    @include('layouts.web.js')
    @yield('js')

</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/home-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 22:21:57 GMT -->

</html>
