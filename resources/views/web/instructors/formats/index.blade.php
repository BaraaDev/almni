@extends('layouts.web.instructors.app')
@inject('format','App\Models\Format')

@section('title') {{__('question.formats')}} @endsection

@section('content')
    <div class="dashboard -home-9 js-dashboard-home-9">
        <div class="dashboard__sidebar scroll-bar-1">
            @include('layouts.web.instructors.sidebar')
        </div>

        <div class="dashboard__main">
            <div class="dashboard__content bg-light-4">
                <div class="row pb-50 mb-10">
                    <div class="col-auto">

                        <h1 class="text-30 lh-12 fw-700">{{__('question.formats')}}</h1>

                        <div class="breadcrumbs mt-10 pt-0 pb-0">
                            <div class="breadcrumbs__content">
                                <div class="breadcrumbs__item">
                                    <a href="{{route('home')}}">{{__('home.home')}}</a>
                                </div>
                                <div class="breadcrumbs__item">
                                    <a href="{{route('formats.index')}}">{{__('question.formats')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                @include('layouts.web.alert.success')

                <div class="row y-gap-30">
                    <div class="col-xl-9">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                            <div class="py-30 px-30">
                                @forelse($formats as $format)
                                <div class="border-light overflow-hidden rounded-8">

                                    <div class="py-40 px-40 bg-dark-5">
                                        <div class="d-flex justify-between">
                                            <h4 class="text-18 lh-1 fw-500 text-white">{{__('question.questions') . ' ' . $format->questions->count()}}</h4>
                                            <div class="d-flex x-gap-50">
                                                <a href="{{route('formats.show',$format->id)}}">
                                                    <div class="d-flex items-center text-white">
                                                        <div class="fas fa-eye mr-10"></div>
                                                        <div>{{__('question.show questions')}}</div>
                                                    </div>
                                                </a>
                                                <a href="{{route('formats.edit',$format->id)}}">
                                                <div class="d-flex items-center text-white">
                                                    <div class="icon-edit mr-10"></div>
                                                    <div>{{__('question.edit format')}}</div>
                                                </div>
                                                </a>
                                                {!! Form::open([
                                                    'route' => ['formats.destroy',$format->id],
                                                    'method' => 'delete'
                                                ])!!}
                                                <button onclick="return confirm('{{__('home.Are you sure to delete')}}');">
                                                <div class="d-flex items-center text-white">
                                                    <div class="fas fa-trash mr-10"></div>
                                                    <div>{{__('question.delete format')}}</div>
                                                </div>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>

                                        <div class="text-20 lh-1 text-white mt-15">{{$format->title}}</div>
                                    </div>
                                </div>

                                @empty
                                    <div class="alert alert-danger">
                                        {{__('home.There is no data')}}
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3">
                        <div class="row y-gap-30">
                            <div class="col-12">
                                <div class="pt-20 pb-30 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <h5 class="text-17 fw-500 mb-30">Quiz Complite</h5>

                                    <div class="d-flex items-center">
                                        <div class="progress-bar w-1/1">
                                            <div class="progress-bar__bg bg-light-3"></div>
                                            <div class="progress-bar__bar bg-purple-1 w-1/4"></div>
                                        </div>

                                        <div class="d-flex y-gap-10 justify-between items-center ml-15">
                                            <div>25%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="pt-20 pb-30 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                                    <h5 class="text-17 fw-500 mb-30">Quiz Navigation</h5>

                                    <div class="row x-gap-10 y-gap-10">

                                        <div class="col-auto">
                                            <a href="#" class="button -single-icon -light-3 text-dark-1 size-35 rounded-8">
                                                <div class="text-15 lh-1 fw-500">1</div>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <a href="#" class="button -single-icon -light-3 text-dark-1 size-35 rounded-8">
                                                <div class="text-15 lh-1 fw-500">2</div>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <a href="#" class="button -single-icon -light-3 text-dark-1 size-35 rounded-8">
                                                <div class="text-15 lh-1 fw-500">3</div>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <a href="#" class="button -single-icon -light-3 text-dark-1 size-35 rounded-8">
                                                <div class="text-15 lh-1 fw-500">4</div>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <a href="#" class="button -single-icon -light-3 text-dark-1 size-35 rounded-8">
                                                <div class="text-15 lh-1 fw-500">5</div>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <a href="#" class="button -single-icon -light-3 text-dark-1 size-35 rounded-8">
                                                <div class="text-15 lh-1 fw-500">6</div>
                                            </a>
                                        </div>

                                    </div>

                                    <button class="button -md -dark-1 text-white -dark-button-white mt-30">Finish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @include('layouts.web.instructors.footer')
        </div>
    </div>
@endsection
