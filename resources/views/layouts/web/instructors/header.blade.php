<header class="header -dashboard -dark-bg-dark-1 js-header">
    <div class="header__container py-20 px-30">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="header__explore text-dark-1">
                        <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                            <i class="icon -dark-text-white icon-explore"></i>
                        </button>
                    </div>

                    <div class="header__logo ml-30 md:ml-20">
                        <a data-barba href="index-2.html">
                            <img class="-light-d-none" src="{{asset('web/img/general/logo-full.png')}}"  alt="logo">
                            <img class="-dark-d-none" src="{{asset('web/img/general/logo-full.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="text-white d-flex items-center lg:d-none mr-15">
                        <div class="dropdown bg-transparent px-0 py-0">
                            <div class="d-flex items-center text-14 text-dark-1">
                                All Pages <i class="text-9 icon-chevron-down ml-10"></i>
                            </div>
                            <div class="dropdown__item -dark-bg-dark-2 -dark-border-white-10">
                                <div class="text-14 y-gap-15">
                                    <div><a href="dshb-dashboard.html" class="d-block text-dark-1">Dashboard</a></div>
                                    <div><a href="dshb-courses.html" class="d-block text-dark-1">My Courses</a></div>
                                    <div><a href="dshb-tasks.html" class="d-block text-dark-1">Tasks</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

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

                        <div class="relative">
                            <a href="#" class="d-flex items-center text-light-1 justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-msg-toggle">
                                <i class="text-24 icon icon-email"></i>
                            </a>
                        </div>

                        <div class="relative">
                            <a href="#" class="d-flex items-center text-light-1 justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-notif-toggle">
                                <i class="text-24 icon icon-notification"></i>
                            </a>

                            <div class="toggle-element js-notif-toggle">
                                <div class="toggle-bottom -notifications bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                                    <div class="py-30 px-30">
                                        <div class="y-gap-40">

                                            <div class="d-flex items-center ">
                                                <div class="shrink-0">
                                                    <img src="{{asset('web/img/dashboard/actions/1.png')}}" alt="image">
                                                </div>
                                                <div class="ml-12">
                                                    <h4 class="text-15 lh-1 fw-500">Your resume updated!</h4>
                                                    <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                                                </div>
                                            </div>

                                            <div class="d-flex items-center border-top-light">
                                                <div class="shrink-0">
                                                    <img src="{{asset('web/img/dashboard/actions/2.png')}}" alt="image">
                                                </div>
                                                <div class="ml-12">
                                                    <h4 class="text-15 lh-1 fw-500">You changed password</h4>
                                                    <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                                                </div>
                                            </div>

                                            <div class="d-flex items-center border-top-light">
                                                <div class="shrink-0">
                                                    <img src="{{asset('web/img/dashboard/actions/3.png')}}" alt="image">
                                                </div>
                                                <div class="ml-12">
                                                    <h4 class="text-15 lh-1 fw-500">Your account has been created successfully</h4>
                                                    <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                                                </div>
                                            </div>

                                            <div class="d-flex items-center border-top-light">
                                                <div class="shrink-0">
                                                    <img src="{{asset('web/img/dashboard/actions/4.png')}}" alt="image">
                                                </div>
                                                <div class="ml-12">
                                                    <h4 class="text-15 lh-1 fw-500">You applied for a job Front-end Developer</h4>
                                                    <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                                                </div>
                                            </div>

                                            <div class="d-flex items-center border-top-light">
                                                <div class="shrink-0">
                                                    <img src="{{asset('web/img/dashboard/actions/5.png')}}" alt="image">
                                                </div>
                                                <div class="ml-12">
                                                    <h4 class="text-15 lh-1 fw-500">Your course uploaded successfully</h4>
                                                    <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative d-flex items-center ml-10">
                        <a href="#" data-el-toggle=".js-profile-toggle">
                            <img class="size-50" src="{{asset('web/img/misc/user-profile.png')}}" alt="image">
                        </a>

                        <div class="toggle-element js-profile-toggle">
                            <div class="toggle-bottom -profile bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                                <div class="px-30 py-30">

                                    <div class="sidebar -dashboard">

                                        <div class="sidebar__item -is-active -dark-bg-dark-2">
                                            <a href="dshb-dashboard.html" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                                <i class="text-20 icon-discovery mr-15"></i>
                                                Dashboard
                                            </a>
                                        </div>

                                        <div class="sidebar__item ">
                                            <a href="dshb-courses.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                <i class="text-20 icon-play-button mr-15"></i>
                                                My Courses
                                            </a>
                                        </div>

                                        <div class="sidebar__item ">
                                            <a href="dshb-tasks.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                <i class="text-20 icon-bookmark mr-15"></i>
                                                Tasks
                                            </a>
                                        </div>

                                        <div class="sidebar__item ">
                                            <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                <i class="text-20 icon-power mr-15"></i>
                                                Logout
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
