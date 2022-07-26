@extends('layouts.admin.app')

@section('title')
    {{ __('group.all groups') . $title }}
@endsection
@section('head')
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('search')
    <div class="nav-item d-flex align-items-center">
        <form action="" method="get">
            <div class="input-group search-area">
                <span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24"
                                                                                 viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                fill="var(--secondary)" />
                        </svg>
                    </a>
                </span>

                <input name="keyword" value="{{ Request::old('keyword') ? Request::old('keyword') : $request->keyword }}"
                       type="text" class="form-control" placeholder="Search here...">
            </div>
        </form>
    </div>
@endsection
@section('content')

<div class="container-fluid">

    <div class="widget-heading d-flex justify-content-between align-items-center">
        <h3 class="m-0">{{ __('group.all groups') }}</h3>
    </div>
    <div class="row">
        <div class="col-xl-12">
            @include('layouts.admin.alert.success')
            <div class="card students-list">

                <div class="card-header border-0 flex-wrap pb-0">
                    <h4>{{__('group.all groups')}}</h4>
                    <div class="input-group search-area w-auto">
                            <span class="input-group-text">
                                <a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--primary)"></path>
                                </svg>
                                </a>
                            </span>
                        <input type="text" class="form-control" id="tableSearchBar" placeholder="Search here...">
                        <select class="form-select filter" aria-label="Default select example" id="filter-class">
                            <option value="0">{{__('classrooms.classrooms')}}</option>
                            <option value="No Class">{{__('classrooms.no classrooms')}}</option>
                            @foreach($classes as $class)
                                <option value="{{$class->name}}">{{$class->name}}</option>
                            @endforeach
                        </select>
                        <select class="form-select filter" aria-label="Default select example" id="filter-level">
                            <option value="0">{{__('level.levels')}}</option>
                            <option value="No Level">{{__('level.no level')}}</option>
                            @foreach($levels as $level)
                                <option value="{{$level->level}}">{{$level->level}}</option>
                            @endforeach
                        </select>
                        <select class="form-select filter" aria-label="Default select example" id="filter-courses">
                            <option value="0">{{__('course.courses')}}</option>
                            <option value="No Courses">{{__('course.no courses')}}</option>
                            @foreach($courses as $course)
                                <option value="{{$course->title}}">{{$course->title}}</option>
                            @endforeach
                        </select>

                        <select class="form-select filter" aria-label="Default select example" id="filter-sort">
                            <option value="0">Status</option>
                            <option value="Active">Active</option>
                            <option value="Stopped">Stopped</option>
                        </select>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="table-responsive">
                        <table class="display dataTablesCard order-table card-table application mb-4 table text-black" id="application-tbl1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{ __('user.name') }}</th>
                                    <th>{{ __('student.students') }}</th>
                                    <th>{{ __('instructor.instructors') }}</th>
                                    <th>{{ __('level.level') }}</th>
                                    <th>{{ __('course.course') }}</th>
                                    <th>{{ __('classrooms.classroom') }}</th>
                                    <th>{{ __('course.courses') }}</th>
                                    <th>{{ __('home.days') }}</th>
                                    <th>{{ __('home.months') }}</th>
                                    <th>{{ __('home.time start') }}</th>
                                    <th>{{ __('group.start date') }}</th>
                                    <th>{{ __('home.status') }}</th>
                                    <th>{{ __('home.action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($groups as $group)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <h4 class="fs-16 font-w500 mb-0">{{ $group->name }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="d-flex align-items-center" href="{{ route('group.instructors', $group->id) }}">
                                                <span class="counter">{{ $group->students->count() . ' ' . __('student.students') }}</span>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="counter">({{ $group->instructor->count()}}) @foreach($group->instructor->slice(0,1) as $row) {{$row->name ?? __('instructor.no instructor')}} @endforeach</span>
                                            </div>
                                        </td>
                                        <td class="level" data-level="{{$group->level->level ?? __('level.no level')}}">{{ Str::limit($group->level->level ?? __('level.no level'), 10, '...') }}</td>
                                        <td>
                                            <a href="{{ route('courses.show', $group->course->id ?? '', '') }}">
                                                {{ Str::limit($group->course->title ?? '', 10, '...') }}
                                            </a>
                                        </td>
                                        <td class="class" data-class="{{$group->classroom->name ?? __('classrooms.no classrooms')}}">{{ $group->classroom->name ?? '' }}</td>
                                        <td class="courses" data-courses="{{$group->course->title ?? __('course.no courses')}}">{{ $group->course->title ?? '' }}</td>
                                        <td>
                                             @foreach($group->days as $key)
                                                {{ $key }} ,
                                             @endforeach
                                        </td>
                                        <td>{{ $group->months }}</td>
                                        @php $elapsed = Illuminate\Support\Carbon::parse($group->start_date);
                                        @endphp
                                        <td>{{ $group->time_start }}</td>
                                        <td title="{{$group->start_date}}">{{ $elapsed->diffForHumans()}}</td>
                                        <td class="sort" @if($group->status == 'active') data-sort="Active" @elseif($student->status == 'waiting') data-sort="Waiting" @elseif($student->status == 'stopped') data-sort="Stopped" @endif >
                                            @if($group->status == 'active')
                                                <span class="badge  light badge-success">{{$group->status}}</span>
                                            @elseif($group->status == 'stopped')
                                                <span class="badge light badge-danger">{{$group->status}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="btn-link btn sharp tp-btn-light btn-dark"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg width="24" height="25" viewBox="0 0 24 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z"
                                                            fill="#A098AE" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-start">
                                                    @can('group-delete')
                                                        {!! Form::open([
                                                            'route' => ['groups.destroy', $group->id],
                                                            'method' => 'delete',
                                                        ]) !!}
                                                            <button type="submit" onclick="return confirm('{{ __('home.Are you sure to delete') }}');" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal"> {{ __('home.delete') }}</button>
                                                        {!! Form::close() !!}
                                                    @endcan
                                                    @can('group-edit')
                                                        <a class="dropdown-item"
                                                            href="{{ route('groups.edit', $group->id) }}">{{ __('home.edit') }}</a>
                                                    @endcan
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        <span class="font-weight-semibold">{{ __('home.There is no data') }}</span>.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $groups->links('pagination::bootstrap-5') }}
</div>

@endsection
@section('js')
    <script src="{{ asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/instructor-student.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tableSearchBar').on("keyup", function() {
                var value = $(this).val().toLocaleLowerCase();
                $("#application-tbl1 tr").filter(function() {
                    $(this).toggle($(this).text().toLocaleLowerCase().indexOf(value) > -1)
                });
            });
            // Filter
            $('.filter').change(function(){
                filter_function();
            });

            $('#application-tbl1 tbody tr').show();

            function filter_function(){
                $('#application-tbl1 tbody tr').hide();

                var classFlag      = 0;
                var classValue     = $('#filter-class').val();
                var levelFlag      = 0;
                var levelValue     = $('#filter-level').val();

                var coursesFlag  = 0;
                var coursesValue = $('#filter-courses').val();

                var sortFlag       = 0;
                var sortValue      = $('#filter-sort').val();

                //traversing each row one by one
                $('#application-tbl1 tr').each(function() {

                    if(classValue == 0){
                        classFlag = 1;
                    }
                    else if(classValue == $(this).find('td.class').data('class')){
                        classFlag = 1;       //if value is same display row
                    }
                    else{
                        classFlag = 0;
                    }

                    if(levelValue == 0){
                        levelFlag = 1;
                    }
                    else if(levelValue == $(this).find('td.level').data('level')){
                        levelFlag = 1;
                    }
                    else{
                        levelFlag = 0;
                    }

                    if(coursesValue == 0){
                        coursesFlag = 1;
                    }
                    else if(coursesValue == $(this).find('td.courses').data('courses')){
                        coursesFlag = 1;
                    }
                    else{
                        coursesFlag = 0;
                    }

                    if(sortValue == 0){
                        sortFlag = 1;
                    }
                    else if(sortValue == $(this).find('td.sort').data('sort')){
                        sortFlag = 1;
                    }
                    else{
                        sortFlag = 0;
                    }

                    if(classFlag && levelFlag && sortFlag && coursesFlag){
                        $(this).show();
                    }
                });
            }
        });

    </script>
@endsection
