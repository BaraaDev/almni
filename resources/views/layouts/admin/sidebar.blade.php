<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            {{-- Start Dashboard --}}
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">{{__('home.Dashboard')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('dashboard')}}">{{__('home.home')}}</a></li>
                </ul>
            </li>
            {{-- End Dashboard --}}

            {{--      /////////////////////////////      --}}

            {{-- Start users --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('user.users')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('users.index')}}">{{__('user.All users')}}</a></li>
                    <li><a href="{{route('users.create')}}">{{__('user.Add users')}}</a></li>
                </ul>
            </li>
            {{-- End users --}}

            {{--      /////////////////////////////      --}}


            {{-- Start students --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('student.students')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('students.index')}}">{{__('student.all students')}}</a></li>
                    <li><a href="{{route('students.create')}}">{{__('student.Add students')}}</a></li>
                    <li><a href="{{route('participants.waiting')}}">{{__('student.waiting student')}}</a></li>
                </ul>
            </li>
            {{-- End students --}}

            {{--      /////////////////////////////      --}}


            {{-- Start cities --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('city.cities')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('cities.index')}}">{{__('city.all cities')}}</a></li>
                    <li><a href="{{route('cities.create')}}">{{__('city.add new cities')}}</a></li>
                </ul>
            </li>
            {{-- End cities --}}

            {{--      /////////////////////////////      --}}



            {{-- Start levels --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('level.levels')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('levels.index')}}">{{__('level.all levels')}}</a></li>
                    <li><a href="{{route('levels.create')}}">{{__('level.add new levels')}}</a></li>
                </ul>
            </li>
            {{-- End levels --}}

            {{--      /////////////////////////////      --}}


            {{-- Start subjects --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('subject.subjects')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('subjects.index')}}">{{__('subject.all subjects')}}</a></li>
                    <li><a href="{{route('subjects.create')}}">{{__('subject.add new subjects')}}</a></li>
                </ul>
            </li>
            {{-- End subjects --}}

            {{--      /////////////////////////////      --}}



            {{-- Start groups --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('group.groups')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('groups.index')}}">{{__('group.all groups')}}</a></li>
                    <li><a href="{{route('groups.create')}}">{{__('group.add new groups')}}</a></li>
                </ul>
            </li>
            {{-- End groups --}}

            {{--      /////////////////////////////      --}}


            {{-- Start categories --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('category.categories')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categories.index')}}">{{__('category.all categories')}}</a></li>
                    <li><a href="{{route('categories.create')}}">{{__('category.add new categories')}}</a></li>
                </ul>
            </li>
            {{-- End categories --}}

            {{--      /////////////////////////////      --}}


            {{-- Start courses --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('course.courses')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('courses.index')}}">{{__('course.all courses')}}</a></li>
                    <li><a href="{{route('courses.create')}}">{{__('course.add new courses')}}</a></li>
                </ul>
            </li>
            {{-- End courses --}}

            {{--      /////////////////////////////      --}}



            {{-- Start lectures --}}
            <li>
                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">{{__('lecture.lectures')}} </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('lectures.index')}}">{{__('lecture.all lectures')}}</a></li>
                    <li><a href="{{route('lectures.create')}}">{{__('lecture.add new lectures')}}</a></li>
                </ul>
            </li>
            {{-- End lectures --}}

            {{--      /////////////////////////////      --}}


        </ul>

        <div class="copyright">
            <p><strong>Almin</strong> © 2022 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by programmers Caffe</p>
        </div>
    </div>
</div>
