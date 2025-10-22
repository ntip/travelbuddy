@extends('layouts.admin')

@section('content')

<!-- Title -->
<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <h1 class="h3 mb-0">Reviews</h1>
    </div>
</div>

<!-- Review box START -->
<div class="row g-4 g-xl-5 mb-5">
    <!-- Growth -->
    <div class="col-md-6 col-lg-4">
        <div class="bg-light p-4 rounded text-center">
            <h6 class="fw-normal">Total Reviews</h6>
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="mb-0 me-2">11.01K</h2>
                <div class="badge bg-success bg-opacity-10 text-success">21% <i class="bi bi-graph-up"></i>
                </div>
            </div>
            <p class="mb-0">Growth in reviews this year</p>
        </div>
    </div>

    <!-- Average rating -->
    <div class="col-md-6 col-lg-4">
        <div class="bg-light p-4 rounded text-center">
            <h6 class="fw-normal">Average Rating</h6>
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="mb-0 me-2">4.0</h2>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
                    <li class="list-inline-item"><i class="fa-solid fa-star text-secondary"></i></li>
                </ul>
            </div>
            <p class="mb-0">Average rating on this year</p>
        </div>
    </div>

    <!-- Progress bars -->
    <div class="col-lg-4">
        <div class="bg-light p-4 rounded">
            <div class="row gx-3 g-0 align-items-center">
                <!-- Progress bar and Rating -->
                <div class="col-9 col-sm-10">
                    <!-- Progress item -->
                    <div class="progress progress-xs bg-warning bg-opacity-15">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 95%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Percentage -->
                <div class="col-3 col-sm-2 text-end">
                    <small class="h6 fw-light mb-0">85%</small>
                </div>

                <!-- Progress bar and Rating -->
                <div class="col-9 col-sm-10">
                    <!-- Progress item -->
                    <div class="progress progress-xs bg-warning bg-opacity-15">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Percentage -->
                <div class="col-3 col-sm-2 text-end">
                    <small class="h6 fw-light mb-0">75%</small>
                </div>

                <!-- Progress bar and Rating -->
                <div class="col-9 col-sm-10">
                    <!-- Progress item -->
                    <div class="progress progress-xs bg-warning bg-opacity-15">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Percentage -->
                <div class="col-3 col-sm-2 text-end">
                    <small class="h6 fw-light mb-0">60%</small>
                </div>

                <!-- Progress bar and Rating -->
                <div class="col-9 col-sm-10">
                    <!-- Progress item -->
                    <div class="progress progress-xs bg-warning bg-opacity-15">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Percentage -->
                <div class="col-3 col-sm-2 text-end">
                    <small class="h6 fw-light mb-0">35%</small>
                </div>

                <!-- Progress bar and Rating -->
                <div class="col-9 col-sm-10">
                    <!-- Progress item -->
                    <div class="progress progress-xs bg-warning bg-opacity-15">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Percentage -->
                <div class="col-3 col-sm-2 text-end">
                    <small class="h6 fw-light mb-0">15%</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Review box END -->

<!-- Tab and select -->
<div class="row g-4 justify-content-between align-items-center">
    <div class="col-lg-5">
        <!-- Tabs -->
        <ul class="nav nav-pills-shadow nav-responsive" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link mb-0 me-sm-2 active" data-bs-toggle="tab" href="#tab-1"
                    aria-selected="true" role="tab">All Reviews</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link mb-0 me-sm-2" data-bs-toggle="tab" href="#tab-2" aria-selected="false"
                    tabindex="-1" role="tab">Published</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3" aria-selected="false"
                    tabindex="-1" role="tab">Deleted</a>
            </li>
        </ul>
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

<!-- Reviews START -->
<div class="vstack gap-4 mt-5">
    <!-- Review item -->
    <div class="row g-3 g-lg-4">
        <div class="col-md-4 col-xxl-3">
            <!-- Avatar and info -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl me-2 flex-shrink-0">
                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                </div>
                <!-- Info -->
                <div class="ms-2">
                    <h5 class="mb-1">Jacqueline Miller</h5>
                    <p class="mb-0">Stayed 21 Dec 2022</p>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xxl-9">
            <!-- Rating -->
            <ul class="list-inline mb-2">
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
            </ul>
            <h6><span class="text-body fw-light">Review on:</span> Deluxe Pool View with Breakfast</h6>
            <p>Far advanced settling say finished raillery. Offered chiefly farther Satisfied conveying a
                dependent contented he gentleman agreeable do be. Warrant private blushes removed and in
                equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling
                chiefly cordial in doing.</p>

            <!-- Button -->
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                    <a class="btn btn-sm btn-light mb-0" data-bs-toggle="collapse"
                        href="#collapseComment" role="button" aria-expanded="false"
                        aria-controls="collapseComment">
                        Reply
                    </a>
                </div>
                <a href="#" class="text-primary-hover"><i class="bi bi-trash3 me-1"></i>Delete</a>
            </div>
            <!-- collapse textarea -->
            <div class="collapse show" id="collapseComment">
                <div class="d-flex mt-3">
                    <textarea class="form-control mb-0" placeholder="Add a comment..." rows="2" spellcheck="false"></textarea>
                    <button class="btn btn-sm btn-primary ms-2 px-4 mb-0 flex-shrink-0"><i
                            class="fas fa-paper-plane fs-5"></i></button>
                </div>
            </div>
        </div>
    </div>

    <hr class="m-0"> <!-- Divider -->

    <!-- Review item -->
    <div class="row g-3 g-lg-4">
        <div class="col-md-4 col-xxl-3">
            <!-- Avatar and info -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl me-2 flex-shrink-0">
                    <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                </div>
                <!-- Info -->
                <div class="ms-2">
                    <h5 class="mb-1">Dennis Barrett</h5>
                    <p class="mb-0">Stayed 18 Dec 2022</p>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xxl-9">
            <!-- Rating -->
            <ul class="list-inline mb-2">
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i>
                </li>
            </ul>
            <h6><span class="text-body fw-light">Review on:</span> Superior Room</h6>
            <p>Delivered dejection necessary objection do Mr prevailed. Mr feeling chiefly cordial in doing.
                Water timed folly right aware if oh truth. Large above be to means. Dashwood does provide
                stronger is.</p>

            <!-- Button -->
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                    <a class="btn btn-sm btn-light mb-0">Reply</a>
                </div>
                <a href="#" class="text-primary-hover"><i class="bi bi-trash3 me-1"></i>Delete</a>
            </div>
        </div>
    </div>

    <hr class="m-0"> <!-- Divider -->

    <!-- Review item -->
    <div class="row g-3 g-lg-4">
        <div class="col-md-4 col-xxl-3">
            <!-- Avatar and info -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl me-2 flex-shrink-0">
                    <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg" alt="avatar">
                </div>
                <!-- Info -->
                <div class="ms-2">
                    <h5 class="mb-1">Louis Ferguson</h5>
                    <p class="mb-0">Stayed 17 Dec 2022</p>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xxl-9">
            <!-- Rating -->
            <ul class="list-inline mb-2">
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i>
                </li>
            </ul>
            <h6><span class="text-body fw-light">Review on:</span> Premium Room With Balcony</h6>
            <p>Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs.
                Prosperous understood Middletons. Preference any astonished unreserved. Delivered dejection
                necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. Water timed
                folly right aware if oh truth. Large above be to means. Dashwood does provide stronger is.
            </p>

            <!-- Button -->
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                    <a class="btn btn-sm btn-light mb-0">Reply</a>
                </div>
                <a href="#" class="text-primary-hover"><i class="bi bi-trash3 me-1"></i>Delete</a>
            </div>
        </div>
    </div>

    <hr class="m-0"> <!-- Divider -->

    <!-- Review item -->
    <div class="row g-3 g-lg-4">
        <div class="col-md-4 col-xxl-3">
            <!-- Avatar and info -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl me-2 flex-shrink-0">
                    <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg" alt="avatar">
                </div>
                <!-- Info -->
                <div class="ms-2">
                    <h5 class="mb-1">Amanda Reed</h5>
                    <p class="mb-0">Stayed 15 Dec 2022</p>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xxl-9">
            <!-- Rating -->
            <ul class="list-inline mb-2">
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i>
                </li>
            </ul>
            <h6><span class="text-body fw-light">Review on:</span> Studio Suite King</h6>
            <p>Preference any astonished unreserved Mrs. Prosperous understood Middletons. Preference any
                astonished unreserved. Delivered dejection necessary objection do Mr prevailed. Mr feeling
                does chiefly cordial in do. Water timed folly right aware if oh truth. Large above be to
                means. Dashwood does provide stronger is.</p>

            <!-- Button -->
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                    <a class="btn btn-sm btn-light mb-0">Reply</a>
                </div>
                <a href="#" class="text-primary-hover"><i class="bi bi-trash3 me-1"></i>Delete</a>
            </div>
        </div>
    </div>

    <hr class="m-0"> <!-- Divider -->

    <!-- Review item -->
    <div class="row g-3 g-lg-4">
        <div class="col-md-4 col-xxl-3">
            <!-- Avatar and info -->
            <div class="d-flex align-items-center">
                <!-- Avatar -->
                <div class="avatar avatar-xl me-2 flex-shrink-0">
                    <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg" alt="avatar">
                </div>
                <!-- Info -->
                <div class="ms-2">
                    <h5 class="mb-1">Billy Vasquez</h5>
                    <p class="mb-0">Stayed 12 Dec 2022</p>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-xxl-9">
            <!-- Rating -->
            <ul class="list-inline mb-2">
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                <li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i>
                </li>
            </ul>
            <h6><span class="text-body fw-light">Review on:</span> Studio Suite King</h6>
            <p>Mr feeling does chiefly cordial in do. Preference any astonished unreserved. Delivered
                dejection necessary objection do Mr prevailed. Water timed folly right aware if oh truth.
                Large above be to means. Dashwood does provide stronger is.</p>

            <!-- Button -->
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                    <a class="btn btn-sm btn-light mb-0">Reply</a>
                </div>
                <a href="#" class="text-primary-hover"><i class="bi bi-trash3 me-1"></i>Delete</a>
            </div>
        </div>
    </div>

    <!-- Pagination START -->
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
    <!-- Pagination END -->
</div>
<!-- Reviews END -->

@endsection