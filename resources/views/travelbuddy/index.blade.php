@extends('layouts.base')

@section('body-attributes')
class="has-navbar-mobile"
@endsection

@section('header')
@endsection
    @include('partials.header')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- =======================
    Main Banner START -->
    <section class="py-0">
        <div class="container">
            <!-- Background image -->
            <div class="rounded-3 p-3 p-sm-5" style="background-image: url(/images/bg/01.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <!-- Banner title -->
                <div class="row">
                    <div class="col-md-10 mx-auto text-center">
                        <h1 class="text-dark display-3 pt-sm-5 my-5">Ready to take off?</h1>
                    </div>
                </div>

                <!-- Booking from START -->
                <form class="bg-mode position-relative px-3 px-sm-4 pt-4 mb-4 mb-sm-0">

                    <!-- Svg decoration -->
                    <figure class="position-absolute top-0 start-0 h-100 ms-n2 ms-sm-n1">
                        <svg class="h-100" viewBox="0 0 12.9 324" style="enable-background:new 0 0 12.9 324;">
                            <path class="fill-mode" d="M9.8,316.4c1.1-26.8,2-53.4,1.9-80.2c-0.1-18.2-0.8-36.4-1.2-54.6c-0.2-8.9-0.2-17.7,0.8-26.6 c0.5-4.5,1.1-9,1.4-13.6c0.1-1.9,0.1-3.7,0.1-5.6c-0.2-0.2-0.6-1.5-0.2-3.1c-0.3-1.8-0.4-3.7-0.4-5.5c-1.2-3-1.8-6.3-1.7-9.6 c0.9-19,0.5-38.1,0.8-57.2c0.3-17.1,0.6-34.2,0.2-51.3c-0.1-0.6-0.1-1.2-0.1-1.7c0-0.8,0-1.6,0-2.4c0-0.5,0-1.1,0-1.6 c0-1.2,0-2.3,0.2-3.5H0v11.8c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V31c3.3,0,6.1,2.7,6.1,6.1S3.3,43.3,0,43.3v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 s-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V324h9.5C9.6,321.4,9.7,318.8,9.8,316.4z"/>
                        </svg>
                    </figure>

                    <!-- Svg decoration -->
                    <figure class="position-absolute top-0 end-0 h-100 rotate-180 me-n2 me-sm-n1">
                        <svg class="h-100" viewBox="0 0 21 324" style="enable-background:new 0 0 21 324;">
                            <path class="fill-mode" d="M9.8,316.4c1.1-26.8,2-53.4,1.9-80.2c-0.1-18.2-0.8-36.4-1.2-54.6c-0.2-8.9-0.2-17.7,0.8-26.6 c0.5-4.5,1.1-9,1.4-13.6c0.1-1.9,0.1-3.7,0.1-5.6c-0.2-0.2-0.6-1.5-0.2-3.1c-0.3-1.8-0.4-3.7-0.4-5.5c-1.2-3-1.8-6.3-1.7-9.6 c0.9-19,0.5-38.1,0.8-57.2c0.3-17.1,0.6-34.2,0.2-51.3c-0.1-0.6-0.1-1.2-0.1-1.7c0-0.8,0-1.6,0-2.4c0-0.5,0-1.1,0-1.6 c0-1.2,0-2.3,0.2-3.5H0v11.8c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V31c3.3,0,6.1,2.7,6.1,6.1S3.3,43.3,0,43.3v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 s-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V324h9.5C9.6,321.4,9.7,318.8,9.8,316.4z"/>
                        </svg>
                    </figure>

                    <div class="row g-4">

                        <!-- Nav tabs START -->
                        <div class="col-lg-6">
                            <ul class="nav nav-pills nav-pills-dark" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link mb-0 active" id="pills-one-way-tab" data-bs-toggle="pill" data-bs-target="#pills-one-way" type="button" role="tab" aria-selected="true">One Way</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link mb-0" id="pills-round-trip-tab" data-bs-toggle="pill" data-bs-target="#pills-round-trip" type="button" role="tab" aria-selected="false">Round Trip</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav tabs END -->

                        <!-- Ticket class -->
                        <div class="col-lg-3 ms-auto">
                            <div class="form-control-bg-light form-fs-md">
                                <select class="form-select js-choice">
                                    <option value="">Select Class</option>
                                    <option>Economy</option>
                                    <option>Premium Economy</option>
                                    <option>Business</option>
                                    <option>First Class</option>
                                </select>
                            </div>
                        </div>

                        <!-- Ticket Travelers -->
                        <div class="col-lg-3 ms-auto">
                            <div class="form-control-bg-light form-fs-md">
                                <select class="form-select js-choice">
                                    <option value="">Select Travelers</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tab content START -->
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <!-- One way tab START -->
                            <div class="tab-pane fade show active" id="pills-one-way" role="tabpanel" aria-labelledby="pills-one-way-tab">
                                <div class="row g-4">
                                    <!-- Leaving From -->
                                    <div class="col-md-6 col-lg-4 position-relative">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="">Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>

                                        <!-- Auto fill button -->
                                        <div class="btn-flip-icon mt-3 mt-md-0">
                                            <button class="btn btn-white shadow btn-round mb-0"><i class="fa-solid fa-right-left"></i></button>
                                    </div>
                                    </div>

                                    <!-- Going To -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="">Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Departure -->
                                    <div class="col-lg-4">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
                                            <input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end pt-0">
                                        <a  class="btn btn-primary mb-n4" href="#">Find ticket <i class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- One way tab END -->

                            <!-- Round way tab END -->
                            <div class="tab-pane fade" id="pills-round-trip" role="tabpanel" aria-labelledby="pills-round-trip-tab">
                                <div class="row g-4">

                                    <!-- Leaving From -->
                                    <div class="col-md-6 col-xl-3 position-relative">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="">Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>

                                        <!-- Auto fill button -->
                                        <div class="btn-flip-icon mt-3 mt-md-0">
                                            <button class="btn btn-white shadow btn-round mb-0"><i class="fa-solid fa-right-left"></i></button>
                                        </div>
                                    </div>

                                    <!-- Going To -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="">Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Departure -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
                                            <input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <!-- Return -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Return</label>
                                            <input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end pt-0">
                                        <a  class="btn btn-primary mb-n4" href="#">Find ticket <i class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Round way tab END -->
                        </div>
                        <!-- Tab content END -->
                    </div>
                </form>
                <!-- Booking from END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->



    <!-- =======================
        About START -->
    <section class="pb-0 pb-xl-5">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">
                <!-- Left side START -->
                <div class="col-lg-5 position-relative">
                    <!-- Svg Decoration -->
                    <figure class="position-absolute top-0 start-0 translate-middle z-index-1 ms-4">
                        <svg class="fill-warning" width="77px" height="77px">
                            <path
                                d="M76.997,41.258 L45.173,41.258 L67.676,63.760 L63.763,67.673 L41.261,45.171 L41.261,76.994 L35.728,76.994 L35.728,45.171 L13.226,67.673 L9.313,63.760 L31.816,41.258 L-0.007,41.258 L-0.007,35.725 L31.816,35.725 L9.313,13.223 L13.226,9.311 L35.728,31.813 L35.728,-0.010 L41.261,-0.010 L41.261,31.813 L63.763,9.311 L67.676,13.223 L45.174,35.725 L76.997,35.725 L76.997,41.258 Z" />
                        </svg>
                    </figure>

                    <!-- Svg decoration -->
                    <figure class="position-absolute bottom-0 end-0 d-none d-md-block mb-n5 me-n4">
                        <svg height="400" class="fill-primary opacity-2" viewBox="0 0 340 340">
                            <circle cx="194.2" cy="2.2" r="2.2"></circle>
                            <circle cx="2.2" cy="2.2" r="2.2"></circle>
                            <circle cx="218.2" cy="2.2" r="2.2"></circle>
                            <circle cx="26.2" cy="2.2" r="2.2"></circle>
                            <circle cx="242.2" cy="2.2" r="2.2"></circle>
                            <circle cx="50.2" cy="2.2" r="2.2"></circle>
                            <circle cx="266.2" cy="2.2" r="2.2"></circle>
                            <circle cx="74.2" cy="2.2" r="2.2"></circle>
                            <circle cx="290.2" cy="2.2" r="2.2"></circle>
                            <circle cx="98.2" cy="2.2" r="2.2"></circle>
                            <circle cx="314.2" cy="2.2" r="2.2"></circle>
                            <circle cx="122.2" cy="2.2" r="2.2"></circle>
                            <circle cx="338.2" cy="2.2" r="2.2"></circle>
                            <circle cx="146.2" cy="2.2" r="2.2"></circle>
                            <circle cx="170.2" cy="2.2" r="2.2"></circle>
                            <circle cx="194.2" cy="26.2" r="2.2"></circle>
                            <circle cx="2.2" cy="26.2" r="2.2"></circle>
                            <circle cx="218.2" cy="26.2" r="2.2"></circle>
                            <circle cx="26.2" cy="26.2" r="2.2"></circle>
                            <circle cx="242.2" cy="26.2" r="2.2"></circle>
                            <circle cx="50.2" cy="26.2" r="2.2"></circle>
                            <circle cx="266.2" cy="26.2" r="2.2"></circle>
                            <circle cx="74.2" cy="26.2" r="2.2"></circle>
                            <circle cx="290.2" cy="26.2" r="2.2"></circle>
                            <circle cx="98.2" cy="26.2" r="2.2"></circle>
                            <circle cx="314.2" cy="26.2" r="2.2"></circle>
                            <circle cx="122.2" cy="26.2" r="2.2"></circle>
                            <circle cx="338.2" cy="26.2" r="2.2"></circle>
                            <circle cx="146.2" cy="26.2" r="2.2"></circle>
                            <circle cx="170.2" cy="26.2" r="2.2"></circle>
                            <circle cx="194.2" cy="50.2" r="2.2"></circle>
                            <circle cx="2.2" cy="50.2" r="2.2"></circle>
                            <circle cx="218.2" cy="50.2" r="2.2"></circle>
                            <circle cx="26.2" cy="50.2" r="2.2"></circle>
                            <circle cx="242.2" cy="50.2" r="2.2"></circle>
                            <circle cx="50.2" cy="50.2" r="2.2"></circle>
                            <circle cx="266.2" cy="50.2" r="2.2"></circle>
                            <circle cx="74.2" cy="50.2" r="2.2"></circle>
                            <circle cx="290.2" cy="50.2" r="2.2"></circle>
                            <circle cx="98.2" cy="50.2" r="2.2"></circle>
                            <circle cx="314.2" cy="50.2" r="2.2"></circle>
                            <circle cx="122.2" cy="50.2" r="2.2"></circle>
                            <circle cx="338.2" cy="50.2" r="2.2"></circle>
                            <circle cx="146.2" cy="50.2" r="2.2"></circle>
                            <circle cx="170.2" cy="50.2" r="2.2"></circle>
                            <circle cx="194.2" cy="74.2" r="2.2"></circle>
                            <circle cx="2.2" cy="74.2" r="2.2"></circle>
                            <circle cx="218.2" cy="74.2" r="2.2"></circle>
                            <circle cx="26.2" cy="74.2" r="2.2"></circle>
                            <circle cx="242.2" cy="74.2" r="2.2"></circle>
                            <circle cx="50.2" cy="74.2" r="2.2"></circle>
                            <circle cx="266.2" cy="74.2" r="2.2"></circle>
                            <circle cx="74.2" cy="74.2" r="2.2"></circle>
                            <circle cx="290.2" cy="74.2" r="2.2"></circle>
                            <circle cx="98.2" cy="74.2" r="2.2"></circle>
                            <circle cx="314.2" cy="74.2" r="2.2"></circle>
                            <circle cx="122.2" cy="74.2" r="2.2"></circle>
                            <circle cx="338.2" cy="74.2" r="2.2"></circle>
                            <circle cx="146.2" cy="74.2" r="2.2"></circle>
                            <circle cx="170.2" cy="74.2" r="2.2"></circle>
                            <circle cx="194.2" cy="98.2" r="2.2"></circle>
                            <circle cx="2.2" cy="98.2" r="2.2"></circle>
                            <circle cx="218.2" cy="98.2" r="2.2"></circle>
                            <circle cx="26.2" cy="98.2" r="2.2"></circle>
                            <circle cx="242.2" cy="98.2" r="2.2"></circle>
                            <circle cx="50.2" cy="98.2" r="2.2"></circle>
                            <circle cx="266.2" cy="98.2" r="2.2"></circle>
                            <circle cx="74.2" cy="98.2" r="2.2"></circle>
                            <circle cx="290.2" cy="98.2" r="2.2"></circle>
                            <circle cx="98.2" cy="98.2" r="2.2"></circle>
                            <circle cx="314.2" cy="98.2" r="2.2"></circle>
                            <circle cx="122.2" cy="98.2" r="2.2"></circle>
                            <circle cx="338.2" cy="98.2" r="2.2"></circle>
                            <circle cx="146.2" cy="98.2" r="2.2"></circle>
                            <circle cx="170.2" cy="98.2" r="2.2"></circle>
                            <circle cx="194.2" cy="122.2" r="2.2"></circle>
                            <circle cx="2.2" cy="122.2" r="2.2"></circle>
                            <circle cx="218.2" cy="122.2" r="2.2"></circle>
                            <circle cx="26.2" cy="122.2" r="2.2"></circle>
                            <circle cx="242.2" cy="122.2" r="2.2"></circle>
                            <circle cx="50.2" cy="122.2" r="2.2"></circle>
                            <circle cx="266.2" cy="122.2" r="2.2"></circle>
                            <circle cx="74.2" cy="122.2" r="2.2"></circle>
                            <circle cx="290.2" cy="122.2" r="2.2"></circle>
                            <circle cx="98.2" cy="122.2" r="2.2"></circle>
                            <circle cx="314.2" cy="122.2" r="2.2"></circle>
                            <circle cx="122.2" cy="122.2" r="2.2"></circle>
                            <circle cx="338.2" cy="122.2" r="2.2"></circle>
                            <circle cx="146.2" cy="122.2" r="2.2"></circle>
                            <circle cx="170.2" cy="122.2" r="2.2"></circle>
                            <circle cx="194.2" cy="146.2" r="2.2"></circle>
                            <circle cx="2.2" cy="146.2" r="2.2"></circle>
                            <circle cx="218.2" cy="146.2" r="2.2"></circle>
                            <circle cx="26.2" cy="146.2" r="2.2"></circle>
                            <circle cx="242.2" cy="146.2" r="2.2"></circle>
                            <circle cx="50.2" cy="146.2" r="2.2"></circle>
                            <circle cx="266.2" cy="146.2" r="2.2"></circle>
                            <circle cx="74.2" cy="146.2" r="2.2"></circle>
                            <circle cx="290.2" cy="146.2" r="2.2"></circle>
                            <circle cx="98.2" cy="146.2" r="2.2"></circle>
                            <circle cx="314.2" cy="146.2" r="2.2"></circle>
                            <circle cx="122.2" cy="146.2" r="2.2"></circle>
                            <circle cx="338.2" cy="146.2" r="2.2"></circle>
                            <circle cx="146.2" cy="146.2" r="2.2"></circle>
                            <circle cx="170.2" cy="146.2" r="2.2"></circle>
                            <circle cx="194.2" cy="170.2" r="2.2"></circle>
                            <circle cx="2.2" cy="170.2" r="2.2"></circle>
                            <circle cx="218.2" cy="170.2" r="2.2"></circle>
                            <circle cx="26.2" cy="170.2" r="2.2"></circle>
                            <circle cx="242.2" cy="170.2" r="2.2"></circle>
                            <circle cx="50.2" cy="170.2" r="2.2"></circle>
                            <circle cx="266.2" cy="170.2" r="2.2"></circle>
                            <circle cx="74.2" cy="170.2" r="2.2"></circle>
                            <circle cx="290.2" cy="170.2" r="2.2"></circle>
                            <circle cx="98.2" cy="170.2" r="2.2"></circle>
                            <circle cx="314.2" cy="170.2" r="2.2"></circle>
                            <circle cx="122.2" cy="170.2" r="2.2"></circle>
                            <circle cx="338.2" cy="170.2" r="2.2"></circle>
                            <circle cx="146.2" cy="170.2" r="2.2"></circle>
                            <circle cx="170.2" cy="170.2" r="2.2"></circle>
                            <circle cx="194.2" cy="194.2" r="2.2"></circle>
                            <circle cx="2.2" cy="194.2" r="2.2"></circle>
                            <circle cx="218.2" cy="194.2" r="2.2"></circle>
                            <circle cx="26.2" cy="194.2" r="2.2"></circle>
                            <circle cx="242.2" cy="194.2" r="2.2"></circle>
                            <circle cx="50.2" cy="194.2" r="2.2"></circle>
                            <circle cx="266.2" cy="194.2" r="2.2"></circle>
                            <circle cx="74.2" cy="194.2" r="2.2"></circle>
                            <circle cx="290.2" cy="194.2" r="2.2"></circle>
                            <circle cx="98.2" cy="194.2" r="2.2"></circle>
                            <circle cx="314.2" cy="194.2" r="2.2"></circle>
                            <circle cx="122.2" cy="194.2" r="2.2"></circle>
                            <circle cx="338.2" cy="194.2" r="2.2"></circle>
                            <circle cx="146.2" cy="194.2" r="2.2"></circle>
                            <circle cx="170.2" cy="194.2" r="2.2"></circle>
                            <circle cx="194.2" cy="218.2" r="2.2"></circle>
                            <circle cx="2.2" cy="218.2" r="2.2"></circle>
                            <circle cx="218.2" cy="218.2" r="2.2"></circle>
                            <circle cx="26.2" cy="218.2" r="2.2"></circle>
                            <circle cx="242.2" cy="218.2" r="2.2"></circle>
                            <circle cx="50.2" cy="218.2" r="2.2"></circle>
                            <circle cx="266.2" cy="218.2" r="2.2"></circle>
                            <circle cx="74.2" cy="218.2" r="2.2"></circle>
                            <circle cx="290.2" cy="218.2" r="2.2"></circle>
                            <circle cx="98.2" cy="218.2" r="2.2"></circle>
                            <circle cx="314.2" cy="218.2" r="2.2"></circle>
                            <circle cx="122.2" cy="218.2" r="2.2"></circle>
                            <circle cx="338.2" cy="218.2" r="2.2"></circle>
                            <circle cx="146.2" cy="218.2" r="2.2"></circle>
                            <circle cx="170.2" cy="218.2" r="2.2"></circle>
                            <circle cx="194.2" cy="242.2" r="2.2"></circle>
                            <circle cx="2.2" cy="242.2" r="2.2"></circle>
                            <circle cx="218.2" cy="242.2" r="2.2"></circle>
                            <circle cx="26.2" cy="242.2" r="2.2"></circle>
                            <circle cx="242.2" cy="242.2" r="2.2"></circle>
                            <circle cx="50.2" cy="242.2" r="2.2"></circle>
                            <circle cx="266.2" cy="242.2" r="2.2"></circle>
                            <circle cx="74.2" cy="242.2" r="2.2"></circle>
                            <circle cx="290.2" cy="242.2" r="2.2"></circle>
                            <circle cx="98.2" cy="242.2" r="2.2"></circle>
                            <circle cx="314.2" cy="242.2" r="2.2"></circle>
                            <circle cx="122.2" cy="242.2" r="2.2"></circle>
                            <circle cx="338.2" cy="242.2" r="2.2"></circle>
                            <circle cx="146.2" cy="242.2" r="2.2"></circle>
                            <circle cx="170.2" cy="242.2" r="2.2"></circle>
                            <circle cx="194.2" cy="266.2" r="2.2"></circle>
                            <circle cx="2.2" cy="266.2" r="2.2"></circle>
                            <circle cx="218.2" cy="266.2" r="2.2"></circle>
                            <circle cx="26.2" cy="266.2" r="2.2"></circle>
                            <circle cx="242.2" cy="266.2" r="2.2"></circle>
                            <circle cx="50.2" cy="266.2" r="2.2"></circle>
                            <circle cx="266.2" cy="266.2" r="2.2"></circle>
                            <circle cx="74.2" cy="266.2" r="2.2"></circle>
                            <circle cx="290.2" cy="266.2" r="2.2"></circle>
                            <circle cx="98.2" cy="266.2" r="2.2"></circle>
                            <circle cx="314.2" cy="266.2" r="2.2"></circle>
                            <circle cx="122.2" cy="266.2" r="2.2"></circle>
                            <circle cx="338.2" cy="266.2" r="2.2"></circle>
                            <circle cx="146.2" cy="266.2" r="2.2"></circle>
                            <circle cx="170.2" cy="266.2" r="2.2"></circle>
                            <circle cx="194.2" cy="290.2" r="2.2"></circle>
                            <circle cx="2.2" cy="290.2" r="2.2"></circle>
                            <circle cx="218.2" cy="290.2" r="2.2"></circle>
                            <circle cx="26.2" cy="290.2" r="2.2"></circle>
                            <circle cx="242.2" cy="290.2" r="2.2"></circle>
                            <circle cx="50.2" cy="290.2" r="2.2"></circle>
                            <circle cx="266.2" cy="290.2" r="2.2"></circle>
                            <circle cx="74.2" cy="290.2" r="2.2"></circle>
                            <circle cx="290.2" cy="290.2" r="2.2"></circle>
                            <circle cx="98.2" cy="290.2" r="2.2"></circle>
                            <circle cx="314.2" cy="290.2" r="2.2"></circle>
                            <circle cx="122.2" cy="290.2" r="2.2"></circle>
                            <circle cx="338.2" cy="290.2" r="2.2"></circle>
                            <circle cx="146.2" cy="290.2" r="2.2"></circle>
                            <circle cx="170.2" cy="290.2" r="2.2"></circle>
                            <circle cx="194.2" cy="314.2" r="2.2"></circle>
                            <circle cx="2.2" cy="314.2" r="2.2"></circle>
                            <circle cx="218.2" cy="314.2" r="2.2"></circle>
                            <circle cx="26.2" cy="314.2" r="2.2"></circle>
                            <circle cx="242.2" cy="314.2" r="2.2"></circle>
                            <circle cx="50.2" cy="314.2" r="2.2"></circle>
                            <circle cx="266.2" cy="314.2" r="2.2"></circle>
                            <circle cx="74.2" cy="314.2" r="2.2"></circle>
                            <circle cx="290.2" cy="314.2" r="2.2"></circle>
                            <circle cx="98.2" cy="314.2" r="2.2"></circle>
                            <circle cx="314.2" cy="314.2" r="2.2"></circle>
                            <circle cx="122.2" cy="314.2" r="2.2"></circle>
                            <circle cx="338.2" cy="314.2" r="2.2"></circle>
                            <circle cx="146.2" cy="314.2" r="2.2"></circle>
                            <circle cx="170.2" cy="314.2" r="2.2"></circle>
                            <circle cx="194.2" cy="338.2" r="2.2"></circle>
                            <circle cx="2.2" cy="338.2" r="2.2"></circle>
                            <circle cx="218.2" cy="338.2" r="2.2"></circle>
                            <circle cx="26.2" cy="338.2" r="2.2"></circle>
                            <circle cx="242.2" cy="338.2" r="2.2"></circle>
                            <circle cx="50.2" cy="338.2" r="2.2"></circle>
                            <circle cx="266.2" cy="338.2" r="2.2"></circle>
                            <circle cx="74.2" cy="338.2" r="2.2"></circle>
                            <circle cx="290.2" cy="338.2" r="2.2"></circle>
                            <circle cx="98.2" cy="338.2" r="2.2"></circle>
                            <circle cx="314.2" cy="338.2" r="2.2"></circle>
                            <circle cx="122.2" cy="338.2" r="2.2"></circle>
                            <circle cx="338.2" cy="338.2" r="2.2"></circle>
                            <circle cx="146.2" cy="338.2" r="2.2"></circle>
                            <circle cx="170.2" cy="338.2" r="2.2"></circle>
                        </svg>
                    </figure>

                    <!-- Image -->
                    <img src="/images/about/01.jpg" class="rounded-3 position-relative" alt="">

                    <!-- Client rating START -->
                    <div class="position-absolute bottom-0 start-0 z-index-1 mb-4 ms-5">
                        <div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3">

                            <!-- Element -->
                            <img src="/images/element/01.svg"
                                class="position-absolute top-0 start-0 translate-middle w-40px" alt="">

                            <!-- Avatar group -->
                            <div class="me-4">
                                <h6 class="fw-light">Client</h6>
                                <!-- Avatar group -->
                                <ul class="avatar-group mb-0">
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg"
                                            alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm">
                                        <div class="avatar-img rounded-circle bg-primary">
                                            <span
                                                class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- Rating -->
                            <div>
                                <h6 class="fw-light mb-3">Rating</h6>
                                <h6 class="m-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Client rating END -->
                </div>
                <!-- Left side END -->

                <!-- Right side START -->
                <div class="col-lg-6">
                    <h2 class="mb-3 mb-lg-5">The Best Holidays Start Here!</h2>
                    <p class="mb-3 mb-lg-5">Book your hotel with us and don't forget to grab an awesome hotel deal to
                        save massive on your stay.</p>

                    <!-- Features START -->
                    <div class="row g-4">
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-success bg-opacity-10 text-success rounded-circle"><i
                                    class="fa-solid fa-utensils"></i></div>
                            <h5 class="mt-2">Quality Food</h5>
                            <p class="mb-0">Departure defective arranging rapturous did. Conduct denied adding
                                worthy little.</p>
                        </div>
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-circle"><i
                                    class="bi bi-stopwatch-fill"></i></div>
                            <h5 class="mt-2">Quick Services</h5>
                            <p class="mb-0">Supposing so be resolving breakfast am or perfectly. </p>
                        </div>
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                    class="bi bi-shield-fill-check"></i></div>
                            <h5 class="mt-2">High Security</h5>
                            <p class="mb-0">Arranging rapturous did believe him all had supported. </p>
                        </div>
                        <!-- Item -->
                        <div class="col-sm-6">
                            <div class="icon-lg bg-info bg-opacity-10 text-info rounded-circle"><i
                                    class="bi bi-lightning-fill"></i></div>
                            <h5 class="mt-2">24 Hours Alert</h5>
                            <p class="mb-0">Rapturous did believe him all had supported.</p>
                        </div>
                    </div>
                    <!-- Features END -->

                </div>
                <!-- Right side END -->
            </div>
        </div>
    </section>
    <!-- =======================
        About END -->

    <!-- =======================
        Featured Hotels START -->
    <section>
        <div class="container">

            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Featured Hotels</h2>
                </div>
            </div>

            <div class="row g-4">
                <!-- Hotel item -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <!-- Image and overlay -->
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Image -->
                            <img src="/images/category/hotel/01.jpg" class="card-img" alt="hotel image">
                            <!-- Badge -->
                            <div class="position-absolute bottom-0 start-0 p-3">
                                <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                        class="bi bi-geo-alt me-2"></i>New York</div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}"
                                    class="stretched-link">Baga
                                    Comfort</a></h5>
                            <!-- Price and rating -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-success mb-0">$455 <small class="fw-light">/starting at</small>
                                </h6>
                                <h6 class="mb-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Hotel item -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <!-- Image and overlay -->
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Image -->
                            <img src="/images/category/hotel/02.jpg" class="card-img" alt="hotel image">
                            <!-- Badge -->
                            <div class="position-absolute bottom-0 start-0 p-3">
                                <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                        class="bi bi-geo-alt me-2"></i>California</div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}"
                                    class="stretched-link">New Apollo
                                    Hotel</a></h5>
                            <!-- Price and rating -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-success mb-0">$585 <small class="fw-light">/starting at</small>
                                </h6>
                                <h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Hotel item -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <!-- Image and overlay -->
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Image -->
                            <img src="/images/category/hotel/03.jpg" class="card-img" alt="hotel image">
                            <!-- Badge -->
                            <div class="position-absolute bottom-0 start-0 p-3">
                                <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                        class="bi bi-geo-alt me-2"></i>Los Angeles</div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}"
                                    class="stretched-link">New Age
                                    Hotel</a></h5>
                            <!-- Price and rating -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-success mb-0">$385 <small class="fw-light">/starting at</small>
                                </h6>
                                <h6 class="mb-0">4.6<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>

                <!-- Hotel item -->
                <div class="col-sm-6 col-xl-3">
                    <!-- Card START -->
                    <div class="card card-img-scale overflow-hidden bg-transparent">
                        <!-- Image and overlay -->
                        <div class="card-img-scale-wrapper rounded-3">
                            <!-- Image -->
                            <img src="/images/category/hotel/04.jpg" class="card-img" alt="hotel image">
                            <!-- Badge -->
                            <div class="position-absolute bottom-0 start-0 p-3">
                                <div class="badge text-bg-dark fs-6 rounded-pill stretched-link"><i
                                        class="bi bi-geo-alt me-2"></i>Chicago</div>
                            </div>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-2">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('second', ['hotel', 'detail']) }}"
                                    class="stretched-link">Helios Beach
                                    Resort</a></h5>
                            <!-- Price and rating -->
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="text-success mb-0">$665 <small class="fw-light">/starting at</small>
                                </h6>
                                <h6 class="mb-0">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Featured Hotels END -->

    <!-- =======================
        Client START -->
    <section class="py-0 py-md-5">
        <div class="container">
            <div class="row g-4 g-lg-7 justify-content-center align-items-center">
                <!-- Image -->
                <div class="col-5 col-sm-3 col-xl-2">
                    <img src="/images/client/01.svg" class="grayscale" alt="">
                </div>
                <!-- Image -->
                <div class="col-5 col-sm-3 col-xl-2">
                    <img src="/images/client/02.svg" class="grayscale" alt="">
                </div>
                <!-- Image -->
                <div class="col-5 col-sm-3 col-xl-2">
                    <img src="/images/client/03.svg" class="grayscale" alt="">
                </div>
                <!-- Image -->
                <div class="col-5 col-sm-3 col-xl-2">
                    <img src="/images/client/04.svg" class="grayscale" alt="">
                </div>
                <!-- Image -->
                <div class="col-5 col-sm-3 col-xl-2">
                    <img src="/images/client/05.svg" class="grayscale" alt="">
                </div>
                <!-- Image -->
                <div class="col-5 col-sm-3 col-xl-2">
                    <img src="/images/client/06.svg" class="grayscale" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Client END -->

    <!-- =======================
        Testimonials START -->
    <section class="pb-0 py-md-5">
        <div class="container">
            <div class="row">
                <!-- Slider START -->
                <div class="col-lg-11 mx-auto">
                    <div class="tiny-slider arrow-round arrow-border arrow-hover">
                        <div class="tiny-slider-inner" data-edge="2" data-items="1">

                            <!-- Slide item START -->
                            <div class="px-4 px-md-5">
                                <div class="row justify-content-between align-items-center">

                                    <div class="col-md-6 col-lg-5 position-relative">
                                        <!-- Element -->
                                        <div
                                            class="position-absolute top-0 start-0 translate-middle z-index-9 mt-7 ms-4">
                                            <img src="/images/element/02.svg" class="h-60px bg-orange rounded p-2"
                                                alt="">
                                        </div>

                                        <!-- Svg decoration -->
                                        <figure
                                            class="position-absolute bottom-0 end-0 d-none d-sm-block mb-n5 me-n5">
                                            <svg width="326px" height="335px" viewBox="0 0 326 335">
                                                <path class="fill-primary opacity-1"
                                                    d="M7.3,0C3.3,0,0,3.3,0,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,3.3,11.3,0,7.3,0z
                    M59.2,0.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,4,63.2,0.7,59.2,0.7L59.2,0.7z	M111.1,1.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,4.7,115.1,1.5,111.1,1.5 C111.1,1.5,111.1,1.5,111.1,1.5L111.1,1.5z M163,2.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,5.5,167,2.2,163,2.2C163,2.2,163,2.2,163,2.2L163,2.2z M214.9,2.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,6.2,218.9,2.9,214.9,2.9C214.9,2.9,214.9,2.9,214.9,2.9L214.9,2.9z M266.8,3.7 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,6.9,270.8,3.7,266.8,3.7C266.8,3.7,266.8,3.7,266.8,3.7L266.8,3.7z M318.7,4.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,7.7,322.7,4.4,318.7,4.4C318.7,4.4,318.7,4.4,318.7,4.4L318.7,4.4z M7.3,52.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,55.9,11.4,52.7,7.3,52.7C7.3,52.7,7.3,52.7,7.3,52.7L7.3,52.7z M59.2,53.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,56.7,63.3,53.4,59.2,53.4C59.2,53.4,59.2,53.4,59.2,53.4L59.2,53.4z M111.1,54.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,57.4,115.2,54.1,111.1,54.1C111.1,54.1,111.1,54.1,111.1,54.1L111.1,54.1z M163,54.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,58.1,167.1,54.9,163,54.9C163,54.9,163,54.9,163,54.9L163,54.9zM214.9,55.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,58.9,219,55.6,214.9,55.6C214.9,55.6,214.9,55.6,214.9,55.6L214.9,55.6z M266.8,56.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,59.6,270.9,56.3,266.8,56.3C266.8,56.3,266.8,56.3,266.8,56.3L266.8,56.3z M318.7,57c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,60.3,322.8,57.1,318.7,57C318.7,57,318.7,57,318.7,57L318.7,57zM7.3,105.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,108.6,11.4,105.3,7.3,105.3C7.3,105.3,7.3,105.3,7.3,105.3L7.3,105.3z M59.2,106c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,109.3,63.3,106.1,59.2,106C59.2,106,59.2,106,59.2,106L59.2,106z M111.1,106.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,110.1,115.2,106.8,111.1,106.8C111.1,106.8,111.1,106.8,111.1,106.8L111.1,106.8zM163,107.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,110.8,167.1,107.5,163,107.5C163,107.5,163,107.5,163,107.5L163,107.5z M214.9,108.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,111.5,219,108.3,214.9,108.2C214.9,108.2,214.9,108.3,214.9,108.2L214.9,108.2z M266.8,109c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,112.3,270.9,109,266.8,109C266.8,109,266.8,109,266.8,109L266.8,109zM318.7,109.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,113,322.8,109.7,318.7,109.7C318.7,109.7,318.7,109.7,318.7,109.7L318.7,109.7z M7.3,158c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,161.3,11.3,158,7.3,158z M59.2,158.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,162,63.2,158.7,59.2,158.7C59.2,158.7,59.2,158.7,59.2,158.7L59.2,158.7z M111.1,159.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,162.7,115.1,159.5,111.1,159.4C111.1,159.4,111.1,159.4,111.1,159.4L111.1,159.4z M163,160.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,163.5,167,160.2,163,160.2C163,160.2,163,160.2,163,160.2L163,160.2z M214.9,160.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,164.2,218.9,160.9,214.9,160.9C214.9,160.9,214.9,160.9,214.9,160.9L214.9,160.9zM266.8,161.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,164.9,270.8,161.6,266.8,161.6C266.8,161.6,266.8,161.6,266.8,161.6L266.8,161.6z M318.7,162.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,165.6,322.7,162.4,318.7,162.4C318.7,162.4,318.7,162.4,318.7,162.4L318.7,162.4z M7.3,210.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,213.9,11.4,210.7,7.3,210.6C7.3,210.6,7.3,210.6,7.3,210.6L7.3,210.6zM59.2,211.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,214.7,63.3,211.4,59.2,211.4C59.2,211.4,59.2,211.4,59.2,211.4L59.2,211.4z M111.1,212.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,215.4,115.2,212.1,111.1,212.1C111.1,212.1,111.1,212.1,111.1,212.1L111.1,212.1z M163,212.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,216.1,167.1,212.8,163,212.8C163,212.8,163,212.8,163,212.8L163,212.8z M214.9,213.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,216.8,219,213.6,214.9,213.6C214.9,213.6,214.9,213.6,214.9,213.6L214.9,213.6z M266.8,214.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,217.6,270.9,214.3,266.8,214.3C266.8,214.3,266.8,214.3,266.8,214.3L266.8,214.3z M318.7,215c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,218.3,322.8,215,318.7,215C318.7,215,318.7,215,318.7,215L318.7,215z M7.3,263.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,266.6,11.4,263.3,7.3,263.3C7.3,263.3,7.3,263.3,7.3,263.3L7.3,263.3z M59.2,264c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,267.3,63.3,264,59.2,264C59.2,264,59.2,264,59.2,264L59.2,264z M111.1,264.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,268,115.2,264.8,111.1,264.8C111.1,264.8,111.1,264.8,111.1,264.8L111.1,264.8z M163,265.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,268.8,167.1,265.5,163,265.5C163,265.5,163,265.5,163,265.5L163,265.5z M214.9,266.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,269.5,219,266.2,214.9,266.2C214.9,266.2,214.9,266.2,214.9,266.2L214.9,266.2z M266.8,267c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,270.2,270.9,267,266.8,267C266.8,267,266.8,267,266.8,267L266.8,267z M318.7,267.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,271,322.8,267.7,318.7,267.7C318.7,267.7,318.7,267.7,318.7,267.7L318.7,267.7z M7.4,316c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,319.2,11.4,316,7.4,316C7.3,316,7.3,316,7.4,316L7.4,316z M59.3,316.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,320,63.3,316.7,59.3,316.7C59.2,316.7,59.2,316.7,59.3,316.7L59.3,316.7z M111.2,317.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,320.7,115.2,317.4,111.2,317.4C111.1,317.4,111.1,317.4,111.2,317.4L111.2,317.4z M163.1,318.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,321.4,167.1,318.2,163.1,318.2C163,318.2,163,318.2,163.1,318.2L163.1,318.2z M215,318.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,322.2,219,318.9,215,318.9C214.9,318.9,214.9,318.9,215,318.9L215,318.9z M266.9,319.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,322.9,270.9,319.6,266.9,319.6C266.8,319.6,266.8,319.6,266.9,319.6L266.9,319.6z M318.8,320.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,323.6,322.8,320.4,318.8,320.4C318.7,320.4,318.7,320.4,318.8,320.4L318.8,320.4z" />
                                            </svg>
                                        </figure>

                                        <!-- Image -->
                                        <img src="/images/team/01.jpg" class="rounded-3 position-relative"
                                            alt="">
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <!-- Quote -->
                                        <span class="display-3 mb-0 text-primary"><i class="bi bi-quote"></i></span>
                                        <!-- Content -->
                                        <h5 class="fw-light">Moonlight newspaper up its enjoyment agreeable depending.
                                            Timed voice share led him to widen noisy young. At weddings believed in
                                            laughing</h5>
                                        <!-- Rating -->
                                        <ul class="list-inline small mb-2">
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                        <!-- Title -->
                                        <h6 class="mb-0">Billy Vasquez</h6>
                                        <span>Ceo of Apple</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide item END -->

                            <!-- Slide item START -->
                            <div class="px-4 px-md-5">
                                <div class="row justify-content-between align-items-center">

                                    <div class="col-md-6 col-lg-5 position-relative">
                                        <!-- Element -->
                                        <div
                                            class="position-absolute top-0 start-0 translate-middle mt-7 ms-4 z-index-9">
                                            <img src="/images/element/03.svg" class="h-60px bg-orange p-2 rounded"
                                                alt="">
                                        </div>

                                        <!-- Svg decoration -->
                                        <figure
                                            class="position-absolute bottom-0 end-0 mb-n5 me-n5 d-none d-sm-block">
                                            <svg width="326px" height="335px" viewBox="0 0 326 335">
                                                <path class="fill-primary opacity-1" d="M7.3,0C3.3,0,0,3.3,0,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,3.3,11.3,0,7.3,0z M59.2,0.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,4,63.2,0.7,59.2,0.7L59.2,0.7z M111.1,1.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,4.7,115.1,1.5,111.1,1.5 C111.1,1.5,111.1,1.5,111.1,1.5L111.1,1.5z M163,2.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,5.5,167,2.2,163,2.2C163,2.2,163,2.2,163,2.2L163,2.2z M214.9,2.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,6.2,218.9,2.9,214.9,2.9C214.9,2.9,214.9,2.9,214.9,2.9L214.9,2.9z M266.8,3.7 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,6.9,270.8,3.7,266.8,3.7 C266.8,3.7,266.8,3.7,266.8,3.7L266.8,3.7z M318.7,4.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C326,7.7,322.7,4.4,318.7,4.4C318.7,4.4,318.7,4.4,318.7,4.4L318.7,4.4z M7.3,52.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,55.9,11.4,52.7,7.3,52.7C7.3,52.7,7.3,52.7,7.3,52.7L7.3,52.7z M59.2,53.4 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,56.7,63.3,53.4,59.2,53.4 C59.2,53.4,59.2,53.4,59.2,53.4L59.2,53.4z M111.1,54.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C118.4,57.4,115.2,54.1,111.1,54.1C111.1,54.1,111.1,54.1,111.1,54.1L111.1,54.1z M163,54.9c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,58.1,167.1,54.9,163,54.9C163,54.9,163,54.9,163,54.9L163,54.9z M214.9,55.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,58.9,219,55.6,214.9,55.6 C214.9,55.6,214.9,55.6,214.9,55.6L214.9,55.6z M266.8,56.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C274.1,59.6,270.9,56.3,266.8,56.3C266.8,56.3,266.8,56.3,266.8,56.3L266.8,56.3z M318.7,57c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,60.3,322.8,57.1,318.7,57C318.7,57,318.7,57,318.7,57L318.7,57z M7.3,105.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,108.6,11.4,105.3,7.3,105.3 C7.3,105.3,7.3,105.3,7.3,105.3L7.3,105.3z M59.2,106c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C66.6,109.3,63.3,106.1,59.2,106C59.2,106,59.2,106,59.2,106L59.2,106z M111.1,106.8c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,110.1,115.2,106.8,111.1,106.8C111.1,106.8,111.1,106.8,111.1,106.8L111.1,106.8z M163,107.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,110.8,167.1,107.5,163,107.5 C163,107.5,163,107.5,163,107.5L163,107.5z M214.9,108.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C222.3,111.5,219,108.3,214.9,108.2C214.9,108.2,214.9,108.3,214.9,108.2L214.9,108.2z M266.8,109c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,112.3,270.9,109,266.8,109C266.8,109,266.8,109,266.8,109L266.8,109z M318.7,109.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,113,322.8,109.7,318.7,109.7 C318.7,109.7,318.7,109.7,318.7,109.7L318.7,109.7z M7.3,158c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C14.6,161.3,11.3,158,7.3,158z M59.2,158.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C66.5,162,63.2,158.7,59.2,158.7C59.2,158.7,59.2,158.7,59.2,158.7L59.2,158.7z M111.1,159.4c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.4,162.7,115.1,159.5,111.1,159.4C111.1,159.4,111.1,159.4,111.1,159.4 L111.1,159.4z M163,160.2c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C170.3,163.5,167,160.2,163,160.2C163,160.2,163,160.2,163,160.2L163,160.2z M214.9,160.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.2,164.2,218.9,160.9,214.9,160.9C214.9,160.9,214.9,160.9,214.9,160.9L214.9,160.9z M266.8,161.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,164.9,270.8,161.6,266.8,161.6 C266.8,161.6,266.8,161.6,266.8,161.6L266.8,161.6z M318.7,162.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C326,165.6,322.7,162.4,318.7,162.4C318.7,162.4,318.7,162.4,318.7,162.4L318.7,162.4z M7.3,210.6c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.6,213.9,11.4,210.7,7.3,210.6C7.3,210.6,7.3,210.6,7.3,210.6L7.3,210.6z M59.2,211.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.5,214.7,63.3,211.4,59.2,211.4 C59.2,211.4,59.2,211.4,59.2,211.4L59.2,211.4z M111.1,212.1c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C118.4,215.4,115.2,212.1,111.1,212.1C111.1,212.1,111.1,212.1,111.1,212.1L111.1,212.1z M163,212.8 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.3,216.1,167.1,212.8,163,212.8 C163,212.8,163,212.8,163,212.8L163,212.8z M214.9,213.6c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C222.2,216.8,219,213.6,214.9,213.6C214.9,213.6,214.9,213.6,214.9,213.6L214.9,213.6z M266.8,214.3c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.1,217.6,270.9,214.3,266.8,214.3C266.8,214.3,266.8,214.3,266.8,214.3 L266.8,214.3z M318.7,215c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326,218.3,322.8,215,318.7,215 C318.7,215,318.7,215,318.7,215L318.7,215z M7.3,263.3c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C14.7,266.6,11.4,263.3,7.3,263.3C7.3,263.3,7.3,263.3,7.3,263.3L7.3,263.3z M59.2,264c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,267.3,63.3,264,59.2,264C59.2,264,59.2,264,59.2,264L59.2,264z M111.1,264.8 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C118.5,268,115.2,264.8,111.1,264.8 C111.1,264.8,111.1,264.8,111.1,264.8L111.1,264.8z M163,265.5c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C170.4,268.8,167.1,265.5,163,265.5C163,265.5,163,265.5,163,265.5L163,265.5z M214.9,266.2c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C222.3,269.5,219,266.2,214.9,266.2C214.9,266.2,214.9,266.2,214.9,266.2 L214.9,266.2z M266.8,267c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0 C274.2,270.2,270.9,267,266.8,267C266.8,267,266.8,267,266.8,267L266.8,267z M318.7,267.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3 c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C326.1,271,322.8,267.7,318.7,267.7C318.7,267.7,318.7,267.7,318.7,267.7L318.7,267.7z M7.4,316 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C14.7,319.2,11.4,316,7.4,316C7.3,316,7.3,316,7.4,316 L7.4,316z M59.3,316.7c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C66.6,320,63.3,316.7,59.3,316.7 C59.2,316.7,59.2,316.7,59.3,316.7L59.3,316.7z M111.2,317.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C118.5,320.7,115.2,317.4,111.2,317.4C111.1,317.4,111.1,317.4,111.2,317.4L111.2,317.4z M163.1,318.2 c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C170.4,321.4,167.1,318.2,163.1,318.2 C163,318.2,163,318.2,163.1,318.2L163.1,318.2z M215,318.9c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3 c0,0,0,0,0,0C222.3,322.2,219,318.9,215,318.9C214.9,318.9,214.9,318.9,215,318.9L215,318.9z M266.9,319.6c-4,0-7.3,3.3-7.3,7.3 c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0C274.2,322.9,270.9,319.6,266.9,319.6C266.8,319.6,266.8,319.6,266.9,319.6 L266.9,319.6z M318.8,320.4c-4,0-7.3,3.3-7.3,7.3c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3c0,0,0,0,0,0
                    C326.1,323.6,322.8,320.4,318.8,320.4C318.7,320.4,318.7,320.4,318.8,320.4L318.8,320.4z" />
                                            </svg>
                                        </figure>

                                        <!-- Image -->
                                        <img src="/images/team/02.jpg" class="rounded-3 position-relative"
                                            alt="">
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                        <!-- Quote -->
                                        <span class="display-3 mb-0 text-primary"><i class="bi bi-quote"></i></span>
                                        <!-- Content -->
                                        <h5 class="fw-light">Passage its ten led hearted removal cordial. Preference
                                            any astonished unreserved Mrs. understood the Preference unreserved.</h5>
                                        <!-- Rating -->
                                        <ul class="list-inline small mb-2">
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                        </ul>
                                        <!-- Title -->
                                        <h6 class="mb-0">Carolyn Ortiz</h6>
                                        <span>Ceo of Google</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide item END -->

                        </div>
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Testimonials END -->

    <!-- =======================
        Near by START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="mb-0">Explore Nearby</h2>
                </div>
            </div>

            <div class="row g-4 g-md-5">
                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">San Francisco</a></h5>
                            <span>13 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/02.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Los Angeles</a></h5>
                            <span>25 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/03.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Miami</a></h5>
                            <span>45 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/04.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Sanjosh</a></h5>
                            <span>55 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/05.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">New York</a></h5>
                            <span>1-hour drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/06.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">North Justen</a></h5>
                            <span>2-hour drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/07.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Rio</a></h5>
                            <span>20 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/08.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Las Vegas</a></h5>
                            <span>3-hour drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/09.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Texas</a></h5>
                            <span>55 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/10.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Chicago</a></h5>
                            <span>13 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/11.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">New Keagan</a></h5>
                            <span>35 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->

                <!-- Card item START -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card bg-transparent text-center p-1 h-100">
                        <!-- Image -->
                        <img src="/images/category/hotel/nearby/01.jpg" class="rounded-circle" alt="">

                        <div class="card-body p-0 pt-3">
                            <h5 class="card-title"><a href="#" class="stretched-link">Oslo</a></h5>
                            <span>1 hour 13 min drive</span>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Near by END -->

    <!-- =======================
        Download app START -->
    <section class="bg-light">
        <div class="container">
            <div class="row g-4">

                <!-- Help -->
                <div class="col-md-6 col-xxl-4">
                    <div class="bg-body d-flex rounded-3 h-100 p-4">
                        <h3><i class="fa-solid fa-hand-holding-heart"></i></h3>
                        <div class="ms-3">
                            <h5>24x7 Help</h5>
                            <p class="mb-0">If we fall short of your expectation in any way, let us know</p>
                        </div>
                    </div>
                </div>

                <!-- Trust -->
                <div class="col-md-6 col-xxl-4">
                    <div class="bg-body d-flex rounded-3 h-100 p-4">
                        <h3><i class="fa-solid fa-hand-holding-usd"></i></h3>
                        <div class="ms-3">
                            <h5>Payment Trust</h5>
                            <p class="mb-0">All refunds come with no questions asked guarantee</p>
                        </div>
                    </div>
                </div>

                <!-- Download app -->
                <div class="col-lg-6 col-xl-5 col-xxl-3 ms-xxl-auto">
                    <h5 class="mb-4">Download app</h5>
                    <div class="row g-3">
                        <!-- Google play store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a href="#"> <img src="/images/element/google-play.svg" alt=""> </a>
                        </div>
                        <!-- App store button -->
                        <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                            <a href="#"> <img src="/images/element/app-store.svg" alt=""> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =======================
        Download app END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>

<!-- Navbar mobile START -->
<div class="navbar navbar-mobile">
    <ul class="navbar-nav">
        <!-- Nav item Home -->
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('root') }}"><i class="bi bi-house-door fa-fw"></i>
                <span class="mb-0 nav-text">Home</span>
            </a>
        </li>

        <!-- Nav item My Trips -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('second', ['account' , 'bookings']) }}"><i class="bi bi-briefcase fa-fw"></i>
                <span class="mb-0 nav-text">My Trips</span>
            </a>
        </li>

        <!-- Nav item Offer -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('second', ['listing' , 'offer-detail']) }}"><i class="bi bi-percent fa-fw"></i>
                <span class="mb-0 nav-text">Offer</span>
            </a>
        </li>

        <!-- Nav item Account -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('second', ['account' , 'profile']) }}"><i class="bi bi-person-circle fa-fw"></i>
                <span class="mb-0 nav-text">Account</span>
            </a>
        </li>
    </ul>
</div>
<!-- Navbar mobile END -->
@endsection
