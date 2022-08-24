@extends('layouts.web.app')


@section('content')
    <section class="page-header -type-4 bg-beige-1">
        <div class="container">
            <div class="page-header__content">
                <div class="row">
                    <div class="col-auto">
                        <div data-anim="slide-up delay-1">
                            <h1 class="page-header__title">Contact Us</h1>
                        </div>

                        <div data-anim="slide-up delay-2">
                            <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row y-gap-50 justify-between">
                <div class="col-xl-5 col-lg-6">
                    <h3 class="text-24 lh-1 fw-500">Our offices</h3>
                    <div class="row y-gap-30 pt-40">

                        <div class="col-sm-6">
                            <div class="text-20 fw-500 text-dark-1">Rashid</div>
                            <div class="y-gap-10 pt-15">
                                <a href="#" class="d-block">Green Salon St., next to Barghout Mall, in front of Halach Beauty.</a>
                                <a href="#" class="d-block">+20 101 6600 240</a>
                                <a href="#" class="d-block">3lmniacademy@gmail.com</a>
                            </div>
                        </div>

                    </div>
                </div>
                @livewire('contact')
            </div>
        </div>
    </section>

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.3480985587885!2d30.417331515545385!3d31.404534059994084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f68985a3eaaebf%3A0x43d1dc2fffe701cb!2sPUBG-shoes%20shop!5e0!3m2!1sen!2seg!4v1658416794809!5m2!1sen!2seg" style="width: 100%; height: 600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>              </div>
    </section>
@endsection
