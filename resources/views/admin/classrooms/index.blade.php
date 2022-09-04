@extends('layouts.admin.app')

@section('title') {{__('classrooms.all classrooms') . $title}} @endsection

@section('head')
    <link href="{{asset('admin/vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
@endsection

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

@section('content')

<!-- row -->
<div class="container-fluid">


    <div class="row">
        @forelse($classrooms as $classroom)
            <div class="col-xl-4 col-md-6">
                <div class="card all-crs-wid">
                    <div class="card-body">
                        <div class="courses-bx">
                            <div class="dlab-media">
                                <img data-src="{{$classroom->photo}}" class="lazyload" alt="">
                            </div>
                            <div class="dlab-info">
                                <div class="dlab-title d-flex justify-content-between">
                                    <div>
                                        <h4>{{$classroom->name}}</h4>

                                    </div>
                                    <h4 class="@if($classroom->status == 'active') text-primary @elseif($classroom->status == 'stopped') text-danger @endif">{{$classroom->status}}</h4>
                                </div>
                                <div class="d-flex justify-content-between content align-items-center">
                                    @can('classrooms-edit')
                                        <a href="{{route('classrooms.edit',$classroom->id)}}" class="btn btn-primary btn-sm">{{__('home.edit')}}</a>
                                    @endcan
                                    @can('classrooms-delete')
                                        {!! Form::open([
                                          'route' => ['classrooms.destroy',$classroom->id],
                                          'method' => 'delete'
                                        ])!!}
                                            <button href="{{route('classrooms.show',$classroom->id)}}" onclick="return confirm('{{__('home.Are you sure to delete')}}');"  type="submit" class="btn btn-danger btn-sm">{{__('home.delete')}}</button>
                                        {!! Form::close() !!}
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger">
                <span class="font-weight-semibold">{{__('home.There is no data')}}</span>.
            </div>
        @endforelse
    </div>
    {{$classrooms->links('pagination::bootstrap-5')}}
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
