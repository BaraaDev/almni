<footer class="footer -dashboard py-30">
    <div class="row items-center justify-between">
        <div class="col-auto">
            <div class="text-13 lh-1">3lmin © {{date('Y')}}, All Right Reserved.</div>
        </div>

        <div class="col-auto">
            <div class="d-flex items-center">
                <div class="d-flex items-center flex-wrap x-gap-20">
                    <div>
                        <a href="{{route('help_center')}}" class="text-13 lh-1">{{__('home.Help Center')}}</a>
                    </div>
                    <div>
                        <a href="{{route('terms')}}" class="text-13 lh-1">{{__('home.Terms')}}</a>
                    </div>
                    <div>
                        <a href="{{route('about')}}" class="text-13 lh-1">{{__('home.About')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
