@extends('layouts.web.app')

@section('content')
    <section data-anim-wrap class="mainSlider -type-1 js-mainSlider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="{{ asset('web/img/home-2/mainSlider/bg.jpg') }}"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="{{ asset('web/img/home-2/mainSlider/bg2.jpg') }}"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="{{ asset('web/img/home-2/mainSlider/bg3.jpg') }}"></div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="mainSlider__content">
                        <h1 data-anim-child="slide-up delay-3" class="mainSlider__title text-white">
                            Put your kid on the right track with<span class="text-green-1 underline">3lmni</span>
                        </h1>

                        <p data-anim-child="slide-up delay-4" class="mainSlider__text text-white">
                            More than 6.500 online courses
                        </p>

                        <div data-anim-child="slide-up delay-5" class="mainSlider__form">
                            <input type="text" placeholder="What do you want to learn today?">

                            <button class="button -md -purple-1 text-white">
                                <i class="icon icon-search mr-15"></i>
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div data-anim-child="slide-up delay-6" class="row y-gap-20 mainSlider__items justify-center">

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <img src="{{ asset('web/img/home-2/mainSlider/icons/1.svg') }}" alt="icon">
                        <h4 class="text-20 fw-500 lh-18 mt-8 text-white">100,000 online courses</h4>
                        <p class="text-15 text-white">Explore a variety of fresh topics</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <img src="{{ asset('web/img/home-2/mainSlider/icons/2.svg') }}" alt="icon">
                        <h4 class="text-20 fw-500 lh-18 mt-8 text-white">Expert instruction</h4>
                        <p class="text-15 text-white">Find the right instructor for you</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <img src="{{ asset('web/img/home-2/mainSlider/icons/3.svg') }}" alt="icon">
                        <h4 class="text-20 fw-500 lh-18 mt-8 text-white">Lifetime access</h4>
                        <p class="text-15 text-white">Learn on your schedule</p>
                    </div>
                </div>

            </div>
        </div>

        <button
            class="swiper-prev button -white-20 size-60 d-flex js-prev items-center justify-center rounded-full text-white">
            <i class="icon icon-arrow-left text-24"></i>
        </button>

        <button
            class="swiper-next button -white-20 size-60 d-flex js-next items-center justify-center rounded-full text-white">
            <i class="icon icon-arrow-right text-24"></i>
        </button>
    </section>

    <section class="layout-pt-sm layout-pb-sm bg-light-6">
        <div class="container">
            <div class="row y-gap-30 items-center justify-between sm:justify-start">

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex items-center justify-center px-4">
                        <img class="w-1/1" src="{{ asset('web/img/clients/1.svg') }}" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex items-center justify-center px-4">
                        <img class="w-1/1" src="{{ asset('web/img/clients/2.svg') }}" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex items-center justify-center px-4">
                        <img class="w-1/1" src="{{ asset('web/img/clients/3.svg') }}" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex items-center justify-center px-4">
                        <img class="w-1/1" src="{{ asset('web/img/clients/4.svg') }}" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex items-center justify-center px-4">
                        <img class="w-1/1" src="{{ asset('web/img/clients/5.svg') }}" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex items-center justify-center px-4">
                        <img class="w-1/1" src="{{ asset('web/img/clients/6.svg') }}" alt="clients image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">

                            <h1 class="page-header__title">About Us</h1>

                        </div>

                        <div data-anim="slide-up delay-2">

                            <p class="page-header__text">We’re on a mission to deliver engaging, curated courses at a
                                reasonable price.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="layout-pt-md layout-pb-md">
        <div data-anim-wrap class="container">
            <div class="row y-gap-50 items-center justify-between">
                <div class="col-lg-6 pr-50 sm:pr-15">
                    <div class="composition -type-8">
                        <div class="-el-1"><img src="{{ asset('web/img/about-1/1.png') }}" alt="image"></div>
                        <div class="-el-2"><img src="{{ asset('web/img/about-1/2.png') }}" alt="image"></div>
                        <div class="-el-3"><img src="{{ asset('web/img/about-1/3.png') }}" alt="image"></div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <h2 class="text-30 lh-16">Welcome to Elmni Academy Enhance your skills with best Online courses</h2>
                    <p class="text-dark-1 mt-30">You can start and finish one of these popular courses in under a day - for
                        free! Check out the list below.. Take the course for free</p>
                    <p class="pr-50 mt-25 lg:pr-0">Neque convallis a cras semper auctor. Libero id faucibus nisl tincidunt
                        egetnvallis a cras semper auctonvallis a cras semper aucto. Neque convallis a cras semper auctor.
                        Liberoe convallis a cras semper atincidunt egetnval</p>
                    <div class="d-inline-block">
                        <a href="courses-list-1.html" class="button -md -purple-1 mt-30 text-white">Start Learning For
                            Free </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md bg-light-3">
        <div data-anim-wrap class="container">
            <div class="tabs -pills js-tabs">
                <div class="row y-gap-20 items-end justify-between">
                    <div class="col-auto">

                        <div class="sectionTitle">

                            <h2 class="sectionTitle__title">Explore Courses</h2>

                            <p class="sectionTitle__text">10,000+ unique online course list designs</p>

                        </div>

                    </div>

                    <div class="col-auto">
                        <div class="tabs__controls d-flex x-gap-10 js-tabs-controls justify-center">

                            <div>
                                <button class="tabs__button rounded-200 js-tabs-button is-active px-20 py-8"
                                    data-tab-target=".-tab-item-1" type="button">All</button>
                            </div>

                            <div>
                                <button class="tabs__button rounded-200 js-tabs-button px-20 py-8"
                                    data-tab-target=".-tab-item-2" type="button">Trending</button>
                            </div>

                            <div>
                                <button class="tabs__button rounded-200 js-tabs-button px-20 py-8"
                                    data-tab-target=".-tab-item-3" type="button">Popular</button>
                            </div>

                            <div>
                                <button class="tabs__button rounded-200 js-tabs-button px-20 py-8"
                                    data-tab-target=".-tab-item-4" type="button">Fetured</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tabs__content lg:pt-50 js-tabs-content pt-60">

                    <div class="tabs__pane -tab-item-1 is-active">
                        <div class="js-section-slider overflow-hidden" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/1.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/2.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 fw-500 uppercase text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 fw-500 uppercase text-white">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/3.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/4.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/5.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/6.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/7.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/8.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white size-70 shadow-5 js-prev -absolute rounded-full">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white size-70 shadow-5 js-next -absolute rounded-full">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-2">
                        <div class="js-section-slider overflow-hidden" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/1.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/2.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 fw-500 uppercase text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 fw-500 uppercase text-white">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/3.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/4.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/5.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/6.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/7.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/8.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white size-70 shadow-5 js-prev -absolute rounded-full">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white size-70 shadow-5 js-next -absolute rounded-full">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-3">
                        <div class="js-section-slider overflow-hidden" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/1.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/2.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 fw-500 uppercase text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 fw-500 uppercase text-white">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1" src="{{ asset('web/img/coursesCards/3.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/4.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/5.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/6.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/7.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/8.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white size-70 shadow-5 js-prev -absolute rounded-full">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white size-70 shadow-5 js-next -absolute rounded-full">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-4">
                        <div class="js-section-slider overflow-hidden" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/1.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX
                                                    Design Essential Training</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/2.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 fw-500 uppercase text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="px-15 rounded-200 bg-green-1">
                                                            <span class="text-11 lh-1 fw-500 uppercase text-white">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python
                                                    Bootcamp From Zero to Hero in Python</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/3.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete
                                                    Guide (2022 Edition)</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/4.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing
                                                    Course Beginner to Advanced</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/5.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography
                                                    Masterclass: A Complete Guide to Photography</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/6.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing
                                                    2021: Complete Guide To Instagram</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/7.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender
                                                    Creator: Learn 3D Modelling for Beginners</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html" class="coursesCard -type-1">
                                            <div class="relative">
                                                <div class="coursesCard__image rounded-8 overflow-hidden">
                                                    <img class="w-1/1"
                                                        src="{{ asset('web/img/coursesCards/8.png') }}"
                                                        alt="image">
                                                    <div class="coursesCard__image_overlay rounded-8"></div>
                                                </div>
                                                <div class="d-flex absolute-full-center z-3 justify-between py-10 px-10">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                        <div class="icon-star text-9 text-yellow-1"></div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                                </div>

                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial
                                                    Analyst Training &amp; Investing Course</div>

                                                <div class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/1.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/2.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="{{ asset('web/img/coursesCards/icons/3.svg') }}"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner</div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="{{ asset('web/img/general/avatar-1.png') }}"
                                                            alt="image">
                                                        <div>Ali Tufan</div>
                                                    </div>

                                                    <div class="coursesCard-footer__price">
                                                        <div>$179</div>
                                                        <div>$79</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                            </div>


                            <button
                                class="section-slider-nav -prev -dark-bg-dark-2 -white size-70 shadow-5 js-prev -absolute rounded-full">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white size-70 shadow-5 js-next -absolute rounded-full">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-20 items-end justify-between">
                <div class="col-auto">

                    <div class="sectionTitle">

                        <h2 class="sectionTitle__title">Top Categories</h2>

                        <p class="sectionTitle__text">10,000+ unique online course list designs</p>

                    </div>

                </div>

                <div class="col-auto">

                    <a href="#" class="button -icon -purple-3 text-purple-1">
                        All Categories
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                    </a>

                </div>
            </div>

            <div data-anim-wrap class="row y-gap-30 pt-50">

                <div class="col-xl-3 col-md-6" data-anim-child="scale delay-1">
                    <a href="#" class="categoryCard -type-4">
                        <div class="categoryCard__icon bg-light-3">
                            <i class="icon icon-comment"></i>
                        </div>
                        <div class="categoryCard__content mt-10">
                            <h4 class="categoryCard__title text-17 fw-500">Speaking</h4>
                            <div class="categoryCard__text text-13 text-light-1 lh-1 mt-5">573+ Courses</div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6" data-anim-child="scale delay-2">
                    <a href="#" class="categoryCard -type-4">
                        <div class="categoryCard__icon bg-light-3">
                            <i class="icon icon-book"></i>
                        </div>
                        <div class="categoryCard__content mt-10">
                            <h4 class="categoryCard__title text-17 fw-500">Read & Write</h4>
                            <div class="categoryCard__text text-13 text-light-1 lh-1 mt-5">573+ Courses</div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6" data-anim-child="scale delay-3">
                    <a href="#" class="categoryCard -type-4">
                        <div class="categoryCard__icon bg-light-3">
                            <i class="icon icon-list"></i>
                        </div>
                        <div class="categoryCard__content mt-10">
                            <h4 class="categoryCard__title text-17 fw-500">Basics</h4>
                            <div class="categoryCard__text text-13 text-light-1 lh-1 mt-5">573+ Courses</div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6" data-anim-child="scale delay-4">
                    <a href="#" class="categoryCard -type-4">
                        <div class="categoryCard__icon bg-light-3">
                            <i class="icon icon-message"></i>
                        </div>
                        <div class="categoryCard__content mt-10">
                            <h4 class="categoryCard__title text-17 fw-500">Conversation</h4>
                            <div class="categoryCard__text text-13 text-light-1 lh-1 mt-5">573+ Courses</div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-beige-1">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1" class="row y-gap-20 items-center justify-between">
                <div class="col-lg-6">

                    <div class="sectionTitle">

                        <h2 class="sectionTitle__title">Learn from the best instructors</h2>

                        <p class="sectionTitle__text">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

                </div>

                <div class="col-auto">

                    <a href="instructors-list-1.html" class="button -icon -purple-3 -rounded text-purple-1">
                        View All Instructors
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                    </a>

                </div>
            </div>

            <div class="row y-gap-30 pt-50">

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-2" class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="{{ asset('web/img/team/1.png') }}" alt="image">
                            <div class="teamCard__socials">
                                <div class="d-flex x-gap-20 y-gap-10 h-100 items-center justify-center">
                                    <a href="#"><i class="icon-facebook text-white"></i></a>
                                    <a href="#"><i class="icon-twitter text-white"></i></a>
                                    <a href="#"><i class="icon-instagram text-white"></i></a>
                                    <a href="#"><i class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Floyd Miles</h4>
                            <p class="teamCard__text">President of Sales</p>

                            <div class="row y-gap-10 x-gap-10 items-center pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-3" class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="{{ asset('web/img/team/2.png') }}" alt="image">
                            <div class="teamCard__socials">
                                <div class="d-flex x-gap-20 y-gap-10 h-100 items-center justify-center">
                                    <a href="#"><i class="icon-facebook text-white"></i></a>
                                    <a href="#"><i class="icon-twitter text-white"></i></a>
                                    <a href="#"><i class="icon-instagram text-white"></i></a>
                                    <a href="#"><i class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Cameron Williamson</h4>
                            <p class="teamCard__text">Web Designer</p>

                            <div class="row y-gap-10 x-gap-10 items-center pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-4" class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="{{ asset('web/img/team/3.png') }}" alt="image">
                            <div class="teamCard__socials">
                                <div class="d-flex x-gap-20 y-gap-10 h-100 items-center justify-center">
                                    <a href="#"><i class="icon-facebook text-white"></i></a>
                                    <a href="#"><i class="icon-twitter text-white"></i></a>
                                    <a href="#"><i class="icon-instagram text-white"></i></a>
                                    <a href="#"><i class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Brooklyn Simmons</h4>
                            <p class="teamCard__text">Dog Trainer</p>

                            <div class="row y-gap-10 x-gap-10 items-center pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-5" class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="{{ asset('web/img/team/4.png') }}" alt="image">
                            <div class="teamCard__socials">
                                <div class="d-flex x-gap-20 y-gap-10 h-100 items-center justify-center">
                                    <a href="#"><i class="icon-facebook text-white"></i></a>
                                    <a href="#"><i class="icon-twitter text-white"></i></a>
                                    <a href="#"><i class="icon-instagram text-white"></i></a>
                                    <a href="#"><i class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Wade Warren</h4>
                            <p class="teamCard__text">Marketing Coordinator</p>

                            <div class="row y-gap-10 x-gap-10 items-center pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-online-learning text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5"></div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-center pt-60 text-center lg:pt-40">
                <div class="col-auto">
                    <p class="lh-1">Want to help people learn, grow and achieve more in life? <a
                            class="text-purple-1 underline" href="instructors-become.html">Become an instructor</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row justify-center text-center">
                <div class="col-auto">

                    <div class="sectionTitle">

                        <h2 class="sectionTitle__title">What you will found with us?</h2>

                        <p class="sectionTitle__text">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>

                </div>
            </div>

            <div class="row y-gap-30 lg:pt-50 justify-between pt-60">

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 pt-50 px-30 rounded-8 bg-white pb-40 text-center">
                        <div class="coursesCard__image">
                            <img src="{{ asset('web/img/home-5/learning/1.svg') }}" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Learn with Experts</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 pt-50 px-30 rounded-8 bg-white pb-40 text-center">
                        <div class="coursesCard__image">
                            <img src="{{ asset('web/img/home-5/learning/2.svg') }}" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Learn Anything</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 pt-50 px-30 rounded-8 bg-white pb-40 text-center">
                        <div class="coursesCard__image">
                            <img src="{{ asset('web/img/home-5/learning/3.svg') }}" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Flexible Learning</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="coursesCard -type-2 pt-50 px-30 rounded-8 bg-white pb-40 text-center">
                        <div class="coursesCard__image">
                            <img src="{{ asset('web/img/home-5/learning/4.svg') }}" alt="image">
                        </div>
                        <div class="coursesCard__content mt-30">
                            <h5 class="coursesCard__title text-18 lh-1 fw-500">Industrial Standart</h5>
                            <p class="coursesCard__text text-14 mt-10">Grursus mal suada faci lisis that ipsum ameti
                                consecte.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-light-3">
        <div data-anim-wrap class="container">
            <div class="row justify-center text-center">
                <div class="col-auto">

                    <div class="sectionTitle">

                        <h2 class="sectionTitle__title">Simple Pricing</h2>

                        <p class="sectionTitle__text">Lorem ipsum dolor sit amet, consectetur.</p>

                    </div>


                    <div class="d-flex lg:pt-30 items-center justify-center pt-60">
                        <div class="text-14 text-dark-1">Monthly</div>
                        <div class="form-switch px-20">
                            <div class="switch" data-switch=".js-switch-content">
                                <input type="checkbox">
                                <span class="switch__slider"></span>
                            </div>
                        </div>
                        <div class="text-14 text-dark-1">Annually <span class="text-purple-1">Save 30%</span></div>
                    </div>
                </div>
            </div>

            <div data-anim-wrap class="row y-gap-30 lg:pt-50 justify-between pt-60">

                <div class="col-lg-4 col-md-6" data-anim-child="slide-right delay-1">
                    <div class="priceCard -type-1 rounded-16 overflow-hidden">

                        <div class="priceCard__header pl-50 bg-dark-2 py-40">

                            <div class="priceCard__type text-18 lh-11 fw-500 text-white">Basic</div>
                            <div class="priceCard__price text-45 lh-11 fw-700 mt-8 text-white">Free</div>
                            <div class="priceCard__period mt-5 text-white">per month</div>
                        </div>


                        <div class="priceCard__content pt-30 pr-90 pb-50 pl-50 bg-white">


                            <div class="priceCard__text">Standard listing submission, active for 30 dayss</div>


                            <div class="priceCard__list mt-30">

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    All Operating Supported
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    Great Interface
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    Allows encryption
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    Face recognized system
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    24/7 Full support
                                </div>

                            </div>


                            <div class="priceCard__button mt-30">

                                <a class="button -md -purple-3 text-purple-1" href="courses-list-1.html">Get Started
                                    Now</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-anim-child="slide-right delay-2">
                    <div class="priceCard -type-1 rounded-16 overflow-hidden">

                        <div class="priceCard__header pl-50 bg-purple-1 py-40">

                            <div class="priceCard__type text-18 lh-11 fw-500 text-white">Professional</div>
                            <div class="priceCard__price text-45 lh-11 fw-700 mt-8 text-white">$599.95</div>
                            <div class="priceCard__period mt-5 text-white">per month</div>
                        </div>


                        <div class="priceCard__content pt-30 pr-90 pb-50 pl-50 bg-purple-1">


                            <div class="priceCard__text text-white">Standard listing submission, active for 30 dayss</div>


                            <div class="priceCard__list mt-30">

                                <div class="text-white">
                                    <i class="pr-8" data-feather="check"></i>
                                    All Operating Supported
                                </div>

                                <div class="text-white">
                                    <i class="pr-8" data-feather="check"></i>
                                    Great Interface
                                </div>

                                <div class="text-white">
                                    <i class="pr-8" data-feather="check"></i>
                                    Allows encryption
                                </div>

                                <div class="text-white">
                                    <i class="pr-8" data-feather="check"></i>
                                    Face recognized system
                                </div>

                                <div class="text-white">
                                    <i class="pr-8" data-feather="check"></i>
                                    24/7 Full support
                                </div>

                            </div>


                            <div class="priceCard__button mt-30">

                                <a class="button -md -white text-purple-1" href="courses-list-1.html">Get Started
                                    Now</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-anim-child="slide-right delay-3">
                    <div class="priceCard -type-1 rounded-16 overflow-hidden">

                        <div class="priceCard__header pl-50 bg-dark-2 py-40">

                            <div class="priceCard__type text-18 lh-11 fw-500 text-white">Business</div>
                            <div class="priceCard__price text-45 lh-11 fw-700 mt-8 text-white">$999.95</div>
                            <div class="priceCard__period mt-5 text-white">per month</div>
                        </div>


                        <div class="priceCard__content pt-30 pr-90 pb-50 pl-50 bg-white">


                            <div class="priceCard__text">Standard listing submission, active for 30 dayss</div>


                            <div class="priceCard__list mt-30">

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    All Operating Supported
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    Great Interface
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    Allows encryption
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    Face recognized system
                                </div>

                                <div>
                                    <i class="text-purple-1 pr-8" data-feather="check"></i>
                                    24/7 Full support
                                </div>

                            </div>


                            <div class="priceCard__button mt-30">

                                <a class="button -md -purple-3 text-purple-1" href="courses-list-1.html">Get Started
                                    Now</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
        <div data-anim-wrap class="container">
            <div class="row y-gap-20 items-center justify-between">
                <div class="col-xl-6 col-lg-7">
                    <div data-anim-child="slide-up delay-1" class="app-image">
                        <img src="{{ asset('web/img/home-5/apps/img.png') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="app-content">
                        <h2 data-anim-child="slide-up delay-3" class="app-content__title">Learn From<br>
                            <span>Anywhere</span></h2>
                        <p data-anim-child="slide-up delay-4" class="app-content__text">Take classes on the go with the
                            educrat app. Stream or download to watch on the plane, the subway, or wherever you learn best.
                        </p>
                        <div data-anim-child="slide-up delay-5" class="app-content__buttons">
                            <a href="#"><img src="{{ asset('web/img/app/buttons/1.svg') }}"
                                    alt="button"></a>
                            <a href="#"><img src="{{ asset('web/img/app/buttons/2.svg') }}"
                                    alt="button"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-dark-2 relative">
        <div class="side-image pr-25 lg:d-none">
            <img src="{{ asset('web/img/home-5/cta/img.png') }}" alt="image">
        </div>

        <div data-anim-wrap class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-7">

                    <div class="sectionTitle">

                        <h2 class="sectionTitle__title text-white">What is Elmni Academy?</h2>

                        <div class="sectionTitle__text text-white" style="width: 600px; max-width: 90%;">
                            <p>
                                <b>Elmni Academy</b> is the first and oldest academy in the city of Rashid that was
                                established in 2014
                                Basically, the academy aims to teach the student all sciences through understanding, not
                                memorization
                            </p>
                            <br>
                            <h4 class="text-white">Elmni Academy Courses</h4>
                            Available English language courses suitable for all ages and all fields
                        </div>

                    </div>


                    <div class="row x-gap-20 y-gap-20 pt-60 lg:pt-40">
                        <div class="col-auto">
                            <div class="dropdown js-dropdown js-catb-active">
                                <div class="dropdown__button d-flex bg-dark-1 text-14 h-60 items-center text-white"
                                    data-el-toggle=".js-catb-toggle" data-el-toggle-active=".js-catb-active">
                                    <span class="js-dropdown-title">Courses</span>
                                    <i class="icon text-9 icon-chevron-down ml-40"></i>
                                </div>

                                <div
                                    class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-catb-toggle">
                                    <div class="text-14 y-gap-15 js-dropdown-list">
                                        <div><a href="#" class="d-block js-dropdown-link">Pronunciation</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Grammar</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Writing and reading</a>
                                        </div>
                                        <div><a href="#" class="d-block js-dropdown-link">Speaking</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">A special course for the
                                                establishment of children</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Hsebel course to improve
                                                handwriting</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Speaking</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Curriculum for the
                                                different educational levels</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Conversational course
                                                for adults</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">School curriculum for
                                                all ages</a></div>
                                        <div><a href="#" class="d-block js-dropdown-link">Mental arithmetic course
                                                For children from 4 years old to 14 years old</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="dropdown js-dropdown js-diff-active">
                                <div class="dropdown__button d-flex bg-dark-1 text-14 h-60 items-center text-white"
                                    data-el-toggle=".js-diff-toggle" data-el-toggle-active=".js-diff-active">
                                    <span class="js-dropdown-title">Arabic Courses</span>
                                    <i class="icon text-9 icon-chevron-down ml-40"></i>
                                </div>

                                <div
                                    class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-diff-toggle">
                                    <div class="text-14 y-gap-15 js-dropdown-list">
                                        <div><a href="#" class="d-block js-dropdown-link">
                                                Establishing the Arabic language for all ages by the reading method
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <a href="courses-list-1.html" class="button -md -purple-1 text-white">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
