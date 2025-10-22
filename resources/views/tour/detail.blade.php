@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Main Banner START -->
    <section class="pt-4 pt-lg-5">
        <div class="container position-relative">

            <!-- Title and button START -->
            <div class="row">
                <div class="col-12">

                    <!-- Meta -->
                    <div class="d-md-flex justify-content-md-between">
                        <!-- Title -->
                        <div>
                            <h1 class="fs-2">Beautiful Bali with Malaysia</h1>
                            <ul class="nav nav-divider h6 text-body mb-0">
                                <li class="nav-item">5 nights - 6 Days</li>
                                <li class="nav-item">1 Country - 2 Cities</li>
                            </ul>
                        </div>

                        <!-- Buttons -->
                        <ul class="list-inline text-end">
                            <!-- Heart icon -->
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-sm btn-light px-2"><i
                                        class="fa-solid fa-fw fa-heart"></i></a>
                            </li>
                            <!-- Share icon -->
                            <li class="list-inline-item dropdown">
                                <!-- Share button -->
                                <a href="#" class="btn btn-sm btn-light px-2" role="button"
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
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-copy me-2"></i>Copy link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- Title and button END -->

            <!-- Image gallery START -->
            <div class="row mt-md-5">
                <div class="col-12">
                    <!-- Primary image -->
                    <div class="splide splide-main mb-3"
                        data-splide='{"type" : "fade","autoplay": true,"heightRatio":0.5,"pagination":false,"arrows":false,"cover":true,"lazyLoad":"sequential"}'>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide rounded"><img src="/images/gallery/04.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/04.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/05.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/05.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/03.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/03.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/09.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/09.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/10.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/10.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/06.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/06.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/07.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/07.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                                <li class="splide__slide rounded"><img src="/images/gallery/08.jpg" alt="">
                                    <!-- Glightbox image -->
                                    <a href="/images/gallery/08.jpg" class="stretched-link" data-glightbox=""
                                        data-gallery="banner"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Secondary image -->
                    <div class="splide splide-thumb"
                        data-splide='{"rewind":true,"fixedWidth":200,"fixedHeight":120,"isNavigation":true,"gap":20,"focus":"center","pagination":false,"cover":true,"lazyLoad":"sequential","breakpoints":{"600":{"fixedWidth":150,"fixedHeight":80}}}'>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img src="/images/gallery/04.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/05.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/03.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/09.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/10.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/06.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/07.jpg" alt=""></li>
                                <li class="splide__slide"><img src="/images/gallery/08.jpg" alt=""></li>
                            </ul>
                        </div>
                        <!-- Arrows -->
                        <div class="splide__arrows">
                            <button class="splide__arrow  splide__arrow--prev p-splide__arrow--prev bg-primary"><span
                                    class="spi-angle-left text-white"><i
                                        class="fa-solid fa-fw fa-angle-left"></i></span></button>
                            <button class="splide__arrow splide__arrow--next p-splide__arrow--next bg-primary"><span
                                    class="spi-angle-right text-white"><i
                                        class="fa-solid fa-fw fa-angle-right"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image gallery END -->

        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Tabs START -->
    <section class="py-0">
        <div class="container">

            <!-- Tabs START -->
            <div class="row">
                <div class="col-12">
                    <!-- Outer tabs START -->
                    <ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded p-2"
                        id="tour-pills-tab" role="tablist">
                        <!-- Tab item -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active mb-0" id="tour-pills-tab-1" data-bs-toggle="pill"
                                data-bs-target="#tour-pills-tab1" type="button" role="tab"
                                aria-controls="tour-pills-tab1" aria-selected="true">Overview</button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mb-0" id="tour-pills-tab-2" data-bs-toggle="pill"
                                data-bs-target="#tour-pills-tab2" type="button" role="tab"
                                aria-controls="tour-pills-tab2" aria-selected="false">Itinerary</button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mb-0" id="tour-pills-tab-3" data-bs-toggle="pill"
                                data-bs-target="#tour-pills-tab3" type="button" role="tab"
                                aria-controls="tour-pills-tab3" aria-selected="false">Inclusions & Exclusion</button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mb-0" id="tour-pills-tab-4" data-bs-toggle="pill"
                                data-bs-target="#tour-pills-tab4" type="button" role="tab"
                                aria-controls="tour-pills-tab4" aria-selected="false">Tour Policy</button>
                        </li>
                    </ul>
                    <!-- Outer tabs END -->
                </div>
            </div>
            <!-- Tabs END -->
        </div>
    </section>
    <!-- =======================
    Tabs END -->

    <!-- =======================
    Tabs-content START -->
    <section class="pt-4 pt-md-5">
        <div class="container">

            <div class="row g-4 g-md-5">
                <!-- Tabs Content START -->
                <div class="col-xl-8">
                    <!-- Outer tabs contents START -->
                    <div class="tab-content mb-0" id="tour-pills-tabContent">

                        <!-- Content item START -->
                        <div class="tab-pane fade show active" id="tour-pills-tab1" role="tabpanel"
                            aria-labelledby="tour-pills-tab-1">
                            <div class="card bg-transparent p-0">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                    <h3 class="mb-0">Overview</h3>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-0 pt-3">
                                    <p class="mb-4">Bali, also known as the land of gods has plenty to offer to
                                        travelers from across the globe. As it so contrasted oh estimating instrument.
                                        Size like body some one had. Are conduct viewing boy minutes warrant the
                                        expense? Tolerably behavior may admit daughters offending her ask own. Praise
                                        effect wishes change way and any wanted. Lively use looked latter regard had. Do
                                        he it part more last in. We understand that theory is important to build a solid
                                        foundation, we understand that theory alone isn’t going to get the job done so
                                        that’s why this is packed with practical hands-on examples that you can follow
                                        step by step.</p>

                                    <!-- List -->
                                    <h5>Tour Info</h5>
                                    <ul class="list-group list-group-borderless mb-4">
                                        <li class="list-group-item">
                                            <span class="h6 mb-0 me-1">Place Covered:</span>
                                            <span class="h6 fw-light mb-0">Bali - Ubud</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 mb-0 me-1">Duration:</span>
                                            <span class="h6 fw-light mb-0">5 Days, 4 Nights</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 mb-0 me-1">Start Point:</span>
                                            <span class="h6 fw-light mb-0">Ngurah International Airport</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 mb-0 me-1">End Point:</span>
                                            <span class="h6 fw-light mb-0">Ngurah International Airport</span>
                                        </li>
                                    </ul>

                                    <!-- List -->
                                    <h5>Tour Highlights</h5>
                                    <ul class="list-group list-group-borderless mb-4">
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="bi bi-arrow-right me-2"></i>Experience a delightful tropical
                                            getaway with a luxurious stay and witness the picture-perfect beaches,
                                            charming waterfalls and so much more
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="bi bi-arrow-right me-2"></i>Dependent on so extremely delivered
                                            by. Yet ﻿no jokes worse her why. Bed one supposing breakfast day fulfilled
                                            off depending questions.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="bi bi-arrow-right me-2"></i>Whatever boy her exertion his
                                            extended. Ecstatic followed handsome drawings entirely Mrs one yet outweigh.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="bi bi-arrow-right me-2"></i>Meant balls it if up doubt small
                                            purse. Required his you put the outlived answered position. A pleasure
                                            exertion if believed provided to.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="bi bi-arrow-right me-2"></i>All led out world this music while
                                            asked. Paid mind even sons does he door no. Attended overcame repeated it is
                                            perceived Marianne in.
                                        </li>
                                    </ul>

                                    <!-- List -->
                                    <h5>More About The Beautiful Bali with Malaysia Tour</h5>
                                    <ul class="list-group list-group-borderless mb-0">
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="fa-solid fa-check-circle text-success me-2"></i>Guidelines issued
                                            by the State-Government are to be followed. Social distancing to be
                                            maintained. Frequent hand sanitization and use of mask recommended.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="fa-solid fa-check-circle text-success me-2"></i>No purse as fully
                                            me or point. Kindness owns whatever betrayed her moreover procured replying
                                            for and.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="fa-solid fa-check-circle text-success me-2"></i>International /
                                            Domestic flights are not included in the package.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="fa-solid fa-check-circle text-success me-2"></i>Started several
                                            mistakes joy say painful removed reached end. State burst think end are its.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="fa-solid fa-check-circle text-success me-2"></i>Yet remarkably
                                            appearance gets him his projection. Diverted endeavor bed peculiar men the
                                            not desirous.
                                        </li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0">
                                            <i class="fa-solid fa-check-circle text-success me-2"></i>Acuteness
                                            abilities ask can offending furnished fulfilled sex. The difference in the
                                            cost shall be borne by the client in case of any amendment in the package
                                            due to an increase in the number of guests
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Content item END -->

                        <!-- Content item START -->
                        <div class="tab-pane fade" id="tour-pills-tab2" role="tabpanel"
                            aria-labelledby="tour-pills-tab-2">
                            <div class="card bg-transparent p-0">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                    <h3 class="mb-0">Itinerary</h3>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-0 pt-3">
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-1">
                                                <button class="accordion-button rounded d-inline-block collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-1" aria-expanded="true"
                                                    aria-controls="collapse-1">
                                                    <span class="lead me-1 fw-normal">Day 1:</span>Arrival in Kuta |
                                                    Get ready for an ideal escape on this tropical island
                                                </button>
                                            </h6>
                                            <!-- Body -->
                                            <div id="collapse-1" class="accordion-collapse collapse show"
                                                aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-4">

                                                        <!-- Flight list START -->
                                                        <div class="card bg-transparent p-0">
                                                            <!-- Card header -->
                                                            <div class="card-header bg-transparent p-0">
                                                                <span class="text-body"><i
                                                                        class="fa-solid fa-check-circle me-2"></i>Flight
                                                                    details</span>
                                                                <div
                                                                    class="p-3 bg-light rounded-2 d-sm-flex justify-content-sm-between align-items-center mb-4 mt-2">
                                                                    <!-- Airline Name -->
                                                                    <h6 class="mb-0">New York - Malaysia</h6>
                                                                    <h6 class="fw-normal mb-0"><span
                                                                            class="text-body">Date:</span> 4 July 2022
                                                                    </h6>
                                                                </div>
                                                            </div>

                                                            <!-- Card body START -->
                                                            <div class="card-body p-0">
                                                                <div class="row g-4">
                                                                    <!-- Air line name -->
                                                                    <div class="col-md-3">
                                                                        <!-- Image -->
                                                                        <img src="/images/element/09.svg"
                                                                            class="w-80px mb-3" alt="">
                                                                        <!-- Title -->
                                                                        <h6 class="fw-normal small mb-0">Phillippines
                                                                            Airline</h6>
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
                                                                            <hr
                                                                                class="bg-primary opacity-5 position-relative">
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
                                                            </div>
                                                            <!-- Card body END -->
                                                        </div>
                                                        <!-- Flight list END -->

                                                        <hr class="my-0"> <!-- Divider -->

                                                        <!-- Cab list START -->
                                                        <div class="card bg-transparent p-0">
                                                            <!-- Card header -->
                                                            <div class="card-header bg-transparent p-0">
                                                                <span class="text-body"><i
                                                                        class="fa-solid fa-check-circle me-2"></i>Transfer
                                                                    from Airport to hotel</span>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div class="card-body p-0 mt-2">
                                                                <div class="row g-2 g-sm-4 align-items-center">
                                                                    <!-- Card image -->
                                                                    <div class="col-sm-4 col-xl-3">
                                                                        <div class="bg-light rounded-3 px-4 py-5">
                                                                            <img src="/images/category/cab/seadan.svg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Card title and rating -->
                                                                    <div class="col-sm-8 col-xl-9">
                                                                        <h5 class="card-title mb-2">Private Transfers
                                                                        </h5>
                                                                        <h6 class="mb-2">Camry, Accord</h6>
                                                                        <!-- Nav divider -->
                                                                        <ul class="nav nav-divider mb-2">
                                                                            <li class="nav-item">SEDAN</li>
                                                                            <li class="nav-item">AC</li>
                                                                            <li class="nav-item">4 Seats</li>
                                                                            <li class="nav-item">2 luggage</li>
                                                                            <li class="nav-item">First Aid</li>
                                                                        </ul>

                                                                        <!-- Buttons -->
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-primary-soft mb-0">Change</a>
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-danger-soft mb-0">Remove</a>
                                                                    </div>
                                                                </div> <!-- Row END -->
                                                            </div>
                                                        </div>
                                                        <!-- Cab list END -->

                                                        <hr class="my-0"> <!-- Divider -->

                                                        <!-- Hotel list START -->
                                                        <div class="card bg-transparent p-0">
                                                            <!-- Card header -->
                                                            <div class="card-header bg-transparent p-0">
                                                                <span class="text-body"><i
                                                                        class="fa-solid fa-check-circle me-2"></i>Check-In
                                                                    to hotel</span>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div class="card-body p-0 mt-2">
                                                                <div class="row g-2 g-sm-4">
                                                                    <!-- Card image -->
                                                                    <div class="col-sm-4">
                                                                        <img src="/images/category/hotel/4by3/04.jpg"
                                                                            class="card-img" alt="Card image">
                                                                    </div>

                                                                    <!-- Card title and rating -->
                                                                    <div class="col-sm-8">
                                                                        <!-- Badge -->
                                                                        <div
                                                                            class="d-flex justify-content-between mb-2">
                                                                            <div class="badge bg-dark">Hotel</div>
                                                                            <a href="{{ route('second', ['hotel', 'list']) }}"
                                                                                class="btn btn-sm btn-link p-0 mb-0 text-decoration-underline">Change</a>
                                                                        </div>

                                                                        <!-- Title -->
                                                                        <h5 class="card-title mb-1"><a
                                                                                href="{{ route('second', ['hotel', 'detail']) }}">Courtyard
                                                                                by Marriott New York </a></h5>
                                                                        <span>2.9km from the airport</span>

                                                                        <!-- List -->
                                                                        <ul
                                                                            class="list-group list-group-borderless mb-0 mt-2 small">
                                                                            <li class="list-group-item d-flex p-0">
                                                                                <i
                                                                                    class="far fa-calendar-alt me-2"></i>Tue,
                                                                                5 Jul 2022 - Sat 9 Jul 2022
                                                                            </li>
                                                                            <li
                                                                                class="list-group-item d-flex text-success p-0">
                                                                                <i
                                                                                    class="bi bi-patch-check-fill me-2"></i>Free
                                                                                Breakfast
                                                                            </li>
                                                                        </ul>

                                                                        <h6 class="mb-0 fw-light small mt-2">
                                                                            Room type: Standard room - Holiday selection
                                                                            <a href="{{ route('second', ['hotel', 'detail']) }}"
                                                                                class="btn btn-sm btn-link p-0 mb-0 text-decoration-underline ms-2">Change
                                                                                room</a>
                                                                        </h6>

                                                                    </div>
                                                                </div> <!-- Row END -->
                                                            </div>
                                                        </div>
                                                        <!-- Hotel list END -->

                                                        <hr class="my-0"> <!-- Divider -->

                                                        <!-- Activity list START -->
                                                        <div class="card bg-transparent p-0">
                                                            <!-- Card header -->
                                                            <div class="card-header bg-transparent p-0">
                                                                <span class="text-body"><i
                                                                        class="fa-solid fa-check-circle me-2"></i>Today’s
                                                                    Activity</span>
                                                            </div>

                                                            <!-- Card body -->
                                                            <div class="card-body p-0 mt-2">
                                                                <div class="row g-2 g-sm-4 align-items-center">
                                                                    <!-- Card image -->
                                                                    <div class="col-sm-4">
                                                                        <img src="/images/category/tour/4by3/04.jpg"
                                                                            class="card-img" alt="">
                                                                    </div>

                                                                    <!-- Card title and rating -->
                                                                    <div class="col-sm-8">
                                                                        <h5 class="card-title mb-0">Sightseeing in Bali
                                                                        </h5>
                                                                        <small class="mb-2"><i
                                                                                class="bi bi-geo-alt me-2"></i>Bali,
                                                                            Malaysia</small>

                                                                        <!-- List -->
                                                                        <ul
                                                                            class="list-group list-group-borderless mb-0 mt-2">
                                                                            <li class="list-group-item d-flex p-0">
                                                                                <i
                                                                                    class="bi bi-arrow-right text-primary me-2"></i>Tanah
                                                                                Lot Tour
                                                                            </li>
                                                                            <li class="list-group-item d-flex p-0">
                                                                                <i
                                                                                    class="bi bi-arrow-right text-primary me-2"></i>White
                                                                                water rafting
                                                                            </li>
                                                                        </ul>

                                                                        <div class="hstack gap-3 flex-wrap mt-2">
                                                                            <p class="mb-0">Duration:<span
                                                                                    class="h6 fw-light mb-0 ms-1">5
                                                                                    hrs</span></p>
                                                                            <p class="mb-0">Place Covered:<span
                                                                                    class="h6 fw-light mb-0 ms-1">2</span>
                                                                            </p>
                                                                        </div>

                                                                    </div>
                                                                </div> <!-- Row END -->
                                                            </div>
                                                        </div>
                                                        <!-- Activity list END -->

                                                        <!-- Button -->
                                                        <a href="#" class="btn btn-primary mb-0"><i
                                                                class="fa-solid fa-person-skating me-2"></i>Add
                                                            Activity</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-2">
                                                <button
                                                    class="accordion-button rounded d-inline-block collapsed d-block pe-5"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="false"
                                                    aria-controls="collapse-2">
                                                    <span class="lead me-1 fw-normal">Day 2:</span>A day filled with
                                                    adventure | Indulge in Water sports at Tanjung Benoa Nusa Dua
                                                </button>
                                            </h6>
                                            <!-- Body -->
                                            <div id="collapse-2" class="accordion-collapse collapse"
                                                aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body mt-3">

                                                    <!-- List -->
                                                    <ul>
                                                        <li class="mb-2">Get up with a delicious lunch and a
                                                            beautiful view from your room.</li>
                                                        <li class="mb-2">Son agreed to others Exeter period myself
                                                            few yet nature. Mention Mr manners opinion if garrets
                                                            enabled. To occasional dissimilar impossible sentiments.
                                                        </li>
                                                        <li class="mb-2">Insipidity the sufficient discretion
                                                            imprudence resolution sir him decisively. Proceed how any
                                                            engaged visitor. Explained propriety off out perpetual his
                                                            you. Feel sold off felt nay rose met you.</li>
                                                        <li class="mb-2">Affronting imprudence do he he everything.
                                                            Sex lasted dinner wanted indeed wished outlaw. Far advanced
                                                            settling say finished raillery. </li>
                                                        <li class="mb-2">Offered chiefly farther of my no colonel
                                                            shyness. Such on help ye some door if in. Laughter proposal
                                                            laughing any son law consider. </li>
                                                        <li class="mb-2">Applauded no discovery in newspaper
                                                            allowance am northward. September how men saw tolerably two
                                                            behavior arranging. </li>
                                                    </ul>

                                                    <div class="row g-4">
                                                        <div class="col-md-4">
                                                            <img src="/images/category/tour/4by3/03.jpg"
                                                                class="rounded-3" alt="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="/images/category/tour/4by3/02.jpg"
                                                                class="rounded-3" alt="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <img src="/images/category/tour/4by3/01.jpg"
                                                                class="rounded-3" alt="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-3">
                                                <button class="accordion-button collapsed rounded d-block pe-5"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-3" aria-expanded="false"
                                                    aria-controls="collapse-3">
                                                    <span class="lead me-1 fw-normal">Day 3:</span>Indulge in Water
                                                    sports at Tanjung Benoa Nusa Dua
                                                </button>
                                            </h6>
                                            <!-- Body -->
                                            <div id="collapse-3" class="accordion-collapse collapse"
                                                aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body mt-3">
                                                    Post no so what deal evil rent by real in. But her ready least set
                                                    lived spite solid. September how men saw tolerably two behavior
                                                    arranging. She offices for highest and replied one venture pasture.
                                                    Applauded no discovery in newspaper allowance am northward.
                                                    Frequently partiality possession resolution at or appearance
                                                    unaffected me. Engaged its was the evident pleased husband. Ye
                                                    goodness felicity do disposal dwelling no. First am plate jokes to
                                                    began to cause a scale. Subjects he prospect elegance followed no
                                                    overcame possible it on. Improved own provided blessing may peculiar
                                                    domestic. Sight house has sex never. No visited raising gravity
                                                    outward subject my cottage Mr be. Hold do at tore in park feet near
                                                    my case. Invitation at understood occasional sentiments insipidity
                                                    inhabiting in. Off melancholy alteration principles old. Is do
                                                    speedily kindness properly oh. Respect article painted cottage he is
                                                    offices parlors.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-4">
                                                <button class="accordion-button collapsed rounded d-block pe-5"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-4" aria-expanded="false"
                                                    aria-controls="collapse-4">
                                                    <span class="lead me-1 fw-normal">Day 4:</span>Departure, Its Time
                                                    to say Goodbye
                                                </button>
                                            </h6>
                                            <!-- Body -->
                                            <div id="collapse-4" class="accordion-collapse collapse"
                                                aria-labelledby="heading-4" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body mt-3">
                                                    <p>What deal evil rent by real in. But her ready least set lived
                                                        spite solid. September how men saw tolerably two behavior
                                                        arranging. She offices for highest and replied one venture
                                                        pasture. Applauded no discovery in newspaper allowance am
                                                        northward. Frequently partiality possession resolution at or
                                                        appearance unaffected me. Engaged its was the evident pleased
                                                        husband. Ye goodness felicity do disposal dwelling no. First am
                                                        plate jokes to began to cause a scale. Subjects he prospect
                                                        elegance followed no overcame possible it on. Improved own
                                                        provided blessing may peculiar domestic. Sight house has sex
                                                        never. No visited raising gravity outward subject my cottage Mr
                                                        be.</p>
                                                    <p class="mb-0">At the moment, we only accept Credit/Debit cards
                                                        and Paypal payments. Paypal is the easiest way to make payments
                                                        online. While checking out your order. Be sure to fill in
                                                        correct details for fast & hassle-free payment processing.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Content item END -->

                        <!-- Content item START -->
                        <div class="tab-pane fade" id="tour-pills-tab3" role="tabpanel"
                            aria-labelledby="tour-pills-tab-3">
                            <div class="card bg-transparent p-0">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                    <h3 class="mb-0">Inclusions & Exclusions</h3>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-0 pt-3">
                                    <!-- List -->
                                    <h5>Inclusion</h5>
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Comfortable stay for 4 nights in your preferred
                                                category Hotels</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Professional English speaking guide to help you
                                                explore the cities</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal"> Breakfast is included as mentioned in
                                                Itinerary.</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Per Peron rate on twin sharing basis</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Entrance Tickets to Genting Indoor Theme
                                                Park</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">All Tours & Transfers on Seat In Coach
                                                Basis</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-check text-success me-2"></i>
                                            <span class="h6 fw-normal">Visit Bali Safari & Marine Park with Jungle
                                                Hopper Pass</span>
                                        </li>
                                    </ul>

                                    <!-- List -->
                                    <h5>Exclusion</h5>
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-times text-danger me-2"></i>
                                            <span class="h6 fw-normal">Lunch and dinner are not included in CP
                                                plans</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-times text-danger me-2"></i>
                                            <span class="h6 fw-normal">Any other services not specifically mentioned in
                                                the inclusions</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-times text-danger me-2"></i>
                                            <span class="h6 fw-normal">Medical and Travel insurance</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-times text-danger me-2"></i>
                                            <span class="h6 fw-normal">Airfare is not included</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-times text-danger me-2"></i>
                                            <span class="h6 fw-normal">Early Check-In & Late Check-Out</span>
                                        </li>
                                        <li class="list-group-item d-flex mb-0"><i
                                                class="fa-solid fa-times text-danger me-2"></i>
                                            <span class="h6 fw-normal">Anything which is not specified in
                                                Inclusions</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Content item END -->

                        <!-- Content item START -->
                        <div class="tab-pane fade" id="tour-pills-tab4" role="tabpanel"
                            aria-labelledby="tour-pills-tab-4">
                            <div class="card bg-transparent p-0">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom p-0 pb-3">
                                    <h3 class="mb-0">Tour Policy</h3>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-0 pt-3">
                                    <h5>Confirmation Policy:</h5>
                                    <p class="mb-2">The customer receives a confirmation voucher via email within 24
                                        hours of successful booking.</p>
                                    <p class="mb-2">In case the preferred slots are unavailable, an alternate
                                        schedule of the customer’s preference will be arranged and a new confirmation
                                        voucher will be sent via email.</p>
                                    <p class="mb-0">Alternatively, the customer may choose to cancel their booking
                                        before confirmation and a full refund will be processed.</p>

                                    <!-- List -->
                                    <h5 class="mt-4">Cancellation Policy:</h5>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item">
                                            <span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10
                                                days:</span>
                                            <span>100%</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10 to 15
                                                days:</span>
                                            <span>75% + Non Refundable Component</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>15 to 30
                                                days:</span>
                                            <span>30% + Non Refundable Component</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10Hotel /
                                                Air:</span>
                                            <span>100% in case of non-refundable ticket / Hotel Room</span>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="h6 fw-normal me-1 mb-0"><i class="bi bi-dot"></i>10Cruise /
                                                Visa:</span>
                                            <span>On Actuals</span>
                                        </li>
                                    </ul>

                                    <p class="mt-2">All Prices are in Indian Rupees and subject to change without
                                        prior notice.<br>In the case FIT flight inclusive package, the full amount of
                                        the flight will be payable at the time of booking.</p>

                                    <h5 class="mt-4">Refund Policy:</h5>
                                    <p class="mb-2">The applicable refund amount will be processed within 10 business
                                        days.</p>
                                    <p class="mb-0">All applicable refunds will be done in the traveler's
                                        Thrillophilia wallet as Thrillcash.</p>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Content item END -->

                    </div>
                </div>
                <!-- Tabs Content END -->

                <!-- Right side content START -->
                <aside class="col-xl-4">
                    <div class="row g-4">
                        <!-- Book now item START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card card-body border bg-transparent">
                                <!-- Title -->
                                <div class="hstack gap-2 mb-1">
                                    <h3 class="card-title mb-0">$280</h3>
                                    <span class="fs-5">/person</span>
                                </div>

                                <div class="d-flex justify-content-between mb-4">
                                    <!-- Rating -->
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-1 h6 mb-0">4.5</li>
                                        <li class="list-inline-item me-0 small"><i
                                                class="fa-solid fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i
                                                class="fa-solid fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i
                                                class="fa-solid fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i
                                                class="fa-solid fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i
                                                class="fa-solid fa-star-half-alt text-warning"></i></li>
                                    </ul>
                                    <a href="#" class="mb-0 m-0 text-reset text-primary-hover">(365 reviews)</a>
                                </div>

                                <!-- Button -->
                                <div class="d-grid gap-2">
                                    <a href="{{ route('second', ['tour', 'booking']) }}"
                                        class="btn btn-primary">Book Now</a>
                                    <button class="btn btn-outline-primary mb-0" type="button"
                                        data-bs-toggle="modal" data-bs-target="#inquiryForm">
                                        <i class="bi bi-eye fa-fw me-2"></i>Send Inquiry
                                    </button>
                                </div>

                            </div>
                        </div>
                        <!-- Book now item END -->

                        <!-- Help item START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card card-body bg-light p-4">
                                <!-- Title -->
                                <h4 class="card-title">Need Help?</h4>

                                <!-- List -->
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item py-3">
                                        <a href="#" class="h6 mb-0">
                                            <i class="bi fa-fw bi-telephone-forward text-primary fs-5 me-2"></i>
                                            <span class="fw-light me-1">Call us on:</span>+31 123 456 789
                                        </a>
                                    </li>

                                    <li class="list-group-item py-0">
                                        <hr class="my-0">
                                    </li><!-- Divider -->

                                    <li class="list-group-item py-3">
                                        <h6 class="mb-0">
                                            <i class="bi fa-fw bi-alarm text-primary fs-5 me-2"></i>
                                            <span class="h6 fw-light me-1 mb-0">Timing:</span>10AM to 7PM
                                        </h6>
                                    </li>

                                    <li class="list-group-item py-0">
                                        <hr class="my-0">
                                    </li><!-- Divider -->

                                    <li class="list-group-item py-3">
                                        <a href="#" class="h6 mb-0">
                                            <i class="bi fa-fw bi-headset text-primary fs-5 me-2"></i>Let Us Call You
                                        </a>
                                    </li>

                                    <li class="list-group-item py-0">
                                        <hr class="my-0">
                                    </li><!-- Divider -->

                                    <li class="list-group-item pt-3 pb-0">
                                        <a href="{{ route('second', ['pages' , 'contact']) }}" class="h6 mb-0">
                                            <i class="bi fa-fw bi-calendar-check text-primary fs-5 me-2"></i>Book
                                            Appointments
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Help item END -->
                    </div>
                </aside>
                <!-- Right side content END -->

            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Tabs-content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Send Inquiry START -->
<div class="modal fade" id="inquiryForm" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="inquiryFormlabel">Get Inquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-3">
                <div class="card bg-transparent">
                    <!-- Card header -->
                    <div class="card-header bg-transparent">
                        <!-- Title -->
                        <h6 class="card-title mb-0">Our expert will get in touch with you shortly</h6>
                    </div>

                    <!-- Card body -->
                    <div class="card-body pt-0">

                        <form>
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your name">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email id</label>
                                <input type="email" class="form-control" placeholder="Enter Your emil id">
                            </div>
                            <!-- Phone number -->
                            <div class="mb-3">
                                <label class="form-label">Phone number</label>
                                <input type="text" class="form-control" placeholder="Enter Your phone number">
                            </div>

                            <div class="mb-3 ms-2 form-check">
                                <input type="checkbox" class="form-check-input" id="inquiryCheck">
                                <label class="form-check-label" for="inquiryCheck">I agree to receive updates and
                                    offers</label>
                            </div>

                            <!-- Buttons -->
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-dark mb-0" type="button">Send Inquiry</button>
                                <button class="btn btn-link mb-0" type="button">Call on: +123 456 89</button>
                            </div>
                        </form> <!-- Form END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Send Inquiry END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection