<header data-anim="fade" data-add-bg="" class="header -type-4 -shadow bg-white js-header">
    <div class="header__container border-bottom-light py-10">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <div class="header-left d-flex items-center">
                    <div class="header__logo pr-30 xl:pr-20 md:pr-0">
                        <a data-barba href="{{route('home')}}">
                            <img src="{{asset('web/img/general/logo-full.png')}}" alt="اكاديمية علمني | 3lmnia cademy">
                        </a>
                    </div>
                    <div class="header-menu js-mobile-menu-toggle pl-30 xl:pl-20">
                        <div class="header-menu__content">
                            <div class="mobile-bg js-mobile-bg"></div>
                            @guest
                            <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                <a href="{{route('signin')}}" class="text-dark-1">{{__('home.signin')}}</a>
                                <a href="{{route('signup')}}" class="text-dark-1 ml-30">{{__('home.signup')}}</a>
                            </div>
                            @else
                            <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                <a href="{{route('web.profile')}}" class="text-dark-1 ml-30">{{__('user.profile')}}</a>
                            </div>
                            @endguest
                            <div class="menu js-navList">
                                <ul class="menu__nav text-dark-1 -is-active">
                                    <li>
                                        <a href="{{route('home')}}">{{__('home.home')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('courses')}}">{{__('course.courses')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('instructors')}}">{{__('instructor.instructors')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">{{__('home.About')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">{{__('home.Contact')}}</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                <div class="mobile-footer__number">
                                    <div class="text-17 fw-500 text-dark-1">Call us</div>
                                    <div class="text-17 fw-500 text-purple-1">+20 101 6600 240</div>
                                </div>

                                <div class="lh-2 mt-10">
                                    <div>Rashid El-Salon El-Akhdar St.,<br> next to Barghout Mall, in front of Halach Beauty.</div>
                                    <div>3lmniacademy@gmail.com</div>
                                </div>

                                <div class="mobile-socials mt-10">

                                    <a href="https://www.facebook.com/3lmnischool" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="https://wa.me/+201016600240" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <a href="mailto:3lmniacademy@gmail.com?subject=subject&cc=cc@gmail.com" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fab fa-google"></i>
                                    </a>

                                    <a href="tel:+201016600567" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                            <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                                <div class="icon-close text-dark-1 text-16"></div>
                            </div>
                        </div>
                        <div class="header-menu-bg"></div>
                    </div>
                </div>
            </div>


            <div class="col-auto">
                <div class="header-right d-flex items-center">
                    <div class="header-right__icons text-white d-flex items-center">
                        <div class="d-none xl:d-block pl-20 sm:pl-15">
                            <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                                <i class="text-11 icon icon-mobile-menu"></i>
                            </button>
                        </div>
                    </div>
                    @guest
                    <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 lg:d-none">
                        <a href="{{route('signin')}}" class="button -underline text-purple-1">{{__('home.signin')}}</a>
                        <a href="{{route('signup')}}" class="button h-50 px-30 -purple-1 -rounded text-white ml-20">{{__('home.signup')}}</a>
                    </div>
                    @else
                    <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 lg:d-none">
                        <a href="{{ route('logout') }}" class="button -underline text-purple-1"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('home.logout')}}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @if(auth()->user()->userType == 'admin')
                        <a href="{{route('dashboard')}}" class="button h-50 px-30 -purple-1 -rounded text-white ml-20">{{__('home.Dashboard')}}</a>
                        @else
                        <a href="{{route('web.profile')}}" class="button h-50 px-30 -purple-1 -rounded text-white ml-20">{{__('user.profile')}}</a>
                        @endif
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
