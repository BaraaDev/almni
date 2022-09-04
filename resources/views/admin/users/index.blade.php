@extends('layouts.admin.app')

@section('title') {{__('user.All users') . $title}} @endsection
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
            <h3 class="m-0">{{__('user.All users')}}</h3>
        </div>
        @include('layouts.admin.alert.success')
        <div class="row">
            @forelse($users as $user)

            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img data-src="{{$user->photo}}" class="lazyload" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">{{$user->name}}</h3>
                            <p class="text-muted">{{$user->job}}</p>
                            {!! Form::open([
                                'route' => ['users.destroy',$user->id],
                                'method' => 'delete'
                            ])!!}
                            @can('user-edit')
                            <a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="{{route('users.edit',$user->id)}}">
                                <i class="fa-solid fa-pen-to-square me-2"></i>{{__('home.edit')}}
                            </a>
                            @endcan

                            @can('user-delete')
                            <button class="btn btn-outline-danger btn-rounded mt-3 px-5" onclick="return confirm('{{__('home.Are you sure to delete')}}');" type="submit">
                                <i class="fa-solid fa-trash me-2"></i>{{__('home.delete')}}
                            </button>
                            @endcan
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card-footer pt-0 pb-0 text-center">
                        <div class="row">
                            <div class="col-6 pt-3 pb-3 border-end">
                               @php
                                   $dateOfBirth = $user->age;
                                   $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                               @endphp
                                <h3 class="mb-1">{{$age}}</h3><span>{{__('user.age')}}</span>
                            </div>
                            <div class="col-6 pt-3 pb-3 border-end">
                                <h3 class="mb-1" title="{{$user->salary}}">{{numtoks($user->salary)}}</h3><span>{{__('home.salary')}}</span>
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
        {{$users->links('pagination::bootstrap-5')}}
    </div>
@endsection
