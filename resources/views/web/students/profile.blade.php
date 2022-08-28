@extends('layouts.web.app')
@section('style')
    <style>
        .group-card {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .group-card .card-body {
            padding: 12px;
        }
        .group-card .box {
            margin: 10px;
            padding: 20px 10px;
            border-radius: 3px;
            box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
            font-size: 1.3rem;
        }
        .group-card .card-img-top {
            height: 130px;
            background: #31ade3;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 2.2rem;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .group-card .box .value-box {
            font-size: 1.5rem;
        }
        .group-card .box .box-title {
            font-size: 1rem;
        }
        .student-form  input[type="date"],
        .student-form  input[type="tel"] {
            display: block;
            border: 0;
            outline: none;
            width: 100%;
            background-color: transparent;
            border-radius: 8px;
            border: 1px solid #DDDDDD;
            font-size: 15px;
            line-height: 1.5;
            padding: 15px 22px;
            transition: all 0.15s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .form-element {
            width: 250px;
            height: 350px;
            box-shadow:0px 0px 20px 5px rgba(100,100,100,0.1);
        }
        .form-element input {
            display:none;
        }
        .form-element img {
            width: 100%;
            height: 350px;
            object-fit:cover;
        }
        .form-element div {
            position:relative;
            height:40px;
            margin-top:-40px;
            background:rgba(0,0,0,0.5);
            text-align:center;
            line-height:40px;
            font-size:13px;
            color:#f5f5f5;
            font-weight:600;
        }
        .form .grid .form-element div span {
            font-size:40px;
        }
    </style>
@endsection
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
                            <a href="{{route('profile')}}">{{__('user.profile')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-header -type-3">
        <div class="page-header__bg bg-purple-1"></div>
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="page-header__content">
                        <div class="page-header__img">
                            <img src="{{auth()->user()->photo}}" alt="{{auth()->user()->name}}">
                        </div>

                        <div class="page-header__info pt-20">
                            <h1 class="text-30 lh-14 fw-700 text-white">{{auth()->user()->name}}</h1>
                            <div class="text-white">{{auth()->user()->email}}</div>
                            <div class="d-flex x-gap-20 pt-15">

                                <div class="d-flex items-center text-white">
                                    <div class="icon-person-3 mr-10"></div>
                                    <div class="text-13 lh-1">{{$user->groups->count(). ' ' . __('group.groups')}}</div>
                                </div>

                                <div class="d-flex items-center text-white">
                                    <div class="icon-play mr-10"></div>
                                    <div class="text-13 lh-1">{{$user->courseStudent->count() . ' ' . __('course.courses')}}</div>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex items-center mt-30">
                            <div class="d-flex items-center x-gap-15 text-white ml-25">
                                @if(!empty(auth()->user()->facebook))  <a href="https://facebook.com/{{auth()->user()->facebook}}"><i class="fa fa-facebook"></i></a> @endif
                                @if(!empty(auth()->user()->twitter))   <a href="https://twitter.com/{{auth()->user()->twitter}}"><i class="fa fa-twitter"></i></a> @endif
                                @if(!empty(auth()->user()->instagram)) <a href="https://instagram.com/{{auth()->user()->instagram}}"><i class="fa fa-instagram"></i></a> @endif
                                @if(!empty(auth()->user()->linkedin))  <a href="https://linkedin.com/{{auth()->user()->linkedin}}"><i class="fa fa-linkedin"></i></a> @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="tabs -active-purple-2 js-tabs">
                        <div class="tabs__controls d-flex js-tabs-controls">
                            <button class="tabs__button js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button"> {{__('home.Overview')}}</button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-2" type="button"> {{__('course.courses')}} </button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-3" type="button"> {{__('group.groups')}} </button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-4" type="button"> Exams </button>
                            <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-5" type="button"> {{__('user.update profile')}} </button>
                        </div>

                        <div class="tabs__content pt-60 lg:pt-40 js-tabs-content">
                            <div class="tabs__pane -tab-item-1 is-active">
                                <h4 class="text-20">{{__('user.bio')}}</h4>
                                <p class="text-light-1 mt-30"> {{auth()->user()->bio}} </p>
                            </div>

                            <div class="tabs__pane -tab-item-2">
                                <div class="row">
                                    @forelse($user->courseStudent as $course)
                                    <div data-anim="slide-up delay-{{$loop->iteration}}" class="col-md-6">

                                        <a href="javascript:void(0);" class="coursesCard -type-1 rounded-8 shadow-3 bg-white">
                                            <div class="relative">
                                                <div class="coursesCard__image overflow-hidden rounded-top-8">
                                                    <img class="w-1/1" src="{{$course->photo}}" alt="{{$course->title}}">
                                                    <div class="coursesCard__image_overlay rounded-top-8"></div>
                                                </div>
                                                <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-20 pb-15 px-30">


                                                <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{$course->title}}</div>

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
                                                    @foreach($course->courseInstructor->slice(0,1) as $instructor)
                                                        <div class="coursesCard-footer__author">
                                                            <img src="{{$instructor->photo}}" alt="{{$instructor->name}}">
                                                            <div>{{$instructor->name}}</div>
                                                        </div>
                                                    @endforeach

                                                    <div class="coursesCard-footer__price">
                                                        <div>{{$course->discount . ' ' . __('home.le')}}</div>
                                                        <div>{{$course->price . ' ' . __('home.le')}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="tabs__pane -tab-item-3">
                                <div class="row">

                                    @forelse($user->groups as $group)
                                    <div class="col-md-6">
                                        <div class="card group-card text-center">
                                            <div class="card-img-top">{{$group->name}}</div>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="box">
                                                            <p class="value-box">{{$group->students->count()}}</p>
                                                            <i class="fas fa-users"></i>
                                                            <span class="box-title d-block">{{__('student.students')}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="box">
                                                            <p class="value-box">{{$group->level->name ?? ''}}</p>
                                                            <i class="fas fa-location-arrow"></i>
                                                            <span class="box-title d-block">{{__('level.levels')}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="box">
                                                            <p class="value-box">
                                                                @foreach($group->instructor->slice(0,1) as $user) {{$user->name}} @endforeach
                                                            </p>
                                                            <i class="fas fa-user"></i>
                                                            <span class="box-title d-block">{{__('instructor.instructors')}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="box">
                                                            <p class="value-box">{{$group->course->title ?? ''}}</p>
                                                            <i class="fas fa-book-open"></i>
                                                            <span class="box-title d-block">{{__('course.course')}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="tabs__pane -tab-item-4">
                                <div class="accordion -block-2 text-left js-accordion mt-30">

                                    <div class="accordion__item">
                                        <div class="accordion__button py-20 px-30 bg-light-4">
                                            <div class="d-flex items-center">
                                                <div class="accordion__icon">
                                                    <div class="icon" data-feather="chevron-down"></div>
                                                    <div class="icon" data-feather="chevron-up"></div>
                                                </div>
                                                <span class="text-17 fw-500 text-dark-1">Quiz</span>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-30">

                                                    <div class="">
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>

                                                            <div class="">
                                                                <div>Introduction to the User</div>
                                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="">
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>

                                                            <div class="">
                                                                <div>Viewing your prototype on</div>
                                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="">
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>

                                                            <div class="">
                                                                <div>Sharing your design</div>
                                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                                </div>
                                                            </div>
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
                                                <span class="text-17 fw-500 text-dark-1">Exercises</span>
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="accordion__content__inner px-30 py-30">
                                                <div class="y-gap-30">

                                                    <div class="">
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>

                                                            <div class="">
                                                                <div>Introduction to the User</div>
                                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="">
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>

                                                            <div class="">
                                                                <div>Viewing your prototype on</div>
                                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">03:56</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="">
                                                        <div class="d-flex">
                                                            <div class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                                <div class="icon-play text-9"></div>
                                                            </div>

                                                            <div class="">
                                                                <div>Sharing your design</div>
                                                                <div class="d-flex x-gap-20 items-center pt-5">
                                                                    <a href="#" class="text-14 lh-1 text-purple-1 underline">Preview</a>
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
                            </div>
                            <div class="tabs__pane -tab-item-5">
                                <div class="student-form mt-25">
                                    <form action="{{route('web.profile.updateSetting')}}" method="post" class="contact-form row y-gap-30">
                                        @csrf
                                        {{ method_field('patch') }}
                                        <div class="col-md-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.name')}} <span style="color: red">*</span></label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="off" required placeholder="{{__('user.Enter the full name')}}" value="{{Request::old('name') ? Request::old('name') : $user->name}}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.email address')}} <span style="color: red">*</span></label>
                                            <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off" required placeholder="{{__('home.Enter your email')}}" value="{{Request::old('email') ? Request::old('email') : $user->email}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.phone')}}</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" autocomplete="off" required placeholder="{{__('home.Enter a phone number')}}" value="{{Request::old('phone') ? Request::old('phone') : $user->phone}}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.home address')}} <span style="color: red">*</span></label>
                                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" autocomplete="off" placeholder="{{__('home.Enter home address')}}" value="{{Request::old('address') ? Request::old('address') : $user->address}}">
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.date of birthday')}}</label>

                                            <input type="date" name="age" class="form-control @error('age') is-invalid @enderror" value="{{Request::old('age') ? Request::old('age') : $user->age}}">
                                            @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.Postal Code')}} <span style="color: red">*</span></label>
                                            <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" autocomplete="off" placeholder="{{__('home.Enter Postal Code')}}" value="{{Request::old('postal_code') ? Request::old('postal_code') : $user->postal_code}}">
                                            @error('postal_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('city.cities')}}<span style="color: red">*</span></label>
                                            @inject('city','App\Models\City')
                                            {!! Form::select('city_id',$city->pluck('city','id'),Request::old('city_id') ? Request::old('city_id') :  $user->city_id ,[
                                                'class' => 'default-select form-control'. ( $errors->has('city_id') ? ' is-invalid' : '' ),
                                                'placeholder' => __('home.please choose')
                                            ]) !!}
                                            @error('city_id') <div class="invalid-feedback">{{$message}}</div> @enderror

                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.twitter')}}</label>
                                            <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" autocomplete="off" placeholder="{{__('home.username twitter')}}" value="{{Request::old('twitter') ? Request::old('twitter') : $user->twitter}}">
                                            @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.facebook')}}</label>
                                            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" autocomplete="off" placeholder="{{__('home.username facebook')}}" value="{{Request::old('facebook') ? Request::old('facebook') : $user->facebook}}">
                                            @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.instagram')}}</label>
                                            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" autocomplete="off" placeholder="{{__('home.username instagram')}}" value="{{Request::old('instagram') ? Request::old('instagram') : $user->instagram}}">
                                            @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.linkedin')}}</label>
                                            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" autocomplete="off" placeholder="{{__('home.username linkedin')}}" value="{{Request::old('linkedin') ? Request::old('linkedin') : $user->linkedin}}">
                                            @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.whatsApp')}}</label>
                                            <input type="text" class="form-control @error('whatsApp') is-invalid @enderror" name="whatsApp" autocomplete="off" placeholder="{{__('home.Enter a WhatsApp number')}}" value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $user->whatsApp}}">
                                            @error('whatsApp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.telegram')}}</label>
                                            <input type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" autocomplete="off" placeholder="{{__('home.username telegram')}}" value="{{Request::old('telegram') ? Request::old('telegram') : $user->telegram}}">\
                                            @error('telegram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Personal info</label>
                                            <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" placeholder="Text..." rows="7">{{Request::old('bio') ? Request::old('bio') : $user->bio}}</textarea>
                                            @error('bio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-element">
                                                <input type="file" id="file-1" accept="image/*">
                                                <label for="file-1" id="file-1-preview">
                                                    <img src="https://bit.ly/3ubuq5o" alt="">
                                                    <div>
                                                        <span>+</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="button -md -purple-1 text-white">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
@section('js')
    <script>
        function previewBeforeUpload(id){
            document.querySelector("#"+id).addEventListener("change",function(e){
                if(e.target.files.length == 0){
                    return;
                }
                let file = e.target.files[0];
                let url = URL.createObjectURL(file);
                document.querySelector("#"+id+"-preview div").innerText = file.name;
                document.querySelector("#"+id+"-preview img").src = url;
            });
        }
        previewBeforeUpload("file-1");
    </script>
@endsection
