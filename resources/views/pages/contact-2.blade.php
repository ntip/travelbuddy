@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
            Main banner START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <!-- Content and form START -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <!-- Title -->
                    <h1>Let's talk about traveling</h1>

                    <!-- Contact form -->
                    <form class="mt-4">
                        <!-- Name -->
                        <div class="mb-4 form-control-bg-light">
                            <label class="form-label">Your name *</label>
                            <input type="text" class="form-control">
                        </div>
                        <!-- Email -->
                        <div class="mb-4 form-control-bg-light">
                            <label class="form-label">Email address *</label>
                            <input type="email" class="form-control">
                        </div>
                        <!-- Message -->
                        <div class="mb-4 form-control-bg-light">
                            <label class="form-label">Message *</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <!-- Button -->
                        <div><button class="btn btn-lg btn-primary mb-0" type="button">Send Message</button></div>
                    </form>
                </div>

                <!-- Image -->
                <div class="col-lg-6 col-xl-5 text-center text-lg-end position-relative ms-auto">
                    <!-- Svg decoration -->
                    <figure class="position-absolute start-0 top-0 d-none d-md-block mt-n5 ms-n3">
                        <svg height="400" class="fill-primary opacity-2" viewBox="0 0 340 340">
                            <circle cx="194.2" cy="2.2" r="2.2"></circle>
                            <circle cx="2.2" cy="2.2" r="2.2"></circle>
                            <circle cx="218.2" cy="2.2" r="2.2"></circle>
                            <circle cx="26.2" cy="2.2" r="2.2"></circle>
                            <circle cx="242.2" cy="2.2" r="2.2"></circle>
                            <circle cx="50.2" cy="2.2" r="2.2"></circle>
                            <circle cx="266.2" cy="2.2" r="2.2"></circle>
                            <circle cx="74.2" cy="2.2" r="2.2"></circle>
                            <circle cx="290.2" cy="2.2" r="2.2"></circle>
                            <circle cx="98.2" cy="2.2" r="2.2"></circle>
                            <circle cx="314.2" cy="2.2" r="2.2"></circle>
                            <circle cx="122.2" cy="2.2" r="2.2"></circle>
                            <circle cx="338.2" cy="2.2" r="2.2"></circle>
                            <circle cx="146.2" cy="2.2" r="2.2"></circle>
                            <circle cx="170.2" cy="2.2" r="2.2"></circle>
                            <circle cx="194.2" cy="26.2" r="2.2"></circle>
                            <circle cx="2.2" cy="26.2" r="2.2"></circle>
                            <circle cx="218.2" cy="26.2" r="2.2"></circle>
                            <circle cx="26.2" cy="26.2" r="2.2"></circle>
                            <circle cx="242.2" cy="26.2" r="2.2"></circle>
                            <circle cx="50.2" cy="26.2" r="2.2"></circle>
                            <circle cx="266.2" cy="26.2" r="2.2"></circle>
                            <circle cx="74.2" cy="26.2" r="2.2"></circle>
                            <circle cx="290.2" cy="26.2" r="2.2"></circle>
                            <circle cx="98.2" cy="26.2" r="2.2"></circle>
                            <circle cx="314.2" cy="26.2" r="2.2"></circle>
                            <circle cx="122.2" cy="26.2" r="2.2"></circle>
                            <circle cx="338.2" cy="26.2" r="2.2"></circle>
                            <circle cx="146.2" cy="26.2" r="2.2"></circle>
                            <circle cx="170.2" cy="26.2" r="2.2"></circle>
                            <circle cx="194.2" cy="50.2" r="2.2"></circle>
                            <circle cx="2.2" cy="50.2" r="2.2"></circle>
                            <circle cx="218.2" cy="50.2" r="2.2"></circle>
                            <circle cx="26.2" cy="50.2" r="2.2"></circle>
                            <circle cx="242.2" cy="50.2" r="2.2"></circle>
                            <circle cx="50.2" cy="50.2" r="2.2"></circle>
                            <circle cx="266.2" cy="50.2" r="2.2"></circle>
                            <circle cx="74.2" cy="50.2" r="2.2"></circle>
                            <circle cx="290.2" cy="50.2" r="2.2"></circle>
                            <circle cx="98.2" cy="50.2" r="2.2"></circle>
                            <circle cx="314.2" cy="50.2" r="2.2"></circle>
                            <circle cx="122.2" cy="50.2" r="2.2"></circle>
                            <circle cx="338.2" cy="50.2" r="2.2"></circle>
                            <circle cx="146.2" cy="50.2" r="2.2"></circle>
                            <circle cx="170.2" cy="50.2" r="2.2"></circle>
                            <circle cx="194.2" cy="74.2" r="2.2"></circle>
                            <circle cx="2.2" cy="74.2" r="2.2"></circle>
                            <circle cx="218.2" cy="74.2" r="2.2"></circle>
                            <circle cx="26.2" cy="74.2" r="2.2"></circle>
                            <circle cx="242.2" cy="74.2" r="2.2"></circle>
                            <circle cx="50.2" cy="74.2" r="2.2"></circle>
                            <circle cx="266.2" cy="74.2" r="2.2"></circle>
                            <circle cx="74.2" cy="74.2" r="2.2"></circle>
                            <circle cx="290.2" cy="74.2" r="2.2"></circle>
                            <circle cx="98.2" cy="74.2" r="2.2"></circle>
                            <circle cx="314.2" cy="74.2" r="2.2"></circle>
                            <circle cx="122.2" cy="74.2" r="2.2"></circle>
                            <circle cx="338.2" cy="74.2" r="2.2"></circle>
                            <circle cx="146.2" cy="74.2" r="2.2"></circle>
                            <circle cx="170.2" cy="74.2" r="2.2"></circle>
                            <circle cx="194.2" cy="98.2" r="2.2"></circle>
                            <circle cx="2.2" cy="98.2" r="2.2"></circle>
                            <circle cx="218.2" cy="98.2" r="2.2"></circle>
                            <circle cx="26.2" cy="98.2" r="2.2"></circle>
                            <circle cx="242.2" cy="98.2" r="2.2"></circle>
                            <circle cx="50.2" cy="98.2" r="2.2"></circle>
                            <circle cx="266.2" cy="98.2" r="2.2"></circle>
                            <circle cx="74.2" cy="98.2" r="2.2"></circle>
                            <circle cx="290.2" cy="98.2" r="2.2"></circle>
                            <circle cx="98.2" cy="98.2" r="2.2"></circle>
                            <circle cx="314.2" cy="98.2" r="2.2"></circle>
                            <circle cx="122.2" cy="98.2" r="2.2"></circle>
                            <circle cx="338.2" cy="98.2" r="2.2"></circle>
                            <circle cx="146.2" cy="98.2" r="2.2"></circle>
                            <circle cx="170.2" cy="98.2" r="2.2"></circle>
                            <circle cx="194.2" cy="122.2" r="2.2"></circle>
                            <circle cx="2.2" cy="122.2" r="2.2"></circle>
                            <circle cx="218.2" cy="122.2" r="2.2"></circle>
                            <circle cx="26.2" cy="122.2" r="2.2"></circle>
                            <circle cx="242.2" cy="122.2" r="2.2"></circle>
                            <circle cx="50.2" cy="122.2" r="2.2"></circle>
                            <circle cx="266.2" cy="122.2" r="2.2"></circle>
                            <circle cx="74.2" cy="122.2" r="2.2"></circle>
                            <circle cx="290.2" cy="122.2" r="2.2"></circle>
                            <circle cx="98.2" cy="122.2" r="2.2"></circle>
                            <circle cx="314.2" cy="122.2" r="2.2"></circle>
                            <circle cx="122.2" cy="122.2" r="2.2"></circle>
                            <circle cx="338.2" cy="122.2" r="2.2"></circle>
                            <circle cx="146.2" cy="122.2" r="2.2"></circle>
                            <circle cx="170.2" cy="122.2" r="2.2"></circle>
                            <circle cx="194.2" cy="146.2" r="2.2"></circle>
                            <circle cx="2.2" cy="146.2" r="2.2"></circle>
                            <circle cx="218.2" cy="146.2" r="2.2"></circle>
                            <circle cx="26.2" cy="146.2" r="2.2"></circle>
                            <circle cx="242.2" cy="146.2" r="2.2"></circle>
                            <circle cx="50.2" cy="146.2" r="2.2"></circle>
                            <circle cx="266.2" cy="146.2" r="2.2"></circle>
                            <circle cx="74.2" cy="146.2" r="2.2"></circle>
                            <circle cx="290.2" cy="146.2" r="2.2"></circle>
                            <circle cx="98.2" cy="146.2" r="2.2"></circle>
                            <circle cx="314.2" cy="146.2" r="2.2"></circle>
                            <circle cx="122.2" cy="146.2" r="2.2"></circle>
                            <circle cx="338.2" cy="146.2" r="2.2"></circle>
                            <circle cx="146.2" cy="146.2" r="2.2"></circle>
                            <circle cx="170.2" cy="146.2" r="2.2"></circle>
                            <circle cx="194.2" cy="170.2" r="2.2"></circle>
                            <circle cx="2.2" cy="170.2" r="2.2"></circle>
                            <circle cx="218.2" cy="170.2" r="2.2"></circle>
                            <circle cx="26.2" cy="170.2" r="2.2"></circle>
                            <circle cx="242.2" cy="170.2" r="2.2"></circle>
                            <circle cx="50.2" cy="170.2" r="2.2"></circle>
                            <circle cx="266.2" cy="170.2" r="2.2"></circle>
                            <circle cx="74.2" cy="170.2" r="2.2"></circle>
                            <circle cx="290.2" cy="170.2" r="2.2"></circle>
                            <circle cx="98.2" cy="170.2" r="2.2"></circle>
                            <circle cx="314.2" cy="170.2" r="2.2"></circle>
                            <circle cx="122.2" cy="170.2" r="2.2"></circle>
                            <circle cx="338.2" cy="170.2" r="2.2"></circle>
                            <circle cx="146.2" cy="170.2" r="2.2"></circle>
                            <circle cx="170.2" cy="170.2" r="2.2"></circle>
                            <circle cx="194.2" cy="194.2" r="2.2"></circle>
                            <circle cx="2.2" cy="194.2" r="2.2"></circle>
                            <circle cx="218.2" cy="194.2" r="2.2"></circle>
                            <circle cx="26.2" cy="194.2" r="2.2"></circle>
                            <circle cx="242.2" cy="194.2" r="2.2"></circle>
                            <circle cx="50.2" cy="194.2" r="2.2"></circle>
                            <circle cx="266.2" cy="194.2" r="2.2"></circle>
                            <circle cx="74.2" cy="194.2" r="2.2"></circle>
                            <circle cx="290.2" cy="194.2" r="2.2"></circle>
                            <circle cx="98.2" cy="194.2" r="2.2"></circle>
                            <circle cx="314.2" cy="194.2" r="2.2"></circle>
                            <circle cx="122.2" cy="194.2" r="2.2"></circle>
                            <circle cx="338.2" cy="194.2" r="2.2"></circle>
                            <circle cx="146.2" cy="194.2" r="2.2"></circle>
                            <circle cx="170.2" cy="194.2" r="2.2"></circle>
                            <circle cx="194.2" cy="218.2" r="2.2"></circle>
                            <circle cx="2.2" cy="218.2" r="2.2"></circle>
                            <circle cx="218.2" cy="218.2" r="2.2"></circle>
                            <circle cx="26.2" cy="218.2" r="2.2"></circle>
                            <circle cx="242.2" cy="218.2" r="2.2"></circle>
                            <circle cx="50.2" cy="218.2" r="2.2"></circle>
                            <circle cx="266.2" cy="218.2" r="2.2"></circle>
                            <circle cx="74.2" cy="218.2" r="2.2"></circle>
                            <circle cx="290.2" cy="218.2" r="2.2"></circle>
                            <circle cx="98.2" cy="218.2" r="2.2"></circle>
                            <circle cx="314.2" cy="218.2" r="2.2"></circle>
                            <circle cx="122.2" cy="218.2" r="2.2"></circle>
                            <circle cx="338.2" cy="218.2" r="2.2"></circle>
                            <circle cx="146.2" cy="218.2" r="2.2"></circle>
                            <circle cx="170.2" cy="218.2" r="2.2"></circle>
                            <circle cx="194.2" cy="242.2" r="2.2"></circle>
                            <circle cx="2.2" cy="242.2" r="2.2"></circle>
                            <circle cx="218.2" cy="242.2" r="2.2"></circle>
                            <circle cx="26.2" cy="242.2" r="2.2"></circle>
                            <circle cx="242.2" cy="242.2" r="2.2"></circle>
                            <circle cx="50.2" cy="242.2" r="2.2"></circle>
                            <circle cx="266.2" cy="242.2" r="2.2"></circle>
                            <circle cx="74.2" cy="242.2" r="2.2"></circle>
                            <circle cx="290.2" cy="242.2" r="2.2"></circle>
                            <circle cx="98.2" cy="242.2" r="2.2"></circle>
                            <circle cx="314.2" cy="242.2" r="2.2"></circle>
                            <circle cx="122.2" cy="242.2" r="2.2"></circle>
                            <circle cx="338.2" cy="242.2" r="2.2"></circle>
                            <circle cx="146.2" cy="242.2" r="2.2"></circle>
                            <circle cx="170.2" cy="242.2" r="2.2"></circle>
                            <circle cx="194.2" cy="266.2" r="2.2"></circle>
                            <circle cx="2.2" cy="266.2" r="2.2"></circle>
                            <circle cx="218.2" cy="266.2" r="2.2"></circle>
                            <circle cx="26.2" cy="266.2" r="2.2"></circle>
                            <circle cx="242.2" cy="266.2" r="2.2"></circle>
                            <circle cx="50.2" cy="266.2" r="2.2"></circle>
                            <circle cx="266.2" cy="266.2" r="2.2"></circle>
                            <circle cx="74.2" cy="266.2" r="2.2"></circle>
                            <circle cx="290.2" cy="266.2" r="2.2"></circle>
                            <circle cx="98.2" cy="266.2" r="2.2"></circle>
                            <circle cx="314.2" cy="266.2" r="2.2"></circle>
                            <circle cx="122.2" cy="266.2" r="2.2"></circle>
                            <circle cx="338.2" cy="266.2" r="2.2"></circle>
                            <circle cx="146.2" cy="266.2" r="2.2"></circle>
                            <circle cx="170.2" cy="266.2" r="2.2"></circle>
                            <circle cx="194.2" cy="290.2" r="2.2"></circle>
                            <circle cx="2.2" cy="290.2" r="2.2"></circle>
                            <circle cx="218.2" cy="290.2" r="2.2"></circle>
                            <circle cx="26.2" cy="290.2" r="2.2"></circle>
                            <circle cx="242.2" cy="290.2" r="2.2"></circle>
                            <circle cx="50.2" cy="290.2" r="2.2"></circle>
                            <circle cx="266.2" cy="290.2" r="2.2"></circle>
                            <circle cx="74.2" cy="290.2" r="2.2"></circle>
                            <circle cx="290.2" cy="290.2" r="2.2"></circle>
                            <circle cx="98.2" cy="290.2" r="2.2"></circle>
                            <circle cx="314.2" cy="290.2" r="2.2"></circle>
                            <circle cx="122.2" cy="290.2" r="2.2"></circle>
                            <circle cx="338.2" cy="290.2" r="2.2"></circle>
                            <circle cx="146.2" cy="290.2" r="2.2"></circle>
                            <circle cx="170.2" cy="290.2" r="2.2"></circle>
                            <circle cx="194.2" cy="314.2" r="2.2"></circle>
                            <circle cx="2.2" cy="314.2" r="2.2"></circle>
                            <circle cx="218.2" cy="314.2" r="2.2"></circle>
                            <circle cx="26.2" cy="314.2" r="2.2"></circle>
                            <circle cx="242.2" cy="314.2" r="2.2"></circle>
                            <circle cx="50.2" cy="314.2" r="2.2"></circle>
                            <circle cx="266.2" cy="314.2" r="2.2"></circle>
                            <circle cx="74.2" cy="314.2" r="2.2"></circle>
                            <circle cx="290.2" cy="314.2" r="2.2"></circle>
                            <circle cx="98.2" cy="314.2" r="2.2"></circle>
                            <circle cx="314.2" cy="314.2" r="2.2"></circle>
                            <circle cx="122.2" cy="314.2" r="2.2"></circle>
                            <circle cx="338.2" cy="314.2" r="2.2"></circle>
                            <circle cx="146.2" cy="314.2" r="2.2"></circle>
                            <circle cx="170.2" cy="314.2" r="2.2"></circle>
                            <circle cx="194.2" cy="338.2" r="2.2"></circle>
                            <circle cx="2.2" cy="338.2" r="2.2"></circle>
                            <circle cx="218.2" cy="338.2" r="2.2"></circle>
                            <circle cx="26.2" cy="338.2" r="2.2"></circle>
                            <circle cx="242.2" cy="338.2" r="2.2"></circle>
                            <circle cx="50.2" cy="338.2" r="2.2"></circle>
                            <circle cx="266.2" cy="338.2" r="2.2"></circle>
                            <circle cx="74.2" cy="338.2" r="2.2"></circle>
                            <circle cx="290.2" cy="338.2" r="2.2"></circle>
                            <circle cx="98.2" cy="338.2" r="2.2"></circle>
                            <circle cx="314.2" cy="338.2" r="2.2"></circle>
                            <circle cx="122.2" cy="338.2" r="2.2"></circle>
                            <circle cx="338.2" cy="338.2" r="2.2"></circle>
                            <circle cx="146.2" cy="338.2" r="2.2"></circle>
                            <circle cx="170.2" cy="338.2" r="2.2"></circle>
                        </svg>
                    </figure>
                    <!-- Image -->
                    <img src="/images/about/05.jpg" class="rounded-3 position-relative" alt="">
                </div>
            </div>
            <!-- Content and form END -->

            <!-- Social links -->
            <div class="row g-4 align-items-center mt-5">
                <div class="col-lg-4">
                    <h5 class="mb-0">Another way to getting in touch</h5>
                </div>
                <!-- Social links -->
                <div class="col-lg-8">
                    <ul class="list-inline hstack flex-wrap gap-2 gap-lg-4 justify-content-lg-end h6 mb-0">
                        <li class="list-inline-item"> <a class="text-facebook" href="#"><i
                                    class="fa-brands fa-facebook-square"></i> Facebook</a> </li>
                        <li class="list-inline-item"> <a class="text-instagram-gradient" href="#"><i
                                    class="fa-brands fa-instagram-square"></i> Instagram</a> </li>
                        <li class="list-inline-item"> <a class="text-twitter" href="#"><i
                                    class="fa-brands fa-twitter-square"></i> Twitter</a> </li>
                        <li class="list-inline-item"> <a class="text-linkedin" href="#"><i
                                    class="fa-brands fa-linkedin"></i> Linkedin</a> </li>
                        <li class="list-inline-item"> <a class="text-whatsapp" href="#"><i
                                    class="fa-brands fa-whatsapp-square"></i> WhatsApp</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Main banner START -->

    <!-- =======================
            Map and office START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4">
                <!-- Map -->
                <div class="col-lg-4">
                    <iframe class="w-100 h-100 rounded-3"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
                        height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <!-- Address item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body shadow p-4 h-100">
                        <h5 class="mb-3">New York, USA (HQ)</h5>
                        <address class="mb-1">750 Sing Sing Rd, Horseheads, NY, 14845</address>
                        <p class="mb-1">Call: 469-537-2410 (Toll-free)</p>
                        <p>Support time: Monday to Saturday
                            <br>
                            9:00 am to 5:30 pm
                        </p>
                        <div><a href="#" class="btn btn-link p-0">View location <i
                                    class="bi bi-arrow-right ms-1"></i></a></div>
                    </div>
                </div>

                <!-- Address item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body shadow p-4 h-100">
                        <h5 class="mb-3">Tokyo, Japan</h5>
                        <address class="mb-1">2002 Horton Ford Rd, Eidson, TN, 37731</address>
                        <p class="mb-1">Call: (423) 733-8222 (Toll-free)</p>
                        <p>Support time: Monday to Saturday
                            <br>
                            9:30 am to 6:00 pm
                        </p>
                        <div><a href="#" class="btn btn-link p-0">View location <i
                                    class="bi bi-arrow-right ms-1"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
            Map and office END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection