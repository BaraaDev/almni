@extends('layouts.auth.app')
@section('titleAuth') {{__('user.Confirm Password')}}@endsection

@section('content')
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> {{__('user.Confirm Password')}}</div>

                        <div class="card-body">
                            {{ __('user.Please confirm') }}

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('user.password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('user.current password')}}" name="password" required autocomplete="off">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('user.Confirm Password') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('user.Forgot Your Password') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
