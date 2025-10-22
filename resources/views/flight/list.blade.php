@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Search START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Booking from START -->
                    <form class="bg-mode border rounded position-relative px-4 pt-4 mb-4 mb-sm-0">
                        <div class="row g-4">
                            <!-- Nav tabs START -->
                            <div class="col-lg-6">
                                <ul class="nav nav-pills nav-pills-dark" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-start rounded-0 mb-0 active"
                                            id="pills-one-way-tab" data-bs-toggle="pill" data-bs-target="#pills-one-way"
                                            type="button" role="tab" aria-selected="true">One Way</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-end rounded-0 mb-0" id="pills-round-trip-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-round-trip" type="button"
                                            role="tab" aria-selected="false">Round Trip</button>
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
                                        <option selected>Premium Economy</option>
                                        <option>Business</option>
                                        <option>First Class</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Ticket Passenger -->
                            <div class="col-lg-3 ms-auto">
                                <div class="form-control-bg-light form-fs-md">
                                    <select class="form-select js-choice">
                                        <option value="">Select Travelers</option>
                                        <option>1</option>
                                        <option selected>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Tab content START -->
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <!-- One way tab START -->
                            <div class="tab-pane fade show active" id="pills-one-way" role="tabpanel"
                                aria-labelledby="pills-one-way-tab">
                                <div class="row g-4">
                                    <!-- Leaving From -->
                                    <div class="col-md-6 col-lg-4 position-relative">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="">Select location</option>
                                                <option selected>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>

                                        <!-- Auto fill button -->
                                        <div class="btn-flip-icon mt-3 mt-md-0">
                                            <button class="btn btn-white shadow btn-round mb-0"><i
                                                    class="fa-solid fa-right-left"></i></button>
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
                                                <option selected>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Departure -->
                                    <div class="col-lg-4">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
                                            <input type="text" class="form-control flatpickr"
                                                placeholder="Select date" data-date-format="d M Y" value="19 Nov 2022">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end pt-0">
                                        <a class="btn btn-primary mb-n4" href="#">Find ticket <i
                                                class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- One way tab END -->

                            <!-- Round way tab END -->
                            <div class="tab-pane fade" id="pills-round-trip" role="tabpanel"
                                aria-labelledby="pills-round-trip-tab">
                                <div class="row g-4">

                                    <!-- Leaving From -->
                                    <div class="col-md-6 col-xl-3 position-relative">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
                                                <option>San Jacinto, USA</option>
                                                <option>North Dakota, Canada</option>
                                                <option>West Virginia, Paris</option>
                                            </select>
                                        </div>

                                        <!-- Auto fill button -->
                                        <div class="btn-flip-icon mt-3 mt-md-0">
                                            <button class="btn btn-white shadow btn-round mb-0"><i
                                                    class="fa-solid fa-right-left"></i></button>
                                        </div>
                                    </div>

                                    <!-- Going To -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <!-- Input field -->
                                            <label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
                                            <select class="form-select js-choice" data-search-enabled="true">
                                                <option value="" selected>Select location</option>
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
                                            <input type="text" class="form-control flatpickr"
                                                data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <!-- Return -->
                                    <div class="col-md-6 col-xl-3">
                                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                            <label class="mb-1"><i class="bi bi-calendar me-2"></i>Return</label>
                                            <input type="text" class="form-control flatpickr"
                                                data-date-format="d M Y" placeholder="Select date">
                                        </div>
                                    </div>

                                    <div class="col-12 text-end pt-0">
                                        <a class="btn btn-primary mb-n4" href="#">Find ticket <i
                                                class="bi bi-arrow-right ps-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Round way tab END -->
                        </div>
                        <!-- Tab content END -->
                    </form>
                    <!-- Booking from END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Search START -->

    <!-- =======================
        Title and notice board START -->
    <section class="pt-0">
        <div class="container position-relative">

            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                        <!-- Title -->
                        <div class="mb-3 mb-sm-0">
                            <h1 class="fs-3">09 Flight Available</h1>
                            <ul class="nav nav-divider h6 mb-0">
                                <li class="nav-item">25 Jan</li>
                                <li class="nav-item">1 Stop</li>
                            </ul>
                        </div>

                        <!-- Offcanvas Button -->
                        <button class="btn btn-primary d-xl-none mb-0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fa-solid fa-sliders-h me-1"></i> Show filters
                        </button>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->

            <!-- Notice board START -->
            <div class="bg-primary bg-opacity-10 rounded-3 overflow-hidden mt-4 p-4">
                <div class="row g-4 align-items-center">
                    <!-- Image -->
                    <div class="col-6 col-md-3 text-center order-1">
                        <img src="/images/element/11.svg" class="mb-n5" alt="">
                    </div>

                    <!-- Content -->
                    <div class="col-md-6 order-md-2">
                        <!-- Title -->
                        <h4>International Guideline</h4>
                        <!-- Content -->
                        <p class="mb-2">COVID safety measures adopted by various countries including VISA
                            restrictions, quarantine rules, etc.</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-primary mb-0">View Guidelines</a>
                    </div>

                    <!-- Image -->
                    <div class="col-6 col-md-3 text-center order-3">
                        <img src="/images/element/10.svg" class="mb-n5" alt="">
                    </div>
                </div>
            </div>
            <!-- Notice board END -->

        </div>
    </section>
    <!-- =======================
        Title and notice board END -->

    <!-- =======================
        Flight list START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <aside class="col-xl-4 col-xxl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                        aria-labelledby="offcanvasSidebarLabel">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Advance Filters</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>

                        <!-- Offcanvas body -->
                        <div class="offcanvas-body flex-column p-3 p-xl-0">
                            <form class="rounded-3 shadow">
                                <!-- Popular filters START -->
                                <div class="card card-body rounded-0 rounded-top p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Popular Filters</h6>
                                    <!-- Popular filters group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="popolarType1">
                                                <label class="form-check-label" for="popolarType1">Refundable
                                                    Fare</label>
                                            </div>
                                            <span class="small">(41)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="popolarType2">
                                                <label class="form-check-label" for="popolarType2">1 Stop</label>
                                            </div>
                                            <span class="small">(20)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="popolarType3">
                                                <label class="form-check-label" for="popolarType3">Late
                                                    Departure</label>
                                            </div>
                                            <span class="small">(4)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="popolarType4">
                                                <label class="form-check-label" for="popolarType4">Non-Stop</label>
                                            </div>
                                            <span class="small">(2)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Popular filters END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Price START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Price</h6>
                                    <!-- Price group -->
                                    <div class="position-relative">
                                        <div class="noui-wrapper">
                                            <div class="d-flex justify-content-between">
                                                <input type="text" class="text-body input-with-range-min">
                                                <input type="text" class="text-body input-with-range-max">
                                            </div>
                                            <div class="noui-slider-range mt-2" data-range-min='500'
                                                data-range-max='2000' data-range-selected-min='700'
                                                data-range-selected-max='1500'></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Onward stops START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Onward Stops</h6>
                                    <!-- Onward stops group -->
                                    <ul class="list-inline mb-0 g-3">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c1">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check"
                                                for="btn-check-c1">Direct</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c2">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check"
                                                for="btn-check-c2">1 Stop</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-c3">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check"
                                                for="btn-check-c3">2+ Stops</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Onward stops END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Return Stops START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Return Stops</h6>
                                    <!-- Return Stops group -->
                                    <ul class="list-inline mb-0 g-3">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-6">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check"
                                                for="btn-check-6">Direct</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-7">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check"
                                                for="btn-check-7">1 Stop</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-0">
                                            <input type="checkbox" class="btn-check" id="btn-check-8">
                                            <label class="btn btn-sm btn-light btn-primary-soft-check"
                                                for="btn-check-8">2+ Stops</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Return Stops END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Preferred Airline START -->
                                <div class="card card-body rounded-0 p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Preferred Airline</h6>
                                    <!-- Preferred Airline group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="airlineType1">
                                            <label class="form-check-label" for="airlineType1">
                                                <img src="/images/element/12.svg" class="h-15px fa-fw me-2"
                                                    alt="">Blogzine
                                            </label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="airlineType2">
                                            <label class="form-check-label" for="airlineType2">
                                                <img src="/images/element/13.svg" class="h-15px fa-fw me-2"
                                                    alt="">Wizixo
                                            </label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="airlineType3">
                                            <label class="form-check-label" for="airlineType3">
                                                <img src="/images/element/14.svg" class="h-15px fa-fw me-2"
                                                    alt="">Folio airline
                                            </label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="airlineType4">
                                            <label class="form-check-label" for="airlineType4">
                                                <img src="/images/element/15.svg" class="h-15px fa-fw me-2"
                                                    alt="">Booking
                                            </label>
                                        </div>

                                        <!-- Collapse body -->
                                        <div class="multi-collapse collapse" id="airlineCollapes">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="airlineType7">
                                                <label class="form-check-label" for="airlineType7">
                                                    <img src="/images/element/15.svg" class="h-15px fa-fw me-2"
                                                        alt="">Formex
                                                </label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="airlineType8">
                                                <label class="form-check-label" for="airlineType8">
                                                    <img src="/images/element/13.svg" class="h-15px fa-fw me-2"
                                                        alt="">Realty
                                                </label>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="airlineType9">
                                                <label class="form-check-label" for="airlineType9">
                                                    <img src="/images/element/12.svg" class="h-15px fa-fw me-2"
                                                        alt="">rocyon
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Collapse button -->
                                        <a class="p-0 mb-0 mt-2 btn-more d-flex align-items-center collapsed"
                                            data-bs-toggle="collapse" href="#airlineCollapes" role="button"
                                            aria-expanded="false" aria-controls="airlineCollapes">
                                            See <span class="see-more ms-1">more</span><span
                                                class="see-less ms-1">less</span><i
                                                class="fa-solid fa-angle-down ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Preferred Airline END -->

                                <hr class="my-0"> <!-- Divider -->

                                <!-- Layover Airport START -->
                                <div class="card card-body rounded-0 rounded-bottom p-4">
                                    <!-- Title -->
                                    <h6 class="mb-2">Layover Airport</h6>
                                    <!-- Layover Airport group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lauoverType1">
                                                <label class="form-check-label" for="lauoverType1">Abu Dhabi</label>
                                            </div>
                                            <span class="small">(01)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lauoverType2">
                                                <label class="form-check-label" for="lauoverType2">Amsterdam</label>
                                            </div>
                                            <span class="small">(02)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lauoverType3">
                                                <label class="form-check-label" for="lauoverType3">Chicago</label>
                                            </div>
                                            <span class="small">(02)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="lauoverType4">
                                                <label class="form-check-label" for="lauoverType4">Doha</label>
                                            </div>
                                            <span class="small">(03)</span>
                                        </div>

                                        <!-- Collapse body -->
                                        <div class="multi-collapse collapse" id="lauoverCollapes">
                                            <!-- Checkbox -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="lauoverType7">
                                                    <label class="form-check-label" for="lauoverType7">Dubai</label>
                                                </div>
                                                <span class="small">(04)</span>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="lauoverType8">
                                                    <label class="form-check-label" for="lauoverType8">New
                                                        Delhi</label>
                                                </div>
                                                <span class="small">(15)</span>
                                            </div>
                                            <!-- Checkbox -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="lauoverType9">
                                                    <label class="form-check-label" for="lauoverType9">Paris</label>
                                                </div>
                                                <span class="small">(04)</span>
                                            </div>
                                        </div>
                                        <!-- Collapse button -->
                                        <a class="btn-more d-flex align-items-center collapsed p-0 mb-0 mt-2"
                                            data-bs-toggle="collapse" href="#lauoverCollapes" role="button"
                                            aria-expanded="false" aria-controls="lauoverCollapes">
                                            See <span class="see-more ms-1">more</span><span
                                                class="see-less ms-1">less</span><i
                                                class="fa-solid fa-angle-down ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Layover Airport END -->
                            </form><!-- Form End -->
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between p-2 p-xl-0 mt-xl-4">
                            <button class="btn btn-link p-0 mb-0">Clear all</button>
                            <button class="btn btn-primary mb-0">Filter Result</button>
                        </div>

                    </div>
                    <!-- Responsive offcanvas body END -->
                </aside>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-8 col-xxl-9">
                    <div class="vstack gap-4">

                        <!-- Ticket item START -->
                        <div class="card border">
                            <!-- card-body START -->
                            <div class="card-body p-4 pb-0">
                                <div class="row g-4">
                                    <!-- Air line name -->
                                    <div class="col-md-3">
                                        <!-- Image -->
                                        <img src="/images/element/09.svg" class="w-80px mb-3" alt="">
                                        <!-- Title -->
                                        <h6 class="fw-normal mb-0">Phillippines Airline</h6>
                                        <h6 class="fw-normal mb-0">PA - 5620</h6>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Title -->
                                        <h4>14:50</h4>
                                        <h6 class="mb-0">Sun, 29 Jan 2023</h6>
                                        <p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Title -->
                                        <h4>07:35</h4>
                                        <h6 class="mb-0">Sun, 30 Jan 2023</h6>
                                        <p class="mb-0">JFK - Terminal 2 New York, USA</p>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Price -->
                                        <h4>$18,500</h4>
                                        <a href="{{ route('second', ['flight', 'detail']) }}"
                                            class="btn btn-dark">Book Now</a>
                                        <button class="btn btn-link text-decoration-underline p-0 mb-0"
                                            data-bs-toggle="modal" data-bs-target="#flightdetail">
                                            <i class="bi bi-eye-fill me-1"></i>Flight Details
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!-- card-body END -->

                            <!-- card footer -->
                            <div class="card-footer p-4">
                                <div class="bg-light p-2 rounded-2">
                                    <ul class="list-inline d-sm-flex justify-content-sm-between mb-0 mx-4">
                                        <li class="list-inline-item text-danger">Only 10 Seat Left</li>
                                        <li class="list-inline-item">Total time: 10h 35m</li>
                                        <li class="list-inline-item text-success">Refundable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <!-- Ticket item START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Airline Name -->
                                <div class="d-flex align-items-center mb-2 mb-sm-0">
                                    <img src="/images/element/13.svg" class="w-30px me-2" alt="">
                                    <h6 class="fw-normal mb-0">Blogzine Airline (FFR - 5682)</h6>
                                </div>
                                <h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy</h6>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4 pb-0">
                                <!-- Ticket item START -->
                                <div class="row g-4">
                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <h4>14:50</h4>
                                        <p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-sm-4 col-md-3 my-sm-auto text-center">
                                        <!-- Time -->
                                        <h5>9hr 50min</h5>
                                        <div class="position-relative my-4">
                                            <!-- Line -->
                                            <hr class="bg-primary opacity-5 position-relative">
                                            <!-- Icon -->
                                            <div
                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <h4>07:35</h4>
                                        <p class="mb-0">JFK - Terminal 2 New York, USA</p>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-md-3 text-md-end">
                                        <h4>$18,500</h4>
                                        <a href="{{ route('second', ['flight', 'detail']) }}"
                                            class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
                                        <button class="btn btn-link text-decoration-underline p-0 mb-0"
                                            data-bs-toggle="modal" data-bs-target="#flightdetail">
                                            <i class="bi bi-eye-fill me-1"></i>Flight Details
                                        </button>
                                    </div>
                                </div>
                                <!-- Ticket item END -->
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer pt-4">
                                <ul
                                    class="list-inline bg-light rounded-2 d-sm-flex text-center justify-content-sm-between mb-0 px-4 py-2">
                                    <li class="list-inline-item text-danger">Only 10 Seat Left</li>
                                    <li class="list-inline-item text-danger">Non-Refundable</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <!-- Ticket item START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header d-sm-flex justify-content-sm-between align-items-center">
                                <!-- Airline Name -->
                                <div class="d-flex align-items-center mb-2 mb-sm-0">
                                    <img src="/images/element/12.svg" class="w-30px me-2" alt="">
                                    <h6 class="fw-normal mb-0">Wizixo Airline (SA - 1254)</h6>
                                </div>
                                <h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy</h6>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4 pb-0">
                                <!-- Ticket item START -->
                                <div class="row g-4">
                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <h4>14:50</h4>
                                        <p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-sm-4 col-md-3 my-sm-auto text-center">
                                        <!-- Time -->
                                        <h5>9hr 50min</h5>
                                        <div class="position-relative my-4">
                                            <!-- Line -->
                                            <hr class="bg-primary opacity-5 position-relative">
                                            <!-- Icon -->
                                            <div
                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <h4>07:35</h4>
                                        <p class="mb-0">JFK - Terminal 2 New York, USA</p>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-md-3 text-md-end">
                                        <h4>$18,500</h4>
                                        <a href="{{ route('second', ['flight', 'detail']) }}"
                                            class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
                                    </div>
                                </div>
                                <!-- Ticket item END -->
                            </div>

                            <!-- Card footer -->
                            <div class="card-footer pt-4">
                                <ul
                                    class="list-inline bg-light rounded-2 d-sm-flex text-center justify-content-sm-between mb-0 px-4 py-2">
                                    <li class="list-inline-item text-danger">Only 25 Seat Left</li>
                                    <li class="list-inline-item text-danger">Non-Refundable</li>
                                    <li class="list-inline-item">
                                        <!-- Collapse button -->
                                        <a class="btn-more d-flex align-items-center collapsed p-0 mb-0"
                                            data-bs-toggle="collapse" href="#flightDetail" role="button"
                                            aria-expanded="false" aria-controls="flightDetail">
                                            Flight detail<i class="fa-solid fa-angle-down ms-2"></i>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Collapse body START -->
                                <div class="multi-collapse collapse" id="flightDetail">
                                    <!-- Tabs START -->
                                    <ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded mt-4 mb-3 p-2"
                                        id="flightlist-tab" role="tablist">
                                        <!-- Tab item -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active mb-0" id="flightlist-tab-1"
                                                data-bs-toggle="pill" data-bs-target="#flightlist-tab1"
                                                type="button" role="tab" aria-controls="flightlist-tab1"
                                                aria-selected="true">Flight Information</button>
                                        </li>
                                        <!-- Tab item -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link mb-0" id="flightlist-tab-2" data-bs-toggle="pill"
                                                data-bs-target="#flightlist-tab2" type="button" role="tab"
                                                aria-controls="flightlist-tab2" aria-selected="false">Fare
                                                Detail</button>
                                        </li>
                                        <!-- Tab item -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link mb-0" id="flightlist-tab-3" data-bs-toggle="pill"
                                                data-bs-target="#flightlist-tab3" type="button" role="tab"
                                                aria-controls="flightlist-tab3" aria-selected="false">Baggage
                                                Rules</button>
                                        </li>
                                        <!-- Tab item -->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link mb-0" id="flightlist-tab-4" data-bs-toggle="pill"
                                                data-bs-target="#flightlist-tab4" type="button" role="tab"
                                                aria-controls="flightlist-tab4" aria-selected="false">Cancellation
                                                Rules</button>
                                        </li>
                                    </ul>
                                    <!-- Tabs END -->

                                    <!-- Tab content START -->
                                    <div class="tab-content mb-0" id="flightlist-tabContent">

                                        <!-- Content item START -->
                                        <div class="tab-pane fade show active" id="flightlist-tab1" role="tabpanel"
                                            aria-labelledby="flightlist-tab-1">
                                            <div class="card border">

                                                <!-- Card header -->
                                                <div class="card-header d-flex align-items-center pb-0">
                                                    <img src="/images/element/12.svg" class="w-30px me-2"
                                                        alt="">
                                                    <h6 class="fw-normal mb-0">Wizixo Airline (SA - 1254)</h6>
                                                </div>

                                                <!-- Card body START -->
                                                <div class="card-body p-4">
                                                    <!-- Ticket item START -->
                                                    <div class="row g-4">
                                                        <!-- Airport detail -->
                                                        <div class="col-sm-4">
                                                            <!-- Title -->
                                                            <h4>BOM</h4>
                                                            <h6 class="mb-0">14:50</h6>
                                                            <p class="mb-0">Chhatrapati Shivaji International Airport
                                                            </p>
                                                        </div>

                                                        <!-- Time -->
                                                        <div class="col-sm-4 my-sm-auto text-center">
                                                            <!-- Time -->
                                                            <h5>9hr 50min</h5>

                                                            <div class="position-relative my-4">
                                                                <!-- Line -->
                                                                <hr class="bg-primary opacity-5 position-relative">
                                                                <!-- Icon -->
                                                                <div
                                                                    class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                                    <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Airport detail -->
                                                        <div class="col-sm-4">
                                                            <!-- Title -->
                                                            <h4>CDG</h4>
                                                            <h6 class="mb-0">11:50</h6>
                                                            <p class="mb-0">Ch. De Gaulle, Paris, France</p>
                                                        </div>
                                                    </div>
                                                    <!-- Ticket item END -->

                                                    <!-- Divider -->
                                                    <div
                                                        class="bg-light text-center fw-normal rounded-2 mt-3 mb-4 p-2">
                                                        Change of planes: 3h 15m Layover in France
                                                    </div>

                                                    <!-- Ticket item START -->
                                                    <div class="row g-4">
                                                        <!-- Airport detail -->
                                                        <div class="col-sm-4">
                                                            <!-- Title -->
                                                            <h4>CDG</h4>
                                                            <h6 class="mb-0">2:50</h6>
                                                            <p class="mb-0">Ch. De Gaulle, Paris, France</p>
                                                        </div>

                                                        <!-- Time -->
                                                        <div class="col-sm-4 my-sm-auto text-center">
                                                            <!-- Time -->
                                                            <h5>5hr 50min</h5>

                                                            <div class="position-relative my-4">
                                                                <!-- Line -->
                                                                <hr class="bg-primary opacity-5 position-relative">
                                                                <!-- Icon -->
                                                                <div
                                                                    class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                                    <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Airport detail -->
                                                        <div class="col-sm-4">
                                                            <!-- Title -->
                                                            <h4>JFK</h4>
                                                            <h6 class="mb-0">7:35</h6>
                                                            <p class="mb-0">John F Kennedy Intl-NY</p>
                                                        </div>
                                                    </div>
                                                    <!-- Ticket item END -->
                                                </div>
                                                <!-- Card body END -->
                                            </div>
                                        </div>
                                        <!-- Content item END -->

                                        <!-- Content item START -->
                                        <div class="tab-pane fade" id="flightlist-tab2" role="tabpanel"
                                            aria-labelledby="flightlist-tab-2">
                                            <div class="card card-body">
                                                <!-- Table START -->
                                                <div class="table-responsive-lg">
                                                    <table class="table caption-bottom mb-0">
                                                        <!-- Caption -->
                                                        <caption class="pb-0">*From The Date Of Departure</caption>
                                                        <!-- Table head -->
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th scope="col" class="border-0 rounded-start">
                                                                    Base Fare</th>
                                                                <th scope="col" class="border-0">Taxes and Fees
                                                                </th>
                                                                <th scope="col" class="border-0 rounded-end">
                                                                    Total Fees</th>
                                                            </tr>
                                                        </thead>
                                                        <!-- Table body -->
                                                        <tbody>
                                                            <tr>
                                                                <td>$36,500</td>
                                                                <td>$1,050</td>
                                                                <td>
                                                                    <h5 class="mb-0">$37,550</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Table END -->
                                            </div>
                                        </div>
                                        <!-- Content item END -->

                                        <!-- Content item START -->
                                        <div class="tab-pane fade" id="flightlist-tab3" role="tabpanel"
                                            aria-labelledby="flightlist-tab-3">
                                            <div class="card border">
                                                <!-- Card header -->
                                                <div class="card-header d-flex align-items-center border-bottom">
                                                    <!-- Title -->
                                                    <img src="/images/element/12.svg" class="w-30px me-2"
                                                        alt="">
                                                    <h5 class="card-title mb-0">BOM - CDG</h5>
                                                </div>

                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <!-- Table START -->
                                                    <div class="table-responsive-lg">
                                                        <table class="table caption-bottom mb-0">
                                                            <!-- Caption -->
                                                            <caption class="pb-0">*1PC = 23KG</caption>
                                                            <!-- Table head -->
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" class="border-0 rounded-start">
                                                                        Baggage Type
                                                                    </th>
                                                                    <th scope="col" class="border-0">Check In
                                                                    </th>
                                                                    <th scope="col" class="border-0 rounded-end">
                                                                        Cabin</th>
                                                                </tr>
                                                            </thead>
                                                            <!-- Table body -->
                                                            <tbody class="border-top-0">
                                                                <tr>
                                                                    <td>Adult</td>
                                                                    <td>2 PC</td>
                                                                    <td>7 Kg</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Table END -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content item END -->

                                        <!-- Content item START -->
                                        <div class="tab-pane fade" id="flightlist-tab4" role="tabpanel"
                                            aria-labelledby="flightlist-tab-4">
                                            <div class="card border">
                                                <!-- Card header -->
                                                <div class="card-header d-flex align-items-center border-bottom">
                                                    <!-- Title -->
                                                    <img src="/images/element/12.svg" class="w-30px me-2"
                                                        alt="">
                                                    <h5 class="card-title mb-0">BOM - CDG</h5>
                                                </div>

                                                <!-- Card body -->
                                                <div class="card-body">
                                                    <!-- Table START -->
                                                    <div class="table-responsive-lg">
                                                        <table class="table caption-bottom mb-0">
                                                            <!-- Caption -->
                                                            <caption class="pb-0">*From The Date Of Departure
                                                            </caption>
                                                            <!-- Table head -->
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col" class="border-0 rounded-start">
                                                                        Time Frame</th>
                                                                    <th scope="col" class="border-0 rounded-end">
                                                                        Air Free + MMT Free</th>
                                                                </tr>
                                                            </thead>
                                                            <!-- Table body -->
                                                            <tbody class="border-top-0">
                                                                <tr>
                                                                    <td>0 hours to 24 hours</td>
                                                                    <td>Non Refundable</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>24 hours to 365 days</td>
                                                                    <td>$16,325 + $250</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Table END -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Content item END -->

                                    </div>
                                    <!-- Tab content END -->
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <!-- Action box START -->
                        <div
                            class="bg-success bg-opacity-10 p-3 rounded-2 d-sm-flex justify-content-sm-between align-items-center">
                            <!-- Title and badge -->
                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div class="position-relative z-index-1 me-2">
                                    <img src="/images/element/05.svg" class="position-relative h-40px"
                                        alt="">
                                    <span
                                        class="smaller text-white position-absolute top-50 start-50 translate-middle">New</span>
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 fw-normal">Get <strong class='text-success'>12% Off</strong> On Your
                                    First Flight</h6>
                            </div>

                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-success mb-0">Login / Signup</a>
                        </div>
                        <!-- Action box END -->

                        <!-- Ticket item START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header">
                                <div class="d-md-flex justify-content-md-between">
                                    <!-- Airline Name -->
                                    <div class="d-flex align-items-center mb-2 mb-md-0">
                                        <img src="/images/element/14.svg" class="w-30px me-2" alt="">
                                        <h6 class="fw-normal mb-0">Folio Airline (CCE - 2158)</h6>
                                    </div>
                                    <h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy
                                    </h6>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4 pb-0">
                                <div class="row g-4 align-items-center">
                                    <!-- Ticket START -->
                                    <div class="col-md-9">
                                        <!-- Ticket detail START -->
                                        <div class="row g-4">
                                            <!-- Airport detail -->
                                            <div class="col-sm-4">
                                                <h4>14:50</h4>
                                                <h6 class="mb-0 fw-normal">Sun, 29 Jan 2023</h6>
                                                <p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
                                            </div>

                                            <!-- Time -->
                                            <div class="col-sm-4 my-sm-auto text-center">
                                                <h5>9hr 50min</h5>
                                                <div class="position-relative my-4">
                                                    <!-- Line -->
                                                    <hr class="bg-primary opacity-5 position-relative">
                                                    <!-- Icon -->
                                                    <div
                                                        class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                        <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Airport detail -->
                                            <div class="col-sm-4">
                                                <h4>07:35</h4>
                                                <h6 class="mb-0 fw-normal">Sun, 30 Jan 2023</h6>
                                                <p class="mb-0">JFK - Terminal 2 New York, USA</p>
                                            </div>
                                        </div>
                                        <!-- Ticket detail END -->

                                        <!-- Divider -->
                                        <hr class="my-4">

                                        <!-- Ticket detail START -->
                                        <div class="row g-4">
                                            <!-- Airport detail -->
                                            <div class="col-sm-4">
                                                <h4>04:50</h4>
                                                <h6 class="mb-0 fw-normal">Sun, 19 Feb 2023</h6>
                                                <p class="mb-0">JFK - Terminal 2 New York, USA</p>
                                            </div>

                                            <!-- Time -->
                                            <div class="col-sm-4 my-sm-auto text-center">
                                                <h5>10hr 35min</h5>
                                                <div class="position-relative my-4">
                                                    <!-- Line -->
                                                    <hr class="bg-primary opacity-5 position-relative">
                                                    <!-- Icon -->
                                                    <div
                                                        class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                        <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Airport detail -->
                                            <div class="col-sm-4">
                                                <h4>15:48</h4>
                                                <h6 class="mb-0 fw-normal">Sun, 19 Feb 2023</h6>
                                                <p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
                                            </div>
                                        </div>
                                        <!-- Ticket detail END -->
                                    </div>
                                    <!-- Ticket END -->

                                    <!-- Price START -->
                                    <div class="col-md-3 text-md-end">
                                        <!-- Price -->
                                        <h4>$18,500</h4>
                                        <a href="{{ route('second', ['flight', 'detail']) }}"
                                            class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
                                        <button class="btn btn-link text-decoration-underline p-0 mb-0"
                                            data-bs-toggle="modal" data-bs-target="#flightdetail">
                                            <i class="bi bi-eye-fill me-1"></i>Flight Details
                                        </button>
                                    </div>
                                    <!-- Price END -->
                                </div> <!-- Row END -->
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer -->
                            <div class="card-footer pt-4">
                                <div class="">
                                    <ul
                                        class="list-inline bg-light d-sm-flex text-center justify-content-sm-between rounded-2 py-2 px-4 mb-0">
                                        <li class="list-inline-item text-danger">Only 10 Seat Left</li>
                                        <li class="list-inline-item text-success">Refundable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <!-- Pagination START -->
                        <nav class="d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                            class="fa-solid fa-angle-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Pagination END -->

                    </div>
                </div>
                <!-- Main content END -->
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Flight list END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Flight detail modal START -->
<div class="modal fade" id="flightdetail" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title">Flight Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-3">
                <!-- Tabs START -->
                <ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded p-2 mb-3"
                    id="flight-pills-tab" role="tablist">
                    <!-- Tab item -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active mb-0" id="flight-info" data-bs-toggle="pill"
                            data-bs-target="#flight-info-tab" type="button" role="tab"
                            aria-controls="flight-info-tab" aria-selected="true">Flight Information</button>
                    </li>
                    <!-- Tab item -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0" id="flight-fare" data-bs-toggle="pill"
                            data-bs-target="#flight-fare-tab" type="button" role="tab"
                            aria-controls="flight-fare-tab" aria-selected="false">Fare Detail</button>
                    </li>
                    <!-- Tab item -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0" id="flight-baggage" data-bs-toggle="pill"
                            data-bs-target="#flight-baggage-tab" type="button" role="tab"
                            aria-controls="flight-baggage-tab" aria-selected="false">Baggage Rules</button>
                    </li>
                    <!-- Tab item -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-0" id="flight-policy" data-bs-toggle="pill"
                            data-bs-target="#flight-policy-tab" type="button" role="tab"
                            aria-controls="flight-policy-tab" aria-selected="false">Cancellation Rules</button>
                    </li>
                </ul>
                <!-- Tabs END -->

                <!-- Tab content START -->
                <div class="tab-content mb-0" id="flight-pills-tabContent">

                    <!-- Content item START -->
                    <div class="tab-pane fade show active" id="flight-info-tab" role="tabpanel"
                        aria-labelledby="flight-info">
                        <div class="card border">

                            <!-- Card header -->
                            <div class="card-header">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <!-- Airline Name -->
                                    <div class="d-flex mb-2 mb-sm-0">
                                        <img src="/images/element/09.svg" class="w-40px me-2" alt="">
                                        <h6 class="fw-normal mb-0">Phillippines Airline (PA - 5620)</h6>
                                    </div>
                                    <h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy
                                    </h6>
                                </div>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <!-- Ticket item START -->
                                <div class="row g-4">
                                    <!-- Airport detail -->
                                    <div class="col-sm-4">
                                        <!-- Title -->
                                        <h4>BOM</h4>
                                        <h6 class="mb-0">14:50</h6>
                                        <p class="mb-0">Chhatrapati Shivaji International Airport</p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-sm-4 my-sm-auto text-center">
                                        <!-- Time -->
                                        <h5>9hr 50min</h5>

                                        <div class="position-relative my-4">
                                            <!-- Line -->
                                            <hr class="bg-primary opacity-5 position-relative">
                                            <!-- Icon -->
                                            <div
                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4">
                                        <!-- Title -->
                                        <h4>CDG</h4>
                                        <h6 class="mb-0">11:50</h6>
                                        <p class="mb-0">Ch. De Gaulle, Paris, France</p>
                                    </div>
                                </div>
                                <!-- Ticket item END -->

                                <!-- Divider -->
                                <div class="bg-light text-center fw-normal rounded-2 mt-3 mb-4 p-2">
                                    Change of planes: 3h 15m Layover in France
                                </div>

                                <!-- Ticket item START -->
                                <div class="row g-4">
                                    <!-- Airport detail -->
                                    <div class="col-sm-4">
                                        <!-- Title -->
                                        <h4>CDG</h4>
                                        <h6 class="mb-0">2:50</h6>
                                        <p class="mb-0">Ch. De Gaulle, Paris, France</p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-sm-4 my-sm-auto text-center">
                                        <!-- Time -->
                                        <h5>5hr 50min</h5>

                                        <div class="position-relative my-4">
                                            <!-- Line -->
                                            <hr class="bg-primary opacity-5 position-relative">
                                            <!-- Icon -->
                                            <div
                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4">
                                        <!-- Title -->
                                        <h4>JFK</h4>
                                        <h6 class="mb-0">7:35</h6>
                                        <p class="mb-0">John F Kennedy Intl-NY</p>
                                    </div>
                                </div>
                                <!-- Ticket item END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                    </div>
                    <!-- Content item END -->

                    <!-- Content item START -->
                    <div class="tab-pane fade" id="flight-fare-tab" role="tabpanel"
                        aria-labelledby="flight-fare">
                        <div class="card card-body">

                            <!-- Table START -->
                            <div class="table-responsive-lg">
                                <table class="table caption-bottom mb-0">
                                    <!-- Caption -->
                                    <caption class="pb-0">*From The Date Of Departure</caption>
                                    <!-- Table head -->
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Base Fare</th>
                                            <th scope="col" class="border-0">Taxes and Fees</th>
                                            <th scope="col" class="border-0 rounded-end">Total Fees</th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody>
                                        <tr>
                                            <td>$36,500</td>
                                            <td>$1,050</td>
                                            <td>
                                                <h5 class="mb-0">$37,550</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table END -->
                        </div>
                    </div>
                    <!-- Content item END -->

                    <!-- Content item START -->
                    <div class="tab-pane fade" id="flight-baggage-tab" role="tabpanel"
                        aria-labelledby="flight-baggage">
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center border-bottom">
                                <!-- Title -->
                                <img src="/images/element/09.svg" class="h-20px me-1" alt="">
                                <h5 class="card-title mb-0">BOM - CDG</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Table START -->
                                <div class="table-responsive-lg">
                                    <table class="table caption-bottom mb-0">
                                        <!-- Caption -->
                                        <caption class="pb-0">*1PC = 23KG</caption>
                                        <!-- Table head -->
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Baggage Type</th>
                                                <th scope="col" class="border-0">Check In</th>
                                                <th scope="col" class="border-0 rounded-end">Cabin</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="border-top-0">
                                            <tr>
                                                <td>Adult</td>
                                                <td>2 PC</td>
                                                <td>7 Kg</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table END -->
                            </div>
                        </div>
                    </div>
                    <!-- Content item END -->

                    <!-- Content item START -->
                    <div class="tab-pane fade" id="flight-policy-tab" role="tabpanel"
                        aria-labelledby="flight-policy">
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header d-flex align-items-center border-bottom">
                                <!-- Title -->
                                <img src="/images/element/09.svg" class="h-20px me-1" alt="">
                                <h5 class="card-title mb-0">BOM - CDG</h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Table START -->
                                <div class="table-responsive-lg">
                                    <table class="table caption-bottom mb-0">
                                        <!-- Caption -->
                                        <caption class="pb-0">*From The Date Of Departure</caption>
                                        <!-- Table head -->
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Time Frame</th>
                                                <th scope="col" class="border-0 rounded-end">Air Free + MMT Free
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="border-top-0">
                                            <tr>
                                                <td>0 hours to 24 hours</td>
                                                <td>Non Refundable</td>
                                            </tr>
                                            <tr>
                                                <td>24 hours to 365 days</td>
                                                <td>$16,325 + $250</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table END -->
                            </div>
                        </div>
                    </div>
                    <!-- Content item END -->

                </div>
                <!-- Tab content END -->
            </div>
        </div>
    </div>
</div>
<!-- Flight detail modal END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection