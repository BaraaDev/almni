<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('layouts.admin.head')
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->



<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="#" class="brand-logo">
            <img src="{{asset('admin/images/logo-full.png')}}" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
@include('layouts.admin.chat')
<!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
@include('layouts.admin.header')
<!--**********************************
        Header end ti-comment-alt
    ***********************************-->



    <!--**********************************
        Sidebar start
    ***********************************-->
@include('layouts.admin.sidebar')
<!--**********************************
        Sidebar end
    ***********************************-->



    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->

        @yield('content')
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed   by <a href="https://programmerscaffe.com" target="_blank">programmers Caffe</a> 2022</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->


<!--**********************************
Start scripts
***********************************-->
<!-- Required vendors -->
@include('layouts.admin.js')
<!--**********************************
End scripts
***********************************-->
</body>

<!-- Mirrored from getskills.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2022 22:16:16 GMT -->
</html>
