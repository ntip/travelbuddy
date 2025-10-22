@extends('layouts.base')

@section('body-attributes')
class="dashboard"
@endsection

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Page content START -->
    <section class="overflow-hidden pt-0 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center mx-auto">
                    <!-- SVG decoration START -->
                    <img src="/images/element/congratulations.svg" class="h-300px my-4" alt="">
                    <!-- SVG decoration END -->

                    <!-- Title -->
                    <h1 class="fs-3">Your listing has been submitted successfully. 🎉</h1>
                    <!-- Info -->
                    <p>We will review your item shortly. You will be informed by email that your listing has been
                        accepted. Also, make sure your <a href="#">Payment and Tax information</a> is correct and
                        valid.</p>

                    <!-- Buttons -->
                    <a href="{{ route('second', ['listing', 'add-listing']) }}"
                        class="btn btn-primary mb-5 me-1">Preview</a>
                    <a href="{{ route('root') }}" class="btn btn-light mb-5">Back to Homepage</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection