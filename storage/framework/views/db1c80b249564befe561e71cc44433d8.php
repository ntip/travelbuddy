<?php $__env->startSection('header'); ?>
<?php echo $__env->make('layouts.partials/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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

                        <div id="results-container">Loading…</div>

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

<?php echo $__env->make('layouts.partials/footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<script>
document.addEventListener('DOMContentLoaded', async () => {
  // works if passed via controller (compact('sid')) OR via query string (?sid=...)
  const sid = <?php echo json_encode(($sid ?? request('sid')), 15, 512) ?>;

  const out = document.getElementById('results-container');
  if (!sid) {
    out.textContent = 'Missing search id (sid). Start a search first.';
    return;
  }

  function minToHhMm(min) {
    min = Number(min||0);
    const h = Math.floor(min/60), m = min % 60;
    return `${h}hr ${m}min`;
  }

  function airlineDisplay(legs){
    if (!legs || !legs.length) return 'Unknown Airline';
    const a = legs[0];
    return `${a.carrier} - ${a.number}`;
  }

  function airportLabel(leg, side){
    // You can enrich with terminal names later if available
    if (!leg) return '';
    return `${side === 'from' ? leg.from : leg.to}`;
  }

  function renderCard(o){
    const legs = o.legs || [];
    const first = legs[0] || {};
    const last  = legs[legs.length-1] || {};

    // points + taxes as “price”
    const points = Number(o.points||0).toLocaleString();
    const tax    = (Number(o.tax)||0).toFixed(2);
    const ccy    = o.currency || 'USD';

    // Build a single card (your markup)
    return `
    <!-- Ticket item START -->
    <div class="card border mb-3">
      <!-- Card header -->
      <div class="card-header d-sm-flex justify-content-sm-between align-items-center">
        <!-- Airline Name -->
        <div class="d-flex align-items-center mb-2 mb-sm-0">
          <img src="/images/element/13.svg" class="w-30px me-2" alt="">
          <h6 class="fw-normal mb-0">${airlineDisplay(legs)}</h6>
        </div>
        <h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> ${o.class || 'Economy'}</h6>
      </div>

      <!-- Card body -->
      <div class="card-body p-4 pb-0">
        <div class="row g-4">
          <!-- Airport detail (depart) -->
          <div class="col-sm-4 col-md-3">
            <h4>${first.dep || ''}</h4>
            <p class="mb-0">${airportLabel(first,'from')}</p>
          </div>

          <!-- Time -->
          <div class="col-sm-4 col-md-3 my-sm-auto text-center">
            <h5>${minToHhMm(o.duration_min)}</h5>
            <div class="position-relative my-4">
              <hr class="bg-primary opacity-5 position-relative">
              <div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
              </div>
            </div>
          </div>

          <!-- Airport detail (arrive) -->
          <div class="col-sm-4 col-md-3">
            <h4>${last.arr || ''}</h4>
            <p class="mb-0">${airportLabel(last,'to')}</p>
          </div>

          <!-- “Price” (points + taxes) -->
          <div class="col-md-3 text-md-end">
            <h4>${points} pts + ${ccy} ${tax}</h4>
            <a href="<?php echo e(route('second', ['flight', 'detail'])); ?>" class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
            <button class="btn btn-link text-decoration-underline p-0 mb-0" data-bs-toggle="modal" data-bs-target="#flightdetail">
              <i class="bi bi-eye-fill me-1"></i>Flight Details
            </button>
          </div>
        </div>
      </div>

      <!-- Card footer -->
      <div class="card-footer pt-4">
        <ul class="list-inline bg-light rounded-2 d-sm-flex text-center justify-content-sm-between mb-0 px-4 py-2">
          ${o.seats_left ? `<li class="list-inline-item text-danger">Only ${o.seats_left} Seat Left</li>` : ``}
          <li class="list-inline-item text-danger">Non-Refundable</li>
        </ul>
      </div>
    </div>
    <!-- Ticket item END -->
    `;
  }

  async function fetchResults(){
    const r = await fetch(`/api/search-results?sid=${encodeURIComponent(sid)}`);
    if (!r.ok) { out.textContent = 'Error loading results.'; return; }
    const p = await r.json();

    if (!p.options || p.options.length === 0) {
      if (p.status === 'fetching' || p.status === 'partial') {
        out.textContent = 'Still collecting results…';
        setTimeout(fetchResults, 1200);
        return;
      }
      out.textContent = 'No results.';
      return;
    }

    out.innerHTML = p.options.map(renderCard).join('');
  }

  fetchResults();
});
</script>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div class="container">
  <h1 class="mb-2">Search Results</h1>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nickt\OneDrive\Documents\GitHub\travelbuddy\resources\views/travelbuddy/flights/results.blade.php ENDPATH**/ ?>