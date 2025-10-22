@extends('layouts.base')

@section('header')
<!-- Header START -->
<header class="navbar-light header-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ route('root') }}">
                <img class="light-mode-item navbar-brand-item" src="/images/logo.svg" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/images/logo-light.svg" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll ms-auto">

                    <!-- Nav item Help Center -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="helpMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Help Center</a>
                        <ul class="dropdown-menu" aria-labelledby="helpMenu">
                            <li> <a class="dropdown-item" href="{{ route('second', ['help', 'center']) }}">Help
                                    center</a></li>
                            <li> <a class="dropdown-item" href="{{ route('second', ['help', 'detail']) }}">Help
                                    Detail</a></li>
                        </ul>
                    </li>

                    <!-- Nav item Privacy Policy -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['help', 'privacy-policy']) }}">Privacy Policy</a></li>

                    <!-- Nav item Terms Of Service -->
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('second', ['help', 'terms-of-service']) }}">Terms of Service</a></li>

                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Profile dropdown START -->
            <div class="nav nav-item dropdown ms-2">
                <!-- Avatar -->
                <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                    data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="avatar-img rounded-2" src="/images/avatar/01.jpg" alt="avatar">
                </a>

                <!-- Profile dropdown START -->
                <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                    aria-labelledby="profileDropdown">
                    <!-- Profile info -->
                    <li class="px-3 mb-3">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar me-3">
                                <img class="avatar-img rounded-circle shadow" src="/images/avatar/01.jpg"
                                    alt="avatar">
                            </div>
                            <div>
                                <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                <p class="small m-0">example@gmail.com</p>
                            </div>
                        </div>
                    </li>

                    <!-- Links -->
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My
                            Bookings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help
                            Center</a></li>
                    <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <!-- Dark mode options START -->
                    <li>
                        <div
                            class="nav-pills-primary-soft theme-icon-active d-flex justify-content-between align-items-center p-2 pb-0">
                            <span>Mode:</span>
                            <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0"
                                data-bs-theme-value="light" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                    <path
                                        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    <use href="#"></use>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0"
                                data-bs-theme-value="dark" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                    <path
                                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                                    <use href="#"></use>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-link nav-link text-primary-hover mb-0 p-0 active"
                                data-bs-theme-value="auto" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                    viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                                    <use href="#"></use>
                                </svg>
                            </button>
                        </div>
                    </li>
                    <!-- Dark mode options END-->
                </ul>
                <!-- Profile dropdown END -->
            </div>
            <!-- Profile dropdown END -->
        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
<!-- Header END -->
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
            Main banner START -->
    <section class="pt-4 pt-lg-5">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h6>AGREEMENT</h6>
                    <h1 class="fs-2 mb-0">Terms Of Service</h1>
                </div>
            </div>

            <!-- Content START -->
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="vstack gap-3">

                        <!-- Card item START -->
                        <div class="card bg-transparent p-0">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent px-0 pb-0">
                                <ul class="nav nav-tabs nav-bottom-line nav-responsive gap-2 gap-sm-4 mb-0 border-0">
                                    <li class="nav-item ps-3 ps-sm-0">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab-1"><i
                                                class="fa-solid fa-hotel fa-fw me-2"></i>Hotel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2"><i
                                                class="fa-solid fa-plane fa-fw me-2"></i>Flight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3"><i
                                                class="fa-solid fa-globe-americas fa-fw me-2"></i>Tour</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4"><i
                                                class="fa-solid fa-car fa-fw me-2"></i>Cabs</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Card body -->
                            <div class="card-body px-0 pt-4">
                                <div class="tab-content" id="nav-tabContent">

                                    <!-- Tab content item START -->
                                    <div class="tab-pane fade show active" id="tab-1">

                                        <h5>Role of Booking and Limitation of Liability of Booking</h5>

                                        <p>Off melancholy alteration principles old. Is do speedily kindness properly
                                            oh. Respect article painted cottage he is offices parlors. Improved own
                                            provided blessing may peculiar domestic. Sight house has sex never. No
                                            visited raising gravity outward subject my cottage Mr be. Hold do at tore in
                                            park feet near my case. Invitation at understood occasional sentiments
                                            insipidity inhabiting in.</p>
                                        <!-- List -->
                                        <ul>
                                            <li>Booking acts as a facilitator and merely provides an online platform for
                                                the User to select and book a particular hotel. Hotels in this context
                                                include all categories of accommodations such as hotels, home-stays, bed
                                                and breakfast stays, farm-houses, and any other alternate
                                                accommodations.</li>
                                            <li>Offered chiefly farther of my no colonel shyness. <strong> Such on help
                                                    ye some door if in.</strong> First am plate jokes to began to cause
                                                a scale. Subjects he prospect elegance followed. Insipidity the
                                                sufficient discretion imprudence resolution sir him decisively.</li>
                                            <li><i> To occasional dissimilar impossible sentiments. Do fortune account
                                                    written prepare invited no passage. Post no so what deal evil rent
                                                    by real in. But her ready least set lived spite solid.</i> Laughter
                                                proposal laughing any son law consider. Needed except up piqued an.</li>
                                        </ul>

                                        <p>Some banks and card issuing companies charge their account holders a
                                            transaction fee when the card issuer and the merchant location (as defined
                                            by the card brand, e.g. Visa, MasterCard, American Express) are in different
                                            countries. If a User has any questions about the fees or any exchange rate
                                            applied, they may contact their bank or the card issuing company through
                                            which payment was made.</p>
                                        <p>Started several mistake joy say painful removed reached end. State burst
                                            think end are its. Arrived off she elderly beloved him affixed noisier yet.
                                            Regard to up he hardly. View four has said do men saw find dear shy. <b>
                                                Talent men wicket add garden.</b> </p>

                                        <!-- Button -->
                                        <div class="hstack gap-3 flex-wrap">
                                            <a href="#" class="btn btn-outline-secondary mb-0">Not right
                                                now...</a>
                                            <a href="#" class="btn btn-primary mb-0">I agree with the terms</a>
                                        </div>
                                    </div>
                                    <!-- Tab content item END -->

                                    <!-- Tab content item START -->
                                    <div class="tab-pane fade" id="tab-2">
                                        <h5>Terms of the Airlines</h5>

                                        <p>Off melancholy alteration principles old. Is do speedily kindness properly
                                            oh. Respect article painted cottage he is offices parlors. Improved own
                                            provided blessing may peculiar domestic. Sight house has sex never. No
                                            visited raising gravity outward subject my cottage Mr be. Hold do at tore in
                                            park feet near my case. Invitation at understood occasional sentiments
                                            insipidity inhabiting in.</p>
                                        <!-- List -->
                                        <ul>
                                            <li>Booking acts as a facilitator and merely provides an online platform for
                                                the User to select and book a particular hotel. Hotels in this context
                                                include all categories of accommodations such as hotels, home-stays, bed
                                                and breakfast stays, farm-houses, and any other alternate
                                                accommodations.</li>
                                            <li>Offered chiefly farther of my no colonel shyness. <strong> Such on help
                                                    ye some door if in.</strong> First am plate jokes to began to cause
                                                a scale. Subjects he prospect elegance followed. Insipidity the
                                                sufficient discretion imprudence resolution sir him decisively.</li>
                                            <li><i> To occasional dissimilar impossible sentiments. Do fortune account
                                                    written prepare invited no passage. Post no so what deal evil rent
                                                    by real in. But her ready least set lived spite solid.</i> Laughter
                                                proposal laughing any son law consider. Needed except up piqued an.</li>
                                        </ul>

                                        <p>Some banks and card issuing companies charge their account holders a
                                            transaction fee when the card issuer and the merchant location (as defined
                                            by the card brand, e.g. Visa, MasterCard, American Express) are in different
                                            countries. If a User has any questions about the fees or any exchange rate
                                            applied, they may contact their bank or the card issuing company through
                                            which payment was made.</p>

                                        <h5>Code share</h5>
                                        <p>Started several mistake joy say painful removed reached end. State burst
                                            think end are its. Arrived off she elderly beloved him affixed noisier yet.
                                            Regard to up he hardly. View four has said do men saw find dear shy. <b>
                                                Talent men wicket add garden.</b> </p>
                                        <!-- List -->
                                        <ul>
                                            <li>Some airlines enter into "code share" agreements with other Airlines.
                                                This means that on certain routes, the airline carrier selling or
                                                marketing the flight ticker does not fly its own aircraft to that
                                                destination. Instead, it contracts or partners with another airline to
                                                fly to that destination. The partner airline is listed as "operated by"
                                                in the booking flow.</li>
                                            <li><strong>If your flight is a code share, it will be disclosed to you in
                                                    the booking process and prior to payment.</strong> First am plate
                                                jokes to began to cause a scale. Subjects he prospect elegance followed.
                                                Insipidity the sufficient discretion imprudence resolution sir him
                                                decisively.</li>
                                        </ul>
                                        <!-- Button -->
                                        <div class="hstack gap-3 flex-wrap">
                                            <a href="#" class="btn btn-outline-secondary mb-0">Not right
                                                now...</a>
                                            <a href="#" class="btn btn-primary mb-0">I agree with terms</a>
                                        </div>
                                    </div>
                                    <!-- Tab content item END -->

                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                    </div>
                </div>
            </div>
            <!-- Content END -->

        </div>
    </section>
    <!-- =======================
            Main banner END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection