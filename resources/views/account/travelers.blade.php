@extends('layouts.base')

@section('body-attributes')
class="dashboard"
@endsection

@section('header')
@include('layouts.partials/account-navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
            Content START -->
    <section class="pt-3">
        <div class="container">
            <div class="row">

                @include('layouts.partials.account-sidebar')

                <!-- Main content START -->
                <div class="col-lg-8 col-xl-9">

                    <!-- Offcanvas menu button -->
                    <div class="d-grid mb-0 d-lg-none w-100">
                        <button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i> Menu
                        </button>
                    </div>

                    <!-- Wishlist START -->
                    <div class="card border">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <h4 class="card-header-title">Travelers Detail</h4>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body vstack gap-4">
                            <!-- Traveler item START -->
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header d-flex justify-content-between align-items-center p-0">
                                    <!-- Avatar -->
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0">Lori Stevens</h6>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <a href="#" class="btn btn-sm btn-link p-0 mb-0">Remove</a>
                                </div>

                                <!-- card body -->
                                <form class="card-body p-0 pt-3">
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label class="form-label">Full name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="Lori"
                                                placeholder="First name">
                                            <input type="text" class="form-control" value="Stevens"
                                                placeholder="Last name">
                                        </div>
                                    </div>

                                    <!-- Birth day -->
                                    <div>
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control flatpickr" value="29 Aug 1996"
                                            placeholder="Enter date of birth" data-date-format="d M Y">
                                    </div>
                                </form>
                            </div>
                            <!-- Traveler item END -->

                            <hr> <!-- Divider -->

                            <!-- Traveler item START -->
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header d-flex justify-content-between align-items-center p-0">
                                    <!-- Avatar -->
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg"
                                                alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0">Jacqueline Miller</h6>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <a href="#" class="btn btn-sm btn-link p-0 mb-0">Remove</a>
                                </div>

                                <!-- card body -->
                                <form class="card-body p-0 pt-3">
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label class="form-label">Full name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="Jacqueline"
                                                placeholder="First name">
                                            <input type="text" class="form-control" value="Miller"
                                                placeholder="Last name">
                                        </div>
                                    </div>

                                    <!-- Birth day -->
                                    <div class="">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control flatpickr" value="15 May 1994"
                                            placeholder="Enter date of birth" data-date-format="d M Y">
                                    </div>
                                </form>
                            </div>
                            <!-- Traveler item END -->

                            <!-- Button -->
                            <div class="text-end">
                                <button class="btn btn-primary mb-0" type="button" data-bs-toggle="modal"
                                    data-bs-target="#inquiryForm">
                                    <i class="bi bi-plus-lg"></i> Add New Traveler
                                </button>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Wishlist END -->

                </div>
                <!-- Main content END -->
            </div>
        </div>
    </section>
    <!-- =======================
            Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Modal START -->
<div class="modal fade" id="inquiryForm" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="inquiryFormlabel">Add New Traveler</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-3">
                <form>
                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="First name">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <small>Enter this person's name exactly as it's written on their official travel
                            document</small>
                    </div>
                    <!-- Date of Birth -->
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="text" class="form-control flatpickr" data-date-format="d M y">
                        <small>It's important to enter a correct date of birth because these details can be used for
                            booking or ticketing purposes</small>
                    </div>

                    <!-- Buttons -->
                    <div class="text-end">
                        <button class="btn btn-sm btn-dark mb-0" type="button">Add Traveler</button>
                    </div>
                </form> <!-- Form END -->
            </div>
        </div>
    </div>
</div>
<!-- Modal END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection