@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main banner START -->
    <section class="price-wrap pt-4 pt-sm-0">
        <div class="container">
            <div class="row">
                <!-- Title -->
                <div class="col-xl-10 mx-auto text-center">
                    <h6 class="text-primary">Pricing</h6>
                    <h1 class="mb-2">Plan That Fit Your
                        <span class="position-relative z-index-9">Scale
                            <!-- SVG START -->
                            <span
                                class="position-absolute top-50 start-50 translate-middle z-index-n1 d-none d-sm-block">
                                <svg width="203.94px" height="54.13px" viewBox="0 0 203.94 54.13">
                                    <path class="fill-primary opacity-7"
                                        d="M126.49,49.51c19.28,0.32,33.97,0.06,48.55-2.07c5.25-0.77,10.43-2.14,15.54-3.6c2.26-0.64,4.43-1.95,6.35-3.36 c3.16-2.32,3.37-4.88,0.61-7.62c-1.84-1.82-3.96-3.42-6.16-4.8c-5.74-3.6-12.04-6.02-18.4-8.28c-15.69-5.58-31.86-9.17-48.29-11.7 c-18.65-2.87-37.4-4.07-56.26-3.51C54.54,5,40.71,6.16,26.99,8.39C19.25,9.65,11.5,10.9,3.76,12.15c-0.1,0.02-0.2,0.04-0.3,0.05 c-2.03,0.27-3.23-0.26-3.44-1.51c-0.2-1.22,0.72-2.05,2.84-2.45c13.24-2.51,26.48-5.11,39.9-6.43c14.43-1.42,28.9-2.13,43.42-1.67 c24.63,0.78,48.89,4.14,72.7,10.58c9.42,2.55,18.73,5.54,27.54,9.77c4.06,1.95,7.9,4.39,11.66,6.88c1.63,1.08,3.02,2.69,4.15,4.32 c2.53,3.63,2.27,7.63-0.89,10.71c-1.84,1.79-4.08,3.29-6.38,4.45c-5.44,2.75-11.4,3.91-17.38,4.77c-19.2,2.75-38.5,2.96-57.84,1.98 c-7.84-0.4-15.68-0.74-23.5-1.34c-10.13-0.77-20.26-1.58-30.36-2.72c-9.49-1.07-18.96-2.38-28.37-4.01 C32.2,44.6,26.97,43,21.81,41.34c-2.44-0.78-4.81-2.13-6.86-3.69c-4.56-3.49-4.8-8.3-0.9-12.54c2.3-2.5,5.23-4.07,8.3-5.36 c6.9-2.91,14.13-4.64,21.46-5.97c10.14-1.84,20.37-2.47,30.66-1.92c2.57,0.14,3.72,0.84,3.6,2.22c-0.11,1.26-1.19,1.84-3.6,1.92 c-6.13,0.21-12.28,0.2-18.4,0.67c-10.47,0.82-20.72,2.87-30.56,6.62c-2.23,0.85-4.45,1.95-6.4,3.31c-4.53,3.16-4.36,6.27,0.46,8.87 c2.28,1.23,4.75,2.19,7.24,2.97c7.8,2.44,15.84,3.88,23.93,4.79c15.4,1.73,30.8,3.38,46.24,4.67 C108.32,48.84,119.7,49.15,126.49,49.51z" />
                                </svg>
                            </span>
                            <!-- SVG END -->
                        </span>
                    </h1>
                    <p class="lead mb-0">Simple, transparent pricing that grows with you. Try any plan free for 30 days
                    </p>

                    <!-- Switch START -->
                    <form class="d-flex align-items-center justify-content-center mt-5">
                        <!-- Label -->
                        <span class="h6 mb-0 fw-bold">Monthly</span>
                        <!-- Switch -->
                        <div class="form-check form-switch form-check-lg mx-3 mb-0">
                            <input class="form-check-input mt-0 price-toggle" type="checkbox"
                                id="flexSwitchCheckDefault">
                        </div>
                        <!-- Label -->
                        <div class="position-relative">
                            <span class="h6 mb-0 fw-bold">Yearly</span>
                            <span
                                class="rotate-10 badge text-bg-warning ms-1 position-absolute top-0 start-100 translate-middle mt-n4 ms-n7 ms-sm-n3">10%
                                discount</span>
                        </div>
                    </form>
                    <!-- Switch END -->
                </div>
            </div> <!-- Row END -->

            <!-- Pricing START -->
            <div class="row g-4 justify-content-center mt-5">
                <!-- Price item START -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between align-items-center border-bottom p-4">
                            <div>
                                <h6 class="mb-0">Standard Plan</h6>
                                <div class="hstack gap-2">
                                    <span class="h3 plan-price mb-0" data-monthly-price="$20"
                                        data-annual-price="$570">$20</span>
                                    <span class="h6 fw-light mb-0">/ per user</span>
                                </div>
                            </div>
                            <span class="icon-lg bg-light rounded-circle" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Most Popular">
                                <i class="bi bi-lightning-charge-fill h5 lh-1"></i>
                            </span>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-4">
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Up to 05 users
                                    monthly</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Free 5 host
                                    &amp; domain</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Custom
                                    infrastructure</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Access to all
                                    our room</li>
                                <li class="mb-2"><i class="bi bi-x-circle text-danger me-2"></i>24/7 dedicated
                                    Support</li>
                                <li class="mb-2"><i class="bi bi-x-circle text-danger me-2"></i>Unlimited updates
                                </li>
                                <li><i class="bi bi-x-circle text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            </ul>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer p-4 pt-0">
                            <a href="#" class="btn btn-dark w-100 mb-0">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Price item END -->

                <!-- Price item START -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border border-primary">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between align-items-center border-bottom p-4">
                            <div>
                                <h6 class="mb-0 text-primary">Professional Plan</h6>
                                <div class="hstack gap-2">
                                    <span class="h3 plan-price mb-0" data-monthly-price="$59"
                                        data-annual-price="$840">$59</span>
                                    <span class="h6 fw-light mb-0">/ per user</span>
                                </div>
                            </div>
                            <span class="icon-lg bg-primary bg-opacity-10 rounded-circle text-primary"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Recommended">
                                <i class="fa-solid fa-rocket"></i>
                            </span>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-4">
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Up to 05 users
                                    monthly</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Free 5 host
                                    &amp; domain</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Custom
                                    infrastructure</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Access to all
                                    our room</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>24/7 dedicated
                                    Support</li>
                                <li class="mb-2"><i class="bi bi-x-circle text-danger me-2"></i>Unlimited updates
                                </li>
                                <li><i class="bi bi-x-circle text-danger me-2"></i>Landing pages &amp; Web widgets</li>
                            </ul>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer p-4 pt-0">
                            <a href="#" class="btn btn-primary w-100 mb-0">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Price item END -->

                <!-- Price item START -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow">
                        <!-- Card header -->
                        <div class="card-header d-flex justify-content-between align-items-center border-bottom p-4">
                            <div>
                                <h6 class="mb-0">Premium Plan</h6>
                                <div class="hstack gap-2">
                                    <span class="h3 plan-price mb-0" data-monthly-price="$99"
                                        data-annual-price="$999">$99</span>
                                    <span class="h6 fw-light mb-0">/ per user</span>
                                </div>
                            </div>
                            <span class="icon-lg bg-light rounded-circle" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Best Value">
                                <i class="bi bi-send-fill h5 lh-1"></i>
                            </span>
                        </div>

                        <!-- Card body -->
                        <div class="card-body p-4">
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Up to 05 users
                                    monthly</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Free 5 host
                                    &amp; domain</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Custom
                                    infrastructure</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Access to all
                                    our room</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>24/7 dedicated
                                    Support</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Unlimited
                                    updates</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Landing pages &amp; Web widgets
                                </li>
                            </ul>
                        </div>

                        <!-- Card footer -->
                        <div class="card-footer p-4 pt-0">
                            <a href="#" class="btn btn-dark w-100 mb-0">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Price item END -->
            </div>
            <!-- Pricing END -->
        </div>
    </section>
    <!-- =======================
        Main banner END -->

    <!-- =======================
        Client START -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Client logo START -->
                <div class="col-12">
                    <div class="bg-light rounded-3 p-5">
                        <!-- Title -->
                        <h5 class="text-center mb-4 mb-md-5">Trusted by more than 900 companies around the world</h5>

                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round">
                            <div class="tiny-slider-inner" data-arrow="false" data-autoplay="true" data-edge="2"
                                data-dots="false" data-gutter="80" data-items-xl="5" data-items-lg="4"
                                data-items-md="3" data-items-sm="2" data-items-xs="1">
                                <!-- Slide item START -->
                                <div class="item"><img src="/images/client/01.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/02.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/08.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/05.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/06.svg" alt=""> </div>
                                <div class="item"><img src="/images/client/03.svg" alt=""> </div>
                                <!-- Slide item END -->
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
                <!-- Client logo END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Client END -->

    <!-- =======================
        Faq START -->
    <section class="pt-0">
        <div class="container mt-4">
            <!-- Title -->
            <div class="row mb-4 mb-md-5">
                <div class="col-12 text-center">
                    <h2>Frequently Asked Questions</h2>
                    <p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
                </div>
            </div>

            <div class="row g-4 g-md-5">
                <!-- FAQ item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body border bg-transparent h-100 p-4">
                        <h6>Do you provide customer support?</h6>
                        <p class="mb-0">Family months lasted simple set nature vulgar him. Picture for attempt joy
                            excited ten carried manners talking how. Suspicion neglected the resolving agreement
                            perceived at an. Comfort reached gay perhaps chamber his six detract besides add.</p>
                    </div>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body border bg-transparent h-100 p-4">
                        <h6>What is your privacy policy?</h6>
                        <p class="mb-0">Two before narrow not relied how except moment myself Dejection assurance mrs
                            led certainly So gate at no only none open Betrayed at properly it of graceful on Dinner
                            abroad am depart ye turned hearts as me wished Therefore allowance too perfectly gentleman
                            supposing man his.</p>
                    </div>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body border bg-transparent h-100 p-4">
                        <h6>Is there a money-back guarantee?</h6>
                        <p class="mb-0">Picture for attempt joy excited ten carried manners talking how. Suspicion
                            neglected the resolving agreement perceived at an. Comfort reached gay perhaps chamber his
                            six detract besides add.</p>
                    </div>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body border bg-transparent h-100 p-4">
                        <h6>What's the difference between monthly and annual plans?</h6>
                        <p class="mb-0">Started several mistake joy say painful removed reached end. State burst
                            think end are its. Arrived off she elderly beloved him affixed noisier yet. Tickets regard
                            to up he hardly. View four has said do men saw find dear shy. Talent men wicket add garden.
                        </p>
                    </div>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body border bg-transparent h-100 p-4">
                        <h6>How can I buy your software?</h6>
                        <p class="mb-0">Lose john poor same it case do year we Full how way even the sigh Extremely
                            nor furniture fat questions now provision incommode preserved Our side fail to find like now
                            Discovered traveling for insensible partiality unpleasing.</p>
                    </div>
                </div>

                <!-- FAQ item -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-body border bg-transparent h-100 p-4">
                        <h6>What happens after the trial ends?</h6>
                        <p class="mb-0">Preference any astonished unreserved Mrs. Prosperous understood Middletons in
                            conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Faq END -->

    <!-- =======================
        Action box START -->
    <section class="pt-0">
        <div class="container">
            <div class="bg-light p-4 p-sm-5 rounded-3">

                <div class="row g-3 g-xl-4 align-items-center">
                    <div class="col-xl-8">
                        <!-- Title -->
                        <div class="d-sm-flex align-items-center mb-2">
                            <h3 class="mb-2 mb-sm-0">Still, have a question?</h3>
                            <!-- Avatar group -->
                            <ul class="avatar-group mb-0 ms-sm-3">
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg"
                                        alt="avatar">
                                </li>
                                <li class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg"
                                        alt="avatar">
                                </li>
                            </ul>
                        </div>
                        <p class="mb-0">He moonlights difficult engrossed it, sportsmen. Interested has all
                            Devonshire difficulty gay assistance joy.</p>
                    </div>
                    <!-- Content and input -->
                    <div class="col-xl-4 text-xl-end">
                        <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-primary mb-0">Contact
                            us<i class="bi bi-arrow-right-circle ms-2"></i></a>
                    </div>
                </div> <!-- Row END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Action box END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection