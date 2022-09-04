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
                            <a href="{{route('instructors')}}">{{__('instructor.instructors')}}</a>
                        </div>

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
                            <h1 class="page-header__title">{{__('instructor.all instructors')}}</h1>
                        </div>
                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text">
                                Faculty members are able to devote themselves to doing lectures and supervising exercises for each student, adherence to traditions, <br>
                                values and principles, consolidating and strengthening direct contact with students, maintaining order within the lecture halls
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-20 items-center justify-between pb-30">
                <div class="col-auto">
                    <div class="text-14 lh-12">Showing <span class="text-dark-1 fw-500">{{\App\Models\User::status('active')->type('instructor')->count()}}</span> total instructors</div>
                </div>

{{--                <div class="col-auto">--}}
{{--                    <div class="row x-gap-20 y-gap-20 items-center">--}}
{{--                        <div class="col-auto">--}}
{{--                            <form class="search-field h-50" action="">--}}
{{--                                <input class="bg-light-3 pr-50" type="text" placeholder="Search Instructors">--}}
{{--                                <button class="" type="submit">--}}
{{--                                    <i class="icon-search text-20"></i>--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

            <div class="row y-gap-30">

                @forelse($instructors as $instructor)
                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-left delay-{{$loop->iteration}}" class="teamCard -type-1">
                        <div class="teamCard__image">
                            <img src="{{$instructor->photo}}" alt="{{$instructor->name}}">
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">{{$instructor->name}}</h4>
                            <p class="teamCard__text">  @foreach($instructor->subjects->slice(0,1) as $subject) {{$subject->name}} @endforeach</p>
                            <div class="d-flex x-gap-10 pt-10">
                                <div class="d-flex items-center">
                                    <div class="icon-person-3 text-14"></div>
                                    <div class="text-13 lh-1 ml-8">{{$instructor->groupInstructor->count() . ' ' . __('group.groups')}}</div>
                                </div>

                                <div class="d-flex items-center">
                                    <div class="icon-play text-14"></div>
                                    <div class="text-13 lh-1 ml-8">{{$instructor->courseInstructor->count() . ' ' . __('course.courses')}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">
                        {{__('home.There is no data')}}.
                    </div>
                @endforelse
            </div>
{{--            {{$instructors->links('pagination::simple-default')}}--}}

        </div>
    </section>
@endsection
