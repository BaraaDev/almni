<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/educrat-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 22:21:36 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('comming-soon/css/vendors.css')}}">
    <link rel="stylesheet" href="{{asset('comming-soon/css/main.css')}}">

    <title>Educrat</title>
</head>

<body class="preloader-visible" data-barba="wrapper">

<!-- preloader start -->
<div class="preloader js-preloader">
    <div class="preloader__bg"></div>
</div>
<!-- preloader end -->

<!-- barba container start -->
<div class="barba-container" data-barba="container">


    <main class="main-contentbg-beige-1">

        <div class="content-wrapper  js-content-wrapper">

            <section class="form-page js-mouse-move-container">
                <div class="form-page__img bg-dark-1">
                    <div class="form-page-composition">
                        <div class="-bg"><img data-move="30" class="js-mouse-move" src="{{asset('comming-soon/img/bg.png')}}" alt="bg"></div>
                        <div class="-el-1"><img data-move="20" class="js-mouse-move" src="{{asset('comming-soon/img/Place.png')}}" alt="image"></div>

                        <div class="-el-4"><img data-move="40" class="js-mouse-move" src="{{asset('comming-soon/img/3.png')}}" alt="icon"></div>
                    </div>
                </div>

                <div class="form-page__content lg:py-50">
                    <div class="container">
                        <div class="row justify-center items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                                    <div class="container">
                                        <img src="{{asset('comming-soon/img/logo-full.png')}}" alt="" style="width: 100px">
                                        <h3 id="headline">Countdown to Lanch 3lmni Acadamy</h3>
                                        <div id="countdown">
                                            <ul>
                                                <li><span id="days"></span>days</li>
                                                <li><span id="hours"></span>Hours</li>
                                                <li><span id="minutes"></span>Minutes</li>
                                                <li><span id="seconds"></span>Seconds</li>
                                            </ul>
                                        </div>
                                        <div id="content" class="emoji">
                                            <span>🥳</span>
                                            <span>🎉</span>
                                            <span><a href="#">Click Here</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </main>
</div>
<!-- barba container end -->
<script>

    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "08/1/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    document.getElementById("headline").innerText = "Go to Site Now";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());
</script>
<!-- JavaScript -->
<script src="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="{{asset('comming-soon/js/vendors.js')}}"></script>
<script src="{{asset('comming-soon/js/main.js')}}"></script>

</body>


</html>
