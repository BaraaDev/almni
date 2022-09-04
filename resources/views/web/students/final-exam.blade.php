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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('web/css/vendors.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/main.css')}}">

    <title>اختبار نهائي</title>
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


        <header class="header -dashboard -dark-bg-dark-1 js-header">
            <div class="header__container py-20 px-30">
                <div class="row justify-between items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div class="header__logo ml-30 md:ml-20">
                                <a data-barba href="#">
                                    <img src="{{asset('web/img/general/logo-full.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div class="text-white d-flex items-center lg:d-none mr-15">

                                <div class="d-flex items-center sm:d-none">
                                    <div class="relative">
                                        <button class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                            <i class="text-24 icon icon-night"></i>
                                        </button>
                                    </div>

                                    <div class="relative">
                                        <button data-maximize class="d-flex text-light-1 items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                            <i class="text-24 icon icon-maximize"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="content-wrapper js-content-wrapper">
            <div class="dashboard__main">
                <div class="dashboard__content bg-light-4">
                    <div class="row pb-50 mb-10">
                        <div class="col-auto">

                            <h1 class="text-30 lh-12 fw-700">{{__('question.final exam')}}</h1>

                            <div class="breadcrumbs mt-10 pt-0 pb-0">
                                <div class="breadcrumbs__content">
                                    <div class="breadcrumbs__item">
                                        <a href="{{route('home')}}">{{__('home.home')}}</a>
                                    </div>
                                    <div class="breadcrumbs__item">
                                        <a href="{{route('web.profile')}}">{{__('user.profile')}}</a>
                                    </div>
                                    <div class="breadcrumbs__item">
                                        <a href="javascript:void(0);">{{$finalExam->title}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row y-gap-30">
                        <div class="col-xl-12">
                            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4">

                                {!! Form::open(['method' => 'POST', 'route' => ['final-exam.store',$finalExam->id]]) !!}
                                <div class="py-30 px-30">
                                    <?php $i = 1; ?>

                                    @forelse($questions as $question)
                                    @if ($i > 1) <hr /> @endif
                                    <div class="border-light overflow-hidden rounded-8 mb-10">
                                        <div class="py-40 px-40 bg-dark-5">
                                            <div class="d-flex justify-between">
                                                <h4 class="text-18 lh-1 fw-500 text-white">{{__('question.questions') . ' ' . $loop->iteration}}</h4>
                                            </div>
                                            <div class="text-20 lh-1 text-white mt-15">{{$question->question}} ?</div>
                                            <p class="text-10 lh-1 text-white mt-15">{{$question->description}}</p>
                                        </div>

                                        <div class="px-40 py-40">
                                            <div class="mb-30">{{__('question.options')}}:</div>
                                            <input type="hidden" name="questions[{{$i}}]" value="{{ $question->id }}">
                                            @foreach($question->options as $option)
                                            <div class="form-radio d-flex items-center ">
                                                <div class="radio">
                                                    <input type="radio" required id="Q{{$question->id}}-{{$loop->iteration}}" value="{{$option->id}}" name="answers[{{ $question->id }}]">
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <label for="Q{{$question->id}}-{{$loop->iteration}}" class="fw-500 ml-12">{{$loop->iteration . '- ' . $option->option}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                    @empty
                                        <div class="alert alert-danger">
                                            {{__('home.There is no data')}}.
                                        </div>
                                    @endforelse

                                    <div class="d-flex justify-between items-center mt-40">
                                        <button class="button -icon -purple-3 h-50 text-purple-1">{{__('question.answer')}}</button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>

                @include('layouts.web.instructors.footer')
            </div>
        </div>
    </main>
</div>
<!-- barba container end -->

<!-- JavaScript -->
<script src="{{asset('web/js/vendors.js')}}"></script>
<script src="{{asset('web/js/main.js')}}"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/dshb-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 22:22:29 GMT -->
</html>
