@extends('layouts.admin.app')

@section('title')
    {{ __('student.waiting student') . $title }}
@endsection
@section('head')
    <link href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <!-- ===== Instructor Starts ===== -->
        <div class="row">
            @forelse($users as $user)
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="overlay-box p-5 text-center">
                            <img src="{{ $user->photo }}" width="100" class="img-fluid rounded-circle" alt="">
                            <h3 class="mt-3 mb-0 text-white">{{ $user->name }}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6">
                                    <div
                                        class="bgl-primary h-100 d-flex flex-column justify-content-center align-items-center rounded p-3">
                                        <h4 class="mb-0">{{ $user->phone }}</h4>
                                        <small>{{ __('home.phone number') }}</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    @php
                                        $dateOfBirth = $user->age;
                                        $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                    @endphp
                                    <div
                                        class="bgl-primary h-100 d-flex flex-column justify-content-center align-items-center rounded p-3">
                                        <h4 class="mb-0">{{ __('user.age') }}: {{ $age }}</h4>
                                        <small>{{ __('home.Years Old') }}</small>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div
                                        class="bgl-primary h-100 d-flex flex-column justify-content-center align-items-center rounded p-3">
                                        @if ($user->final_price)
                                            <h4 class="mb-0">{{ $user->final_price . ' ' . __('home.le') }} </h4>
                                            <small>{{ __('home.final price') }}</small>
                                        @else
                                            <h4 class="mb-0">{{ $user->initial_price . ' ' . __('home.le') }} </h4>
                                            <small>{{ __('home.initial price') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div
                                        class="bgl-primary h-100 d-flex flex-column justify-content-center align-items-center rounded p-3">
                                        <h4 class="mb-0">{{ $user->city->city ?? '' }}</h4>
                                        <small>{{ __('home.location') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex mt-0 gap-2">
                            <a href="{{ route('students.edit', $user->id) }}"
                                class="btn btn-primary btn-lg btn-block">{{ __('home.update') }}</a>

                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger">
                    <span class="font-weight-semibold">{{ __('user.There are no users') }}</span>.
                </div>
            @endforelse

            <div class="col-xl-12">
                @include('layouts.admin.alert.success')
                <div class="card students-list">
                    <div class="card-header flex-wrap border-0 pb-0">
                        <h4>{{ __('student.all students') }}</h4>
                        <div class="input-group search-area w-auto">
                            <span class="input-group-text">
                                <a href="javascript:void(0)">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z"
                                            fill="var(--primary)"></path>
                                    </svg>
                                </a>
                            </span>
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <div class="table-responsive">
                            <table class="display dataTablesCard order-table card-table application mb-4 table text-black"
                                id="application-tbl1">
                                <thead>
                                    <tr>
                                        <th>{{ __('user.name') }}</th>
                                        <th>{{ __('home.phone') }}</th>
                                        <th>{{ __('home.gender') }}</th>
                                        <th>{{ __('user.age') }}</th>
                                        <th>{{ __('home.price') }}</th>
                                        <th>{{ __('student.Join Date') }}</th>
                                        <th>{{ __('home.status') }}</th>
                                        <th>{{ __('home.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ $user->photo }}" alt="">
                                                    <h4 class="fs-16 font-w500 mb-0">{{ $user->name }}</h4>
                                                </div>
                                            </td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if ($user->gender == 'male')
                                                    <span class="badge light badge-info">{{ $user->gender }}</span>
                                                @elseif($user->gender == 'female')
                                                    <span class="badge light badge-danger">{{ $user->gender }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @php
                                                    $dateOfBirth = $user->age;
                                                    $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                                @endphp
                                                {{ $age }}
                                            </td>
                                            <td>
                                                @if ($user->final_price)
                                                    {{ $user->final_price . ' ' . __('home.le') }}
                                                @else
                                                    {{ $user->initial_price . ' ' . __('home.le') }}
                                                @endif
                                            </td>
                                            <td>{{ $user->created_at->translatedFormat('M d, Y') }}</td>
                                            <td>
                                                @if ($user->status == 'active')
                                                    <span class="badge light badge-success">{{ $user->status }}</span>
                                                @elseif($user->status == 'waiting')
                                                    <a href="{{ route('participants.waiting') }}"><span
                                                            class="badge light badge-warning">{{ $user->status }}</span></a>
                                                @elseif($user->status == 'stopped')
                                                    <span class="badge light badge-danger">{{ $user->status }}</span>
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

                                                        @can('user-delete')
                                                            {!! Form::open([
                                                                'route' => ['users.destroy', $user->id],
                                                                'method' => 'delete',
                                                            ]) !!}
                                                            <button class="dropdown-item"
                                                                onclick="return confirm('{{ __('home.Are you sure to delete') }}');"
                                                                type="submit">{{ __('home.delete') }}</button>
                                                            {!! Form::close() !!}
                                                        @endcan
                                                        @can('user-edit')
                                                            <a class="dropdown-item"
                                                                href="{{ route('students.edit', $user->id) }}">{{ __('home.update') }}</a>
                                                        @endcan
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
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection


@section('js')
    <script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/instructor-student.js') }}"></script>
@endsection
