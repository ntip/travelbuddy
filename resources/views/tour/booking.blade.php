@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Page Banner START -->
    <section class="py-0">
        <div class="container">
            <div class="row mt-4 align-items-center">
                <div class="col-12">
                    <!-- Card START -->
                    <div class="card bg-light overflow-hidden px-sm-5">
                        <div class="row align-items-center g-4">

                            <!-- Content -->
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <!-- Breadcrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-dots mb-0">
                                            <li class="breadcrumb-item"><a href="{{ route('root') }}"><i
                                                        class="bi bi-house me-1"></i> Home</a></li>
                                            <li class="breadcrumb-item">Hotel detail</li>
                                            <li class="breadcrumb-item active">Booking</li>
                                        </ol>
                                    </nav>
                                    <!-- Title -->
                                    <h1 class="m-0 h2 card-title">Review your Booking</h1>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-sm-3 text-end d-none d-sm-block">
                                <img src="/images/element/17.svg" class="mb-n4" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Card END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Page Banner END -->

    <!-- =======================
        Steps START -->
    <section>
        <div class="container">
            <div id="stepper" class="bs-stepper stepper-outline">
                <!-- Step Buttons START -->
                <div class="bs-stepper-header" role="tablist">
                    <!-- Step 1 -->
                    <div class="step" data-target="#step-1">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                id="steppertrigger1" aria-controls="step-1">
                                <span class="bs-stepper-circle">1</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Tour Review</h6>
                        </div>
                    </div>
                    <div class="line"></div>

                    <!-- Step 2 -->
                    <div class="step" data-target="#step-2">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                id="steppertrigger2" aria-controls="step-2">
                                <span class="bs-stepper-circle">2</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Traveler Info</h6>
                        </div>
                    </div>
                    <div class="line"></div>

                    <!-- Step 3 -->
                    <div class="step" data-target="#step-3">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                id="steppertrigger3" aria-controls="step-3">
                                <span class="bs-stepper-circle">3</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Make Payment</h6>
                        </div>
                    </div>
                </div>
                <!-- Step Buttons END -->

                <!-- Step content START -->
                <div class="bs-stepper-content p-0 pt-4">
                    <div class="row g-4">

                        <!-- Main content START -->
                        <div class="col-xl-8">
                            <form onsubmit="return false">

                                <!-- Step 1 content START -->
                                <div id="step-1" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger1">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Tour Review</h4>

                                        <hr class="my-0"> <!-- Divider -->

                                        <!-- Tour list START -->
                                        <div class="card shadow rounded-2 overflow-hidden">
                                            <div class="row g-0">
                                                <!-- Image -->
                                                <div class="col-sm-6 col-md-4">
                                                    <img src="/images/category/tour/4by3/03.jpg" class=""
                                                        alt="">
                                                </div>

                                                <!-- Card Body START -->
                                                <div class="col-sm-6 col-md-8">
                                                    <div class="card-body p-3">
                                                        <!-- Title -->
                                                        <h5 class="card-title mb-1"><a href="#">Beautiful Bali
                                                                with Malaysia</a></h5>
                                                        <!-- Rating star -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fa-solid fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fa-solid fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fa-solid fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fa-solid fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fa-solid fa-star-half-alt text-warning"></i>
                                                            </li>
                                                        </ul>

                                                        <!-- List -->
                                                        <ul class="nav nav-divider small mb-0 mt-2">
                                                            <li class="nav-item mb-1"><i
                                                                    class="far fa-calendar-alt me-2"></i>April 12-17
                                                            </li>
                                                            <li class="nav-item mb-1"><i
                                                                    class="fa-solid fa-bed me-2"></i>1 Room</li>
                                                            <li class="nav-item mb-1"><i
                                                                    class="bi bi-people-fill me-2"></i>2 Guests</li>
                                                            <li class="nav-item mb-1"><i
                                                                    class="bi bi-geo-alt-fill me-2"></i>From New York
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                        </div>
                                        <!-- Tour list END -->

                                        <!-- Flight detail START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom d-flex justify-content-between">
                                                <!-- Title -->
                                                <h5 class="mb-0">Flight Details</h5>
                                                <a href="#"
                                                    class="btn btn-link p-0 mb-0 text-primary-hover text-reset text-decoration-underline">View
                                                    details</a>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">

                                                <!-- Title -->
                                                <div
                                                    class="p-3 bg-light rounded-2 d-sm-flex justify-content-sm-between align-items-center mb-4">
                                                    <!-- Airline Name -->
                                                    <h6 class="mb-0">New York - Malaysia</h6>
                                                    <h6 class="fw-normal mb-0"><span class="text-body">Date:</span> 12
                                                        April 2022</h6>
                                                </div>

                                                <!-- Ticket item START -->
                                                <div class="row g-4">
                                                    <!-- Air line name -->
                                                    <div class="col-md-3">
                                                        <!-- Image -->
                                                        <img src="/images/element/09.svg" class="w-80px mb-3"
                                                            alt="">
                                                        <!-- Title -->
                                                        <h6 class="fw-normal small mb-0">Phillippines Airline</h6>
                                                    </div>

                                                    <!-- Airport detail -->
                                                    <div class="col-4 col-md-3">
                                                        <!-- Title -->
                                                        <h5>CDG</h5>
                                                        <h6 class="mb-0">2:50 pm</h6>
                                                    </div>

                                                    <!-- Time -->
                                                    <div class="col-4 col-md-3 text-center">
                                                        <!-- Time -->
                                                        <h6>5hr 50min</h6>

                                                        <div class="position-relative my-4">
                                                            <!-- Line -->
                                                            <hr class="bg-primary opacity-5 position-relative">
                                                            <!-- Icon -->
                                                            <div
                                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                                <i class="fa-solid fa-fw fa-plane"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Airport detail -->
                                                    <div class="col-4 col-md-3 text-end">
                                                        <!-- Title -->
                                                        <h5>JFK</h5>
                                                        <h6 class="mb-0">7:35 pm</h6>
                                                    </div>

                                                </div>
                                                <!-- Ticket item END -->

                                                <!-- Title -->
                                                <div
                                                    class="p-3 bg-light rounded-2 d-sm-flex justify-content-sm-between align-items-center text-center my-4">
                                                    <!-- Airline Name -->
                                                    <h6 class="mb-1 mb-sm-0">Malaysia - New York</h6>
                                                    <h6 class="fw-normal mb-0"><span class="text-body">Date:</span> 18
                                                        April 2022</h6>
                                                </div>

                                                <!-- Ticket item START -->
                                                <div class="row g-4">
                                                    <!-- Air line name -->
                                                    <div class="col-md-3">
                                                        <!-- Image -->
                                                        <img src="/images/element/09.svg" class="w-80px mb-3"
                                                            alt="">
                                                        <!-- Title -->
                                                        <h6 class="fw-normal small mb-0">Phillippines Airline</h6>
                                                    </div>

                                                    <!-- Airport detail -->
                                                    <div class="col-4 col-md-3">
                                                        <!-- Title -->
                                                        <h5>JFK</h5>
                                                        <h6 class="mb-0">5:50 am</h6>
                                                    </div>

                                                    <!-- Time -->
                                                    <div class="col-4 col-md-3 text-center">
                                                        <!-- Time -->
                                                        <h6>5hr 50min</h6>

                                                        <div class="position-relative my-4">
                                                            <!-- Line -->
                                                            <hr class="bg-primary opacity-5 position-relative">
                                                            <!-- Icon -->
                                                            <div
                                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                                <i class="fa-solid fa-fw fa-plane"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Airport detail -->
                                                    <div class="col-4 col-md-3 text-end">
                                                        <!-- Title -->
                                                        <h5>CDG</h5>
                                                        <h6 class="mb-0">11:35 am</h6>
                                                    </div>

                                                </div>
                                                <!-- Ticket item END -->
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Flight detail END -->

                                        <!-- Hotel detail START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom d-flex justify-content-between">
                                                <!-- Title -->
                                                <h5 class="mb-0">Hotel Details</h5>
                                                <a href="#"
                                                    class="btn btn-link p-0 mb-0 text-primary-hover text-reset text-decoration-underline">View
                                                    details</a>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-8">
                                                        <h6>Courtyard by Marriott New York</h6>
                                                        <h6 class="mb-1 fw-light"><span
                                                                class="text-secondary">Room:</span> Deluxe Pool View
                                                            with Breakfast</h6>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">12 April 2022</h6>
                                                        <p class="text-success mb-0">Breakfast Included</p>
                                                    </div>
                                                </div>
                                                <!-- Hotel item END -->

                                                <hr> <!-- Divider -->

                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-8">
                                                        <h6>Park Plaza Lodge Hotel</h6>
                                                        <h6 class="mb-1 fw-light"><span
                                                                class="text-secondary">Room:</span> Deluxe Pool View
                                                            with Breakfast</h6>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">14 April 2022</h6>
                                                        <p class="text-success mb-0">Breakfast Included</p>
                                                    </div>
                                                </div>
                                                <!-- Hotel item END -->

                                                <hr> <!-- Divider -->

                                                <!-- Hotel item START -->
                                                <div class="row">
                                                    <!-- Info -->
                                                    <div class="col-sm-8">
                                                        <h6>Pride moon Village Resort & Spa</h6>
                                                        <h6 class="mb-1 fw-light"><span
                                                                class="text-secondary">Room:</span> Deluxe Pool View
                                                            with Breakfast</h6>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Review -->
                                                    <div class="col-sm-4">
                                                        <h6 class="mb-0">16 April 2022</h6>
                                                        <p class="text-success mb-0">Breakfast Included</p>
                                                    </div>
                                                </div>
                                                <!-- Hotel item END -->

                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Hotel detail END -->

                                        <!-- Cab detail START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom d-flex justify-content-between">
                                                <!-- Title -->
                                                <h5 class="mb-0">Transfer Details</h5>
                                                <a href="#"
                                                    class="btn btn-link p-0 mb-0 text-primary-hover text-reset text-decoration-underline">View
                                                    details</a>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="d-flex gap-1 justify-content-between flex-wrap">
                                                    <!-- Title -->
                                                    <h6 class="mb-0">Private Transfer</h6>
                                                    <!-- Info -->
                                                    <p class="mb-0">Vehicle type: <span class="h6 fw-light">Sedan -
                                                            AC</span></p>
                                                    <!-- Date -->
                                                    <h6 class="mb-0 fw-normal">12 April 2022</h6>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Cab detail END -->

                                        <!-- Cancellation & Date change START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <!-- Title -->
                                                <h5 class="mb-0">Cancellation & Date change</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item">
                                                        <span class="h6 fw-normal me-1 mb-0"><i
                                                                class="bi bi-dot"></i>10 days:</span>
                                                        <span>100%</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="h6 fw-normal me-1 mb-0"><i
                                                                class="bi bi-dot"></i>10 to 15 days:</span>
                                                        <span>75% + Non Refundable Component</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="h6 fw-normal me-1 mb-0"><i
                                                                class="bi bi-dot"></i>15 to 30 days:</span>
                                                        <span>30% + Non Refundable Component</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="h6 fw-normal me-1 mb-0"><i
                                                                class="bi bi-dot"></i>10Hotel / Air:</span>
                                                        <span>100% in case of non-refundable ticket / Hotel Room</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="h6 fw-normal me-1 mb-0"><i
                                                                class="bi bi-dot"></i>10Cruise / Visa:</span>
                                                        <span>On Actuals</span>
                                                    </li>
                                                </ul>
                                                <p class="mt-2">All Prices are in Indian Rupees and are subject to
                                                    change without prior notice.<br>In the case FIT flight inclusive
                                                    package, the full amount of the flight will be payable at the time
                                                    of booking.</p>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Cancellation & Date change END -->

                                        <!-- Step 1 button -->
                                        <div class="text-end">
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id="step-2" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger2">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Traveler Detail</h4>

                                        <hr class="my-0"> <!-- Divider -->

                                        <!-- Alert box START -->
                                        <div class="alert alert-warning d-flex" role="alert">
                                            <span class="alert-heading h5 mb-0 me-2"><i
                                                    class="bi bi-exclamation-octagon-fill"></i></span>
                                            A customer passport is mandatory. The passport must have 2 blank pages and
                                            6-month validity.
                                        </div>
                                        <!-- Alert box END -->

                                        <!-- Traveler 1 form START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Traveler 1</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Title -->
                                                    <div class="col-md-2">
                                                        <label class="form-label">Title</label>
                                                        <div class="form-control-bg-light">
                                                            <select
                                                                class="form-select form-select-sm js-choice border-0">
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- First Name -->
                                                    <div class="col-md-5">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">First name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Last name -->
                                                    <div class="col-md-5">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Last name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- DOB -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Date of birth</label>
                                                            <input type="text" class="form-control flatpickr"
                                                                data-date-format="d M Y">
                                                        </div>
                                                    </div>

                                                    <!-- Passport number -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Passport number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Traveler 1 form END -->

                                        <!-- Traveler 2 form START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Traveler 2</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Title -->
                                                    <div class="col-md-2">
                                                        <label class="form-label">Title</label>
                                                        <div class="form-control-bg-light">
                                                            <select
                                                                class="form-select form-select-sm js-choice border-0">
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- First Name -->
                                                    <div class="col-md-5">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">First name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Last name -->
                                                    <div class="col-md-5">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Last name</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- DOB -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Date of birth</label>
                                                            <input type="text" class="form-control flatpickr"
                                                                data-date-format="d M Y">
                                                        </div>
                                                    </div>

                                                    <!-- Passport number -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Passport number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Traveler 2 form END -->

                                        <!-- Booking detail START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Your booking detail will be sent here</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Mobile number -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Mobile Number</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Email id -->
                                                    <div class="col-md-6">
                                                        <div class="form-control-bg-light">
                                                            <label class="form-label">Email id</label>
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Booking detail END -->

                                        <!-- Step 2 button -->
                                        <div class="hstack gap-2 flex-wrap justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-primary next-btn mb-0">Continue to payment</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id="step-3" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger3">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Payment options</h4>

                                        <hr class="my-0"> <!-- Divider -->

                                        <!-- Credit or Debit Card START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div
                                                class="card-header border-bottom d-sm-flex justify-content-between align-items-center">
                                                <h5 class="mb-2 mb-sm-0">Credit or Debit Card</h5>
                                                <ul class="list-inline my-0">
                                                    <li class="list-inline-item"> <a href="#"><img
                                                                src="/images/element/visa.svg" class="h-30px"
                                                                alt=""></a></li>
                                                    <li class="list-inline-item"> <a href="#"><img
                                                                src="/images/element/mastercard.svg" class="h-30px"
                                                                alt=""></a></li>
                                                    <li class="list-inline-item"> <a href="#"><img
                                                                src="/images/element/expresscard.svg" class="h-30px"
                                                                alt=""></a></li>
                                                </ul>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Card number -->
                                                    <div class="col-12">
                                                        <label class="form-label">Card Number</label>
                                                        <div class="position-relative form-control-bg-light">
                                                            <input type="text" class="form-control" maxlength="14"
                                                                placeholder="XXXX XXXX XXXX XXXX">
                                                            <img src="/images/element/visa.svg"
                                                                class="w-30px position-absolute top-50 end-0 translate-middle-y me-2 d-none d-sm-block"
                                                                alt="">
                                                        </div>
                                                    </div>

                                                    <!-- Expiration Month -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Expiration Month</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control"
                                                                maxlength="2">
                                                        </div>
                                                    </div>

                                                    <!-- Expiration Year -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Expiration Year</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control"
                                                                maxlength="4">
                                                        </div>
                                                    </div>

                                                    <!-- Cvv/CVC -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">CVV / CVC</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control" maxlength="3"
                                                                placeholder="XXX">
                                                        </div>
                                                    </div>

                                                    <!-- Card holder name -->
                                                    <div class="col-12">
                                                        <label class="form-label">Name of the cardholder</label>
                                                        <div class="form-control-bg-light">
                                                            <input type="text" class="form-control"
                                                                aria-label="name of the cardholder">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Credit or Debit Card END -->

                                        <!-- Paypal START -->
                                        <div class="card border">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Pay with Paypal</h5>
                                            </div>

                                            <!-- Card body -->
                                            <div class="card-body text-center">
                                                <!-- Image -->
                                                <img src="/images/element/paypal.svg" class="h-70px mb-3"
                                                    alt="">
                                                <p class="mb-3"><strong>Tips:</strong> Simply click on the payment
                                                    button below to proceed to the PayPal payment page.</p>

                                                <!-- Button -->
                                                <a href="#" class="btn btn-sm btn-outline-primary mb-0">Pay with
                                                    Paypal</a>
                                            </div>
                                        </div>
                                        <!-- Paypal END -->

                                        <!-- Step 3 button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-success next-btn mb-0">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 content END -->

                            </form>
                        </div>
                        <!-- Main content END -->

                        <!-- Right sidebar START -->
                        <aside class="col-xl-4">
                            <div class="vstack gap-4">
                                <!-- Price summary START -->
                                <div class="card border">
                                    <!-- card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-title mb-0">Price Summary</h5>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <ul class="list-group list-group-borderless">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center pt-0">
                                                <span class="h6 fw-light mb-0">Base Price</span>
                                                <span class="fs-5">$28,660</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-light mb-0">Total Discount<span
                                                        class="badge text-bg-danger smaller mb-0 ms-2">10%
                                                        off</span></span>
                                                <span class="fs-5 text-success">-$2,560</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center pb-0">
                                                <span class="h6 fw-light mb-0">Taxes % Fees</span>
                                                <span class="fs-5">$350</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer border-top">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 mb-0">Payable Now</span>
                                            <span class="h5 mb-0">$22,500</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price summary END -->

                                <!-- Book online START -->
                                <div class="card border">
                                    <!-- card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-title mb-0">Sign In Now To Book An Online </h5>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Input item -->
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Email id</label>
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Enter your email">
                                        </div>

                                        <!-- Input item -->
                                        <div class="mt-4 form-control-bg-light">
                                            <label class="form-label">Mobile number</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter your mobile number">
                                        </div>

                                        <!-- Check item -->
                                        <div class="mt-4 form-check form-check-light mb-0">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">I Already Have Booking
                                                Account</label>
                                        </div>

                                        <!-- Button -->
                                        <div class="d-grid mt-4">
                                            <button class="btn btn-primary next-btn mb-0">Book as Guest</button>
                                        </div>

                                        <!-- Divider -->
                                        <div class="position-relative my-4">
                                            <hr>
                                            <p
                                                class="small position-absolute top-50 start-50 translate-middle bg-mode text-center">
                                                Or via social media</p>
                                        </div>

                                        <!-- Social media button -->
                                        <div class="d-grid gap-2 d-md-block text-center">
                                            <button class="btn btn-sm bg-facebook mb-0" type="button"><i
                                                    class="fa-brands fa-facebook-f me-2"></i>Facebook</button>
                                            <button class="btn btn-sm bg-google mb-0" type="button"><i
                                                    class="fa-brands fa-google me-2"></i>Google</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book online END -->
                            </div> <!-- Row END -->
                        </aside>
                        <!-- Right sidebar END -->

                    </div>

                </div>
                <!-- Step content END -->
            </div>
        </div>
    </section>
    <!-- =======================
        Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection