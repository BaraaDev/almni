@extends('layouts.admin.app')
@inject('model','App\Models\User')
@section('title') {{__('student.create student') . $title}} @endsection

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
                        <h4 class="card-title">{{__('student.create student')}}</h4>
                    </div>

                    <div class="card-body">
                        @include('layouts.admin.alert.validation-errors')
                        <div class="basic-form">
                            <form class="needs-validation" method="post" action="{{route('students.store')}}" files="true" enctype="multipart/form-data" novalidate>
                                @csrf
                                @include('admin.users.students.form')
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
