<div class="sidebar -dashboard">

    <div class="sidebar__item {{routeActive('web.profile')}} -dark-bg-dark-2">
        <a href="{{route('web.profile')}}" class="d-flex items-center text-17 lh-1 fw-500 ">
            <i class="text-20 icon-discovery mr-15"></i>
            {{__('home.Dashboard')}}
        </a>
    </div>

    <div class="sidebar__item {{routeActive('web.profile.courses')}}">
        <a href="{{route('web.profile.courses')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
            <i class="text-20 icon-play-button mr-15"></i>
            {{__('course.My courses')}}
        </a>
    </div>

    <div class="sidebar__item {{routeActive('web.profile.settings')}} -dark-bg-dark-2">
        <a href="{{route('web.profile.settings')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
            <i class="text-20 icon-setting mr-15"></i>
            {{__('home.Settings')}}
        </a>
    </div>

    <div class="sidebar__item ">
        <a href="{{ route('logout') }}" class="d-flex items-center text-17 lh-1 fw-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="text-20 icon-power mr-15"></i>
            {{__('home.logout')}}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

</div>
