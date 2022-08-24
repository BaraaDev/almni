<footer class="footer -type-1 bg-dark-2">
    <div class="container">
        <div class="footer-header">
            <div class="row y-gap-20 items-center justify-between">
                <div class="col-auto">
                    <div class="footer-header__logo">
                        <img src="{{ asset('web/img/general/logo-full.png') }}" alt="logo">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="footer-header-socials">
                        <div class="footer-header-socials__title text-white">Follow us on social media</div>
                        <div class="footer-header-socials__list">
                            <a href="https://www.facebook.com/3lmnischool"><i class="icon-facebook"></i></a>
                            <a href="https://wa.me/+201016600240"><i class="fab fa-whatsapp"></i></a>
                            <a href="mailto:3lmniacademy@gmail.com?subject=subject&cc=cc@gmail.com"><i
                                    class="fab fa-google"></i></a>
                            <a href="tel:+201016600567"><i class="fas fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-columns">
            <div class="row y-gap-30">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="text-17 fw-500 mb-25 uppercase text-white">{{__('home.About the site')}}</div>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{route('about')}}">{{__('home.About')}}</a>
                        <a href="{{route('contact')}}">{{__('home.Contact')}}</a>
                        <a href="{{route('terms')}}">{{__('home.Terms')}}</a>
                        <a href="{{route('help_center')}}">{{__('home.Help Center')}}</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="text-17 fw-500 mb-25 uppercase text-white">CATEGORIES</div>
                    <div class="row y-gap-20 justify-between">
                        <div class="col-md-6">
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="courses-list.html">Courses</a>
                                <a href="pricing.html">Pricing</a>
                                <a href="all-instructors.html">All Instructors</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="text-17 fw-500 mb-25 uppercase text-white">SUPPORT</div>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="help-center.html">FAQS</a>
                        <a href="contact.html">Contact Us</a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="text-17 fw-500 mb-25 uppercase text-white">GET IN TOUCH</div>
                    <div class="footer-columns-form">
                        <div>We don’t send spam so don’t worry.</div>
                        <form action="https://creativelayers.net/themes/educrat-html/post">
                            <div class="form-group">
                                <input type="text" placeholder="Email...">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-30 border-top-light-15">
            <div class="row y-gap-20 items-center justify-between">
                <div class="col-auto">
                    <div class="d-flex h-100 items-center text-white">
                        3lmin © {{date('Y')}}, All Right Reserved.
                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex x-gap-20 y-gap-20 flex-wrap items-center">
                        <div title="By: Baraa Samy, AbdelRhaman Haridy">
                            <a href="https://programmerscaffe.com" target="_blank" rel="nofollow"
                                class="button px-30 h-50 -purple-1 rounded-200 text-white">
                                Made By Programmers Caffe
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
