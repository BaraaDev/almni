@extends('layouts.admin.app')
@section('title') {{__('role.create role') . $title}} @endsection
@inject('role','App\Models\Role')
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
                        <h4 class="card-title">{{__('role.create role')}}</h4>
                    </div>

                    <div class="card-body">
                        @include('layouts.admin.alert.validation-errors')
                        <div class="basic-form">
                            <form class="needs-validation" id="alert-form" method="post" action="{{route('roles.store')}}" files="true" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                @include('admin.roles.form')
                                    <div class="col-6">
                                        <div class="accordion accordion-primary" id="accordion-one">
                                            <div class="accordion-item">
                                                <label class="form-label">{{__('permission.permissions')}}<span style="color: red">*</span></label>
                                                <div class="accordion-header collapsed rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">
                                                    <span class="accordion-header-icon"></span>
                                                    <span class="accordion-header-text">{{__('permission.permissions')}}</span>
                                                    <span class="accordion-header-indicator"></span>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-one">

                                                    <div class="accordion-body-text row">

                                                        @foreach($permission as $value)
                                                            <div class="col-md-6">
                                                                <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                                    <input type="checkbox" class="form-check-input" value="{{$value->id}}" id="customRadioBox{{$loop->iteration}}" name="permission[]">
                                                                    <label class="form-check-label" for="customRadioBox{{$loop->iteration}}">{{$value->name}}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn mt-3 me-2 btn-primary">{{__('home.create')}}</button>
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
