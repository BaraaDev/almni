@extends('layouts.admin.app')

@section('title') {{__('group.all groups') . $title}} @endsection

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
    <div class="container-fluid">

        <div class="widget-heading d-flex justify-content-between align-items-center">
            <h3 class="m-0">{{__('group.all groups')}}</h3>
        </div>
        <div class="row">
            @include('layouts.admin.alert.success')
            @forelse($groups as $group)
            <div class="col-xl-4 col-xxl-6">

                <div class="card overflow-hidden">

                    <div class="social-graph-wrapper @if($loop->first) widget-facebook @elseif($loop->even)  widget-linkedin @elseif($loop->last) widget-twitter @else widget-googleplus @endif d-flex justify-content-center align-items-center" style="height: 120px;">
                        <span class="s-icon">{{$group->name}}</span>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        @can('group-edit')
                        <a href="{{route('groups.edit',$group->id)}}" class="btn mt-3 mb-3 btn-primary">{{__('home.edit')}}</a>
                        @endcan
                        @can('group-delete')
                        {!! Form::open([
                            'route' => ['groups.destroy',$group->id],
                            'method' => 'delete'
                        ])!!}


                        <button class="btn mt-3 mb-3 btn-danger" onclick="return confirm('{{__('home.Are you sure to delete')}}');"  type="submit">{{__('home.delete')}}</button>

                        {!! Form::close() !!}
                            @endcan
                    </div>
                    <div class="row">
                        <div class="col-3 border-end">
                            <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                                <h4 class="m-1"><span class="counter">89</span></h4>
                                <p class="m-0">Students</p>
                            </div>
                        </div>
                        <div class="col-3 border-end">
                            <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                                <h4 class="m-1"><span class="counter">{{Str::limit($group->level->level ?? '',10,'...')}}</span></h4>
                                <p class="m-0">{{__('level.level')}}</p>
                            </div>
                        </div>
                        <div class="col-3 border-end">
                            <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                                <a href="{{route('courses.show',$group->course->id ?? '' , '')}}">
                                    <h4 class="m-1"><span class="counter">{{Str::limit($group->course->title ?? '',10,'...')}} </span></h4>
                                    <p class="m-0">{{__('course.course')}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                                <h4 class="m-1"><span class="counter">4</span></h4>
                                <p class="m-0">Lectures</p>
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
