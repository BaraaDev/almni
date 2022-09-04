@extends('layouts.admin.app')

@section('title') {{__('subject.all subjects') . $title}} @endsection

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
            <!-- Slider main container -->
            <div class="swiper course-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slides -->
                    @forelse($subjects as $subject)
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <img data-src="{{$subject->photo}}" class="lazyload" style="width: 80px; " alt="">
                                        <div class="flex-1 ms-3">
                                            <h4>{{$subject->name}}</h4>
                                            @if($subject->status == 'active')
                                                <span>{{__('home.active')}}</span>
                                            @else
                                                <span>{{__('home.stopped')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        {!! Form::open([
                                            'route' => ['subjects.destroy',$subject->id],
                                            'method' => 'delete'
                                        ])!!}
                                        @can('subject-edit')
                                        <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-success p-2">{{__('home.edit')}}<i class="fa-regular fa-pen-to-square p-2"></i></a>
                                        @endcan
                                        @can('subject-delete')
                                        <button onclick="return confirm('{{__('home.Are you sure to delete')}}');" class="btn btn-danger p-2">{{__('home.delete')}}<i class="fa-regular fa-trash-can p-2"></i></button>
                                        @endcan
                                        {!! Form::close() !!}
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
            </div>
        </div>
        {{$subjects->links('pagination::bootstrap-5')}}
    </div>
@endsection
