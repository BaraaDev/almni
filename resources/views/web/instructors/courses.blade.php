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
                        <h1 class="text-30 lh-12 fw-700">{{__('course.My courses')}}</h1>
                        <div class="mt-10">All courses related to ({{auth()->user()->name ?? ''}}).</div>
                    </div>
                </div>
                <div class="row y-gap-30">
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="tabs -active-purple-2 js-tabs">
                                <div class="tabs__content py-30 px-30 js-tabs-content">
                                    <div class="tabs__pane -tab-item-1 is-active">
                                        <div class="row y-gap-30 pt-30">
                                            @forelse($user->courseInstructor as $course)
                                            <div class="w-1/5 xl:w-1/3 lg:w-1/2 sm:w-1/1">
                                                <div class="relative">
                                                    <img class="rounded-8 w-1/1" src="{{$course->photo}}" alt="{{$course->title}}">
                                                </div>
                                                <div class="pt-15">
                                                    <div class="d-flex y-gap-10 justify-between items-center">
                                                        <div class="text-14 lh-1">{{$course->category->name ?? ''}}</div>
                                                    </div>

                                                    <h3 class="text-16 fw-500 lh-15 mt-10">{{$course->title}}</h3>
                                                </div>
                                            </div>
                                            @empty
                                                <div class="alert alert-danger">
                                                    {{__('home.There is no data')}}.
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
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
