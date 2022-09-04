@extends('layouts.web.instructors.app')


@section('title') {{__('question.edit option')}} @endsection
@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">
            @include('layouts.web.instructors.sidebar')
        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
                <div class="row pb-50 mb-10">
                    <div class="col-auto">
                        <h1 class="text-30 lh-12 fw-700">{{__('question.edit option')}}</h1>
                        <div class="mt-10">{{__('question.check options data')}}</div>
                    </div>
                </div>

                <div class="row y-gap-60">
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                <h2 class="text-17 lh-1 fw-500">{{__('question.options data')}}</h2>
                            </div>

                            <div class="py-30 px-30">
                                <form class="contact-form row y-gap-30" action="{{route('options.update',$o)}}" method="post">
                                    @csrf
                                    {{ method_field('put') }}
                                    @include('web.instructors.options.form')

                                    <div class="row y-gap-20 justify-between pt-15">
                                        <div class="col-auto">
                                            <button type="submit" class="button -md -purple-1 text-white">{{__('home.create')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.web.instructors.footer')
        </div>
    </div>
@endsection
