@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Search START -->
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Booking from START -->
                    <div class="form-control-bg-light bg-mode border p-4 rounded-3">
                        <div class="row g-4">

                            <!-- Nav tabs START -->
                            <div class="col-lg-6">
                                <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <div class="form-check form-check-inline active" id="cab-one-way-tab"
                                        data-bs-toggle="pill" data-bs-target="#cab-one-way" role="tab"
                                        aria-controls="cab-one-way" aria-selected="true">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadiocab1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadiocab1">One Way</label>
                                    </div>
                                    <div class="form-check form-check-inline" id="cab-round-way-tab"
                                        data-bs-toggle="pill" data-bs-target="#cab-round-way" role="tab"
                                        aria-controls="cab-round-way" aria-selected="false">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadiocab2" value="option2">
                                        <label class="form-check-label" for="inlineRadiocab2">Round Trip</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs END -->
                        </div>

                        <!-- Tab content START -->
                        <div class="tab-content mt-0" id="pills-tabContent">
                            <!-- One way tab START -->
                            <div class="tab-pane fade show active" id="cab-one-way" role="tabpanel"
                                aria-labelledby="cab-one-way-tab">
                                <form class="row g-4 align-items-center">
                                    <div class="col-xl-10">
                                        <div class="row g-4">
                                            <!-- Pickup -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-size-lg">
                                                    <label class="form-label">Pickup</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm">
                                                        <option value="">Select location</option>
                                                        <option selected>San Jacinto, USA</option>
                                                        <option>North Dakota, Canada</option>
                                                        <option>West Virginia, Paris</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Drop -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="form-size-lg">
                                                    <label class="form-label">Drop</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm">
                                                        <option value="">Select location</option>
                                                        <option>San Jacinto, USA</option>
                                                        <option selected>North Dakota, Canada</option>
                                                        <option>West Virginia, Paris</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-md-6 col-xl-2">
                                                <label class="form-label">Pickup Date</label>
                                                <input type="text" class="form-control form-control-lg flatpickr"
                                                    value="20 Nov" placeholder="Select date">
                                            </div>

                                            <!-- Time -->
                                            <div class="col-md-6 col-xl-2">
                                                <label class="form-label">Pickup time</label>
                                                <input type="text" class="form-control form-control-lg flatpickr"
                                                    value="2:50 PM" data-enableTime="true" data-noCalendar="true"
                                                    placeholder="Select time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-2 d-grid mt-xl-auto">
                                        <a class="btn btn-lg btn-primary mb-0" href="#">Update</a>
                                    </div>
                                </form>
                            </div>
                            <!-- One way tab END -->

                            <!-- Round way tab END -->
                            <div class="tab-pane fade" id="cab-round-way" role="tabpanel"
                                aria-labelledby="cab-round-way-tab">
                                <form class="row g-4 align-items-center">
                                    <div class="col-xl-12">
                                        <div class="row g-4">
                                            <!-- Leaving From -->
                                            <div class="col-md-6 col-xl-6">
                                                <div class="form-size-lg">
                                                    <label class="form-label">Pickup</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm">
                                                        <option value="" selected>Select location</option>
                                                        <option>New York</option>
                                                        <option>Canada</option>
                                                        <option>Paris</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Going To -->
                                            <div class="col-md-6 col-xl-6">
                                                <div class="form-size-lg">
                                                    <label class="form-label">Drop</label>
                                                    <select class="form-select js-choice" data-search-enabled="true"
                                                        aria-label=".form-select-sm">
                                                        <option value="" selected>Select location</option>
                                                        <option>Canada</option>
                                                        <option>New York</option>
                                                        <option>Paris</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Date -->
                                            <div class="col-md-6 col-xl-3">
                                                <label class="form-label">Pickup Date</label>
                                                <input type="text" class="form-control form-control-lg flatpickr"
                                                    placeholder="Select date">
                                            </div>

                                            <!-- Time -->
                                            <div class="col-md-6 col-xl-3">
                                                <label class="form-label">Pickup time</label>
                                                <input type="text" class="form-control form-control-lg flatpickr"
                                                    data-enableTime="true" data-noCalendar="true"
                                                    placeholder="Select time">
                                            </div>

                                            <!-- Date -->
                                            <div class="col-md-6 col-xl-3">
                                                <label class="form-label">Return Date</label>
                                                <input type="text" class="form-control form-control-lg flatpickr"
                                                    placeholder="Select date">
                                            </div>

                                            <!-- Time -->
                                            <div class="col-md-6 col-xl-3">
                                                <label class="form-label">Return time</label>
                                                <input type="text" class="form-control form-control-lg flatpickr"
                                                    data-enableTime="true" data-noCalendar="true"
                                                    placeholder="Select time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-2">
                                        <a class="btn btn-lg btn-primary w-100 mb-0" href="#">Update</a>
                                    </div>
                                </form>
                            </div>
                            <!-- Round way tab END -->
                        </div>
                        <!-- Tab content END -->
                    </div>
                    <!-- Booking from END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Search START -->

    <!-- =======================
        Titles START -->
    <section class="pt-6">
        <div class="container position-relative">

            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">
                    <div class="d-sm-flex justify-content-sm-between align-items-center">
                        <!-- Title -->
                        <div class="mb-2 mb-sm-0">
                            <h1 class="fs-3 mb-2">5 Cabs Available</h1>
                            <!-- Divider -->
                            <ul class="nav nav-divider h6 mb-0">
                                <li class="nav-item">One-way trip</li>
                                <li class="nav-item">152 kms</li>
                                <li class="nav-item">2 Adults</li>
                            </ul>
                        </div>

                        <!-- Offcanvas Button -->
                        <button class="btn btn-primary-soft btn-primary-check d-xl-none mb-0" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar"
                            aria-controls="offcanvasSidebar">
                            <i class="fa-solid fa-sliders-h me-1"></i> Show filters
                        </button>
                    </div>
                </div>
            </div>
            <!-- Title and button END -->

        </div>
    </section>
    <!-- =======================
        Titles END -->

    <!-- =======================
        Cab list START -->
    <section class="pt-0">
        <div class="container" data-sticky-container>
            <div class="row">

                <!-- Left sidebar START -->
                <aside class="col-xl-4 col-xxl-3">
                    <div data-sticky data-margin-top="80" data-sticky-for="1199">
                        <!-- Responsive offcanvas body START -->
                        <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                            aria-labelledby="offcanvasSidebarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Advance Filters</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body flex-column p-3 p-xl-0">
                                <form class="rounded-3 shadow">
                                    <!-- Passenger capacity START -->
                                    <div class="card card-body rounded-0 rounded-top p-4">
                                        <!-- Title -->
                                        <h6 class="mb-2">Passenger capacity</h6>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="popolarType1">
                                            <label class="form-check-label" for="popolarType1">4 passenger
                                                seats</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="popolarType2">
                                            <label class="form-check-label" for="popolarType2">6 passenger
                                                seats</label>
                                        </div>
                                    </div>
                                    <!-- Passenger capacity END -->

                                    <hr class="my-0"> <!-- Divider -->

                                    <!-- Price START -->
                                    <div class="card card-body rounded-0 p-4">
                                        <!-- Title -->
                                        <h6 class="mb-2">Price</h6>
                                        <!-- Price group -->
                                        <div class="position-relative">
                                            <div class="noui-wrapper mb-2">
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

                                    <!-- Car model START -->
                                    <div class="card card-body rounded-0 rounded-bottom p-4">
                                        <!-- Title -->
                                        <h6 class="mb-2">Car model</h6>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType1">
                                            <label class="form-check-label" for="lauoverType1">WagonR or
                                                similar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType2">
                                            <label class="form-check-label" for="lauoverType2">Indica or
                                                similar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType3">
                                            <label class="form-check-label" for="lauoverType3">Dzire or
                                                similar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType4">
                                            <label class="form-check-label" for="lauoverType4">Etios or
                                                similar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType7">
                                            <label class="form-check-label" for="lauoverType7">Xcent or
                                                similar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType8">
                                            <label class="form-check-label" for="lauoverType8">Innova or
                                                similar</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="lauoverType9">
                                            <label class="form-check-label" for="lauoverType9">Innova Crysta or
                                                similar</label>
                                        </div>
                                    </div>
                                    <!-- Car model END -->
                                </form><!-- Form End -->
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between p-2 p-xl-0 mt-xl-4">
                                <button class="btn btn-link p-0 mb-0">Clear all</button>
                                <button class="btn btn-primary mb-0">Filter Result</button>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                </aside>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-8 col-xxl-9">
                    <div class="vstack gap-4">

                        <!-- Alert box START -->
                        <div class="alert alert-warning border-warning rounded-3 mb-0" role="alert">
                            <h5>Why book a one-way trip with us?</h5>
                            <!-- List -->
                            <ul class="list-group list-group-borderless mb-0">
                                <li class="list-group-item d-flex text-body mb-0">
                                    <i class="fa-solid fa-check text-warning me-2"></i>Only one-side fare for your
                                    doorstep pickup & drop to destination.
                                </li>
                                <li class="list-group-item d-flex text-body mb-0">
                                    <i class="fa-solid fa-check text-warning me-2"></i>No hidden charges - Pay nothing
                                    extra than what's mentioned.
                                </li>
                                <li class="list-group-item d-flex text-body mb-0">
                                    <i class="fa-solid fa-check text-warning me-2"></i>Experienced & polite drivers
                                    with clean & comfortable cabs.
                                </li>
                            </ul>
                        </div>
                        <!-- Alert box END -->

                        <!-- Cab item START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-2 g-sm-4 mb-4">
                                    <!-- Card image -->
                                    <div class="col-md-4 col-xl-3">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="/images/category/cab/seadan.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- Card title and rating -->
                                    <div class="col-sm-6 col-md-4 col-xl-6">
                                        <h4 class="card-title mb-2"><a
                                                href="{{ route('second', ['cab', 'detail']) }}"
                                                class="stretched-link">Camry, Accord</a></h4>
                                        <!-- Nav divider -->
                                        <ul class="nav nav-divider h6 fw-normal mb-2">
                                            <li class="nav-item">SEDAN</li>
                                            <li class="nav-item">AC</li>
                                            <li class="nav-item">4 Seats</li>
                                        </ul>

                                        <!-- Rating Star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-normal me-1 mb-0">4.5</li>
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

                                    <!-- Button -->
                                    <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                        <!-- Discount -->
                                        <p class="text-danger mb-0">4% Off</p>
                                        <!-- Price -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item text-decoration-line-through me-1">$250</li>
                                            <li class="list-inline-item h5 mb-0">$210</li>
                                        </ul>
                                        <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START -->
                            <div class="card-footer border-top p-0 pt-3">
                                <div class="row">
                                    <!-- List -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
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

                                    <!-- Info -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free Cancellation, till 1 hour of Pick up
                                            </li>
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free waiting up to 45 minutes
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- card footer END -->
                        </div>
                        <!-- Cab item END -->

                        <!-- Cab item START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-2 g-sm-4 mb-4">
                                    <!-- Card image -->
                                    <div class="col-md-4 col-xl-3">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="/images/category/cab/lux.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- Card title and rating -->
                                    <div class="col-sm-6 col-md-4 col-xl-6">
                                        <h4 class="card-title mb-2"><a
                                                href="{{ route('second', ['cab', 'detail']) }}"
                                                class="stretched-link">Audi, BMW</a></h4>
                                        <!-- Nav divider -->
                                        <ul class="nav nav-divider h6 fw-normal mb-2">
                                            <li class="nav-item">LUX</li>
                                            <li class="nav-item">AC</li>
                                            <li class="nav-item">2 Seats</li>
                                        </ul>

                                        <!-- Rating Star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-normal me-1 mb-0">4.8</li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                        <!-- Discount -->
                                        <p class="text-danger mb-0">2% Off</p>
                                        <!-- Price -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item text-decoration-line-through me-1">$500</li>
                                            <li class="list-inline-item h5 mb-0">$550</li>
                                        </ul>
                                        <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START -->
                            <div class="card-footer border-top p-0 pt-3">
                                <div class="row">
                                    <!-- List -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
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

                                    <!-- Info -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free Cancellation, till 1 hour of Pick up
                                            </li>
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free waiting up to 45 minutes
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- card footer END -->
                        </div>
                        <!-- Cab item END -->

                        <!-- Cab item START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-2 g-sm-4 mb-4">
                                    <!-- Card image -->
                                    <div class="col-md-4 col-xl-3">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="/images/category/cab/suv.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- Card title and rating -->
                                    <div class="col-sm-6 col-md-4 col-xl-6">
                                        <h4 class="card-title mb-2"><a
                                                href="{{ route('second', ['cab', 'detail']) }}"
                                                class="stretched-link">Ertiga, Xylo</a></h4>
                                        <!-- Nav divider -->
                                        <ul class="nav nav-divider h6 fw-normal mb-2">
                                            <li class="nav-item">SUV</li>
                                            <li class="nav-item">AC</li>
                                            <li class="nav-item">6 Seats</li>
                                        </ul>

                                        <!-- Rating Star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-normal me-1 mb-0">4.3</li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                        <!-- Discount -->
                                        <p class="text-danger mb-0">10% Off</p>
                                        <!-- Price -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item text-decoration-line-through me-1">$400</li>
                                            <li class="list-inline-item h5 mb-0">$350</li>
                                        </ul>
                                        <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START -->
                            <div class="card-footer border-top p-0 pt-3">
                                <div class="row">
                                    <!-- List -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
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

                                    <!-- Info -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free Cancellation, till 1 hour of Pick up
                                            </li>
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free waiting up to 45 minutes
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- card footer END -->
                        </div>
                        <!-- Cab item END -->

                        <!-- Cab item START -->
                        <div class="card border p-4">
                            <!-- Card body START -->
                            <div class="card-body p-0">
                                <div class="row g-2 g-sm-4 align-items-center mb-4">
                                    <!-- Card image -->
                                    <div class="col-md-4 col-xl-3">
                                        <div class="bg-light rounded-3 px-4 py-5">
                                            <img src="/images/category/cab/suv-2.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- Card title and rating -->
                                    <div class="col-sm-6 col-md-4 col-xl-6">
                                        <h4 class="card-title mb-2"><a
                                                href="{{ route('second', ['cab', 'detail']) }}"
                                                class="stretched-link">Suv, Innova Crysta</a></h4>
                                        <!-- Nav divider -->
                                        <ul class="nav nav-divider h6 fw-normal mb-2">
                                            <li class="nav-item">SUV</li>
                                            <li class="nav-item">AC</li>
                                            <li class="nav-item">6 Seats</li>
                                        </ul>

                                        <!-- Rating Star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item h6 fw-normal mb-0 me-1">4.3</li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i
                                                    class="fa-solid fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-sm-6 col-md-4 col-xl-3 text-sm-end">
                                        <!-- Discount -->
                                        <p class="text-danger mb-0">15% Off</p>
                                        <!-- Price -->
                                        <ul class="list-inline mb-1">
                                            <li class="list-inline-item text-decoration-line-through me-1">$650</li>
                                            <li class="list-inline-item h5 mb-0">$480</li>
                                        </ul>
                                        <a href="#" class="btn btn-dark mb-0">Book Now</a>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                            <!-- Card body END -->

                            <!-- Card footer START -->
                            <div class="card-footer border-top p-0 pt-3">
                                <div class="row">
                                    <!-- List -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
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

                                    <!-- Info -->
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-borderless mb-0">
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free Cancellation, till 1 hour of Pick up
                                            </li>
                                            <li class="list-group-item d-flex h6 fw-light text-success pb-0 mb-0">
                                                Free waiting up to 45 minutes
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- card footer END -->
                        </div>
                        <!-- Cab item END -->

                        <!-- Pagination -->
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
                    </div>
                </div>
                <!-- Main content END -->

            </div> <!-- Row END -->

        </div>
    </section>
    <!-- =======================
        Cab list END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection