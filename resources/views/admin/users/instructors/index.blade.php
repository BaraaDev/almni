@extends('layouts.admin.app')

@section('title') {{__('instructor.all instructors') . $title}} @endsection
@section('search')
    <div class="nav-item d-flex align-items-center">
        <form action="" method="get">
            <div class="input-group search-area">
                    <span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--secondary)"/>
                        </svg>
                        </a>
                    </span>

                <input name="keyword"  value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword--}}" type="text" class="form-control" placeholder="Search here...">
            </div>
        </form>
    </div>

@endsection
@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            @forelse($instructors as $instructor)
            <div class="col-xl-4 col-xxl-4 col-md-2">
                <div class="card instructors-box">
                    <div class="card-header border-0">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z" fill="#A098AE"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                {!! Form::open([
                                    'route' => ['instructors.destroy',$instructor->id],
                                    'method' => 'delete'
                                ])!!}
                                @can('instructor-delete')
                                <button  onclick="return confirm('{{__('home.Are you sure to delete')}}');" type="submit" class="dropdown-item">{{__('home.delete')}}</button>
                                @endcan
                                @can('instructor-edit')
                                <a class="dropdown-item" href="{{route('instructors.edit',$instructor->id)}}">{{__('home.edit')}}</a>
                                @endcan
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center pb-3">
                        <div class="instructors-media">
                            <img data-src="{{$instructor->photo}}" class="lazyload" alt="">
                            <div class="instructors-media-info">
                                <h4>{{$instructor->name}}</h4>
                                <ul class="d-flex align-items-center raiting my-0 justify-content-center">
                                    @php
                                        $dateOfBirth = $instructor->age;
                                        $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                    @endphp
                                    <li><span class="font-w500">{{$age .' '. __('user.age')}}</span>
                                    </li>
                                    <li>{!! __('user.nickname') . ': '.$instructor->nickname!!}</li>
                                </ul>
                                <div class="custome-badge">
                                    @forelse($instructor->subjects as $subject)
                                    <a href={{route('subjects.edit',$subject->id)}}><span class="badge badge-xl">{{$subject->name}}</span></a>
                                    @empty
                                        <div class="alert alert-danger">
                                            <span class="font-weight-semibold">{{__('subject.There are no course materials for the teacher')}}</span>.
                                        </div>
                                    @endforelse
                                </div>
                                <div class="d-flex justify-content-center my-3">
                                    <div class="info-box">
                                        <span>
                                            <img src="{{asset('admin/images/medal.png')}}" alt="">
                                            {{ __('home.hourly time') }}
                                        </span>
                                        <h4>{{ $instructor->hourly_time }}</h4>
                                    </div>
                                    <div class="info-box" title="{{$instructor->hourly_time * $instructor->lectures->count()}} ">
                                        <span>
                                            <img src="{{asset('admin/images/svg/achievement.svg')}}" alt=""> Number Lectures
                                        </span>
                                        <h4 >{{$instructor->lectures->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="card-footer pt-0 border-0">--}}
{{--                        <a href="#" class="btn btn-secondary  btn-block">View Class</a>--}}
{{--                    </div>--}}
                </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    <span class="font-weight-semibold">{{__('home.There is no data')}}</span>.
                </div>
            @endforelse
        </div>
        {{$instructors->links('pagination::bootstrap-5')}}
    </div>
@endsection
