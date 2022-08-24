@extends('layouts.web.app')
@section('content')
    <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="breadcrumbs__content">
                        <div class="breadcrumbs__item ">
                            <a href="{{route('home')}}">{{__('home.home')}}</a>
                        </div>

                        <div class="breadcrumbs__item ">
                            <a href="{{route('categories')}}">{{__('category.categories')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-header -type-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">
                            <h1 class="page-header__title">{{__('category.categories')}}</h1>
                        </div>
                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text">All categories known on the 3lmniAcademy website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-30">
                @foreach($categories as $category)
                <div data-anim-child="slide-up delay-{{$loop->iteration}}" class="col-lg-4 col-md-6">
                    <a href="{{route('category',$category->slug)}}" class="categoryCard -type-4">
                        <div class="categoryCard__icon bg-light-3">
                            <i class="icon {{$category->icon}}"></i>
                        </div>
                        <div class="categoryCard__content mt-10">
                            <h4 class="categoryCard__title text-17 fw-500">{{$category->name}}</h4>
                            <div class="categoryCard__text text-13 text-light-1 lh-1 mt-5">{{$category->courses->count()}}+ {{__('course.course')}}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="row justify-center pt-90 lg:pt-50">
                <div class="col-auto">
                    <div class="pagination -buttons">
                        <button class="pagination__button -prev">
                            <i class="icon icon-chevron-left"></i>
                        </button>

                        <div class="pagination__count">
                            <a href="#">1</a>
                            <a class="-count-is-active" href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">67</a>
                        </div>

                        <button class="pagination__button -next">
                            <i class="icon icon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
