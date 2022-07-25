@extends('layouts.admin.app')

@section('title') {{$model->title . $title}} @endsection

@section('head')
    <link href="{{asset('admin/vendor/magnific-popup/magnific-popup.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-xxl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="course-content d-flex justify-content-between flex-wrap">
                            <div>
                                <h3>{{$model->title}}</h3>
                                <ul class="d-flex align-items-center raiting my-0 flex-wrap">
                                    <li><span class="font-w500">{{__('category.category')}}: </span>{{$model->category->name ?? ''}}</li>
                                    <li><span class="font-w500">{{__('subject.subject')}}: </span>{{$model->subject->name ?? ''}}</li>
                                    <li><span class="font-w500">{{__('home.date')}}: </span>{{$model->created_at->translatedFormat('M d, Y')}}</li>
                                    <li>10k Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="video-img style-1">
                            <div class="view-demo">
                                <img src="{{$model->photo}}" alt="">
                                <div class="play-button text-center">
                                    <a href="#" class="popup-youtube">
                                        <svg width="96" height="96" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6154 0C7.41046 0 0 7.41043 0 16.6154V55.3846C0 64.5896 7.41046 72 16.6154 72H55.3846C64.5895 72 72 64.5896 72 55.3846V16.6154C72 7.41043 64.5895 0 55.3846 0H16.6154ZM26.259 19.3846C26.5876 19.3728 26.9098 19.4783 27.1677 19.6821L46.5523 34.9129C47.2551 35.4672 47.2551 36.5328 46.5523 37.0871C40.0921 42.1633 33.6278 47.2366 27.1677 52.3125C26.2575 53.034 24.9168 52.3814 24.9231 51.22V20.7692C24.9226 20.0233 25.5135 19.4141 26.259 19.3846Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="course-details-tab style-2 mt-4">
                            <nav>
                                <div class="nav nav-tabs tab-auto" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="true">{{__('home.details')}}</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="about-content">
                                        <h4>{{__('course.details this course')}}</h4>
                                        <p>{{$model->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-5">
                <div class="custome-accordion">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item card">
                            <h2 class="accordion-header border-0" id="headingOne">
                                <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

                                    <span class="acc-heading">{{__('lecture.lectures')}}</span>
                                    <span class="ms-auto">({{$model->lectures->count()}})</span>

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body pt-0">
                                    @forelse($model->lectures as $lecture)
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <span class="acc-icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 13C3.817 13 3.635 12.95 3.474 12.851C3.32918 12.7611 3.20965 12.6358 3.12671 12.4869C3.04378 12.338 3.00016 12.1704 3 12V4C3 3.653 3.18 3.331 3.474 3.149C3.61914 3.05976 3.7846 3.00891 3.95481 3.00121C4.12502 2.99351 4.29439 3.02923 4.447 3.105L12.447 7.105C12.6131 7.1882 12.7528 7.31599 12.8504 7.47405C12.948 7.63212 12.9997 7.81423 12.9997 8C12.9997 8.18578 12.948 8.36789 12.8504 8.52595C12.7528 8.68402 12.6131 8.8118 12.447 8.895L4.447 12.895C4.307 12.965 4.152 13 4 13Z" fill="var(--primary)"/>
                                                    </svg>
                                                </span>
                                                <h4 class="m-0">{{$lecture->name}}</h4>
                                            </div>
                                            <a href="{{route('lectures.edit',$lecture->id)}}"><span>{{__('home.edit')}}</span></a>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                    <span class="acc-heading">{{__('group.groups')}}</span>
                                    <span class="ms-auto">({{$model->groups->count()}})</span>

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body pt-0">
                                    @forelse($model->groups as $group)
                                    <div class="acc-courses">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <h4 class="m-0">{{$group->name}}</h4>
                                            </div>
                                            <a href="{{route('groups.edit',$group->id)}}"><span>{{__('home.edit')}}</span></a>
                                        </div>
                                    </div>
                                    @empty
                                    @endforelse
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
    <!-- Apex Chart -->
    <script src="{{asset('admin/vendor/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
@endsection
