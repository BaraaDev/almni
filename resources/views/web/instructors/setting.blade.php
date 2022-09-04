@extends('layouts.web.instructors.app')
@section('title') {{__('home.Settings')}} @endsection
@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">
            @include('layouts.web.instructors.sidebar')
        </div>
        <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
                <div class="row pb-50 mb-10">
                    <div class="col-auto">
                        <h1 class="text-30 lh-12 fw-700">{{__('home.Settings')}}</h1>
                    </div>
                </div>
                <div class="row y-gap-30">
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="tabs -active-purple-2 js-tabs pt-0">
                                <div class="tabs__controls d-flex x-gap-30 items-center pt-20 px-30 border-bottom-light js-tabs-controls">
                                    <button class="tabs__button text-light-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">
                                        {{__('user.update profile')}}
                                    </button>
                                    <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-2" type="button">
                                        {{__('user.password')}}
                                    </button>
                                </div>

                                <div class="tabs__content py-30 px-30 js-tabs-content">
                                    <div class="tabs__pane -tab-item-1 is-active">
                                        <div class="row y-gap-20 x-gap-20 items-center">
                                            <div class="col-auto">
                                                <img class="size-100" src="{{$user->photo}}" alt="{{$user->name}}">
                                            </div>

                                            <div class="col-auto">
                                                <div class="text-16 fw-500 text-dark-1">{{$user->name}}</div>
                                            </div>
                                        </div>

                                        <div class="border-top-light pt-30 mt-30">
                                            <form action="{{route('web.profile.updateSetting')}}" method="post" class="contact-form row y-gap-30">
                                                @csrf
                                                {{ method_field('patch') }}
                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.name')}} <span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="off" required placeholder="{{__('user.Enter the full name')}}" value="{{Request::old('name') ? Request::old('name') : $user->name}}">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.email address')}} <span style="color: red">*</span></label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off" required placeholder="{{__('home.Enter your email')}}" value="{{Request::old('email') ? Request::old('email') : $user->email}}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.phone')}}</label>
                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" autocomplete="off" required placeholder="{{__('home.Enter a phone number')}}" value="{{Request::old('phone') ? Request::old('phone') : $user->phone}}">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.home address')}} <span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" autocomplete="off" placeholder="{{__('home.Enter home address')}}" value="{{Request::old('address') ? Request::old('address') : $user->address}}">
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.Postal Code')}} <span style="color: red">*</span></label>
                                                    <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" autocomplete="off" placeholder="{{__('home.Enter Postal Code')}}" value="{{Request::old('postal_code') ? Request::old('postal_code') : $user->postal_code}}">
                                                    @error('postal_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('city.cities')}}<span style="color: red">*</span></label>
                                                    @inject('city','App\Models\City')
                                                    {!! Form::select('city_id',$city->pluck('city','id'),Request::old('city_id') ? Request::old('city_id') :  $user->city_id ,[
                                                        'class' => 'default-select form-control'. ( $errors->has('city_id') ? ' is-invalid' : '' ),
                                                        'placeholder' => __('home.please choose')
                                                    ]) !!}
                                                    @error('city_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.twitter')}}</label>
                                                    <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" autocomplete="off" placeholder="{{__('home.username twitter')}}" value="{{Request::old('twitter') ? Request::old('twitter') : $user->twitter}}">
                                                    @error('twitter')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.facebook')}}</label>
                                                    <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" autocomplete="off" placeholder="{{__('home.username facebook')}}" value="{{Request::old('facebook') ? Request::old('facebook') : $user->facebook}}">
                                                    @error('facebook')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.instagram')}}</label>
                                                    <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" autocomplete="off" placeholder="{{__('home.username instagram')}}" value="{{Request::old('instagram') ? Request::old('instagram') : $user->instagram}}">
                                                    @error('instagram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.linkedin')}}</label>
                                                    <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" autocomplete="off" placeholder="{{__('home.username linkedin')}}" value="{{Request::old('linkedin') ? Request::old('linkedin') : $user->linkedin}}">
                                                    @error('linkedin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.whatsApp')}}</label>
                                                    <input type="text" class="form-control @error('whatsApp') is-invalid @enderror" name="whatsApp" autocomplete="off" placeholder="{{__('home.Enter a WhatsApp number')}}" value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $user->whatsApp}}">
                                                    @error('whatsApp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('home.telegram')}}</label>
                                                    <input type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" autocomplete="off" placeholder="{{__('home.username telegram')}}" value="{{Request::old('telegram') ? Request::old('telegram') : $user->telegram}}">
                                                    @error('telegram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Personal info</label>
                                                    <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" placeholder="Text..." rows="7">{{Request::old('bio') ? Request::old('bio') : $user->bio}}</textarea>
                                                    @error('bio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="button -md -purple-1 text-white">Update Profile</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tabs__pane -tab-item-2">
                                        <form action="{{route('web.profile.profileUpdatePassword')}}" method="post" class="contact-form row y-gap-30">
                                            @csrf
                                            <div class="col-md-7">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.current password')}}</label>
                                                <input class="form-control @error('current_password') is-invalid @enderror" type="password" name="current_password" required placeholder="{{__('user.enter current password')}}">
                                                @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-7">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.New password')}}</label>
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required placeholder="{{__('user.Enter new password')}}">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-7">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{__('user.Confirm New Password')}}</label>
                                                <input type="password" name="password_confirmation" required placeholder="{{__('user.enter Confirm New Password')}}">
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="button -md -purple-1 text-white">Save Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.web.instructors.footer')
        </div>
    </div>
@endsection
