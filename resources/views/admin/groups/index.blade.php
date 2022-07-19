@extends('layouts.admin.app')

@section('title') {{__('group.all groups') . $title}} @endsection

@section('content')

    <div class="container-fluid">

        <div class="widget-heading d-flex justify-content-between align-items-center">
            <h3 class="m-0">{{__('group.all groups')}}</h3>
        </div>
        <div class="row">
            @include('layouts.admin.alert.success')
            @forelse($groups as $group)
            <div class="col-xl-4 col-xxl-6">

                <div class="card overflow-hidden">
                    <div class="social-graph-wrapper widget-twitter d-flex justify-content-center align-items-center" style="height: 120px;">
                        <span class="s-icon">{{$group->name}}</span>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{route('groups.edit',$group->id)}}" class="btn mt-3 mb-3 btn-primary">{{__('home.edit')}}</a>
                        {!! Form::open([
                            'route' => ['groups.destroy',$group->id],
                            'method' => 'delete'
                        ])!!}
                        <button class="btn mt-3 mb-3 btn-danger" onclick="return confirm('{{__('home.Are you sure to delete')}}');"  type="submit">{{__('home.delete')}}</button>
                        {!! Form::close() !!}
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
                                <h4 class="m-1"><span class="counter">{{$group->level->level ?? ''}}</span></h4>
                                <p class="m-0">{{__('level.level')}}</p>
                            </div>
                        </div>
                        <div class="col-3 border-end">
                            <div class="pt-3 pb-3 ps-0 pe-0 text-center">
                                <h4 class="m-1"><span class="counter">1</span></h4>
                                <p class="m-0">{{__('course.courses')}}</p>
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
