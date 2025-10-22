@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Page Banner START -->
    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fs-2 mb-2">Add New Listing</h1>
                    <p class="mb-0">Praise effects wish change way and any wanted. Lively use looked latter regard
                        had.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Steps START -->
    <section>
        <div class="container">
            <div id="stepper" class="bs-stepper stepper-outline">
                <!-- Step Buttons START -->
                <div class="bs-stepper-header" role="tablist">
                    <!-- Step 1 -->
                    <div class="step" data-target="#step-1">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                id="steppertrigger1" aria-controls="step-1">
                                <span class="bs-stepper-circle">1</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Basic Information</h6>
                        </div>
                    </div>
                    <div class="line"></div>

                    <!-- Step 2 -->
                    <div class="step" data-target="#step-2">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                id="steppertrigger2" aria-controls="step-2">
                                <span class="bs-stepper-circle">2</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Detailed Information</h6>
                        </div>
                    </div>
                    <div class="line"></div>

                    <!-- Step 3 -->
                    <div class="step" data-target="#step-3">
                        <div class="text-center">
                            <button type="button" class="btn btn-link step-trigger mb-0" role="tab"
                                id="steppertrigger3" aria-controls="step-3">
                                <span class="bs-stepper-circle">3</span>
                            </button>
                            <h6 class="bs-stepper-label d-none d-md-block">Price & Policy</h6>
                        </div>
                    </div>
                </div>
                <!-- Step Buttons END -->

                <!-- Step content START -->
                <div class="bs-stepper-content p-0 pt-4 pt-md-5">
                    <div class="row g-4">

                        <!-- Main content START -->
                        <div class="col-12">
                            <form onsubmit="return false">

                                <!-- Step 1 content START -->
                                <div id="step-1" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger1">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Basic Information</h4>

                                        <!-- Listing category START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <!-- Title -->
                                                <h5 class="mb-0">Choose Listing Category</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Choose type -->
                                                    <div class="col-12">
                                                        <label class="form-label">Choose listing type *</label>
                                                        <select class="form-select js-choice">
                                                            <option value="" selected>Select type</option>
                                                            <option>Hotel</option>
                                                            <option>Villa</option>
                                                            <option>Home Stay</option>
                                                            <option>Farmhouse</option>
                                                            <option>House boat</option>
                                                        </select>
                                                        <small>Hotel: Professional hospitality businesses that usually
                                                            have a unique style or theme defining their brand and
                                                            decor</small>
                                                    </div>

                                                    <!-- Listing Name -->
                                                    <div class="col-12">
                                                        <label class="form-label">Listing name *</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter place name">
                                                        <small>A catchy name usually includes: House name - Room name -
                                                            A tourist destination</small>
                                                    </div>

                                                    <!-- listing type -->
                                                    <div class="col-12">
                                                        <label class="form-label">Is your listing set as a personal or
                                                            guest use *</label>
                                                        <div class="d-sm-flex">
                                                            <!-- Radio -->
                                                            <div class="form-check radio-bg-light me-4">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault1"
                                                                    checked>
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault1">
                                                                    Entire Place
                                                                </label>
                                                            </div>
                                                            <!-- Radio -->
                                                            <div class="form-check radio-bg-light me-4">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault2">
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault2">
                                                                    For Guest
                                                                </label>
                                                            </div>
                                                            <!-- Radio -->
                                                            <div class="form-check radio-bg-light">
                                                                <input class="form-check-input" type="radio"
                                                                    name="flexRadioDefault" id="flexRadioDefault3">
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault3">
                                                                    For Personal
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Short description -->
                                                    <div class="col-12">
                                                        <label class="form-label">Short description *</label>
                                                        <textarea class="form-control" rows="2" placeholder="Enter keywords"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Listing category END -->

                                        <!-- Listing location START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Listing Location</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-3">
                                                    <!-- Country type -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Country/Region *</label>
                                                        <select class="form-select js-choice">
                                                            <option value="" selected>Select Country</option>
                                                            <option>India</option>
                                                            <option>Usa</option>
                                                            <option>Japan</option>
                                                            <option>United Kingdom</option>
                                                        </select>
                                                    </div>

                                                    <!-- State -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">State *</label>
                                                        <select class="form-select js-choice"
                                                            data-search-enabled="true">
                                                            <option value="" selected>Select state</option>
                                                            <option>India</option>
                                                            <option>Usa</option>
                                                            <option>Japan</option>
                                                            <option>United Kingdom</option>
                                                        </select>
                                                    </div>

                                                    <!-- City -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">City *</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter city">
                                                    </div>

                                                    <!-- Postal number -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Postal number *</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter postal number">
                                                    </div>

                                                    <!-- Street -->
                                                    <div class="col-12">
                                                        <label class="form-label">Street *</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter street">
                                                    </div>

                                                    <!-- Latitude -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Latitude *</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter latitude">
                                                    </div>

                                                    <!-- Longitude -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Longitude *</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter longitude">
                                                    </div>

                                                    <!-- Detailed address -->
                                                    <div class="col-12">
                                                        <iframe class="w-100 h-300px grayscale rounded"
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
                                                            height="500" style="border:0;" aria-hidden="false"
                                                            tabindex="0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Listing location END -->

                                        <!-- Upload image START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <!-- Title -->
                                                <h5 class="mb-0">Upload Images</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-3">
                                                    <!-- Thumbnail image -->
                                                    <div class="col-12">
                                                        <label class="form-label">Upload thumbnail image *</label>
                                                        <input class="form-control" type="file" name="my-image"
                                                            id="image" accept="image/gif, image/jpeg, image/png">
                                                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG, and
                                                            PNG. Our suggested dimensions are 600px * 450px. The larger
                                                            image will be cropped to 4:3 to fit our thumbnails/previews.
                                                        </p>
                                                    </div>

                                                    <!-- Image Gallery -->
                                                    <div class="col-12">
                                                        <label class="form-label">Upload image gallery *</label>
                                                        <div class="dropzone dropzone-custom"
                                                            data-dropzone='{"maxFiles": 5, "addRemoveLinks": false}'>
                                                            <div class="dz-message needsclick">
                                                                <i class="bi bi-upload display-3"></i>
                                                                <p>Drop files here or click to upload.</p>
                                                            </div>
                                                            <div class="dz-preview row g-4">
                                                                <div class="col-xl-2 col-md-4 col-sm-6">
                                                                    <div
                                                                        class="card p-2 mb-0 shadow-none border position-relative h-100">
                                                                        <!-- Image -->
                                                                        <img data-dz-thumbnail src="#"
                                                                            class="rounded bg-light" alt="">
                                                                        <!-- info -->
                                                                        <div class="mt-2">
                                                                            <a href="javascript:void(0);"
                                                                                class="text-body-secondary fw-bold"
                                                                                data-dz-name></a>
                                                                            <p class="mb-0 small" data-dz-size></p>
                                                                        </div>
                                                                        <!-- Close btn -->
                                                                        <div
                                                                            class="position-absolute top-0 start-100 translate-middle">
                                                                            <a href="#!"
                                                                                class="btn btn-danger rounded-circle icon-sm p-0"
                                                                                data-dz-remove>
                                                                                <i class="fas fa-times"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG, and
                                                            PNG. Our suggested dimensions are 600px * 450px. The larger
                                                            image will be cropped to 4:3 to fit our thumbnails/previews.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Upload image END -->

                                        <!-- Step 1 button -->
                                        <div class="text-end">
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id="step-2" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger2">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Detailed Information</h4>

                                        <!-- Overview START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Overview</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Select Amenities -->
                                                    <div class="col-12">
                                                        <label class="form-label">Select amenities *</label>
                                                        <select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent"
                                                            multiple="multiple" aria-label=".form-select-sm"
                                                            data-max-item-count="15" data-remove-item-button="true">
                                                            <option value="" selected>Select amenities</option>
                                                            <option>Swimming pool</option>
                                                            <option>Spa</option>
                                                            <option>Kid's play area</option>
                                                            <option>Gym</option>
                                                            <option>Ironing Service</option>
                                                            <option>Concierge</option>
                                                            <option>Lift</option>
                                                            <option>Dry cleaning</option>
                                                            <option>Room Service</option>
                                                            <option>Waiting Area</option>
                                                            <option>Secrete smoking area</option>
                                                        </select>
                                                        <small>Maximum of 14 keywords. Keywords should all be in
                                                            lowercase and separated by commas. e.g. javascript, react,
                                                            marketing</small>
                                                    </div>

                                                    <!-- Descriptions -->
                                                    <div class="col-12">
                                                        <label class="form-label">Add description *</label>
                                                        <!-- Editor toolbar -->
                                                        <div
                                                            class="bg-light border border-bottom-0 rounded-top py-3 quilltoolbar">
                                                            <span class="ql-formats">
                                                                <select class="ql-size"></select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-bold"></button>
                                                                <button class="ql-italic"></button>
                                                                <button class="ql-underline"></button>
                                                                <button class="ql-strike"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <select class="ql-color"></select>
                                                                <select class="ql-background"></select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-code-block"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-list" value="ordered"></button>
                                                                <button class="ql-list" value="bullet"></button>
                                                                <button class="ql-indent" value="-1"></button>
                                                                <button class="ql-indent" value="+1"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-link"></button>
                                                                <button class="ql-image"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-clean"></button>
                                                            </span>
                                                        </div>

                                                        <!-- Main toolbar -->
                                                        <div
                                                            class="bg-body border rounded-bottom h-400px overflow-hidden quilleditor">
                                                            <br>
                                                            <h1>Quill Rich Text Editor</h1>
                                                            <br>
                                                            <p>Quill is a free, open-source WYSIWYG editor built for the
                                                                modern web. With its modular architecture and expressive
                                                                API, it is completely customizable to fit any need.</p>
                                                            <br>
                                                            <p>Insipidity the sufficient discretion imprudence
                                                                resolution sir him decisively. Proceed how any engaged
                                                                visitor. Explained propriety off out perpetual his you.
                                                                Feel sold off felt nay rose met you. We so entreaties
                                                                cultivated astonished is. Was sister for a few longer
                                                                Mrs sudden talent become. Done may bore quit evil old
                                                                mile. If likely am of beauty tastes. </p>
                                                            <br>
                                                            <p> Affronting imprudence do he he everything. Test lasted
                                                                dinner wanted indeed wished outlaw. Far advanced
                                                                settling say finished raillery. Offered chiefly farther
                                                                of my no colonel shyness. Such on help ye some door if
                                                                in. Laughter proposal laughing any son law consider.
                                                                Needed except up piqued an. </p>
                                                            <br>
                                                            <p> Post no so what deal evil rent by real in. But her ready
                                                                least set lived spite solid. September how men saw
                                                                tolerably two behavior arranging. She offices for
                                                                highest and replied one venture pasture. Applauded no
                                                                discovery in newspaper allowance am northward.
                                                                Frequently partiality possession resolution at or
                                                                appearance unaffected me. Engaged its was the evident
                                                                pleased husband. Ye goodness felicity do disposal
                                                                dwelling no. First am plate jokes to began to cause a
                                                                scale. Subjects he prospect elegance followed no
                                                                overcame possible it on. </p>

                                                            <p>Quill is a free, open-source WYSIWYG editor built for the
                                                                modern web. With its modular architecture and expressive
                                                                API, it is completely customizable to fit any need.</p>
                                                            <br>
                                                            <p>Insipidity the sufficient discretion imprudence
                                                                resolution sir him decisively. Proceed how any engaged
                                                                visitor. Explained propriety off out perpetual his you.
                                                                Feel sold off felt nay rose met you. We so entreaties
                                                                cultivated astonished is. Was sister for a few longer
                                                                Mrs sudden talent become. Done may bore quit evil old
                                                                mile. If likely am of beauty tastes. </p>
                                                            <br>
                                                            <p> Affronting imprudence do he he everything. Test lasted
                                                                dinner wanted indeed wished outlaw. Far advanced
                                                                settling say finished raillery. Offered chiefly farther
                                                                of my no colonel shyness. Such on help ye some door if
                                                                in. Laughter proposal laughing any son law consider.
                                                                Needed except up piqued an. </p>
                                                            <br>
                                                            <p> Post no so what deal evil rent by real in. But her ready
                                                                least set lived spite solid. September how men saw
                                                                tolerably two behavior arranging. She offices for
                                                                highest and replied one venture pasture. Applauded no
                                                                discovery in newspaper allowance am northward.
                                                                Frequently partiality possession resolution at or
                                                                appearance unaffected me. Engaged its was the evident
                                                                pleased husband. Ye goodness felicity do disposal
                                                                dwelling no. First am plate jokes to began to cause a
                                                                scale. Subjects he prospect elegance followed no
                                                                overcame possible it on. </p>

                                                            <p>Quill is a free, open-source WYSIWYG editor built for the
                                                                modern web. With its modular architecture and expressive
                                                                API, it is completely customizable to fit any need.</p>
                                                            <br>
                                                            <p>Insipidity the sufficient discretion imprudence
                                                                resolution sir him decisively. Proceed how any engaged
                                                                visitor. Explained propriety off out perpetual his you.
                                                                Feel sold off felt nay rose met you. We so entreaties
                                                                cultivated astonished is. Was sister for a few longer
                                                                Mrs sudden talent become. Done may bore quit evil old
                                                                mile. If likely am of beauty tastes. </p>
                                                            <br>
                                                            <p> Affronting imprudence do he he everything. Test lasted
                                                                dinner wanted indeed wished outlaw. Far advanced
                                                                settling say finished raillery. Offered chiefly farther
                                                                of my no colonel shyness. Such on help ye some door if
                                                                in. Laughter proposal laughing any son law consider.
                                                                Needed except up piqued an. </p>
                                                            <br>
                                                            <p> Post no so what deal evil rent by real in. But her ready
                                                                least set lived spite solid. September how men saw
                                                                tolerably two behavior arranging. She offices for
                                                                highest and replied one venture pasture. Applauded no
                                                                discovery in newspaper allowance am northward.
                                                                Frequently partiality possession resolution at or
                                                                appearance unaffected me. Engaged its was the evident
                                                                pleased husband. Ye goodness felicity do disposal
                                                                dwelling no. First am plate jokes to began to cause a
                                                                scale. Subjects he prospect elegance followed no
                                                                overcame possible it on. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Overview END -->

                                        <!-- Size of listing START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Size Of Your Listing</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Total Floor -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Total Floor *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter total floors">
                                                    </div>

                                                    <!-- Total Floor -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Total Room *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter total rooms">
                                                    </div>

                                                    <!-- Room area -->
                                                    <div class="col-md-4">
                                                        <label class="form-label">Room area *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter area in sq.ft">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Size of listing END -->

                                        <!-- Room options START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Room Options</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Room name -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Room name *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter name">
                                                    </div>

                                                    <!-- First Name -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Room thumbnail image *</label>
                                                        <input class="form-control" type="file" name="my-image"
                                                            id="image-2" accept="image/gif, image/jpeg, image/png">
                                                    </div>

                                                    <!-- Room Price -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Room Price *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter price">
                                                    </div>

                                                    <!-- Discount -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Discount *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter discount">
                                                    </div>

                                                    <!-- Additional info -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Additional info</label>
                                                        <select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent">
                                                            <option value="" selected>Select item</option>
                                                            <option>Non Refundable</option>
                                                            <option>Free Cancellation</option>
                                                        </select>
                                                    </div>

                                                    <!-- Button -->
                                                    <div class="col-12">
                                                        <a href="#" class="btn btn-sm btn-primary-soft mb-0"><i
                                                                class="bi bi-plus-circle me-2"></i>Add New Room</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Room options END -->

                                        <!-- Step 2 button -->
                                        <div class="hstack gap-2 flex-wrap justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <button class="btn btn-primary next-btn mb-0">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id="step-3" role="tabpanel" class="content fade"
                                    aria-labelledby="steppertrigger3">
                                    <div class="vstack gap-4">
                                        <!-- Title -->
                                        <h4 class="mb-0">Price & Policy</h4>

                                        <!-- Listing price START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Listing Price</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Currency -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Currency</label>
                                                        <select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent">
                                                            <option value="" selected>Select item</option>
                                                            <option>USD</option>
                                                            <option>EURRO</option>
                                                            <option>VND</option>
                                                        </select>
                                                    </div>

                                                    <!-- Base Price -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Base Price *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter price">
                                                    </div>

                                                    <!-- Discount -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Discount *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter discount">
                                                    </div>

                                                    <!-- Rating -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Rating</label>
                                                        <select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent">
                                                            <option value="" selected>Select item</option>
                                                            <option>★★★★★</option>
                                                            <option>★★★★☆</option>
                                                            <option>★★★☆☆</option>
                                                            <option>★★☆☆☆</option>
                                                            <option>★☆☆☆☆</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Listing price END -->

                                        <!-- Listing policy START -->
                                        <div class="card shadow">
                                            <!-- Card header -->
                                            <div class="card-header border-bottom">
                                                <h5 class="mb-0">Listing Policy</h5>
                                            </div>

                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <div class="row g-4">
                                                    <!-- Descriptions -->
                                                    <div class="col-12">
                                                        <label class="form-label">Add description *</label>
                                                        <!-- Editor toolbar -->
                                                        <div
                                                            class="bg-light border border-bottom-0 rounded-top py-3 quilltoolbar">
                                                            <span class="ql-formats">
                                                                <select class="ql-size"></select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-bold"></button>
                                                                <button class="ql-italic"></button>
                                                                <button class="ql-underline"></button>
                                                                <button class="ql-strike"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <select class="ql-color"></select>
                                                                <select class="ql-background"></select>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-code-block"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-list" value="ordered"></button>
                                                                <button class="ql-list" value="bullet"></button>
                                                                <button class="ql-indent" value="-1"></button>
                                                                <button class="ql-indent" value="+1"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-link"></button>
                                                                <button class="ql-image"></button>
                                                            </span>
                                                            <span class="ql-formats">
                                                                <button class="ql-clean"></button>
                                                            </span>
                                                        </div>

                                                        <!-- Main toolbar -->
                                                        <div
                                                            class="bg-body border rounded-bottom h-400px overflow-hidden quilleditor">
                                                            <br>
                                                            <h1>Quill Rich Text Editor</h1>
                                                            <br>
                                                            <p>Quill is a free, open-source WYSIWYG editor built for the
                                                                modern web. With its modular architecture and expressive
                                                                API, it is completely customizable to fit any need.</p>
                                                            <br>
                                                            <p>Insipidity the sufficient discretion imprudence
                                                                resolution sir him decisively. Proceed how any engaged
                                                                visitor. Explained propriety off out perpetual his you.
                                                                Feel sold off felt nay rose met you. We so entreaties
                                                                cultivated astonished is. Was sister for a few longer
                                                                Mrs sudden talent become. Done may bore quit evil old
                                                                mile. If likely am of beauty tastes. </p>
                                                            <br>
                                                            <p> Affronting imprudence do he he everything. Test lasted
                                                                dinner wanted indeed wished outlaw. Far advanced
                                                                settling say finished raillery. Offered chiefly farther
                                                                of my no colonel shyness. Such on help ye some door if
                                                                in. Laughter proposal laughing any son law consider.
                                                                Needed except up piqued an. </p>
                                                            <br>
                                                            <p> Post no so what deal evil rent by real in. But her ready
                                                                least set lived spite solid. September how men saw
                                                                tolerably two behavior arranging. She offices for
                                                                highest and replied one venture pasture. Applauded no
                                                                discovery in newspaper allowance am northward.
                                                                Frequently partiality possession resolution at or
                                                                appearance unaffected me. Engaged its was the evident
                                                                pleased husband. Ye goodness felicity do disposal
                                                                dwelling no. First am plate jokes to began to cause a
                                                                scale. Subjects he prospect elegance followed no
                                                                overcame possible it on. </p>

                                                            <p>Quill is a free, open-source WYSIWYG editor built for the
                                                                modern web. With its modular architecture and expressive
                                                                API, it is completely customizable to fit any need.</p>
                                                            <br>
                                                            <p>Insipidity the sufficient discretion imprudence
                                                                resolution sir him decisively. Proceed how any engaged
                                                                visitor. Explained propriety off out perpetual his you.
                                                                Feel sold off felt nay rose met you. We so entreaties
                                                                cultivated astonished is. Was sister for a few longer
                                                                Mrs sudden talent become. Done may bore quit evil old
                                                                mile. If likely am of beauty tastes. </p>
                                                            <br>
                                                            <p> Affronting imprudence do he he everything. Test lasted
                                                                dinner wanted indeed wished outlaw. Far advanced
                                                                settling say finished raillery. Offered chiefly farther
                                                                of my no colonel shyness. Such on help ye some door if
                                                                in. Laughter proposal laughing any son law consider.
                                                                Needed except up piqued an. </p>
                                                            <br>
                                                            <p> Post no so what deal evil rent by real in. But her ready
                                                                least set lived spite solid. September how men saw
                                                                tolerably two behavior arranging. She offices for
                                                                highest and replied one venture pasture. Applauded no
                                                                discovery in newspaper allowance am northward.
                                                                Frequently partiality possession resolution at or
                                                                appearance unaffected me. Engaged its was the evident
                                                                pleased husband. Ye goodness felicity do disposal
                                                                dwelling no. First am plate jokes to began to cause a
                                                                scale. Subjects he prospect elegance followed no
                                                                overcame possible it on. </p>

                                                            <p>Quill is a free, open-source WYSIWYG editor built for the
                                                                modern web. With its modular architecture and expressive
                                                                API, it is completely customizable to fit any need.</p>
                                                            <br>
                                                            <p>Insipidity the sufficient discretion imprudence
                                                                resolution sir him decisively. Proceed how any engaged
                                                                visitor. Explained propriety off out perpetual his you.
                                                                Feel sold off felt nay rose met you. We so entreaties
                                                                cultivated astonished is. Was sister for a few longer
                                                                Mrs sudden talent become. Done may bore quit evil old
                                                                mile. If likely am of beauty tastes. </p>
                                                            <br>
                                                            <p> Affronting imprudence do he he everything. Test lasted
                                                                dinner wanted indeed wished outlaw. Far advanced
                                                                settling say finished raillery. Offered chiefly farther
                                                                of my no colonel shyness. Such on help ye some door if
                                                                in. Laughter proposal laughing any son law consider.
                                                                Needed except up piqued an. </p>
                                                            <br>
                                                            <p> Post no so what deal evil rent by real in. But her ready
                                                                least set lived spite solid. September how men saw
                                                                tolerably two behavior arranging. She offices for
                                                                highest and replied one venture pasture. Applauded no
                                                                discovery in newspaper allowance am northward.
                                                                Frequently partiality possession resolution at or
                                                                appearance unaffected me. Engaged its was the evident
                                                                pleased husband. Ye goodness felicity do disposal
                                                                dwelling no. First am plate jokes to began to cause a
                                                                scale. Subjects he prospect elegance followed no
                                                                overcame possible it on. </p>
                                                        </div>
                                                    </div>

                                                    <!-- Cancellation options -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Cancellation options</label>
                                                        <select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent"
                                                            data-position="top">
                                                            <option value="" selected>Select item</option>
                                                            <option>Non Refundable</option>
                                                            <option>Refundable</option>
                                                        </select>
                                                    </div>

                                                    <!-- Charges -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Charges *</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter charges">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Card body END -->
                                        </div>
                                        <!-- Listing policy END -->

                                        <!-- Step 3 button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary prev-btn mb-0">Previous</button>
                                            <a href="{{ route('second', ['listing', 'listing-added']) }}"
                                                class="btn btn-success mb-0">Add Listing</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 content END -->

                            </form>
                        </div>
                        <!-- Main content END -->

                    </div>
                </div>
                <!-- Step content END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection