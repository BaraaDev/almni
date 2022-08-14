@extends('layouts.admin.app')
@section('title') {{__('bunche.bunches') . ' ' . $title}} @endsection
@section('head')
    <link href="{{asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.cs')}}s" rel="stylesheet">
    <link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Date -->
    <link href="{{asset('admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

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

@section('content')
    <!-- row -->
    <div class="container-fluid">
        @include('layouts.admin.alert.success')
        @include('layouts.admin.alert.validation-errors')
        <div class="row">
            <div class="col-xl-12">
                <div class="card students-list">
                    <div class="card-header border-0 flex-wrap pb-0">
                        <h4>Courses List</h4>
                        <div class="input-group search-area w-auto">
                      <span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--primary)"></path>
                        </svg>
                        </a></span>
                            <input type="text" class="form-control" id="tableSearchBar" placeholder="Search here...">
                            <select class="form-select" aria-label="Default select example" id="tableSortBar">
                                <option selected>All</option>
                                <option value="Completed">Completed</option>
                                <option value="On Progress">On Progress</option>
                                <option value="No Progress">No Progress</option>
                                <option value="Not Complete">Not Complete</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl1">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>{{__('user.name')}}</th>
                                    <th>{{__('home.price')}}</th>
                                    <th>{{__('home.deposit')}}</th>
                                    <th>{{__('group.groups')}}</th>
                                    <th>{{__('course.course')}}</th>
                                    <th>{{__('user.Join')}}</th>
                                    <th>{{__('home.status')}}</th>
                                    <th>{{__('home.Show more')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    @php $bunches = \App\Models\Bunche::where('user_id',$user->id)->orderBy('created_at','DESC')->limit(1)->get(); @endphp
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{$user->photo}}" alt="">
                                            <h4 class="mb-0 fs-16 font-w500">{{$user->name}}</h4>
                                        </div>
                                    </td>
                                    <td> @forelse($bunches as $bunche) {{$bunche->price . ' '. __('home.le')}} @empty {!! __('bunche.no price') !!}  @endforelse</td>
                                    <td>@forelse($bunches as $bunche) {{$bunche->deposit . ' '. __('home.le')}} @empty {!! __('bunche.no deposit')!!}  @endforelse</td>
                                    <td> @forelse($user->groups->slice(0,1) as $group) {{$group->name}} @empty <span class="badge  light badge-danger"> {{__('group.no group')}} </span> @endforelse</td>
                                    <td> @forelse($user->courseStudent->slice(0,1) as $course) {{$course->title}} @empty <span class="badge  light badge-danger"> {{__('course.no courses')}} </span> @endforelse</td>
                                    <td>{{$user->created_at->format('M d, Y')}}</td>
                                    <td class="sort" @foreach($bunches as $bunche) data-sort="{{$bunche->status}}" @endforeach>
                                        @forelse($bunches as $bunche)
                                            @if($bunche->status == 'Completed')
                                                <span class="badge  light badge-success">{{$bunche->status}}</span>
                                            @elseif($bunche->status == 'On Progress')
                                                <span class="badge light badge-warning">{{$bunche->status}}</span>
                                            @elseif($bunche->status == 'Not Complete')
                                                <span class="badge light badge-info">{{$bunche->status}}</span>
                                            @elseif($bunche->status == 'No Progress')
                                                <span class="badge light badge-primary">{{$bunche->status}}</span>
                                            @endif
                                        @empty
                                            {!! __('bunche.no status') !!}
                                        @endforelse

                                    </td>
                                    <td><button style="cursor: pointer;" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->iteration}}">Show more</button></td>

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
                                                        <form class="needs-validation" novalidate action="{{route('bunches.store')}}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb-3 col-12">
                                                                    <label>{{__('course.course')}} <span style="color: red">*</span></label>
                                                                    {!! Form::select('course_id',$user->courseStudent->pluck('title','id'),old('course_id'),[
                                                                        'class' => 'default-select form-control'. ( $errors->has('course_id') ? ' is-invalid' : '' ),
                                                                        'placeholder' => __('home.please choose')
                                                                    ]) !!}
                                                                    @error('course_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                                </div>

                                                                <div class="mb-3 col-12">
                                                                    <label>{{__('group.group')}} <span style="color: red">*</span></label>
                                                                    {!! Form::select('group_id',$user->groups->pluck('name','id'),old('group_id'),[
                                                                        'class' => 'default-select form-control'. ( $errors->has('group_id') ? ' is-invalid' : '' ),
                                                                        'placeholder' => __('home.please choose')
                                                                    ]) !!}
                                                                    @error('group_id') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                                </div>
                                                                <div class="mb-3 col-12">
                                                                    <label>{{__('home.deposit')}} <span style="color: red">*</span></label>
                                                                    <input type="text" name="deposit" class="form-control input-default @error('deposit') is-invalid @enderror" placeholder="{{__('home.enter a deposit')}}" required>
                                                                    @error('deposit') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                                </div>
                                                                <div class="mb-3 col-12">
                                                                    <label>{{__('home.Paid price')}} <span style="color: red">*</span></label>
                                                                    <input type="text" name="price" class="form-control input-default @error('price') is-invalid @enderror" placeholder="{{__('home.Enter Paid price')}}" required>
                                                                    @error('price') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                                </div>
                                                                <div class="mb-3 col-12">
                                                                    <div class="mb-3 col-12">
                                                                        <label>{{__('home.date')}} <span style="color: red">*</span></label>
                                                                        <input type="date" name="date" class="form-control input-default @error('date') is-invalid @enderror" required>
                                                                        @error('date') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                                    </div>
                                                                    <input name="user_id" value="{{$user->id}}" type="hidden">
                                                                </div>

                                                                <div class="mb-3 col-12">
                                                                    <label class="form-label">{{__('home.status')}} <span style="color: red">*</span></label>
                                                                    <select name="status"  class="default-select form-control @error('status') is-invalid @enderror" required>
                                                                        <option disabled>{{__('home.please choose')}}</option>
                                                                        <option value="Completed">{{__('home.completed')}}</option>
                                                                        <option value="Not Complete">{{__('home.Not Complete')}}</option>
                                                                        <option value="No Progress">{{__('home.No Progress')}}</option>
                                                                        <option value="On Progress">{{__('home.On Progress')}}</option>
                                                                    </select>
                                                                    @error('status') <div class="invalid-feedback">{{$message}}</div> @enderror
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Print</button>
                                                    <button type="submit" class="btn btn-primary">{{__('home.Submit')}}</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        <span class="font-weight-semibold">{{__('home.There is no data')}}</span>.
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== Nav Pagination ==== -->
        {{$users->links('pagination::bootstrap-5')}}
        <!-- ==== Nav Pagination ==== -->
        </div>
    </div>

    <!--**********************************
        Content body end
    ***********************************-->
@endsection

@section('js')
    <script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>
    <script src="{{asset('admin/vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
    <!-- Material color picker -->
    <script src="{{asset('admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Material color picker init -->
    <script src="{{asset('admin/js/plugins-init/material-date-picker-init.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Table Search
            $('#tableSearchBar').on("keyup", function() {
                var value = $(this).val().toLocaleLowerCase();
                $("#application-tbl1 tr").filter(function() {
                    $(this).toggle($(this).text().toLocaleLowerCase().indexOf(value) > -1)
                });
            });
            // Table Sort By Status
            $('#tableSortBar').change(function(){
                filter_function();
            });
            $('#application-tbl1 tbody tr').show();
            function filter_function(){
                $('#application-tbl1 tbody tr').hide();
                var sortFlag = 0;
                var sortValue = $('#tableSortBar').val();
                $('#application-tbl1 tr').each(function() {
                    if(sortValue == 0){
                        sortFlag = 1;
                    }
                    else if(sortValue == $(this).find('td.sort').data('sort')){
                        sortFlag = 1;
                    }
                    else{
                        sortFlag = 0;
                    }
                    if(sortFlag){
                        $(this).show();
                    }
                });
            }
            $('#tableSortBar').change(function(){
                let val = $(this).children("option:selected").val();
                if(val == "All") {
                    $('#application-tbl1 tbody tr').show();
                }
            })
            // Get day Date
            var d = new Date();
            var month = d.getMonth()+1;
            var day = d.getDate();
            var output = d.getFullYear() + '-' +
                (month<10 ? '0' : '') + month + '-' +
                (day<10 ? '0' : '') + day;
            $('.date-now h4').text(output);

            // get total price
            var table=document.getElementById('application-tbl1');
            var count = table.getElementsByTagName('tr').length;
            if (count > 0)
            {
                var total = 0;
                for(var i = 1; i < count; i++)
                {
                    total += +table.rows[i].cells[1].innerHTML;
                    // * table.rows[i].cells[2].innerHTML;
                }
            }
            $('#totalPrice').text('Total price: ' + total);
        });
    </script>

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
        })();
    </script>
@endsection
