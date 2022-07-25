@extends('layouts.admin.app')

@section('title') {{__('course.all courses') . $title}} @endsection

@section('head')
    <link href="{{asset('admin/vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    @section('search')
        <div class="nav-item d-flex align-items-center">
            <form action="" method="get">
                <div class="input-group search-area">
                    <span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--secondary)"/>
                        </svg>
                        </a>
                    </span>

                    <input name="keyword"  value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" type="text" class="form-control" placeholder="Search here...">
                </div>
            </form>
        </div>

    @endsection
    <!-- row -->
    <div class="container-fluid">
        <div class="widget-heading d-flex justify-content-between align-items-center">
            <h3 class="m-0">Popular This Week</h3>
            <a href="{{route('subjects.index')}}" class="btn btn-primary btn-sm">{{__('home.View all')}}</a>
        </div>
        <div class="row">
            <!-- Slider main container -->
            <div class="swiper course-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($subjects as $subject)
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <img src="{{$subject->photo}}" alt="">
                                            <div class="flex-1 ms-3">
                                                <h4>{{$subject->name}}</h4>
                                            </div>
                                        </div>
                                        <a href="{{route('subjects.edit',$subject->id)}}"><i class="las la-angle-right text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="widget-heading d-flex justify-content-between align-items-center">
            <h3 class="m-0">{{__('course.all courses')}}</h3>
        </div>
        <div class="row">
            @forelse($courses as $course)
            <div class="col-xl-4 col-md-6">
                <div class="card all-crs-wid">
                    <div class="card-body">
                        <div class="courses-bx">
                            <div class="dlab-media">
                                <img src="{{$course->photo}}" alt="">
                            </div>
                            <div class="dlab-info">
                                <div class="dlab-title d-flex justify-content-between">
                                    <div>
                                        <h4><a href="{{route('courses.show',$course->id)}}">{{$course->title}}</a></h4>
                                        <p class="m-0">{{$course->category->name ?? ''}}</p>
                                    </div>
                                    <h4 class="text-primary"><span>{{__('home.le')}}</span>{{$course->price}}</h4>
                                </div>
                                <div class="d-flex justify-content-between content align-items-center">
                                    <span>
                                        <svg class="me-1" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2 18.6C20.5 18.5 19.8 18.4 19 18.4C16.5 18.4 14.1 19.1 12 20.5C9.90004 19.2 7.50005 18.4 5.00005 18.4C4.30005 18.4 3.50005 18.5 2.80005 18.6C2.30005 18.7 1.90005 19.2 2.00005 19.8C2.10005 20.4 2.60005 20.7 3.20005 20.6C3.80005 20.5 4.40005 20.4 5.00005 20.4C7.30005 20.4 9.50004 21.1 11.4 22.5C11.7 22.8 12.2 22.8 12.6 22.5C15 20.8 18 20.1 20.8 20.6C21.3 20.7 21.9 20.3 22 19.8C22.1 19.2 21.7 18.7 21.2 18.6ZM21.2 2.59999C20.5 2.49999 19.8 2.39999 19 2.39999C16.5 2.39999 14.1 3.09999 12 4.49999C9.90004 3.09999 7.50005 2.39999 5.00005 2.39999C4.30005 2.39999 3.50005 2.49999 2.80005 2.59999C2.40005 2.59999 2.00005 3.09999 2.00005 3.49999V15.5C2.00005 16.1 2.40005 16.5 3.00005 16.5C3.10005 16.5 3.10005 16.5 3.20005 16.5C3.80005 16.4 4.40005 16.3 5.00005 16.3C7.30005 16.3 9.50004 17 11.4 18.4C11.7 18.7 12.2 18.7 12.6 18.4C15 16.7 18 16 20.8 16.5C21.3 16.6 21.9 16.2 22 15.7C22 15.6 22 15.6 22 15.5V3.49999C22 3.09999 21.6 2.59999 21.2 2.59999Z" fill="#c7c7c7"/>
                                        </svg>
                                        110+ Content
                                    </span>
                                    @can('course-edit')
                                    <a href="{{route('courses.edit',$course->id)}}" class="btn btn-primary btn-sm">{{__('home.edit')}}</a>
                                    @endcan
                                    <a href="{{route('courses.show',$course->id)}}" class="btn btn-warning btn-sm">{{__('home.show')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    <span class="font-weight-semibold">{{__('course.There are no courses')}}</span>.
                </div>
            @endforelse
        </div>
        <div class="pagination-down">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <h4 class="sm-mb-0 mb-3">Showing <span>1-6 </span>from <span>100 </span>data</h4>
                <ul>
                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
                    <li><a href="javascript:void(0);" class="active">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li><a href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/js/dlab.carousel.js')}}"></script>
    <script src="{{asset('admin/vendor/swiper/js/swiper-bundle.min.js')}}"></script>



    <script>
        $(document).ready(function(){
            $(".pagination-down a").on('click',function(){
                $(".pagination-down a").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
@endsection
