@extends('layouts.admin.app')
@section('title') {{ __('home.report'). ' '.$model->user->name ?? '' . $title}} @endsection

@section('head')
    <link href="{{asset('admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/vendor/select2/css/select2.min.css')}}">
@endsection
@section('content')
    <div class="container-fluid">
        <!-- ===== User Starts ===== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('bunche.edit bunche')}}</h4>
                    </div>

                    <div class="card-body">
                        @include('layouts.admin.alert.validation-errors')
                        <div class="basic-form">
                            <form class="needs-validation" id="alert-form" method="post" action="{{route('salaries.update',$model->id)}}" files="true" enctype="multipart/form-data" novalidate>
                                @csrf
                                {{ method_field('put') }}
                                <div class="row">

                                    <div class="mb-3 col-6">
                                        <label class="form-label">{{__('home.salary')}} <span style="color: red">*</span></label>
                                        <input type="text" name="salary" class="form-control input-default @error('salary') is-invalid @enderror"
                                               placeholder="{{__('home.Enter salary')}}"
                                               value="{{Request::old('salary') ? Request::old('salary') : $model->salary}}" required>
                                        @error('salary') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label class="form-label">{{__('home.date')}} <span style="color: red">*</span></label>
                                        <input type="date" name="date" class="form-control input-default @error('date') is-invalid @enderror"
                                               placeholder="{{__('home.Enter date')}}"
                                               value="{{Request::old('date') ? Request::old('date') : $model->date}}" required>
                                        @error('date') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label class="form-label">{{__('user.user')}}</label>
                                        @inject('user','App\Models\User')
                                        {!! Form::select('user_id',$user->pluck('name','id'),Request::old('user_id') ? Request::old('user_id') :  $model->user_id ,[
                                            'class' => 'default-select form-control'. ( $errors->has('user_id') ? ' is-invalid' : '' ),
                                        ]) !!}
                                        @error('user_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                    </div>

                                </div>

                                <button type="submit" class="btn mt-3 me-2 btn-primary">{{__('home.edit')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ===== User Ends ===== -->
    </div>
@endsection

@section('js')
    <script src="{{asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
    <!-- Material color picker -->
    <script src="{{asset('admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script>
        (function () {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <!--  Select  -->
    <script src="{{asset('admin/vendor/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/select2-init.js')}}"></script>
@endsection
