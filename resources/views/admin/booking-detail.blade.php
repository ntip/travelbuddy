@extends('layouts.admin')

@section('content')

<!-- Title -->
<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <div class="d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Premium Room With Balcony</h1>
            <a href="#" class="btn btn-primary-soft text-nowrap mb-0"><i
                    class="bi bi-pencil-square fa-fw"></i> Edit Room</a>
        </div>
    </div>
</div>

<!-- Booking detail START -->
<div class="row g-4 g-xl-5">
    <!-- Image -->
    <div class="col-xxl-6">
        <div class="row g-2 g-sm-4">
            <div class="col-6">
                <a data-glightbox data-gallery="gallery" href="/images/category/hotel/4by3/02.jpg">
                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/02.jpg" class="rounded-3" alt="">
                        <!-- Full screen button -->
                        <div class="hover-element w-100 h-100">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a data-glightbox data-gallery="gallery" href="/images/category/hotel/4by3/03.jpg">
                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/03.jpg" class="rounded-3" alt="">
                        <!-- Full screen button -->
                        <div class="hover-element w-100 h-100">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a data-glightbox data-gallery="gallery" href="/images/category/hotel/4by3/04.jpg">
                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/04.jpg" class="rounded-3" alt="">
                        <!-- Full screen button -->
                        <div class="hover-element w-100 h-100">
                            <i
                                class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-1 p-2 lh-1"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a data-glightbox data-gallery="gallery" href="/images/category/hotel/4by3/05.jpg">
                    <div class="card card-element-hover card-overlay-hover overflow-hidden">
                        <!-- Image -->
                        <img src="/images/category/hotel/4by3/05.jpg" class="rounded-3" alt="">
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

    <!-- Content -->
    <div class="col-xxl-6">
        <h4><span class="fw-light">Hotel: </span>Courtyard by Marriott New York</h4>
        <p class="fw-bold"><i class="bi bi-geo-alt me-2"></i>5855 W Century Blvd, Los Angeles - 90045 </p>

        <p class="mb-4">Tolerably behavior may admit daughters offending her ask own. Praise effect wishes
            to change way and any wanted. Lively use looked latter regard had. Does he part last</p>

        <!-- Feature -->
        <div class="row g-4">
            <div class="col-sm-6 col-md-4">
                <div class="d-flex align-items-center">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                            class="fa-solid fa-bed"></i></div>
                    <div class="ms-2">
                        <small>Type</small>
                        <h6 class="mb-0 mt-1">King Suit</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="d-flex align-items-center">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                            class="fa-solid fa-arrow-right-arrow-left"></i></div>
                    <div class="ms-2">
                        <small>Side</small>
                        <h6 class="mb-0 mt-1">Left Side</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="d-flex align-items-center">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                            class="fa-solid fa-stairs"></i></div>
                    <div class="ms-2">
                        <small>Floor</small>
                        <h6 class="mb-0 mt-1">3rd Floor (T5)</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="d-flex align-items-center">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                            class="fa-solid fa-mountain-sun"></i></div>
                    <div class="ms-2">
                        <small>View</small>
                        <h6 class="mb-0 mt-1">Sea View</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="d-flex align-items-center">
                    <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2"><i
                            class="fa-regular fa-clone"></i></div>
                    <div class="ms-2">
                        <small>Size</small>
                        <h6 class="mb-0 mt-1">250 Sqft</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking info -->
        <div class="bg-light border border-secondary border-opacity-25 p-3 rounded d-inline-block mt-4">
            <h6 class="small">Current Reservation:</h6>
            <!-- Avatar -->
            <div class="d-sm-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xs flex-shrink-0">
                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                </div>
                <!-- Info -->
                <h6 class="mb-0 ms-2">Lori Stevens</h6>
            </div>
            <!-- Info -->
            <div class="hstack gap-4 gap-md-5 flex-wrap mt-2">
                <div>
                    <small>Check-in:</small>
                    <h6 class="fw-normal mb-0">18 Dec 2022 9:00AM</h6>
                </div>
                <div>
                    <small>Check-out:</small>
                    <h6 class="fw-normal mb-0">22 Dec 2022 8:00PM</h6>
                </div>
                <div>
                    <small>Total Amount:</small>
                    <h6 class="text-success mb-0">$1528</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking detail END -->

<!-- Booking table START -->
<div class="card shadow mt-5">
    <!-- Card header START -->
    <div class="card-header border-bottom">
        <h5 class="card-header-title">Bookings</h5>
    </div>
    <!-- Card header END -->

    <!-- Card body START -->
    <div class="card-body">
        <!-- Search and select START -->
        <div class="row g-3 align-items-center justify-content-between mb-3">
            <!-- Search -->
            <div class="col-md-8">
                <form class="rounded position-relative">
                    <input class="form-control pe-5" type="search" placeholder="Search"
                        aria-label="Search">
                    <button
                        class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y"
                        type="submit"><i class="fas fa-search fs-6"></i></button>
                </form>
            </div>

            <!-- Select option -->
            <div class="col-md-3">
                <!-- Short by filter -->
                <form>
                    <select class="form-select js-choice" aria-label=".form-select-sm">
                        <option value="" selected>Sort by</option>
                        <option>Free</option>
                        <option>Newest</option>
                        <option>Oldest</option>
                    </select>
                </form>
            </div>
        </div>
        <!-- Search and select END -->

        <!-- Table head -->
        <div class="bg-light rounded p-3 d-none d-lg-block">
            <div class="row row-cols-7 g-4">
                <div class="col">
                    <h6 class="mb-0">Booked by</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Check-in</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Check-out</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Guest</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Amount</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Payment</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Action</h6>
                </div>
            </div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Lori Stevens</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">18 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">22 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">04</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$1025</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Full payment</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Billy Vasquez</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">23 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">26 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">03</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$847</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-info bg-opacity-10 text-info">Half payment</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4">
            <div class="bg-light px-2 py-4 text-center">
                <h6 class="mb-0">Booking Available (27 Dec to 1 Jan)</h6>
            </div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">2 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">5 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">02</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$900</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-orange bg-opacity-10 text-orange">On Property</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Louis Ferguson</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">6 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">10 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">05</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$1458</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Full payment</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Dennis Barrett</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">11 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">14 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">02</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$879</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-info bg-opacity-10 text-info">Half payment</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Frances Guerrero</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">15 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">19 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">04</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$1254</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Full payment</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">20 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">25 Jan 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Guests:</small>
                <h6 class="mb-0 fw-normal">03</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Amount:</small>
                <h6 class="text-success mb-0">$1080</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Full payment</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
        </div>
    </div>
    <!-- Card body END -->

    <!-- Card footer START -->
    <div class="card-footer pt-0">
        <!-- Pagination and content -->
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
            <!-- Content -->
            <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
            <!-- Pagination -->
            <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Card footer END -->
</div>

@endsection