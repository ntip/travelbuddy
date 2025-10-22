@extends('layouts.admin')

@section('content')

<!-- Title -->
<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <h1 class="h3 mb-0">Earnings</h1>
    </div>
</div>

<!-- Earning block START -->
<div class="row g-4">
    <!-- Block item -->
    <div class="col-sm-6 col-xxl-3">
        <div class="card card-body bg-light p-4 h-100">
            <h6 class="mb-0">Average daily earning</h6>
            <h3 class="mb-2 mt-2">$112</h3>
            <p class="mt-auto mb-0">Increase <span class="badge bg-success bg-opacity-10 text-success">10%
                    <i class="bi bi-graph-up"></i></span></p>
        </div>
    </div>

    <!-- Block item -->
    <div class="col-sm-6 col-xxl-3">
        <div class="card card-body bg-light p-4 h-100">
            <h6 class="mb-0">Revenue this month</h6>
            <h3 class="mb-2 mt-2">$899.95</h3>
            <p class="mt-auto mb-0">Increase from last month <span
                    class="badge bg-success bg-opacity-10 text-success">21% <i
                        class="bi bi-graph-up"></i></span></p>
        </div>
    </div>

    <!-- Block item -->
    <div class="col-sm-6 col-xxl-3">
        <div class="card card-body bg-light p-4 h-100">
            <h6>On hold
                <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover"
                    data-bs-trigger="focus" data-bs-placement="top"
                    data-bs-content="After US royalty withholding tax">
                    <i class="bi bi-info-circle-fill small"></i>
                </a>
            </h6>
            <h3>$15,356</h3>
            <p class="mb-0 mt-auto">Expected payout on 05/10/2022</p>
        </div>
    </div>

    <!-- Block item -->
    <div class="col-sm-6 col-xxl-3">
        <div class="card bg-primary p-4">
            <div class="d-flex justify-content-between align-items-start text-white">
                <img class="w-40px" src="/images/element/visa.svg" alt="">
                <!-- Card action START -->
                <div class="dropdown">
                    <a class="text-white" href="#" id="creditcardDropdown" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <!-- Dropdown Icon -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle fill="currentColor" cx="12.5" cy="3.5" r="2.5"></circle>
                            <circle fill="currentColor" opacity="0.5" cx="12.5" cy="11.5"
                                r="2.5"></circle>
                            <circle fill="currentColor" opacity="0.3" cx="12.5" cy="19.5"
                                r="2.5"></circle>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="creditcardDropdown">
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-credit-card-2-front-fill me-2 fw-icon"></i>Edit card</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-credit-card me-2 fw-icon"></i>Add new card</a></li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-arrow-bar-down me-2 fw-icon"></i>Withdrawal money</a></li>
                        <li><a class="dropdown-item" href="#"><i
                                    class="bi bi-calculator me-2 fw-icon"></i>Currency converter</a></li>
                    </ul>
                </div>
                <!-- Card action END -->
            </div>
            <div class="mt-4 text-white">
                <span>Total Balance</span>
                <h3 class="text-white mb-0">$32,000</h3>
            </div>
            <h5 class="text-white mt-4">**** **** **** 1569</h5>
            <div class="d-flex justify-content-between text-white">
                <span>Valid thru: 12/26</span>
                <span>CVV: ***</span>
            </div>
        </div>
    </div>
</div>
<!-- Earning block END -->

<!-- Payment history START -->
<div class="card shadow mt-5">
    <!-- Card header -->
    <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Payment History</h5>
    </div>

    <!-- Card body START -->
    <div class="card-body">
        <!-- Table head -->
        <div class="bg-light rounded p-3 d-none d-sm-block">
            <div class="row row-cols-7 g-4">
                <div class="col">
                    <h6 class="mb-0">Invoice ID</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Date</h6>
                </div>
                <div class="col">
                    <h6 class="mb-0">Amount</h6>
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
        <div class="row row-cols-xl-7 g-4 align-items-sm-center border-bottom px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Booked by:</small>
                <h6 class="fw-light mb-0">#0245896</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Date:</small>
                <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col position-relative">
                <small class="d-block d-sm-none">Amount:</small>

                <div class="d-flex">
                    <h6 class="mb-0 me-1">$3,999</h6>
                    <!-- Dropdown icon -->
                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle-fill"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                        aria-labelledby="dropdownShare1">
                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Commission</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="me-4 small">Tax</span>
                                <span class="text-danger small ms-2">-$0.00</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Earning</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Status:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Paid</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i
                        class="bi bi-cloud-download"></i></a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 g-4 align-items-lg-center border-bottom px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Booked by:</small>
                <h6 class="fw-light mb-0">#124896</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Date:</small>
                <h6 class="mb-0 fw-normal">01 Dec 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col position-relative">
                <small class="d-block d-sm-none">Amount:</small>

                <div class="d-flex">
                    <h6 class="mb-0 me-1">$2,500</h6>
                    <!-- Dropdown icon -->
                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle-fill"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                        aria-labelledby="dropdownShare2">
                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Commission</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="me-4 small">Tax</span>
                                <span class="text-danger small ms-2">-$0.00</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Earning</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Status:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Paid</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i
                        class="bi bi-cloud-download"></i></a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 g-4 align-items-lg-center border-bottom px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Booked by:</small>
                <h6 class="fw-light mb-0">#021547</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Date:</small>
                <h6 class="mb-0 fw-normal">25 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col position-relative">
                <small class="d-block d-sm-none">Amount:</small>

                <div class="d-flex">
                    <h6 class="mb-0 me-1">$4,140</h6>
                    <!-- Dropdown icon -->
                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare3"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle-fill"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                        aria-labelledby="dropdownShare3">
                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Commission</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="me-4 small">Tax</span>
                                <span class="text-danger small ms-2">-$0.00</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Earning</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Status:</small>
                <div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i
                        class="bi bi-cloud-download"></i></a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 g-4 align-items-lg-center border-bottom px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Booked by:</small>
                <h6 class="fw-light mb-0">#014575</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Date:</small>
                <h6 class="mb-0 fw-normal">24 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col position-relative">
                <small class="d-block d-sm-none">Amount:</small>

                <div class="d-flex">
                    <h6 class="mb-0 me-1">$3,245</h6>
                    <!-- Dropdown icon -->
                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare4"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle-fill"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                        aria-labelledby="dropdownShare4">
                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Commission</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="me-4 small">Tax</span>
                                <span class="text-danger small ms-2">-$0.00</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Earning</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Status:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Paid</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i
                        class="bi bi-cloud-download"></i></a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 g-4 align-items-lg-center border-bottom px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Booked by:</small>
                <h6 class="fw-light mb-0">#052478</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Date:</small>
                <h6 class="mb-0 fw-normal">22 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col position-relative">
                <small class="d-block d-sm-none">Amount:</small>

                <div class="d-flex">
                    <h6 class="mb-0 me-1">$1,825</h6>
                    <!-- Dropdown icon -->
                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare5"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle-fill"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                        aria-labelledby="dropdownShare5">
                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Commission</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="me-4 small">Tax</span>
                                <span class="text-danger small ms-2">-$0.00</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Earning</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Status:</small>
                <div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i
                        class="bi bi-cloud-download"></i></a></div>
        </div>

        <!-- Table data -->
        <div class="row row-cols-xl-7 g-4 align-items-lg-center border-bottom px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Booked by:</small>
                <h6 class="fw-light mb-0">#04785</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Date:</small>
                <h6 class="mb-0 fw-normal">20 Nov 2022</h6>
            </div>

            <!-- Data item -->
            <div class="col position-relative">
                <small class="d-block d-sm-none">Amount:</small>

                <div class="d-flex">
                    <h6 class="mb-0 me-1">$3,656</h6>
                    <!-- Dropdown icon -->
                    <a href="#" class="h6 mb-0" role="button" id="dropdownShare6"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-info-circle-fill"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                        aria-labelledby="dropdownShare6">
                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Commission</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="me-4 small">Tax</span>
                                <span class="text-danger small ms-2">-$0.00</span>
                            </div>
                            <hr class="my-1"> <!-- Divider -->
                        </li>

                        <li>
                            <div class="d-flex justify-content-between">
                                <span class="small">Earning</span>
                                <span class="h6 mb-0 small ms-2">$86</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <small class="d-block d-sm-none">Status:</small>
                <div class="badge bg-success bg-opacity-10 text-success">Paid</div>
            </div>

            <!-- Data item -->
            <div class="col"><a href="#" class="btn btn-light btn-round mb-0"><i
                        class="bi bi-cloud-download"></i></a></div>
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
<!-- Payment history END -->

@endsection