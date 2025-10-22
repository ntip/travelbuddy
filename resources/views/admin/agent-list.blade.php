@extends('layouts.admin')

@section('content')

<!-- Title -->
<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <div class="d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-3 mb-sm-0">Agent List</h1>
            <div class="d-grid"><a href="#" class="btn btn-primary mb-0"><i
                        class="bi bi-filetype-pdf me-2"></i>Generate Report</a> </div>
        </div>
    </div>
</div>

<!-- Search and select START -->
<div class="row g-3 align-items-center justify-content-between mb-5">
    <!-- Search -->
    <div class="col-md-8">
        <form class="rounded position-relative">
            <input class="form-control pe-5" type="search" placeholder="Search" aria-label="Search">
            <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y"
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

<!-- agent list START -->
<div class="row g-4">
    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare1">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Lori Stevens</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Los Angeles, USA</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 04</h6>
                    <h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare2">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Carolyn Ortiz</h5>
                <small><i class="bi bi-geo-alt me-1"></i>New York, USA</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 02</h6>
                    <h6 class="mb-0 small">4.3<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare3">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <div class="avatar-img rounded-circle bg-primary bg-opacity-10"><span
                            class="text-primary position-absolute top-50 start-50 translate-middle fw-bold">HB</span>
                    </div>
                </div>
                <!-- Title -->
                <h5 class="mb-1">Helios Beach Resort</h5>
                <small><i class="bi bi-geo-alt me-1"></i>California, USA</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Hotel number:</span> 03</h6>
                    <h6 class="mb-0 small">3.9<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare4" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare4">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Dennis Barrett</h5>
                <small><i class="bi bi-geo-alt me-1"></i>London, England</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 05</h6>
                    <h6 class="mb-0 small">4.2<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare5" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare5">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <div class="avatar-img rounded-circle bg-danger bg-opacity-10"><span
                            class="text-danger position-absolute top-50 start-50 translate-middle fw-bold">PPL</span>
                    </div>
                </div>
                <!-- Title -->
                <h5 class="mb-1">Park Plaza Lodge Hotel</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Berlin, Germany</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Hotel number:</span> 01</h6>
                    <h6 class="mb-0 small">4.8<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare6" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare6">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Jacqueline Miller</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Hanover, Germany</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 02</h6>
                    <h6 class="mb-0 small">4.1<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare7" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare7">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Amanda Reed</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Tokyo, Japan</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 04</h6>
                    <h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare8" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare8">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Louis Ferguson</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Yokohama, Japan</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 03</h6>
                    <h6 class="mb-0 small">4.0<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare9" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare9">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Joan Wallace</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Mumbai, India</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 02</h6>
                    <h6 class="mb-0 small">5.0<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>

    <!-- Card item -->
    <div class="col-md-6 col-lg-4 col-xxl-3">
        <div class="card border h-100">
            <!-- Dropdown button -->
            <div class="dropdown position-absolute top-0 end-0 m-3">
                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                    id="dropdownShare10" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots fa-fw"></i>
                </a>
                <!-- dropdown button -->
                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                    aria-labelledby="dropdownShare10">
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item" href="#"><i
                                class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                </ul>
            </div>
            <!-- Card body -->
            <div class="card-body text-center pb-0">
                <!-- Avatar Image -->
                <div class="avatar avatar-xl flex-shrink-0 mb-3">
                    <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg" alt="avatar">
                </div>
                <!-- Title -->
                <h5 class="mb-1">Dennis Stevens</h5>
                <small><i class="bi bi-geo-alt me-1"></i>Los Angeles, USA</small>
                <!-- Info and rating -->
                <div class="d-flex justify-content-between mt-3">
                    <h6 class="mb-0 small"><span class="fw-light">Total listings:</span> 04</h6>
                    <h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex gap-3 align-items-center">
                <a href="{{ route('second', ['admin', 'agent-detail']) }}"
                    class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0"><i
                        class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- agent list END -->

<!-- Pagination START -->
<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4">
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
<!-- Pagination END -->

@endsection