@extends('layouts.auth.app')

@section('titleAuth')  {{__('user.login')}} {{$title}}@endsection
@section('content')

    <body class="body  h-100" style="background-image: url('admin/images/bg-1.jpg'); background-size:cover;">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-contain-center">
            <div class="col-xl-12 mt-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row m-0">
                            <div class="col-xl-6 col-md-6 sign text-center">
                                <div>
                                    <div class="text-center my-5">
                                        <a href="{{url('/')}}"><img width="200" src="{{asset('admin/images/logo-full.png')}}" alt=""></a>
                                    </div>
                                    <img src="{{asset('admin/images/log.png')}}" class="education-img">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="sign-in-your">
                                    <h4 class="fs-20 font-w800 text-black">{{__('user.Login in your account')}}</h4>
                                    <span>{!!__('user.welcome back')!!}</span>
                                    <div class="login-social">
                                        <a href="javascript:void(0);" class="btn font-w800 d-block my-4"><i class="fab fa-google me-2 text-primary"></i>Login with Google</a>
                                        <a href="javascript:void(0);" class="btn font-w800 d-block my-4"><i class="fab fa-facebook-f me-2 facebook-log"></i>Login with Facebook</a>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>{{__('user.email address')}}</strong></label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{__('home.Enter your email')}}" required autocomplete="off" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>{{__('user.password')}}</strong></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{__('user.Enter your password')}}" required autocomplete="off">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="basic_checkbox_1">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                @if (Route::has('password.request'))
                                                    <a  href="{{ route('password.request') }}">
                                                        {{__('user.Forgot Password')}}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">{{__('user.login')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
