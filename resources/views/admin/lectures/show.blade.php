@extends('layouts.admin.app')

@section('title') {{$model->name . $title}} @endsection

@section('head')
    <link href="{{asset('admin/vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a class="d-flex align-self-center" href="{{route('lectures.index')}}">
                    <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.99981 12C8.99905 11.8684 9.02428 11.7379 9.07404 11.6161C9.12381 11.4942 9.19713 11.3834 9.28981 11.29L13.2898 7.28999C13.4781 7.10168 13.7335 6.9959 13.9998 6.9959C14.2661 6.9959 14.5215 7.10168 14.7098 7.28999C14.8981 7.47829 15.0039 7.73369 15.0039 7.99999C15.0039 8.26629 14.8981 8.52168 14.7098 8.70999L11.4098 12L14.6998 15.29C14.8636 15.4813 14.9492 15.7274 14.9395 15.979C14.9298 16.2307 14.8255 16.4695 14.6474 16.6475C14.4693 16.8256 14.2305 16.93 13.9789 16.9397C13.7272 16.9494 13.4811 16.8638 13.2898 16.7L9.28981 12.7C9.10507 12.5137 9.00092 12.2623 8.99981 12Z" fill="#374557"/>
                    </svg>
                    {{__('home.Back')}}
                </a>
            </li>

        </ol>
        <div class="row">
            <div class="col-xl-7">
                <div class="card  course-dedails-bx">
                    <div class="card-header border-0 pb-0">
                        <h2>{{$model->name}}</h2>
                    </div>
                    <div class="card-body pt-0">
                        <div class="description">
                            <ul class="d-flex align-items-center raiting flex-wrap">
                                <li><span class="font-w500">{{__('course.course')}}: </span><a href="{{route('courses.show',$model->course->id ?? '')}}">{{$model->course->title ?? ''}}</a> </li>
                                <li><span class="font-w500">{{__('group.group')}}: </span><a href="{{route('groups.edit',$model->group->id ?? '')}}">{{$model->group->name ?? ''}}</a></li>
                            </ul>
                            <div class="user-pic mb-3">
                                <img src="{{$model->instructor->photo ?? ''}}" alt="">
                                <span>{{$model->instructor->name ?? ''}}</span>
                            </div>
                        </div>
                        <div class="course-details-tab style-2">
                            <nav>
                                <div class="nav nav-tabs justify-content-start tab-auto" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">{{__('home.details')}}</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="about-content">
                                        <h4>{{__('lecture.details this lecture')}}</h4>
                                        <p>
                                            {{$model->description}}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="video-img">
                            <div class="view-demo">
                                <img src="{{$model->photo}}" alt="">
                                <div class="play-button text-center">
                                    <a href="#" class="popup-youtube">
                                        <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6154 0C7.41046 0 0 7.41043 0 16.6154V55.3846C0 64.5896 7.41046 72 16.6154 72H55.3846C64.5895 72 72 64.5896 72 55.3846V16.6154C72 7.41043 64.5895 0 55.3846 0H16.6154ZM26.259 19.3846C26.5876 19.3728 26.9098 19.4783 27.1677 19.6821L46.5523 34.9129C47.2551 35.4672 47.2551 36.5328 46.5523 37.0871C40.0921 42.1633 33.6278 47.2366 27.1677 52.3125C26.2575 53.034 24.9168 52.3814 24.9231 51.22V20.7692C24.9226 20.0233 25.5135 19.4141 26.259 19.3846Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <h4>View Demo</h4>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer d-flex border-0 pt-0">
                        <a href="{{$model->pdf}}" target="_blank" download="{{$model->name}}" class="btn btn-outline-light btn-md w-50 me-2">{{__('home.download')}}</a>
                        <a href="{{route('lectures.edit',$model->id)}}" class="btn btn-primary btn-md w-50 ms-2">{{__('home.edit')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Apex Chart -->
    <script src="{{asset('admin/vendor/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
@endsection
