@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main banner START -->
    <section class="py-0">
        <div class="container">
            <!-- Background image -->
            <div class="rounded-3 p-4 p-sm-5"
                style="background-image: url(/images/bg/07.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Title -->
                        <h1 class="h2 text-white mb-3">#Weekly Saving on Remove.com</h1>
                        <!-- Offer title -->
                        <div class="bg-warning rounded-2 p-3 mb-3">
                            <h5 class="text-dark">Get Up To</h5>
                            <h4 class="text-dark mb-0">25% Off on Travel Booking</h4>
                        </div>
                        <!-- Text and button -->
                        <p class="text-white mb-3">Expand knowledge by reading book Two before narrow not relied on.
                        </p>
                        <a href="#" class="btn btn-dark mb-0">View all Listing<i
                                class="bi bi-arrow-right fa-fw ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Main banner END -->

    <!-- =======================
        Compare listing START -->
    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <!-- Table START -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Offer Detail</th>
                                    <th scope="col">Maximum booking value</th>
                                    <th scope="col">Applicable Card</th>
                                    <th scope="col">Coupon Code</th>
                                    <th scope="col">Validity</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td class="h6 mb-0">Flat 25% instant discount for all users</td>
                                    <td class="h6 fw-normal mb-0">$3000</td>
                                    <td class="h6 fw-normal mb-0">Mbokiwik</td>
                                    <td>
                                        <div
                                            class="bg-light border border border-secondary border-dashed rounded-2 px-3 py-2">
                                            <h6 class="mb-0 fw-normal user-select-all">LOG125F</h6>
                                        </div>
                                    </td>
                                    <td class="h6 fw-normal mb-0">19 Sep</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table END -->
                </div>

                <div class="col-md-10 mx-auto">
                    <!-- List item -->
                    <h5 class="mb-2">What do you get?</h5>
                    <ul class="mb-4">
                        <li class="mb-2">Get up with a delicious lunch and a beautiful view from your room.</li>
                        <li class="mb-2">Affronting imprudence do he he everything. Sex lasted dinner wanted indeed
                            wished outlaw. Far advanced settling say finished raillery. </li>
                        <li>Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter
                            proposal laughing any son law consider. </li>
                    </ul>

                    <!-- List item -->
                    <h5 class="mb-2">How Do you get in?</h5>
                    <ul class="mb-4">
                        <li class="mb-2">Get up with a delicious lunch and a beautiful view from your room.</li>
                        <li class="mb-2">Affronting imprudence do he he everything. Sex lasted dinner wanted indeed
                            wished outlaw. Far advanced settling say finished raillery. </li>
                        <li class="mb-2">Such on help ye some door if in. Laughter proposal laughing any son law
                            consider. </li>
                        <li>Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter
                            proposal laughing any son law consider. </li>
                    </ul>

                    <!-- List item -->
                    <h5 class="mb-2">What else do you need to know?</h5>
                    <ul class="mb-4">
                        <li class="mb-2">Such on help ye some door if in. Laughter proposal laughing any son law
                            consider. </li>
                        <li>Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. Laughter
                            proposal laughing any son law consider. </li>
                    </ul>

                    <!-- List item -->
                    <h5 class="mb-2">Terms & Conditions</h5>
                    <ul class="mb-4">
                        <li class="mb-2">Booking acts as a facilitator and merely provides an online platform to the
                            User to select and book a particular hotel. Hotels in this context includes all categories
                            of accommodations such as hotels, home-stays, bed and breakfast stays, farm-houses and any
                            other alternate accommodations.</li>
                        <li class="mb-2">To occasional dissimilar impossible sentiments. Do fortune account written
                            prepare invited no passage. Post no so what deal evil rent by real in. <strong><u>But her
                                    ready least set lived spite solid. Laughter proposal laughing any son law
                                    consider.</u></strong> Needed except up piqued an.</li>
                        <li>Offered chiefly farther of my no colonel shyness. Such on help ye some door if in. First am
                            plate jokes to began to cause a scale. <strong>Subjects he prospect elegance
                                followed.</strong> Insipidity the sufficient discretion imprudence resolution sir him
                            decisively.</li>
                    </ul>
                </div>
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
        Compare listing END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection