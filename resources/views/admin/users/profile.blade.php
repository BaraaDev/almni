@extends('layouts.admin.app')

@section('title') {{$user->name . $title}} @endsection

@section('content')
    <div class="container-fluid">


        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{__('home.home')}}</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
    @include('layouts.admin.alert.success')
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{$user->photo}}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{$user->name}}</h4>
                                    <p>{{$user->job ?? $user->phone}}</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0"><a href="mailto://{{$user->email}}" class="__cf_email__">{{$user->email}}</a></h4>
                                    <p>Email</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">150</h3><span>Follower</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">45</h3><span>Reviews</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Follow</a>
                                            <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                        </div>
                                    </div><!-- Modal -->
                                    <div class="modal fade" id="sendMessageModal">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Send Message</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="comment-form">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                                    <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                                    <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="text-black font-w600 form-label">Comment</label>
                                                                    <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3 mb-0">
                                                                    <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                                </div>
                                                            </div>
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
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">{{__('home.About Me')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                            <div class="pt-4 border-bottom-1 pb-3">
                                                <h4 class="text-primary">{{__('home.About Me')}}</h4>
                                                <p class="mb-2">{{$user->bio ?? ''}}</p>

                                            </div>
                                        </div>
                                        <div class="profile-personal-info">
                                            <h4 class="text-primary mb-4">{{__('user.Personal Information')}}</h4>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">{{__('user.name')}}<span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$user->name}}</span></div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">{{__('user.email address')}}<span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span><a href="mailto://{{$user->email}}">{{$user->email}}</a></span></div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">{{__('home.status')}}<span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$user->status}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    @php
                                                        $dateOfBirth = $user->age;
                                                        $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                                    @endphp
                                                    <h5 class="f-w-500">{{__('user.age')}}<span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$age}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">{{__('user.location')}}<span class="pull-end">:</span></h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{$user->address}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">{{__('user.Account Setting')}}</h4>
                                                <form action="{{route('editProfile')}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">{{__('user.name')}}</label>
                                                            <input type="text" name="name" value="{{Request::old('name') ? Request::old('name') : $user->name}}" placeholder="{{__('user.Enter the full name')}}" class="form-control @error('name') is-invalid @enderror">
                                                            @error('name') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('user.user name')}} <span style="color: red">*</span></label>
                                                            <input type="text" name="username" class="form-control input-default @error('username') is-invalid @enderror" placeholder="{{__('user.Enter the username')}}" value="{{Request::old('username') ? Request::old('username') : $user->username}}" required>
                                                            @error('username') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>

                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('user.email address')}} <span style="color: red">*</span></label>
                                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('home.Enter your email')}}" value="{{Request::old('email') ? Request::old('email') : $user->email}}" required>
                                                            @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>

                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('user.password')}} <span style="color: red">*</span></label>

                                                            <div class="input-group transparent-append">

                                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="dlab-password" placeholder="{{__('user.Enter your password')}}" {{ isset($user) && $user->password  ? ''  : 'required' }} >
                                                                <span class="input-group-text show-pass">
                                                                    <i class="fa fa-eye-slash"></i>
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                                @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('home.date')}}</label>
                                                            <input type="date" name="age" class="form-control input-default @error('age') is-invalid @enderror" placeholder="{{__('user.Enter your age')}}" value="{{Request::old('age') ? Request::old('age') : $user->age}}">
                                                            @error('age') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>

                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('user.job')}}</label>
                                                            <input type="text" name="job" class="form-control input-default @error('job') is-invalid @enderror" placeholder="{{__('home.Enter your job')}}" value="{{Request::old('job') ? Request::old('job') : $user->job}}">
                                                            @error('job') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('home.home address')}}</label>
                                                            <input type="text" name="address" placeholder="{{__('home.Enter your location')}}" value="{{Request::old('address') ? Request::old('address') : $user->address}}" class="form-control @error('address') is-invalid @enderror">
                                                            @error('address') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-6">
                                                            <label class="form-label">{{__('city.city')}}</label>
                                                            @inject('city','App\Models\City')
                                                            {!! Form::select('city_id',$city->pluck('city','id'),Request::old('city_id') ? Request::old('city_id') :  $user->city_id ,[
                                                                'class' => 'default-select form-control'. ( $errors->has('city_id') ? ' is-invalid' : '' ),
                                                            ]) !!}
                                                            @error('city_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.phone')}}</label>
                                                            <input type="tel" name="phone" placeholder="{{__('home.Enter a phone number')}}" value="{{Request::old('phone') ? Request::old('phone') : $user->phone}}" class="form-control @error('phone') is-invalid @enderror">
                                                            @error('phone') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.phone number')}}</label>
                                                            <input type="tel" name="phone2" placeholder="{{__('home.another phone')}}" value="{{Request::old('phone2') ? Request::old('phone2') : $user->phone2}}" class="form-control @error('phone2') is-invalid @enderror">
                                                            @error('phone2') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.whatsApp')}}</label>
                                                            <input type="tel" name="whatsApp" placeholder="{{__('home.Enter a WhatsApp number')}}" value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $user->whatsApp}}" class="form-control @error('whatsApp') is-invalid @enderror">
                                                            @error('whatsApp') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{__('user.bio')}}</label>
                                                            <textarea name="bio" class="form-control @error('bio') is-invalid @enderror">{{Request::old('bio') ? Request::old('bio') : $user->bio}}</textarea>
                                                            @error('bio') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.facebook')}}</label>
                                                            <input type="text" name="facebook" placeholder="{{__('home.username facebook')}}" value="{{Request::old('facebook') ? Request::old('facebook') : $user->facebook}}" class="form-control @error('facebook') is-invalid @enderror">
                                                            @error('facebook') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.twitter')}}</label>
                                                            <input type="text" name="twitter" placeholder="{{__('home.username twitter')}}" value="{{Request::old('twitter') ? Request::old('twitter') : $user->twitter}}" class="form-control @error('twitter') is-invalid @enderror">
                                                            @error('twitter') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.instagram')}}</label>
                                                            <input type="text" name="instagram" placeholder="{{__('home.username instagram')}}" value="{{Request::old('instagram') ? Request::old('instagram') : $user->instagram}}" class="form-control @error('instagram') is-invalid @enderror">
                                                            @error('instagram') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.linkedin')}}</label>
                                                            <input type="text" name="linkedin" placeholder="{{__('home.username linkedin')}}" value="{{Request::old('linkedin') ? Request::old('linkedin') : $user->linkedin}}" class="form-control @error('linkedin') is-invalid @enderror">
                                                            @error('linkedin') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.AskFM')}}</label>
                                                            <input type="text" name="AskFM" placeholder="{{__('home.username AskFM')}}" value="{{Request::old('AskFM') ? Request::old('AskFM') : $user->AskFM}}" class="form-control @error('AskFM') is-invalid @enderror">
                                                            @error('AskFM') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">{{__('home.YouTube')}}</label>
                                                            <input type="text" name="YouTube" placeholder="{{__('home.username YouTube')}}" value="{{Request::old('YouTube') ? Request::old('YouTube') : $user->YouTube}}" class="form-control @error('YouTube') is-invalid @enderror">
                                                            @error('YouTube') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="file">{{__('home.add image')}} <span style="color: red">*</span></label>
                                                        <div class="form-file">
                                                            <input id="file" type="file" name="photo" class="form-file-input form-control">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Sign in</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
