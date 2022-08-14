<header data-anim="fade" data-add-bg="" class="header -type-4 -shadow bg-white js-header">
    <div class="header__container border-bottom-light py-10">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <div class="header-left d-flex items-center">

                    <div class="header__logo pr-30 xl:pr-20 md:pr-0">
                        <a data-barba href="index.html">
                            <img src="{{asset('web/img/general/logo-full.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="header-menu js-mobile-menu-toggle pl-30 xl:pl-20">
                        <div class="header-menu__content">
                            <div class="mobile-bg js-mobile-bg"></div>
                            <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                <a href="login.html" class="text-dark-1">Log in</a>
                                <a href="signup.html" class="text-dark-1 ml-30">Sign Up</a>
                            </div>
                            <div class="menu js-navList">
                                <ul class="menu__nav text-dark-1 -is-active">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Courses<div class="icon-chevron-right text-11"></div></a>
                                        <ul class="subnav">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i>Courses</a>
                                            </li>
                                            <li>
                                                <a href="courses-list.html">Courses List</a>
                                            </li>
                                            <li>
                                                <a href="all-instructors.html">All Instructors</a>
                                            </li>
                                            <li>
                                                <a href="courses-single.html">Single Course</a>
                                            </li>
                                            <li>
                                                <a href="lesson-single.html">Single Lesson</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="terms.html">Terms</a>
                                    </li>
                                    <li>
                                        <a href="help-center.html">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="become-instructor.html">Become Instructor</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Profile<i class="fas ms-2 fa-user"></i><div class="icon-chevron-right text-11"></div></a>
                                        <ul class="subnav">
                                            <li class="menu__backButton js-nav-list-back">
                                                <a href="#"><i class="icon-chevron-left text-13 mr-10"></i> Profile </a>
                                            </li>
                                            <li>
                                                <a href="student.html">Student</a>
                                            </li>
                                            <li>
                                                <a href="instructor.html">Instructor</a>
                                            </li>
                                        </ul>
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
                        <div class="header-search-field">
                            <form action="#">
                                <div class="header-search-field__group">
                                    <input type="text" placeholder="What do you want to learn?">
                                    <button type="submit">
                                        <i class="icon icon-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>


                        <div class="relative -after-border pl-20 sm:pl-15">
                            <button class="d-flex items-center text-dark-1" data-el-toggle=".js-cart-toggle">
                                <i class="text-20 icon icon-basket"></i>
                            </button>

                            <div class="toggle-element js-cart-toggle">
                                <div class="header-cart bg-white -dark-bg-dark-1 rounded-8">
                                    <div class="px-30 pt-30 pb-10">

                                        <div class="row justify-between x-gap-40 pb-20">
                                            <div class="col">
                                                <div class="row x-gap-10 y-gap-10">
                                                    <div class="col-auto">
                                                        <img src="{{asset('web/img/menus/cart/1.png')}}" alt="image">
                                                    </div>

                                                    <div class="col">
                                                        <div class="text-dark-1 lh-15">The Ultimate Drawing Course Beginner to Advanced...</div>

                                                        <div class="d-flex items-center mt-10">
                                                            <div class="lh-12 fw-500 line-through text-light-1 mr-10">$179</div>
                                                            <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <button><img src="{{asset('web/img/menus/close.svg')}}" alt="icon"></button>
                                            </div>
                                        </div>

                                        <div class="row justify-between x-gap-40 pb-20">
                                            <div class="col">
                                                <div class="row x-gap-10 y-gap-10">
                                                    <div class="col-auto">
                                                        <img src="{{asset('web/img/menus/cart/2.png')}}" alt="image">
                                                    </div>

                                                    <div class="col">
                                                        <div class="text-dark-1 lh-15">User Experience Design Essentials - Adobe XD UI UX...</div>

                                                        <div class="d-flex items-center mt-10">
                                                            <div class="lh-12 fw-500 line-through text-light-1 mr-10">$179</div>
                                                            <div class="text-18 lh-12 fw-500 text-dark-1">$79</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <button><img src="{{asset('web/img/menus/close.svg')}}" alt="icon"></button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="px-30 pt-20 pb-30 border-top-light">
                                        <div class="d-flex justify-between">
                                            <div class="text-18 lh-12 text-dark-1 fw-500">Total:</div>
                                            <div class="text-18 lh-12 text-dark-1 fw-500">$659</div>
                                        </div>

                                        <div class="row x-gap-20 y-gap-10 pt-30">
                                            <div class="col-sm-6">
                                                <button class="button py-20 -dark-1 text-white -dark-button-white col-12">View Cart</button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="button py-20 -purple-1 text-white col-12">Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="d-none xl:d-block pl-20 sm:pl-15">
                            <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                                <i class="text-11 icon icon-mobile-menu"></i>
                            </button>
                        </div>

                    </div>

                    <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 lg:d-none">
                        <a href="login.html" class="button -underline text-purple-1">Log in</a>
                        <a href="signup.html" class="button h-50 px-30 -purple-1 -rounded text-white ml-20">Sign up</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
