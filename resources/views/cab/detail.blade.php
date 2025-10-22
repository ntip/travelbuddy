@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main Banner START -->
    <section class="pt-4">
        <div class="container position-relative">
            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <!-- Meta -->
                    <div class="d-flex justify-content-between align-items-lg-center">
                        <!-- Title -->
                        <ul class="nav nav-divider align-items-center mb-0">
                            <li class="nav-item h4">Chicago - San Antonio</li>
                            <li class="nav-item h5 fw-light">Outstation- Oneway</li>
                            <li class="nav-item h5 fw-light">22 Jan 2022 - 07.25 PM</li>
                        </ul>

                        <!-- Buttons -->
                        <div class="ms-3">
                            <!-- Share button -->
                            <a href="#" class="btn btn-sm btn-light px-2 mb-0" role="button"
                                id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-fw fa-share-alt"></i>
                            </a>
                            <!-- dropdown button -->
                            <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                aria-labelledby="dropdownShare">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-copy me-2"></i>Copy
                                        link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Main Content START -->
    <section class="pt-0">
        <div class="container" data-sticky-container>
            <div class="row g-4">

                <!-- Main content START -->
                <div class="col-xl-8">
                    <div class="vstack gap-5">

                        <!-- Main cab list START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-4 align-items-center">
                                    <!-- Image -->
                                    <div class="col-md-4">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="/images/category/cab/seadan.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- card body -->
                                    <div class="col-md-8">
                                        <!-- Title and rating -->
                                        <div class="d-sm-flex justify-content-sm-between">
                                            <!-- Card title -->
                                            <div>
                                                <h4 class="card-title mb-2">Camry, Accord</h4>
                                                <ul class="nav nav-divider h6 fw-normal mb-2">
                                                    <li class="nav-item">SEDAN</li>
                                                    <li class="nav-item">AC</li>
                                                    <li class="nav-item">4 Seats</li>
                                                </ul>
                                            </div>
                                            <!-- Rating Star -->
                                            <ul class="list-inline mb-0">
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
                                        </div>

                                        <!-- List -->
                                        <ul class="list-group list-group-borderless mt-2 mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i
                                                        class="bi bi-check-circle me-2"></i>600Kms included. After that
                                                    $15/Kms</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i
                                                        class="bi bi-check-circle me-2"></i>2 luggage bags </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-0">
                                                <span class="h6 fw-normal mb-0"><i
                                                        class="bi bi-check-circle me-2"></i>Diesel Car</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer p-0 pt-4">
                                <div class="hstack gap-3 flex-wrap">
                                    <!-- Item -->
                                    <h6
                                        class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
                                        Free Cancellation, till 1 hour of Pick up
                                    </h6>

                                    <!-- Item -->
                                    <h6
                                        class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
                                        Free waiting up to 45 minutes
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Main cab list END -->

                        <!-- Trip Details START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent">
                                <h4 class="mb-0">Trip Details</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form class="row g-4">
                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Pickup Address</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter exact pick up address"
                                                value="36 new resort, New York">
                                            <div class="form-text">This will help our cab driver reach you on time.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Drop Address</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter drop address" value="street profit, New York">
                                        </div>
                                    </div>

                                    <h5 class="mb-0 mt-4">Traveler Information</h5>

                                    <!-- Radio button -->
                                    <div class="col-md-4">
                                        <label class="form-label">Gender</label>
                                        <div>
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio"
                                                    id="btnradio1" checked="">
                                                <label class="btn btn-lg btn-light btn-dark-bg-check mb-0"
                                                    for="btnradio1">Male</label>

                                                <input type="radio" class="btn-check" name="btnradio"
                                                    id="btnradio2">
                                                <label class="btn btn-lg btn-light btn-dark-bg-check mb-0"
                                                    for="btnradio2">Female</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-8">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter your name">
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Email id</label>
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Enter your email">
                                        </div>
                                    </div>

                                    <!-- Input -->
                                    <div class="col-md-6">
                                        <div class="form-control-bg-light">
                                            <label class="form-label">Mobile number</label>
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter your mobile number">
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Trip Details END -->

                        <!-- Driver and cab detail START -->
                        <div class="card bg-transparent">

                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Driver and Cab details</h4>
                            </div>

                            <!-- Card body -->
                            <div class="card-body pt-4 p-0">
                                <!-- List -->
                                <ul>
                                    <li class="mb-2">Cab and driver details will be shared on your registered phone.
                                        (22 Jan 2021 at 6:55 pm) </li>
                                    <li class="mb-2">Due to traffic or any other unavoidable reason, the pickup may
                                        be delayed for 30 minutes.</li>
                                    <li>For nighttime driving (between 11:00 pm to 7:00 am) on any of the nights, there
                                        will be a night driver charge of $100.</li>
                                </ul>

                                <!-- Cab images -->
                                <h5>Cab Images</h5>

                                <!-- Alert box -->
                                <div class="alert alert-warning" role="alert">
                                    All pictures shown are for illustration purposes only. The actual product may vary
                                    due to product enhancement.
                                </div>

                                <!-- Images -->
                                <div class="row">
                                    <!-- Slider START -->
                                    <div class="tiny-slider arrow-round arrow-xs arrow-dark">
                                        <div class="tiny-slider-inner rounded-2" data-autoplay="false"
                                            data-arrow="true" data-dots="false" data-items="3" data-items-sm="2">
                                            <!-- Image item -->
                                            <div>
                                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                    href="/images/category/cab/4by3/02.jpg">
                                                    <div
                                                        class="card card-element-hover card-overlay-hover overflow-hidden">
                                                        <!-- Image -->
                                                        <img src="/images/category/cab/4by3/02.jpg" class="rounded-3"
                                                            alt="">
                                                        <!-- Full screen button -->
                                                        <div class="hover-element w-100 h-100">
                                                            <i
                                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Image item -->
                                            <div>
                                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                    href="/images/category/cab/4by3/01.jpg">
                                                    <div
                                                        class="card card-element-hover card-overlay-hover overflow-hidden">
                                                        <!-- Image -->
                                                        <img src="/images/category/cab/4by3/01.jpg" class="rounded-3"
                                                            alt="">
                                                        <!-- Full screen button -->
                                                        <div class="hover-element w-100 h-100">
                                                            <i
                                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Image item -->
                                            <div>
                                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                    href="/images/category/cab/4by3/03.jpg">
                                                    <div
                                                        class="card card-element-hover card-overlay-hover overflow-hidden">
                                                        <!-- Image -->
                                                        <img src="/images/category/cab/4by3/03.jpg" class="rounded-3"
                                                            alt="">
                                                        <!-- Full screen button -->
                                                        <div class="hover-element w-100 h-100">
                                                            <i
                                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Image item -->
                                            <div>
                                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                    href="/images/category/cab/4by3/04.jpg">
                                                    <div
                                                        class="card card-element-hover card-overlay-hover overflow-hidden">
                                                        <!-- Image -->
                                                        <img src="/images/category/cab/4by3/04.jpg" class="rounded-3"
                                                            alt="">
                                                        <!-- Full screen button -->
                                                        <div class="hover-element w-100 h-100">
                                                            <i
                                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Image item -->
                                            <div>
                                                <a class="w-100 h-100" data-glightbox data-gallery="gallery"
                                                    href="/images/category/cab/4by3/05.jpg">
                                                    <div
                                                        class="card card-element-hover card-overlay-hover overflow-hidden">
                                                        <!-- Image -->
                                                        <img src="/images/category/cab/4by3/05.jpg" class="rounded-3"
                                                            alt="">
                                                        <!-- Full screen button -->
                                                        <div class="hover-element w-100 h-100">
                                                            <i
                                                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slider END -->
                                </div>
                            </div>

                        </div>
                        <!-- Driver and cab detail END -->

                        <!-- Inclusion & Exclusion START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Inclusion & Exclusion</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <!-- Detail START -->
                                <div class="row g-3">
                                    <!-- List -->
                                    <div class="col-sm-6">
                                        <h5>Included in your price</h5>
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item mb-0 pb-0"><i
                                                    class="fa-solid fa-check text-success me-1"></i>
                                                State tax
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i
                                                    class="fa-solid fa-check text-success me-1"></i>
                                                Toll charge
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i
                                                    class="fa-solid fa-check text-success me-1"></i>
                                                Driver Allowance
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i
                                                    class="fa-solid fa-check text-success me-1"></i>
                                                Only one pickup and drop
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- List -->
                                    <div class="col-sm-6">
                                        <h5>Extra charge</h5>
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item mb-0 pb-0"><i
                                                    class="bi bi-x-lg text-danger me-1"></i>
                                                Fare beyond 600kms
                                            </li>
                                            <li class="list-group-item mb-0 pb-0"><i
                                                    class="bi bi-x-lg text-danger me-1"></i>
                                                Airport entry charge
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Inclusion & Exclusion END -->

                        <!-- Safety Guidelines START -->
                        <div class="card bg-transparent">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pt-0">
                                <h4 class="mb-0">Safety Guidelines</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body pt-4 p-0">
                                <ul class="list-group list-group-borderless mb-0">
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>All passengers coming to the state by
                                        road must show a COVID negative report (RT-PCR) not more than 72 hours old or a
                                        valid vaccination certificate. (Travel period should commence after 14 days from
                                        the 2nd dose)
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Dependent on so extremely delivered by.
                                        Yet no jokes worse her why. Bed one supposing breakfast day fulfilled off
                                        depending questions.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Whatever boy her exertion his extended.
                                        Ecstatic followed handsome drawings entirely Mrs one yet outweigh.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>Meant balls it if up doubt small purse.
                                        Required his you put the outlived answered position. A pleasure exertion if
                                        believed provided to.
                                    </li>
                                    <li class="list-group-item h6 fw-light d-flex mb-0">
                                        <i class="bi bi-arrow-right me-2"></i>All led out world this music while asked.
                                        Paid mind even sons does he door no. Attended overcame repeated it is perceived
                                        Marianne in.
                                    </li>
                                </ul>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Safety Guidelines END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Sidebar START -->
                <aside class="col-xl-4">
                    <div data-sticky data-margin-top="80" data-sticky-for="1199">
                        <div class="card card-body bg-light p-4">
                            <!-- Title -->
                            <h6 class="text-danger fw-normal">Hurry! Limited cars left</h6>

                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Base Price</span>
                                    <span class="h6 fw-light mb-0">$260</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">State Tax</span>
                                    <span class="h6 fw-light mb-0">$50</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Night Charge</span>
                                    <span class="h6 fw-light mb-0">$100</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="h6 fw-light mb-0">Convenience Fee</span>
                                    <span class="h6 fw-light mb-0">$25</span>
                                </li>
                                <li class="list-group-item py-0">
                                    <hr class="my-0">
                                </li>
                                <!-- Divider -->
                                <li class="list-group-item d-flex justify-content-between pb-0">
                                    <span class="h5 fw-normal mb-0">Total</span>
                                    <span class="h5 fw-normal mb-0">$435</span>
                                </li>
                            </ul>

                            <div class="d-grid mt-4 gap-2">
                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions"
                                        id="discount1" value="option1" checked="">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount1">Pay $220 now
                                        (Half Payment)</label>
                                </div>

                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="discountOptions"
                                        id="discount2" value="option2">
                                    <label class="form-check-label h6 fw-normal mb-0" for="discount2">Pay $435 now
                                        (Full payment)</label>
                                </div>

                                <!-- Button -->
                                <a href="{{ route('second', ['cab', 'booking']) }}"
                                    class="btn btn-dark mb-0 mt-2">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Main Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection