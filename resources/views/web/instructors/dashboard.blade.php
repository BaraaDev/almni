@extends('layouts.web.instructors.app')
@section('style')
    <style>
        .header__logo img {
            width: 60px;
        }
    </style>
@endsection
@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">


            <div class="sidebar -dashboard">

                <div class="sidebar__item -is-active -dark-bg-dark-2">
                    <a href="dshb-dashboard.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                        <i class="text-20 icon-discovery mr-15"></i>
                        Dashboard
                    </a>
                </div>

                <div class="sidebar__item ">
                    <a href="dshb-courses.html" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
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

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
                <div class="row pb-50 mb-10">
                    <div class="col-auto">

                        <h1 class="text-30 lh-12 fw-700">{{__('home.Dashboard')}}</h1>
                        <div class="breadcrumbs mt-10 pt-0 pb-0">
                            <div class="breadcrumbs__content">
                                <div class="breadcrumbs__item">
                                    <a href="{{route('home')}}">{{__('home.home')}}</a>
                                </div>
                                <div class="breadcrumbs__item">
                                    <a href="{{route('web.profile')}}">{{__('user.profile')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="row y-gap-30">
                    <div class="col-xl-9 col-lg-12">
                        <div class="row y-gap-30">

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <div>
                                        <div class="lh-1 fw-500">Total students</div>
                                        <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{$user->courseInstructor->count()}}</div>
                                    </div>

                                    <i class="text-40 icon-graduate-cap text-purple-1"></i>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <div>
                                        <div class="lh-1 fw-500">{{__('group.Total Groups')}}</div>
                                        <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{$user->groupInstructor->count()}}</div>
                                    </div>

                                    <i class="text-40 icon-play-button text-purple-1"></i>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <div>
                                        <div class="lh-1 fw-500">{{__('lecture.Total lectures')}}</div>
                                        <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{$user->lectures->count()}}</div>
                                    </div>
                                    <i class="text-40 icon-graduate-cap text-purple-1"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row y-gap-30 pt-30">
                            <div class="col-12">
                                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                        <h2 class="text-17 lh-1 fw-500">Course overview</h2>
                                    </div>

                                    <div class="py-30 px-30">
                                        <div class="row y-gap-30">

                                            @foreach($user->courseInstructor as $instructor)
                                            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                                                <a href="#">
                                                    <div>
                                                        <img class="rounded-8 w-1/1" src="{{asset('web/img/coursesCards/1.png')}}" alt="image">
                                                    </div>

                                                    <div class="pt-15">
                                                        <div class="d-flex y-gap-10 justify-between items-center">
                                                            <div class="text-14 lh-1">Ali Tufan</div>

                                                            <div class="d-flex items-center">
                                                                <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                                <div class="d-flex x-gap-5 items-center">
                                                                    <i class="icon-star text-9 text-yellow-1"></i>
                                                                    <i class="icon-star text-9 text-yellow-1"></i>
                                                                    <i class="icon-star text-9 text-yellow-1"></i>
                                                                    <i class="icon-star text-9 text-yellow-1"></i>
                                                                    <i class="icon-star text-9 text-yellow-1"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h3 class="text-16 fw-500 lh-15 mt-10">Learn Figma - UI/UX Design Essential Training</h3>

                                                        <div class="progress-bar mt-10">
                                                            <div class="progress-bar__bg bg-light-3"></div>
                                                            <div class="progress-bar__bar bg-purple-1 w-1/5"></div>
                                                        </div>

                                                        <div class="d-flex y-gap-10 justify-between items-center mt-10">
                                                            <div class="text-dark-1">% 20 Completed</div>
                                                            <div>25%</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                            <button class="button mt-20 h-50 px-25 -dark-1 -dark-button-white text-white">See All</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="row y-gap-30">
                            <div class="col-12">
                                <div class="d-flex items-center flex-column text-center py-40 px-40 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <img src="{{asset('web/img/dashboard/demo/1.png')}}" alt="image">
                                    <div class="text-17 fw-500 text-dark-1 mt-20">{{auth()->user()->name}}</div>
                                    <div class="text-14 lh-1 mt-5">{{auth()->user()->email}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer -dashboard py-30">
                <div class="row items-center justify-between">
                    <div class="col-auto">
                        <div class="text-13 lh-1">3lmin © {{date('Y')}}, All Right Reserved.</div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div class="d-flex items-center flex-wrap x-gap-20">
                                <div>
                                    <a href="{{route('help_center')}}" class="text-13 lh-1">{{__('home.Help Center')}}</a>
                                </div>
                                <div>
                                    <a href="{{route('terms')}}" class="text-13 lh-1">{{__('home.Terms')}}</a>
                                </div>
                                <div>
                                    <a href="{{route('about')}}" class="text-13 lh-1">{{__('home.About')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection

@section('aside')

    <aside class="sidebar-menu toggle-element js-msg-toggle js-dsbh-sidebar-menu">
        <div class="sidebar-menu__bg"></div>

        <div class="sidebar-menu__content scroll-bar-1 py-30 px-40 sm:py-25 sm:px-20 bg-white -dark-bg-dark-1">
            <div class="row items-center justify-between mb-30">
                <div class="col-auto">
                    <div class="-sidebar-buttons">
                        <button data-sidebar-menu-button="messages" class="text-17 text-dark-1 fw-500 -is-button-active">
                            Messages
                        </button>

                        <button data-sidebar-menu-button="messages-2" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                            <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                            Messages
                        </button>

                        <button data-sidebar-menu-button="settings" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                            <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                            Settings
                        </button>

                        <button data-sidebar-menu-button="contacts" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                            <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                            Contacts
                        </button>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row x-gap-10">
                        <div class="col-auto">
                            <button data-sidebar-menu-target="settings" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                                <i class="icon-setting text-16"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <button data-sidebar-menu-target="contacts" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                                <i class="icon-friend text-16"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <button data-el-toggle=".js-msg-toggle" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                                <i class="icon-close text-14"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative js-menu-switch">
                <div data-sidebar-menu-open="messages" class="sidebar-menu__item -sidebar-menu -sidebar-menu-opened">
                    <form class="search-field rounded-8 h-50" action="https://creativelayers.net/themes/educrat-html/post">
                        <input class="bg-light-3 pr-50" type="text" placeholder="Search Courses">
                        <button class="" type="submit">
                            <i class="icon-search text-light-1 text-20"></i>
                        </button>
                    </form>

                    <div class="accordion -block text-left pt-20 js-accordion">

                        <div class="accordion__item border-light rounded-16">
                            <div class="accordion__button">
                                <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                                    <div class="icon d-flex items-center justify-center">
                                        <span class="lh-1 fw-500">2</span>
                                    </div>
                                    <div class="icon d-flex items-center justify-center">
                                        <span class="lh-1 fw-500">2</span>
                                    </div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1 pt-3">Starred</span>
                            </div>

                            <div class="accordion__content">
                                <div class="accordion__content__inner pl-20 pr-20 pb-20">
                                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                                        <div class="col-auto">
                                            <img src="{{asset('web/img/dashboard/right-sidebar/messages/1.png')}}" alt="image">
                                        </div>
                                        <div class="col">
                                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                            <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-13 lh-12 pt-8">35 mins</div>
                                        </div>
                                    </div>

                                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                                        <div class="col-auto">
                                            <img src="{{asset('web/img/dashboard/right-sidebar/messages/1.png')}}" alt="image">
                                        </div>
                                        <div class="col">
                                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                            <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-13 lh-12 pt-8">35 mins</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__item border-light rounded-16">
                            <div class="accordion__button">
                                <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                                    <div class="icon d-flex items-center justify-center">
                                        <span class="lh-1 fw-500">2</span>
                                    </div>
                                    <div class="icon d-flex items-center justify-center">
                                        <span class="lh-1 fw-500">2</span>
                                    </div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1 pt-3">Group</span>
                            </div>

                            <div class="accordion__content">
                                <div class="accordion__content__inner pl-20 pr-20 pb-20">
                                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                                        <div class="col-auto">
                                            <img src="{{asset('web/img/dashboard/right-sidebar/messages/1.png')}}" alt="image">
                                        </div>
                                        <div class="col">
                                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                            <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-13 lh-12 pt-8">35 mins</div>
                                        </div>
                                    </div>

                                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                                        <div class="col-auto">
                                            <img src="{{asset('web/img/dashboard/right-sidebar/messages/1.png')}}" alt="image">
                                        </div>
                                        <div class="col">
                                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                            <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-13 lh-12 pt-8">35 mins</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion__item border-light rounded-16">
                            <div class="accordion__button">
                                <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                                    <div class="icon d-flex items-center justify-center">
                                        <span class="lh-1 fw-500">2</span>
                                    </div>
                                    <div class="icon d-flex items-center justify-center">
                                        <span class="lh-1 fw-500">2</span>
                                    </div>
                                </div>
                                <span class="text-17 fw-500 text-dark-1 pt-3">Private</span>
                            </div>

                            <div class="accordion__content">
                                <div class="accordion__content__inner pl-20 pr-20 pb-20">
                                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                                        <div class="col-auto">
                                            <img src="{{asset('web/img/dashboard/right-sidebar/messages/1.png')}}" alt="image">
                                        </div>
                                        <div class="col">
                                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                            <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-13 lh-12 pt-8">35 mins</div>
                                        </div>
                                    </div>

                                    <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                                        <div class="col-auto">
                                            <img src="{{asset('web/img/dashboard/right-sidebar/messages/1.png')}}" alt="image">
                                        </div>
                                        <div class="col">
                                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                            <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-13 lh-12 pt-8">35 mins</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div data-sidebar-menu-open="messages-2" class="sidebar-menu__item -sidebar-menu">
                    <div class="row x-gap-10 y-gap-10">
                        <div class="col-auto">
                            <img src="{{asset('web/img/dashboard/right-sidebar/messages-2/1.png')}}" alt="image">
                        </div>
                        <div class="col">
                            <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Arlene McCoy</div>
                            <div class="text-14 lh-1 mt-5">Active</div>
                        </div>
                    </div>

                    <div class="mt-20 pt-30 border-top-light">
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <div class="row x-gap-10 y-gap-10 items-center">
                                    <div class="col-auto">
                                        <img src="{{asset('web/img/dashboard/right-sidebar/messages-2/2.png')}}" alt="image">
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-15 lh-12 fw-500 text-dark-1">Albert Flores</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-14 lh-1 ml-3">35 mins</div>
                                    </div>
                                </div>
                                <div class="bg-light-3 rounded-8 px-30 py-20 mt-15">
                                    How likely are you to recommend our company to your friends and family?
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row x-gap-10 y-gap-10 items-center justify-end">
                                    <div class="col-auto">
                                        <div class="text-14 lh-1 mr-3">35 mins</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-15 lh-12 fw-500 text-dark-1">You</div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{asset('web/img/dashboard/right-sidebar/messages-2/3.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="text-right bg-light-7 -dark-bg-dark-2 text-purple-1 rounded-8 px-30 py-20 mt-15">
                                    How likely are you to recommend our company to your friends and family?
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row x-gap-10 y-gap-10 items-center">
                                    <div class="col-auto">
                                        <img src="{{asset('web/img/dashboard/right-sidebar/messages-2/3.png')}}" alt="image">
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-15 lh-12 fw-500 text-dark-1">Cameron Williamson</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-14 lh-1 ml-3">35 mins</div>
                                    </div>
                                </div>
                                <div class="bg-light-3 rounded-8 px-30 py-20 mt-15">
                                    Ok, Understood!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-30 pb-20">
                        <form class="contact-form row y-gap-20" action="https://creativelayers.net/themes/educrat-html/post">

                            <div class="col-12">

                                <textarea placeholder="Write a message" rows="7"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="button -md -purple-1 text-white">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div data-sidebar-menu-open="contacts" class="sidebar-menu__item -sidebar-menu">
                    <div class="tabs -pills js-tabs">
                        <div class="tabs__controls d-flex js-tabs-controls">

                            <button class="tabs__button px-15 py-8 rounded-8 text-dark-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">Contacts</button>

                            <button class="tabs__button px-15 py-8 rounded-8 text-dark-1 js-tabs-button " data-tab-target=".-tab-item-2" type="button">Request</button>

                        </div>

                        <div class="tabs__content pt-30 js-tabs-content">

                            <div class="tabs__pane -tab-item-1 is-active">
                                <div class="row x-gap-10 y-gap-10 items-center">
                                    <div class="col-auto">
                                        <img src="{{asset('web/img/dashboard/right-sidebar/contacts/1.png')}}" alt="image">
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-15 lh-12 fw-500 text-dark-1">Darlene Robertson</div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs__pane -tab-item-2 ">
                                <div class="row x-gap-10 y-gap-10 items-center">
                                    <div class="col-auto">
                                        <img src="{{asset('web/img/dashboard/right-sidebar/contacts/1.png')}}" alt="image">
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-15 lh-12 fw-500 text-dark-1">Darlene Robertson</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div data-sidebar-menu-open="settings" class="sidebar-menu__item -sidebar-menu">
                    <div class="text-17 text-dark-1 fw-500">Privacy</div>
                    <div class="text-15 mt-5">You can restrict who can message you</div>
                    <div class="mt-30">

                        <div class="form-radio d-flex items-center ">
                            <div class="radio">
                                <input type="radio">
                                <div class="radio__mark">
                                    <div class="radio__icon"></div>
                                </div>
                            </div>
                            <div class="lh-1 text-13 text-dark-1 ml-12">My contacts only</div>
                        </div>


                        <div class="form-radio d-flex items-center mt-15">
                            <div class="radio">
                                <input type="radio">
                                <div class="radio__mark">
                                    <div class="radio__icon"></div>
                                </div>
                            </div>
                            <div class="lh-1 text-13 text-dark-1 ml-12">My contacts and anyone in my courses</div>
                        </div>


                        <div class="form-radio d-flex items-center mt-15">
                            <div class="radio">
                                <input type="radio">
                                <div class="radio__mark">
                                    <div class="radio__icon"></div>
                                </div>
                            </div>
                            <div class="lh-1 text-13 text-dark-1 ml-12">Anyone on the site</div>
                        </div>

                    </div>

                    <div class="text-17 text-dark-1 fw-500 mt-30 mb-30">Notification preferences</div>
                    <div class="form-switch d-flex items-center">
                        <div class="switch">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                        </div>
                        <div class="text-13 lh-1 text-dark-1 ml-10">Email</div>
                    </div>

                    <div class="text-17 text-dark-1 fw-500 mt-30 mb-30">General</div>
                    <div class="form-switch d-flex items-center">
                        <div class="switch">
                            <input type="checkbox">
                            <span class="switch__slider"></span>
                        </div>
                        <div class="text-13 lh-1 text-dark-1 ml-10">Use enter to send</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection
