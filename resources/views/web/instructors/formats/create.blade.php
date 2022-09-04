@extends('layouts.web.instructors.app')
@inject('format','App\Models\Format')

@section('title') {{__('question.add new formats')}} @endsection
@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">
            @include('layouts.web.instructors.sidebar')
        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
                <div class="row pb-50 mb-10">
                    <div class="col-auto">
                        <h1 class="text-30 lh-12 fw-700">{{__('question.add new formats')}}</h1>
                        <div class="breadcrumbs mt-10 pt-0 pb-0">
                            <div class="breadcrumbs__content">
                                <div class="breadcrumbs__item">
                                    <a href="{{route('home')}}">{{__('home.home')}}</a>
                                </div>
                                <div class="breadcrumbs__item">
                                    <a href="{{route('formats.index')}}">{{__('question.formats')}}</a>
                                </div>
                                <div class="breadcrumbs__item">
                                    <a href="javascript:void(0);">{{__('question.add format')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.web.alert.validation-errors')
                <div class="row y-gap-60">
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                <h2 class="text-17 lh-1 fw-500">{{__('question.formats data')}}</h2>
                            </div>

                            <div class="py-30 px-30">
                                <form class="contact-form row y-gap-30" action="{{route('formats.store')}}" method="post">
                                    @csrf
                                    @include('web.instructors.formats.form')

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
