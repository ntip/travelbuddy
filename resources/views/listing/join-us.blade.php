@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main Banner START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <!-- Title -->
                    <h1 class="mb-4 display-5">List Your Property at <span class="text-primary">Booking</span></h1>
                    <!-- Info -->
                    <p class="mb-4">Speedily say has suitable disposal add boy. On forth doubt miles of child.
                        Exercise joy man children rejoiced.</p>
                    <!-- Button -->
                    <a href="{{ route('second', ['listing', 'add-listing']) }}"
                        class="btn btn-primary-soft mb-4">Add Listing <i
                            class="fa-solid fa-arrow-right-long fa-fw"></i></a>
                    <!-- List -->
                    <h6 class="fw-normal mb-1">Create New Listing</h6>
                    <ul class="list-group list-group-borderless mb-0 small">
                        <li class="list-group-item d-flex mb-0">
                            <i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>More than 5.1 million
                            holiday rentals already listed
                        </li>
                        <li class="list-group-item d-flex mb-0">
                            <i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>Bed one supposing breakfast
                            day fulfilled off depending questions.
                        </li>
                        <li class="list-group-item d-flex mb-0">
                            <i class="fa-solid fa-check-circle text-success me-2 mt-1"></i>The difference in the cost
                            shall be borne by the client in case.
                        </li>
                    </ul>
                </div>
                <!-- Image -->
                <div class="col-lg-5 text-center">
                    <img src="/images/element/join-us.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Counter START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <!-- Title -->
                <div class="col-sm-6 col-md-3">
                    <h4 class="mb-0">Numbers In Worldwide</h4>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="card card-body text-center bg-light">
                        <div class="d-flex justify-content-center">
                            <h3 class="purecounter text-orange mb-0" data-purecounter-start="0"
                                data-purecounter-end="28" data-purecounter-delay="300">0</h3>
                            <span class="h3 text-orange mb-0">M+</span>
                        </div>
                        <h6 class="fw-normal mb-0">Total Users</h6>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="card card-body text-center bg-light">
                        <div class="d-flex justify-content-center">
                            <h3 class="purecounter text-info mb-0" data-purecounter-start="0"
                                data-purecounter-end="51" data-purecounter-delay="300">0</h3>
                            <span class="h3 text-info mb-0">M+</span>
                        </div>
                        <h6 class="fw-normal mb-0">Total Listing</h6>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-md-3">
                    <div class="card card-body text-center bg-light">
                        <div class="d-flex justify-content-center">
                            <h3 class="purecounter text-primary mb-0" data-purecounter-start="0"
                                data-purecounter-end="41" data-purecounter-delay="300">0</h3>
                            <span class="h3 text-primary mb-0">+</span>
                        </div>
                        <h6 class="fw-normal mb-0">Languages</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Counter END -->

    <!-- =======================
    Benefits START -->
    <section class="pt-0 pt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 p-sm-5 rounded-3">
                        <!-- Title -->
                        <h2 class="fs-3 text-center mb-4 mb-sm-5">Why Working with us</h2>

                        <div class="row g-4">
                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="/images/element/18.svg" class="h-70px mb-3" alt=""></div>
                                    <h5>List any type of properties</h5>
                                    <p class="mb-0">Speedily say has suitable disposal add boy. On forth doubt miles
                                        of child. Exercise joy man children rejoiced.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="/images/element/21.svg" class="h-70px mb-3" alt=""></div>
                                    <h5>Import detail easily</h5>
                                    <p class="mb-0">Two before narrow not relied on how except moment myself
                                        Dejection assurance Mrs led certainly open Betrayed.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="/images/element/19.svg" class="h-70px mb-3" alt=""></div>
                                    <h5>Step by step guide</h5>
                                    <p class="mb-0">Rooms oh fully taken by worse do. Points afraid but may end
                                        law.Points afraid but may end law.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="/images/element/20.svg" class="h-70px mb-3" alt=""></div>
                                    <h5>Marvelous discounts</h5>
                                    <p class="mb-0">Prospective should start broadly and then narrow their list down
                                        to colleges that best fit experts</p>
                                </div>
                            </div>
                            <!-- Card END -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Benefits END -->

    <!-- =======================
    Testimonials START -->
    <section>
        <div class="container">
            <div class="row justify-content-between mb-5">
                <!-- Title -->
                <div class="col-md-6">
                    <h2 class="mb-0">What client say about Booking</h2>
                </div>
                <!-- Info -->
                <div class="col-md-5">
                    <p class="mb-0">As it so contrasted oh estimating instrument. Size like body some one had.
                        Departure defective arranging rapturous did. Conduct denied adding worthy little.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-3">

                </div>


                <!-- Testimonials START -->
                <div class="col-lg-9">
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false"
                            data-items="1">
                            <!-- Slider item START -->
                            <div>
                                <div class="row g-4">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <img src="/images/team/09.jpg" class="rounded" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="col-md-8">
                                        <div class="d-flex">
                                            <!-- Quotation -->
                                            <span class="display-5 opacity-2"><i class="bi bi-quote"></i></span>
                                            <!-- Content -->
                                            <div class="ms-3">
                                                <h5 class="mb-3 text-primary">Fantastic job done by booking</h5>
                                                <p class="mb-3">Size like body some one had. Departure defective
                                                    arranging rapturous did. Speedily say has suitable disposal add boy.
                                                    On forth doubt miles of child. Exercise joy man children rejoiced.
                                                    Conduct denied adding worthy little. Departure defective arranging
                                                    rapturous did. Conduct denied adding worthy little.</p>

                                                <h6 class="mb-0">Lori Stevens</h6>
                                                <small>CEO of Blogzine</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider item end -->

                            <!-- Slider item START -->
                            <div>
                                <div class="row g-4">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <img src="/images/team/06.jpg" class="rounded" alt="">
                                    </div>
                                    <!-- Content -->
                                    <div class="col-md-8">
                                        <div class="d-flex">
                                            <!-- Quotation -->
                                            <span class="display-5 opacity-2"><i class="bi bi-quote"></i></span>
                                            <!-- Content -->
                                            <div class="ms-3">
                                                <h5 class="mb-3 text-primary">Fantastic job done by booking</h5>
                                                <p class="mb-3">Size like body some one had. Departure defective
                                                    arranging rapturous did. Speedily say has suitable disposal add boy.
                                                    On forth doubt miles of child. Exercise joy man children rejoiced.
                                                    Conduct denied adding worthy little. Departure defective arranging
                                                    rapturous did. Conduct denied adding worthy little.</p>

                                                <h6 class="mb-0">Dennis Barrett</h6>
                                                <small>CEO of Wizixo</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider item end -->

                        </div>
                    </div>
                </div>
                <!-- Testimonials END -->
            </div>

        </div>
    </section>
    <!-- =======================
    Testimonials END -->

    <!-- =======================
    Action box START -->
    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <!-- Action box START -->
                    <div class="card card-body shadow p-4">
                        <div class="row g-4 justify-content-between align-items-center">
                            <!-- Image -->
                            <div class="col-sm-3 col-lg-2">
                                <img src="/images/element/22.svg" alt="">
                            </div>

                            <!-- Title and content -->
                            <div class="col-sm-9 col-lg-6 col-xl-7">
                                <h4>Why did you choose us</h4>
                                <p class="mb-0">Water timed folly right aware if oh truth. Large above be to means.
                                    Dashwood does provide stronger is.</p>
                            </div>

                            <!-- Button -->
                            <div class="col-lg-3 col-xxl-2 d-grid">
                                <a href="#" class="btn btn-primary mb-0">Become a host</a>
                            </div>
                        </div>
                    </div>
                    <!-- Action box END -->
                </div>
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