<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    @include('layouts.web.css')
    <title>@yield('title')</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <div class="barba-container" data-barba="container">
        <main class="main-content">
            <div class="content-wrapper js-content-wrapper">
                <section class="no-page layout-pt-lg layout-pb-lg bg-beige-1">
                    <div class="container">
                        <div class="row y-gap-50 justify-between items-center">
                            <div class="col-lg-6">
                                <div class="no-page__img">
                                    <img src="{{asset('web/img/404/1.svg')}}" alt="image">
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-6">
                                <div class="no-page__content">
                                    <h1 class="no-page__main text-dark-1">
                                        <span class="text-purple-1">@yield('code')</span>
                                    </h1>
                                    <h2 class="text-35 lh-12 mt-5">@yield('message').</h2>

                                    <div class="mt-10">@yield('long_message')</div>
                                    <a href="{{route('home')}}" class="button -md -purple-1 text-white mt-20">{{__('home.Go Back To Homepage')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div><!-- barba container end -->
    @include('layouts.web.js')
</body>
</html>
