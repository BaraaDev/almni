@extends('layouts.admin.app')

@section('title') {{__('acitvity.all activities') . $title}} @endsection
@section('content')
<!-- row -->
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            @include('layouts.admin.alert.success')
            <div class="card students-list">
                <div class="card-header border-0 flex-wrap pb-0">
                    <h4>{{__('acitvity.activities')}}</h4>
                    <div class="input-group search-area w-auto">
                            <span class="input-group-text">
                                <a href="javascript:void(0)">
                                    <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--primary)"></path>
                                    </svg>
                                </a>
                            </span>
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="table-responsive">
                        <table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('home.description')}}</th>
                                <th>{{__('acitvity.event')}}</th>
                                <th>{{__('subject.subject')}}</th>
                                <th>{{__('user.user')}}</th>
                                <th>{{__('home.date')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($activities as $activity)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-0 fs-16 font-w500">{{$activity->description}}</h4>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-0 fs-16 font-w500">{{$activity->event ?? ''}}</h4>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-0 fs-16 font-w500">{{$activity->subject->name ?? ''}}</h4>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-0 fs-16 font-w500">{{$activity->causer->name ?? ''}}</h4>
                                        </div>
                                    </td>
                                    <td title="{{$activity->created_at}}">{{$activity->created_at->translatedFormat('M d, Y')}}</td>
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
    </div>
    {{$activities->links('pagination::bootstrap-5')}}
</div>
@endsection
