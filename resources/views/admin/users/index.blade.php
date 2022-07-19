@extends('layouts.admin.app')

@section('title') {{__('user.All users') . $title}} @endsection
@section('content')
    <div class="container-fluid">

        <div class="widget-heading d-flex justify-content-between align-items-center">
            <h3 class="m-0">All Users</h3>
        </div>
        @include('layouts.admin.alert.success')
        <div class="row">
            @forelse($users as $user)
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="{{$user->photo}}" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">{{$user->name}}</h3>
                            <p class="text-muted">{{$user->job}}</p>
                            {!! Form::open([
                                'route' => ['users.destroy',$user->id],
                                'method' => 'delete'
                            ])!!}
                            <a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="{{route('users.edit',$user->id)}}">
                                <i class="fa-solid fa-pen-to-square me-2"></i>{{__('home.edit')}}
                            </a>

                            <button class="btn btn-outline-danger btn-rounded mt-3 px-5" onclick="return confirm('{{__('home.Are you sure to delete')}}');" type="submit">
                                <i class="fa-solid fa-trash me-2"></i>{{__('home.delete')}}
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card-footer pt-0 pb-0 text-center">
                        <div class="row">
                            <div class="col-4 pt-3 pb-3 border-end">
                               @php
                                   $dateOfBirth = $user->age;
                                   $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                               @endphp
                                <h3 class="mb-1">{{ $age}}</h3><span>{{__('user.age')}}</span>
                            </div>
                            <div class="col-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">{{$user->city->city ?? ''}}</h3><span>{{__('user.location')}}</span>
                            </div>
                            <div class="col-4 pt-3 pb-3">
                                <h3 class="mb-1">Admin</h3><span>Role</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    <span class="font-weight-semibold">{{__('user.There are no users')}}</span>.
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
