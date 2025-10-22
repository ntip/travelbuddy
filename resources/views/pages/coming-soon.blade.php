@extends('layouts.base')

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main banner START -->
    <section class="p-xl-0">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center vh-100">
                <div class="col-xl-8">
                    <!-- Title -->
                    <h6 class="text-primary">Coming Soon</h6>
                    <h1>New website is on a roll!!</h1>
                    <p class="mb-0">Hey, you! Booking is coming. We are doing our best to launch our website and we
                        will be back soon.</p>

                    <form class="mt-4">
                        <!-- Info -->
                        <h6>Notify me when the website is launched</h6>
                        <div class="col-md-9 mx-auto border rounded-2 p-2">
                            <!-- Input subscribe -->
                            <div class="input-group">
                                <input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-2 mb-0">Notify Me!</button>
                            </div>
                        </div>
                    </form>

                    <!-- Social links -->
                    <ul class="list-inline hstack flex-wrap gap-2 gap-lg-4 h6 justify-content-center mt-4 mb-0">
                        <li class="list-inline-item"> <a class="text-facebook" href="#"><i
                                    class="fa-brands fa-facebook-square"></i> Facebook</a> </li>
                        <li class="list-inline-item"> <a class="text-instagram-gradient" href="#"><i
                                    class="fa-brands fa-instagram-square"></i> Instagram</a> </li>
                        <li class="list-inline-item"> <a class="text-twitter" href="#"><i
                                    class="fa-brands fa-twitter-square"></i> Twitter</a> </li>
                        <li class="list-inline-item"> <a class="text-linkedin" href="#"><i
                                    class="fa-brands fa-linkedin"></i> Linkedin</a> </li>
                    </ul>

                    <!-- Image -->
                    <img src="/images/element/coming-soon.svg" class="h-sm-300px h-xxl-400px mt-4" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Main banner START -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection