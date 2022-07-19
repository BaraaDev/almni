@extends('layouts.admin.app')

@section('title') {{__('student.waiting student') . $title}} @endsection
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <!-- ===== Instructor Starts ===== -->
        <div class="row">
            @forelse($users as $user)
            <div class="col-xl-4 col-lg-6 col-sm-12">
                <div class="card overflow-hidden">
                    <div class="text-center p-5 overlay-box">
                        <img src="{{$user->photo}}" width="100" class="img-fluid rounded-circle" alt="">
                        <h3 class="mt-3 mb-0 text-white">{{$user->name}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                    <h4 class="mb-0">{{$user->phone}}</h4>
                                    <small>{{__('home.phone number')}}</small>
                                </div>
                            </div>
                            <div class="col-6">
                                @php
                                    $dateOfBirth = $user->age;
                                    $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                @endphp
                                <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                    <h4 class="mb-0">{{__('user.age')}}: {{ $age}}</h4>
                                    <small>{{__('home.Years Old')}}</small>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                    @if($user->final_price)
                                        <h4 class="mb-0">{{$user->final_price. ' ' . __('home.le')}} </h4>
                                        <small>{{__('home.final price')}}</small>
                                    @else
                                        <h4 class="mb-0">{{$user->initial_price. ' ' . __('home.le')}} </h4>
                                        <small>{{__('home.initial price')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                    <h4 class="mb-0">{{$user->city->city ?? ''}}</h4>
                                    <small>{{__('home.location')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex gap-2 mt-0">
                        <a href="{{route('students.edit',$user->id)}}" class="btn btn-primary btn-lg btn-block">{{__('home.update')}}</a>

                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    <span class="font-weight-semibold">{{__('user.There are no users')}}</span>.
                </div>
            @endforelse

            <!-- ==== Nav Pagination ==== -->
            <nav>
                <ul class="pagination d-flex justify-content-center pagination-gutter">
                    <li class="page-item page-indicator">
                        <a class="page-link" href="javascript:void(0)">
                            <i class="la la-angle-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                    <li class="page-item page-indicator">
                        <a class="page-link" href="javascript:void(0)">
                            <i class="la la-angle-right"></i></a>
                    </li>
                </ul>
            </nav><!-- ==== Nav Pagination ==== -->
        </div>
    </div>
@endsection
