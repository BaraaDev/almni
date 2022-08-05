@extends('layouts.admin.app')
@section('title') {{__('home.reports') . ' ' . __('bunche.bunches') . ' ' . $title}} @endsection
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
                        <h4>{{__('home.reports') . ' ' . __('bunche.bunches')}} </h4>
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
                                    <th>{{__('group.group')}}</th>
                                    <th>{{__('course.course')}}</th>
                                    <th>{{__('user.Join')}}</th>
                                    <th>{{__('home.status')}}</th>
                                    <th>{{__('home.action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($bunches as $bunche)

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-0 fs-16 font-w500">{{$bunche->user->name ?? ''}}</h4>
                                            </div>
                                        </td>
                                        <td>{{$bunche->price}}</td>
                                        <td>{{$bunche->deposit}}</td>
                                        <td>{{$bunche->group->name ?? ''}}</td>
                                        <td>{{$bunche->course->title ?? ''}}</td>

                                        <td>{{$bunche->created_at->format('M d, Y')}}</td>
                                        <td class="sort" data-sort="{{$bunche->status}}">
                                            @if($bunche->status == 'Completed')
                                                <span class="badge  light badge-success">{{$bunche->status}}</span>
                                            @elseif($bunche->status == 'On Progress')
                                                <span class="badge light badge-warning">{{$bunche->status}}</span>
                                            @elseif($bunche->status == 'Not Complete')
                                                <span class="badge light badge-info">{{$bunche->status}}</span>
                                            @elseif($bunche->status == 'No Progress')
                                                <span class="badge light badge-primary">{{$bunche->status}}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z" fill="#A098AE"/>
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    {!! Form::open([
                                                        'route' => ['bunches.destroy',$bunche->id],
                                                        'method' => 'delete'
                                                    ])!!}
                                                    @can('bunches-delete')
                                                    <button type="submit" class="dropdown-item">{{__('home.delete')}}</button>
                                                    @endcan
                                                        @can('bunches-edit')
                                                    <a class="dropdown-item" href="{{route('bunches.edit',$bunche->id)}}">{{__('home.edit')}}</a>
                                                    @endcan
                                                        {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </td>

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
        {{$bunches->links('pagination::bootstrap-5')}}
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
