@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar2')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main banner START -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 text-center mx-auto">
                    <!-- Image -->
                    <img src="/images/element/error.svg" class="h-lg-500px mb-4" alt="">
                    <!-- Title -->
                    <h1 class="display-1 text-primary mb-0">404</h1>
                    <!-- Subtitle -->
                    <h2>Oh no, something went wrong!</h2>
                    <!-- info -->
                    <p class="mb-4">Either something went wrong or this page doesn't exist anymore.</p>
                    <!-- Button -->
                    <a href="{{ route('root') }}" class="btn btn-light mb-0">Take me to Homepage</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Main banner START -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Back to top -->
<div class="back-top"></div>
@endsection