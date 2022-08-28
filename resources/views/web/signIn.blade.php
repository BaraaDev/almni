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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {!! SEO::generate() !!}
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('web/css/vendors.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/main.css')}}">

</head>

<body class="preloader-visible" data-barba="wrapper">

<!-- preloader start -->
<div class="preloader js-preloader">
    <div class="preloader__bg"></div>
</div>
<!-- preloader end -->

<!-- barba container start -->
<div class="barba-container" data-barba="container">


    <main class="main-content bg-beige-1">


        <div class="content-wrapper  js-content-wrapper">

            <section class="form-page">
                <div class="form-page__img bg-dark-1">
                    <div class="form-page-composition">
                        <div class="-bg"><img data-move="30" class="js-mouse-move" src="{{asset('web/img/login/bg.png')}}" alt="bg"></div>
                        <div class="-el-1"><img data-move="20" class="js-mouse-move" src="{{asset('web/img/home-9/hero/bg.png')}}" alt="image"></div>
                        <div class="-el-2"><img data-move="40" class="js-mouse-move" src="{{asset('web/img/home-9/hero/1.png')}}" alt="icon"></div>
                        <div class="-el-3"><img data-move="40" class="js-mouse-move" src="{{asset('web/img/home-9/hero/2.png')}}" alt="icon"></div>
                        <div class="-el-4"><img data-move="40" class="js-mouse-move" src="{{asset('web/img/home-9/hero/3.png')}}" alt="icon"></div>
                    </div>
                </div>

                <div class="form-page__content lg:py-50">
                    <div class="container">
                        <div class="row justify-center items-center">
                            <div class="col-xl-8 col-lg-9">
                                <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                                    <h3 class="text-30 lh-13">{{__('home.signin')}}</h3>
                                    <p class="mt-10">Subscribe to us now <a href="{{route('signup')}}" class="text-purple-1">{{__('home.signup')}}</a></p>

                                    <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="col-lg-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.email')}}</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email" placeholder="{{__('home.Enter your email')}}" value="{{old('email')}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.password')}}</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password" placeholder="{{__('user.Enter your password')}}" value="{{old('password')}}">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="basic_checkbox_1">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" id="submit" class="button -md -green-1 text-white fw-500 w-1/1">
                                                {{__('home.signin')}}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div> <!-- barba container end -->

<!-- JavaScript -->
<script src="{{asset('web/js/vendors.js')}}"></script>
<script src="{{asset('web/js/main.js')}}"></script>

</body>
</html>
