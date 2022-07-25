<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            {{-- Start Dashboard --}}
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-house"></i>
                    <span class="nav-text">{{__('home.Dashboard')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('dashboard')}}">{{__('home.home')}}</a></li>
                    <li><a href="{{route('home')}}" target="_blank">{{__('home.page home')}}</a></li>
                </ul>
            </li>
            {{-- End Dashboard --}}
            {{--      /////////////////////////////      --}}

            @can('user-list')
            {{-- Start users --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('user.users')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('users.index')}}">{{__('user.All users')}}</a></li>
                    @can('user-create')
                    <li><a href="{{route('users.create')}}">{{__('user.Add users')}}</a></li>
                    @endcan
                </ul>
            </li>{{-- End users --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('student-list')
            {{-- Start students --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('student.students')}} </span>
                </a>
                <ul aria-expanded="false">
                    @can('student-create')
                    <li><a href="{{route('students.index')}}">{{__('student.all students')}}</a></li>
                    @endcan
                    <li><a href="{{route('students.create')}}">{{__('student.Add students')}}</a></li>
                    <li><a href="{{route('participants.waiting')}}">{{__('student.waiting student')}}</a></li>
                </ul>
            </li>{{-- End students --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('instructor-list')
            {{-- Start instructors --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('instructor.instructors')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('instructors.index')}}">{{__('instructor.all instructors')}}</a></li>
                    @can('instructor-create')
                    <li><a href="{{route('instructors.create')}}">{{__('instructor.add new instructors')}}</a></li>
                    @endcan
                </ul>
            </li>{{-- End instructors --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('city-list')
            {{-- Start cities --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('city.cities')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('cities.index')}}">{{__('city.all cities')}}</a></li>
                    @can('city-create')
                    <li><a href="{{route('cities.create')}}">{{__('city.add new cities')}}</a></li>
                    @endcan
                </ul>
            </li>{{-- End cities --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('subject-list')
            {{-- Start subjects --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-book"></i>
                    <span class="nav-text">{{__('subject.subjects')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('subjects.index')}}">{{__('subject.all subjects')}}</a></li>
                    @can('subject-create')
                    <li><a href="{{route('subjects.create')}}">{{__('subject.add new subjects')}}</a></li>
                    @endcan
                </ul>
            </li>{{-- End subjects --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('level-list')
                {{-- Start levels --}}
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-people"></i>
                        <span class="nav-text">{{__('level.levels')}} </span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('levels.index')}}">{{__('level.all levels')}}</a></li>
                        @can('level-create')
                            <li><a href="{{route('levels.create')}}">{{__('level.add new levels')}}</a></li>
                        @endcan
                    </ul>
                </li>{{-- End levels --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('category-list')
            {{-- Start categories --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">{{__('category.categories')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categories.index')}}">{{__('category.all categories')}}</a></li>
                    @can('category-create')
                    <li><a href="{{route('categories.create')}}">{{__('category.add new categories')}}</a></li>
                    @endcan
                </ul>
            </li>
            {{-- End categories --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('course-list')
            {{-- Start courses --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-camera-video"></i>
                    <span class="nav-text">{{__('course.courses')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('courses.index')}}">{{__('course.all courses')}}</a></li>
                    @can('course-create')
                    <li><a href="{{route('courses.create')}}">{{__('course.add new courses')}}</a></li>
                    @endcan
                </ul>
            </li>
            {{-- End courses --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('group-list')
                {{-- Start groups --}}
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-people"></i>
                        <span class="nav-text">{{__('group.groups')}} </span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('groups.index')}}">{{__('group.all groups')}}</a></li>
                        @can('group-create')
                            <li><a href="{{route('groups.create')}}">{{__('group.add new groups')}}</a></li>
                        @endcan
                    </ul>
                </li>{{-- End groups --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('lecture-list')
            {{-- Start lectures --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('lecture.lectures')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('lectures.index')}}">{{__('lecture.all lectures')}}</a></li>
                    @can('lecture-create')
                    <li><a href="{{route('lectures.create')}}">{{__('lecture.add new lectures')}}</a></li>
                    @endcan
                </ul>
            </li>{{-- End lectures --}}
            @endcan
            {{--      /////////////////////////////      --}}

            @can('role-list')
                {{-- Start roles --}}
                <li>
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i class="bi bi-people"></i>
                        <span class="nav-text">{{__('role.roles')}} </span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('roles.index')}}">{{__('role.all Roles')}}</a></li>
                        @can('role-create')
                            <li><a href="{{route('roles.create')}}">{{__('role.add new roles')}}</a></li>
                        @endcan
                    </ul>
                </li>{{-- End roles --}}
            @endcan
            {{--      /////////////////////////////      --}}
        </ul>

        <div class="copyright">
            <p><strong>Almin</strong> © 2022 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by programmers Caffe</p>
        </div>
    </div>
</div>
