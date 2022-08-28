@extends('layouts.web.instructors.app')
@section('title') {{auth()->user()->name}} @endsection
@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">
            @include('layouts.web.instructors.sidebar')
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
                                        <div class="lh-1 fw-500">{{__('course.total courses')}}</div>
                                        <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{$user->courseInstructor->count()}}</div>
                                    </div>

                                    <i class="text-40 icon-play-button text-purple-1"></i>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <div>
                                        <div class="lh-1 fw-500">{{__('group.Total Groups')}}</div>
                                        <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{$user->groupInstructor->count()}}</div>
                                    </div>

                                    <i class="text-40 icon-graduate-cap text-purple-1"></i>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <div>
                                        <div class="lh-1 fw-500">{{__('lecture.Total lectures')}}</div>
                                        <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{$user->lectures->count()}}</div>
                                    </div>
                                    <i class="text-40 icon-play-button text-purple-1"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row y-gap-30 pt-30">
                            <div class="col-12">
                                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                        <h2 class="text-17 lh-1 fw-500">{{__('course.courses')}}</h2>
                                    </div>

                                    <div class="py-30 px-30">
                                        <div class="row y-gap-30">

                                            @foreach($user->courseInstructor as $course)
                                            <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6">
                                                <a href="#">
                                                    <div>
                                                        <img class="rounded-8 w-1/1" src="{{$course->photo}}" alt="{{$course->title}}">
                                                    </div>

                                                    <div class="pt-15">
                                                        <div class="d-flex y-gap-10 justify-between items-center">
                                                            <div class="text-14 lh-1">{{auth()->user()->name ?? ''}}</div>
                                                        </div>

                                                        <h3 class="text-16 fw-500 lh-15 mt-10">{{$course->title}}</h3>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                            <a href="{{route('web.profile.courses')}}" class="button mt-20 h-50 px-25 -dark-1 -dark-button-white text-white">{{__('home.See All')}}</a>

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

            @include('layouts.web.instructors.footer')
        </div>
    </div>

@endsection

