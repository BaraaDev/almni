@extends('layouts.web.app')

@section('content')
    <section class="no-page layout-pt-lg layout-pb-lg bg-beige-1">
        <div class="container">
            <div class="row y-gap-50 justify-between items-center">
                <div class="col-lg-6">
                    <div class="no-page__img">
                        <img src="img/404/1.svg" alt="image">
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="no-page__content">
                        <h1 class="no-page__main text-dark-1">
                            <span class="text-purple-1">@yield('message')</span>
                        </h1>
                        <h2 class="text-35 lh-12 mt-5">Oops! It looks like you're lost.</h2>
                        <div class="mt-10">The page you're looking for isn't available. Try to search again<br> or use the go to.</div>
                        <button class="button -md -purple-1 text-white mt-20">Go Back To Homepage</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>
</html>


--}}
