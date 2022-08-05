@extends('layouts.admin.app')
@section('title') {{__('salary.salaries'). ' ' . $title}} @endsection
@section('head')
    <link href="{{asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .overlay-box.waiting:after {
            background: #dc3545;
        }
        .overlay-box.done:after {
            background: #21a9dd;
        }
        .overlay-box.done-now:after {
            background: #198754;
        }
    </style>
@endsection
@section('content')

<!-- row -->
<div class="container-fluid">
@include('layouts.admin.alert.success')
@include('layouts.admin.alert.validation-errors')
    <!-- ===== Instructor Starts ===== -->
    <div class="row">

        @forelse($users as $user)
        <div class="col-xl-4 col-lg-6 col-sm-12">
            <div class="card overflow-hidden">


                @php $salaries = \App\Models\Salary::where('user_id',$user->id)->orderBy('created_at','DESC')->limit(1)->get(); @endphp
                <div class="overlay-box done row">
                    <div class="col-6">
                        <img src="{{$user->photo}}" style="width: 100%; height: 140px;" class="img-fluid" alt="">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <h3 class="mt-3 mb-0 text-white">{{$user->name}}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h4 class="mb-0">{{$user->salary . ' ' . __('home.le')}}</h4>
                                <small>{{__('home.salary')}}</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h4 class="mb-0">{{$user->job ?? __('user.no job')}}</h4>
                                <small>{{__('user.job')}}</small>
                            </div>
                        </div>
                        <div class="col-6 mt-3">
                            <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h4 class="mb-0">{{$user->salaries->count(). ' ' . __('home.months')}}</h4>
                                @forelse($salaries as $salary)
                                    {{$salary->date}}
                                @empty
                                @endforelse
                                <small>{{__('user.Recent Salaries')}}</small>
                            </div>
                        </div>
                        <div class="col-6 mt-3">
                            <div class="bgl-primary rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <h4 class="mb-0">{{$user->created_at->diffForHumans()}}</h4>
                                <small>{{__('user.Join')}}</small>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer d-flex gap-2 mt-0">
                    <button class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->iteration}}">{{__('home.pay')}}</button>
                </div>
            </div>

            <!-- Vertically centered modal -->
            <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="basic-form">
                                <form class="needs-validation" novalidate method="post" action="{{route('salaries.store')}}">
                                   @csrf
                                    <div class="row">
                                        <div class="mb-3 col-12">
                                            <label>{{__('home.salary')}} <span style="color: red">*</span></label>
                                            <input type="text" name="salary" class="form-control input-default @error('salary') is-invalid @enderror" value="{{$user->salary}}" placeholder="{{__('home.Enter salary')}}" required>
                                            @error('salary') <div class="invalid-feedback">{{$message}}</div> @enderror
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label>{{__('home.date')}} <span style="color: red">*</span></label>
                                            <input type="date" name="date" class="form-control input-default @error('date') is-invalid @enderror" required>
                                            @error('date') <div class="invalid-feedback">{{$message}}</div> @enderror
                                        </div>
                                        <input name="user_id" value="{{$user->id}}" type="hidden">
                                    </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('home.close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('home.save')}}</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <div class="alert alert-danger">
                <span class="font-weight-semibold">{{__('user.There are no users')}}</span>.
            </div>
        @endforelse

        <!-- ==== Nav Pagination ==== -->
        {{$users->links('pagination::bootstrap-5')}}
        <!-- ==== Nav Pagination ==== -->
    </div>



</div>

<!--**********************************
Content body end
***********************************-->
@endsection
