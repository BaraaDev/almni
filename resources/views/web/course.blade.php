@extends('layouts.web.app')

@section('content')

    <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__item ">
                            <a href="{{route('home')}}">{{__('home.home')}}</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="{{route('courses')}}">{{__('course.all courses')}}</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="{{route('course',$course->id)}}">{{$course->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="js-pin-container">
        <section class="page-header -type-5 bg-light-6">
            <div class="page-header__bg">
                <div class="bg-image js-lazy" data-bg="{{asset('web/img/event-single/bg.png')}}"></div>
            </div>

            <div class="container">
                <div class="page-header__content pt-90 pb-90">
                    <div class="row y-gap-30 relative">
                        <div class="col-xl-7 col-lg-8">
                            <div class="d-flex x-gap-15 y-gap-10 pb-20">
                                <div>
                                    <div class="badge px-15 py-8 text-11 bg-green-1 text-white fw-400">BEST SELLER</div>
                                </div>
                                <div>
                                    <div class="badge px-15 py-8 text-11 bg-orange-1 text-white fw-400">NEW</div>
                                </div>
                                <div>
                                    <div class="badge px-15 py-8 text-11 bg-purple-1 text-white fw-400">POPULAR</div>
                                </div>
                            </div>

                            <div data-anim="slide-up delay-1">
                                <h1 class="text-30 lh-14 pr-60 lg:pr-0">{{$course->title ?? ''}}</h1>
                            </div>

                            <p class="col-xl-9 mt-20">{!! $course->short_description !!}</p>

                            <div class="d-flex x-gap-30 y-gap-10 items-center flex-wrap pt-20">
                                <div class="d-flex items-center text-light-1">
                                    <div class="icon icon-person-3 text-13"></div>
                                    <div class="text-14 ml-8">853 enrolled on this course</div>
                                </div>

                                <div class="d-flex items-center text-light-1">
                                    <div class="icon icon-wall-clock text-13"></div>
                                    <div class="text-14 ml-8">{{ $course->updated_at->format('m/Y')}}</div>
                                </div>

                            </div>


                            <div class="d-flex items-center pt-20">
                                <div class="bg-image size-30 rounded-full js-lazy" data-bg="{{asset('web/img/avatars/small-1.png')}}"></div>
                                <div class="text-14 lh-1 ml-10">Ali Tufan</div>
                            </div>

                        </div>

                        <div class="courses-single-info js-pin-content">
                            <div class="bg-white shadow-2 rounded-8 border-light py-10 px-10">
                                <div class="relative">
                                    <img class="w-1/1" src="{{$course->photo}}" alt="{{$course->title}}">
                                    <div class="absolute-full-center d-flex justify-center items-center">
                                        <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY" class="d-flex justify-center items-center size-60 rounded-full bg-white js-gallery" data-gallery="gallery1">
                                            <div class="icon-play text-18"></div>
                                        </a>
                                    </div>
                                </div>

                                <div class="courses-single-info__content scroll-bar-1 pt-30 pb-20 px-20">
                                    <div class="d-flex justify-between items-center mb-30">
                                        <div class="text-24 lh-1 text-dark-1 fw-500">{{$course->price . ' ' . __('home.le')}}</div>
                                        <div class="lh-1 line-through">{{$course->discount . ' ' . __('home.le')}}</div>
                                    </div>

{{--                                    <button class="button -md -outline-dark-1 text-dark-1 w-1/1 mt-10">Buy Now</button>--}}

                                    <div class="text-14 lh-1 text-center mt-30">30-Day Money-Back Guarantee</div>

                                    <div class="mt-25">

                                        <div class="d-flex justify-between py-8 ">
                                            <div class="d-flex items-center text-dark-1">
                                                <div class="icon-video-file"></div>
                                                <div class="ml-10">{{__('lecture.lectures')}}</div>
                                            </div>
                                            <div>{{$course->lectures->count()}}</div>
                                        </div>

                                        <div class="d-flex justify-between py-8 border-top-light">
                                            <div class="d-flex items-center text-dark-1">
                                                <div class="icon-clock-2"></div>
                                                <div class="ml-10">{{__('course.Course Date')}}</div>
                                            </div>
                                            <div>{{$course->course_date}}</div>
                                        </div>

                                        <div class="d-flex justify-between py-8 border-top-light">
                                            <div class="d-flex items-center text-dark-1">
                                                <div class="icon-clock-2"></div>
                                                <div class="ml-10">{{__('category.categories')}}</div>
                                            </div>
                                            <div>{{$course->category->name ?? ''}}</div>
                                        </div>

                                        <div class="d-flex justify-between py-8 border-top-light">
                                            <div class="d-flex items-center text-dark-1">
                                                <div class="icon-bar-chart-2"></div>
                                                <div class="ml-10">{{__('level.levels')}}</div>
                                            </div>
                                            <div>{{$course->level->level ?? ''}}</div>
                                        </div>

                                        <div class="d-flex justify-between py-8 border-top-light">
                                            <div class="d-flex items-center text-dark-1">
                                                <div class="icon-translate"></div>
                                                <div class="ml-10">{{__('subject.subjects')}}</div>
                                            </div>
                                            <div>{{$course->subject->name ?? ''}}</div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-center pt-15">

                                        <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                            <i class="fa fa-facebook"></i>
                                        </a>

                                        <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                            <i class="fa fa-instagram"></i>
                                        </a>

                                        <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                            <i class="fa fa-linkedin"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="page-nav-menu -line">
                            <div class="d-flex x-gap-30">
                                <div><a href="#overview" class="pb-12 page-nav-menu__link js-scroll-to-id is-active">{{__('home.overview')}}</a></div>
                                <div><a href="#course-content" class="pb-12 page-nav-menu__link js-scroll-to-id">{{__('home.Course Content')}}</a></div>
                                <div><a href="#instructors" class="pb-12 page-nav-menu__link js-scroll-to-id">{{__('instructor.instructors')}}</a></div>
                            </div>
                        </div>

                        <div id="overview" class="pt-60 lg:pt-40 to-over">
                            <h4 class="text-18 fw-500">{{__('home.description')}}</h4>

                            <div class="show-more mt-30 js-show-more">
                                <div class="show-more__content">
                                    <p class="">
                                      {!! $course->description !!}
                                    </p>
                                </div>

                                <button class="show-more__button text-purple-1 fw-500 underline mt-30">{{__('home.Show more')}}</button>
                            </div>

                        </div>

                        <div id="course-content" class="pt-60 lg:pt-40">
                            <h2 class="text-20 fw-500">{{__('home.Course Content')}}</h2>

                            <div class="d-flex justify-between items-center mt-30">
                                <div class="">27 sections • 95 lectures</div>
                                <a href="#" class="underline text-purple-1">Expand All Sections</a>
                            </div>

                            <div class="mt-10">
                                <div class="accordion -block-2 text-left js-accordion">

                                    <div class="accordion__item">
                                        <div class="accordion__button py-20 px-30 bg-light-4">
                                            <div class="d-flex items-center">
                                                <div class="accordion__icon">
                                                    <div class="icon" data-feather="chevron-down"></div>
                                                    <div class="icon" data-feather="chevron-up"></div>
                                                </div>
                                                <span class="text-17 fw-500 text-dark-1">Course Content</span>
                                            </div>

                                            <div>5 lectures • 87 min</div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-20">

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Introduction to the User Experience Course</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Getting started with your Adobe XD project</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>What is UI vs UX - User Interface vs User Experience vs Product Designer</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Wireframing (low fidelity) in Adobe XD</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Viewing your prototype on a mobile device</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Sharing your design</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button py-20 px-30 bg-light-4">
                                            <div class="d-flex items-center">
                                                <div class="accordion__icon">
                                                    <div class="icon" data-feather="chevron-down"></div>
                                                    <div class="icon" data-feather="chevron-up"></div>
                                                </div>
                                                <span class="text-17 fw-500 text-dark-1">The Brief</span>
                                            </div>

                                            <div>5 lectures • 87 min</div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-20">

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Introduction to the User Experience Course</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Getting started with your Adobe XD project</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>What is UI vs UX - User Interface vs User Experience vs Product Designer</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Wireframing (low fidelity) in Adobe XD</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Viewing your prototype on a mobile device</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Sharing your design</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button py-20 px-30 bg-light-4">
                                            <div class="d-flex items-center">
                                                <div class="accordion__icon">
                                                    <div class="icon" data-feather="chevron-down"></div>
                                                    <div class="icon" data-feather="chevron-up"></div>
                                                </div>
                                                <span class="text-17 fw-500 text-dark-1">Type, Color &amp; Icon Introduction</span>
                                            </div>

                                            <div>5 lectures • 87 min</div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-20">

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Introduction to the User Experience Course</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Getting started with your Adobe XD project</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>What is UI vs UX - User Interface vs User Experience vs Product Designer</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Wireframing (low fidelity) in Adobe XD</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Viewing your prototype on a mobile device</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Sharing your design</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button py-20 px-30 bg-light-4">
                                            <div class="d-flex items-center">
                                                <div class="accordion__icon">
                                                    <div class="icon" data-feather="chevron-down"></div>
                                                    <div class="icon" data-feather="chevron-up"></div>
                                                </div>
                                                <span class="text-17 fw-500 text-dark-1">Prototyping a App - Introduction</span>
                                            </div>

                                            <div>5 lectures • 87 min</div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-20">

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Introduction to the User Experience Course</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Getting started with your Adobe XD project</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>What is UI vs UX - User Interface vs User Experience vs Product Designer</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Wireframing (low fidelity) in Adobe XD</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Viewing your prototype on a mobile device</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Sharing your design</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <div class="accordion__button py-20 px-30 bg-light-4">
                                            <div class="d-flex items-center">
                                                <div class="accordion__icon">
                                                    <div class="icon" data-feather="chevron-down"></div>
                                                    <div class="icon" data-feather="chevron-up"></div>
                                                </div>
                                                <span class="text-17 fw-500 text-dark-1">Wireframe Feedback</span>
                                            </div>

                                            <div>5 lectures • 87 min</div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-20">

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Introduction to the User Experience Course</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Getting started with your Adobe XD project</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>What is UI vs UX - User Interface vs User Experience vs Product Designer</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Wireframing (low fidelity) in Adobe XD</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Viewing your prototype on a mobile device</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex justify-between">
                                                        <div class="d-flex items-center">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>
                                                            <div>Sharing your design</div>
                                                        </div>

                                                        <div class="d-flex x-gap-20 items-center">
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">5 question</a>
                                                            <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="instructors" class="pt-60 lg:pt-40">
                            <h2 class="text-20 fw-500">{{__('instructor.instructors')}}</h2>

                            <div class="mt-30">
                                <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                                    <div class="size-120">
                                        <img class="object-cover" src="{{asset('web/img/misc/verified/1.png')}}" alt="image">
                                    </div>

                                    <div class="">
                                        <h5 class="text-17 lh-14 fw-500">Floyd Miles</h5>
                                        <p class="mt-5">President of Sales</p>

                                        <div class="d-flex x-gap-20 y-gap-10 flex-wrap items-center pt-10">
                                            <div class="d-flex items-center">
                                                <div class="d-flex items-center mr-8">
                                                    <div class="icon-star text-11 text-yellow-1"></div>
                                                    <div class="text-14 lh-12 text-yellow-1 ml-5">4.5</div>
                                                </div>
                                                <div class="text-13 lh-1">Instructor Rating</div>
                                            </div>

                                            <div class="d-flex items-center text-light-1">
                                                <div class="icon-comment text-13 mr-8"></div>
                                                <div class="text-13 lh-1">23,987 Reviews</div>
                                            </div>

                                            <div class="d-flex items-center text-light-1">
                                                <div class="icon-person-3 text-13 mr-8"></div>
                                                <div class="text-13 lh-1">692 Students</div>
                                            </div>

                                            <div class="d-flex items-center text-light-1">
                                                <div class="icon-wall-clock text-13 mr-8"></div>
                                                <div class="text-13 lh-1">15 Course</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <p>
                                        Back in 2010, I started brainspin with a desire to design compelling and engaging apps. For over 7 years, I have designed many high profile web and iPhone applications. The applications range from 3D medical aided web applications to project management applications for niche industries.
                                        <br><br>
                                        I am also the founder of a large local design organization, Salt Lake Designers, where I and other local influencers help cultivate the talents of up and coming UX designers through workshops and panel discussions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="sectionTitle ">
                        <h2 class="sectionTitle__title ">Courses you may like</h2>
                        <p class="sectionTitle__text ">{{numtoks(\App\Models\Course::status('active')->count())}}+ courses in the academy almni</p>
                    </div>
                </div>
            </div>

            <div class="relative pt-60 lg:pt-50">
                <div class="overflow-hidden js-section-slider" data-gap="30" data-loop data-pagination data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2">
                    <div class="swiper-wrapper">
                        @forelse($courses as $course)
                        <div data-anim-child="slide-up delay-{{$loop->iteration}}" class="swiper-slide">
                            <a href="{{route('course',$course->slug)}}" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="{{$course->photo}}" alt="{{$course->title}}">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">
{{--                                        <div>--}}
{{--                                            <div class="px-15 rounded-200 bg-purple-1">--}}
{{--                                                <span class="text-11 lh-1 uppercase fw-500 text-white">{{$course->category->name ?? ''}}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div>
                                            <div class="px-15 rounded-200 bg-green-1">
                                                <span class="text-11 lh-1 uppercase fw-500 text-white">{{$course->subject->name ?? ''}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{$course->title}}</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="{{asset('web/img/coursesCards/icons/1.svg')}}" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">{{$course->lectures->count() . ' ' . __('lecture.lectures')}}</div>
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
                                            <div>{{$course->discount}}</div>
                                            <div>{{$course->price}}</div>
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
                </div>


                <button class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-prev">
                    <i class="icon icon-arrow-left text-24"></i>
                </button>

                <button class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-next">
                    <i class="icon icon-arrow-right text-24"></i>
                </button>

            </div>
        </div>
    </section>
@endsection
