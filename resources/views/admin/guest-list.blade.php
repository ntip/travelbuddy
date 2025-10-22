@extends('layouts.base')

@section('content')

<!-- Title -->
<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <div class="d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-3 mb-sm-0">Guest List</h1>
            <div class="d-grid"><a href="#" class="btn btn-primary mb-0"><i
                        class="bi bi-filetype-pdf me-2"></i>Generate Report</a> </div>
        </div>
    </div>
</div>

<!-- Filters START -->
<div class="row g-4 align-items-center">
    <!-- Tabs -->
    <div class="col-lg-6">
        <ul class="nav nav-pills-shadow nav-responsive">
            <li class="nav-item">
                <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1">All Guests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2">Booked</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3">Canceled</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-4">Pending</a>
            </li>
        </ul>
    </div>

    <!-- Search -->
    <div class="col-md-6 col-lg-3">
        <form class="rounded position-relative">
            <input class="form-control bg-transparent" type="search" placeholder="Search"
                aria-label="Search">
            <button
                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                type="submit">
                <i class="fas fa-search fs-6"></i>
            </button>
        </form>
    </div>

    <!-- Select -->
    <div class="col-md-6 col-lg-3">
        <form>
            <select class="form-select js-choice" aria-label=".form-select-sm">
                <option value="" selected>Sort by hotels</option>
                <option>Pride moon Village Resort & Spa</option>
                <option>Courtyard by Marriott New York</option>
                <option>Park Plaza Lodge Hotel</option>
                <option>Royal Beach Resort</option>
            </select>
        </form>
    </div>
</div>
<!-- Filters END -->

<!-- Guest list START -->
<div class="card shadow mt-5">
    <!-- Card body START -->
    <div class="card-body">
        <!-- Table head -->
        <div class="bg-light rounded p-3 d-none d-lg-block">
            <div class="row row-cols-7 g-4">
                <div class="col">
                    <h6 class="mb-0">Guest</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Booking Date</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Check-In</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Check-Out</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Room No</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Status</h6>
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
                        <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Lori Stevens</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
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
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G102</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">01 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">16 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">18 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G103</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
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
                        <h6 class="mb-0 fw-light">Billy Vasquez</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">29 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">10 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">14 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G105</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
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
                        <h6 class="mb-0 fw-light">Samuel Bishop</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">14 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">07 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">09 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G102</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
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
                        <h6 class="mb-0 fw-light">Amanda Reed</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">10 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">05 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G102</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
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
                        <h6 class="mb-0 fw-light">Jacqueline Miller</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">05 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">27 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">01 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G105</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Joan Wallace</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">05 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">23 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">26 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">F105</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg"
                            alt="avatar">
                    </div>
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">Dennis Stevens</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">14 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-in:</small>
                <h6 class="mb-0 fw-normal">07 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Check-out:</small>
                <h6 class="mb-0 fw-normal">09 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G102</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Booked by:</small>
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="avatar avatar-xs flex-shrink-0">
                        <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg"
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
                <small class="d-block d-lg-none">Booking date:</small>
                <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
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
                <small class="d-block d-lg-none">Room no:</small>
                <h6 class="mb-0 fw-normal">G102</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-lg-none">Payment:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="{{ route('second', ['admin', 'guest-detail']) }}"
                    class="btn btn-sm btn-light mb-0">View</a></div>
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
<!-- Guest list END -->

@endsection