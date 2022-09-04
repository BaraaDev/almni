@extends('layouts.web.app')

@section('content')
    <section data-anim="fade" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__item">
                            <a href="{{route('home')}}">{{__('home.home')}}</a>
                        </div>

                        <div class="breadcrumbs__item">
                            <a href="{{route('courses')}}">{{__('course.all courses')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">
                            <h1 class="page-header__title">{{__('course.all courses')}}</h1>
                        </div>

                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text">All courses known on the 3lmniAcademy website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            {{--<div data-anim="slide-up delay-1" class="accordion js-accordion">
                <div class="accordion__item">
                    <div class="row y-gap-20 pb-30 items-center justify-between">
                        <div class="col-auto">
                            <div class="text-14 lh-12">Showing <span class="text-dark-1 fw-500">250</span> total results
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-12 fw-500 text-dark-1 mr-20">Sort by:</div>

                                        <div class="dropdown js-dropdown js-category-active">
                                            <div class="dropdown__button d-flex text-14 rounded-8 text-14 lh-12 items-center px-20 py-10"
                                                data-el-toggle=".js-category-toggle"
                                                data-el-toggle-active=".js-category-active">
                                                <span class="js-dropdown-title">Most Popular</span>
                                                <i class="icon text-9 icon-chevron-down ml-40"></i>
                                            </div>

                                            <div
                                                class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">Animation</a>
                                                    </div>

                                                    <div><a href="#" class="d-block js-dropdown-link">Design</a>
                                                    </div>

                                                    <div><a href="#" class="d-block js-dropdown-link">Illustration</a>
                                                    </div>

                                                    <div><a href="#" class="d-block js-dropdown-link">Business</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="accordion__button w-unset">
                                        <button class="button h-50 px-30 -light-7 text-purple-1">
                                            <i class="icon-filter mr-10"></i>
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__content">
                        <div class="sidebar -courses px-30 py-30 rounded-8 bg-light-3 mb-50">
                            <div class="row x-gap-60 y-gap-40">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Category</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Art</div>
                                                <div class="sidebar-checkbox__count">(18)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Exercise</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Software
                                                    Development</div>
                                                <div class="sidebar-checkbox__count">(23)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Music</div>
                                                <div class="sidebar-checkbox__count">(67)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Material Design
                                                </div>
                                                <div class="sidebar-checkbox__count">(34)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Photography</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                        </div>
                                        <div class="sidebar__more mt-15">
                                            <a href="#" class="text-14 fw-500 text-purple-1 underline">Show
                                                more</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Ratings</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title d-flex items-center">
                                                    <div class="d-flex x-gap-5 pr-10">
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    4.5 &amp; up
                                                </div>
                                                <div class="sidebar-checkbox__count">(1991)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title d-flex items-center">
                                                    <div class="d-flex x-gap-5 pr-10">
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    4.0 &amp; up
                                                </div>
                                                <div class="sidebar-checkbox__count">(200)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title d-flex items-center">
                                                    <div class="d-flex x-gap-5 pr-10">
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    3.5 &amp; up
                                                </div>
                                                <div class="sidebar-checkbox__count">(300)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title d-flex items-center">
                                                    <div class="d-flex x-gap-5 pr-10">
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                        <div class="icon-star text-11 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    3.0 &amp; up
                                                </div>
                                                <div class="sidebar-checkbox__count">(500)</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Instructors</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Jane Cooper</div>
                                                <div class="sidebar-checkbox__count">(18)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Jenny Wilson</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Robert Fox</div>
                                                <div class="sidebar-checkbox__count">(23)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Jacob Jones</div>
                                                <div class="sidebar-checkbox__count">(67)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Albert Flores</div>
                                                <div class="sidebar-checkbox__count">(34)</div>
                                            </div>

                                        </div>
                                        <div class="sidebar__more mt-15">
                                            <a href="#" class="text-14 fw-500 text-purple-1 underline">Show
                                                more</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Price</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio-2" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">All</div>
                                                <div class="sidebar-checkbox__count">(18)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio-2" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">Free</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-radio mr-10">
                                                    <div class="radio">
                                                        <input type="radio" name="radio-2" checked="checked">
                                                        <div class="radio__mark">
                                                            <div class="radio__icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">Paid</div>
                                                <div class="sidebar-checkbox__count">(23)</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Level</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">All Levels</div>
                                                <div class="sidebar-checkbox__count">(18)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Beginner</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Intermediate</div>
                                                <div class="sidebar-checkbox__count">(23)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sidebar-checkbox__title">Expert</div>
                                                <div class="sidebar-checkbox__count">(67)</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Languange</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">English</div>
                                                <div class="sidebar-checkbox__count">(18)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">French</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">German</div>
                                                <div class="sidebar-checkbox__count">(23)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">Italian</div>
                                                <div class="sidebar-checkbox__count">(67)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">Turkish</div>
                                                <div class="sidebar-checkbox__count">(34)</div>
                                            </div>

                                        </div>
                                        <div class="sidebar__more mt-15">
                                            <a href="#" class="text-14 fw-500 text-purple-1 underline">Show
                                                more</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="sidebar__item">
                                        <h5 class="sidebar__title">Duration</h5>
                                        <div class="sidebar-checkbox">

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">Less than 3 hours
                                                </div>
                                                <div class="sidebar-checkbox__count">(18)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">4 - 7 hours</div>
                                                <div class="sidebar-checkbox__count">(12)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">8 -18 hours </div>
                                                <div class="sidebar-checkbox__count">(23)</div>
                                            </div>

                                            <div class="sidebar-checkbox__item">
                                                <div class="form-checkbox">
                                                    <input type="checkbox">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sidebar-checkbox__title">20 + Hours</div>
                                                <div class="sidebar-checkbox__count">(67)</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
--}}
                <div class="accordion__item">
                    <div class="row y-gap-20 pb-30 items-center justify-between">
                        <div class="col-auto">
                            <div class="text-14 lh-12">{{__('home.Showing')}} <span class="text-dark-1 fw-500">{{\App\Models\Course::count()}}</span>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row y-gap-30">

                @forelse($courses as $course)
                <div data-anim-child="slide-up delay-{{$loop->iteration}}" class="col-lg-4 col-md-6">
                    <a href="{{route('course',$course->slug)}}" class="coursesCard -type-1 rounded-8 shadow-3 bg-white">
                        <div class="relative">
                            <div class="coursesCard__image rounded-top-8 overflow-hidden">
                                <img class="w-1/1" src="{{$course->photo}}" alt="{{$course->title ?? ''}}">
                                <div class="coursesCard__image_overlay rounded-top-8"></div>
                            </div>
                        </div>

                        <div class="h-100 pb-15 px-30 pt-20">
                            <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{$course->title ?? ''}}</div>
                            <div class="d-flex x-gap-10 items-center pt-10">
                                <div class="d-flex items-center">
                                    <div class="mr-8">
                                        <img src="{{asset('web/img/coursesCards/icons/1.svg')}}" alt="icon">
                                    </div>
                                    <div class="text-14 lh-1">{{$course->lectures->count()}} {{__('lecture.lecture')}}</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="mr-8">
                                        <img src="{{asset('web/img/coursesCards/icons/2.svg')}}" alt="icon">
                                    </div>
                                    <div class="text-14 lh-1">{{$course->course_date}}</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="mr-8">
                                        <img src="{{asset('web/img/coursesCards/icons/3.svg')}}" alt="icon">
                                    </div>
                                    <div class="text-14 lh-1">{{$course->level->level ?? ''}}</div>
                                </div>
                            </div>

                            <div class="coursesCard-footer">
                                @forelse($course->courseInstructor->slice(0,1) as $instructor)
                                    <div class="coursesCard-footer__author">
                                        <img src="{{$instructor->photo}}" alt="{{$instructor->name}}">
                                        <div>{{$instructor->name}}</div>
                                    </div>
                                @empty
                                @endforelse

                                <div class="coursesCard-footer__price">
                                    <div>{{$course->discount . ' ' . __('home.le')}}</div>
                                    <div>{{$course->price . ' ' . __('home.le')}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @empty
                    <div class="alert alert-danger">
                        {{__('home.There is no data')}}.
                    </div>
                @endforelse
            </div>

{{--            <div class="row pt-90 lg:pt-50 justify-center">--}}
{{--                <div class="col-auto">--}}
{{--                    <div class="pagination -buttons">--}}
{{--                        <button class="pagination__button -prev">--}}
{{--                            <i class="icon icon-chevron-left"></i>--}}
{{--                        </button>--}}

{{--                        <div class="pagination__count">--}}
{{--                            <a href="#">1</a>--}}
{{--                            <a class="-count-is-active" href="#">2</a>--}}
{{--                            <a href="#">3</a>--}}
{{--                            <span>...</span>--}}
{{--                            <a href="#">67</a>--}}
{{--                        </div>--}}

{{--                        <button class="pagination__button -next">--}}
{{--                            <i class="icon icon-chevron-right"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
