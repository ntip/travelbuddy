@extends('layouts.admin')

@section('content')

<!-- Title -->
<div class="row">
    <div class="col-12 mb-4 mb-sm-5">
        <h1 class="h3 mb-0">Settings</h1>
    </div>
</div>

<div class="row g-4">
    <!-- Profile setting -->
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-header border-bottom">
                <h5 class="card-header-title">Profile Settings</h5>
            </div>
            <div class="card-body">
                <!-- Full name -->
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" value="Jacqueline Miller" placeholder="Name">
                </div>
                <!-- Profile picture -->
                <div class="mb-3">
                    <label class="form-label">Profile picture</label>
                    <!-- Avatar upload START -->
                    <div class="d-flex align-items-center">
                        <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                            <!-- Avatar place holder -->
                            <span class="avatar avatar-xl">
                                <img id="uploadfile-1-preview"
                                    class="avatar-img rounded-circle border border-white border-3 shadow"
                                    src="/images/logo-icon.svg" alt="">
                            </span>
                        </label>
                        <!-- Upload button -->
                        <label class="btn btn-sm btn-primary-soft mb-0" for="uploadfile-1">Change</label>
                        <input id="uploadfile-1" class="form-control d-none" type="file">
                    </div>
                    <!-- Avatar upload END -->
                </div>
                <!-- Email id -->
                <div class="mb-3">
                    <label class="form-label">Email id</label>
                    <input type="email" class="form-control" value="hello@gmail.com"
                        placeholder="Enter your email id">
                </div>
                <!-- Mobile number -->
                <div class="mb-3">
                    <label class="form-label">Mobile number</label>
                    <input type="text" class="form-control" value="222 555 666"
                        placeholder="Enter your mobile number">
                </div>
                <!-- Location -->
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input class="form-control" type="text" value="New Hampshire">
                </div>
                <!-- Birthday -->
                <div>
                    <label class="form-label">Birthday</label>
                    <input type="text" class="form-control flatpickr flatpickr-input" value="29 Aug 1994"
                        placeholder="Enter your birth-date" data-date-format="d M Y" readonly="readonly">
                </div>
                <!-- Save button -->
                <div class="d-flex justify-content-end mt-4">
                    <a href="#" class="btn text-secondary border-0 me-2">Discard</a>
                    <a href="#" class="btn btn-primary">Save change</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification Setting -->
    <div class="col-lg-6">
        <!-- Email setting -->
        <div class="card shadow mb-4">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Email notification</h5>
            </div>

            <!-- Card body -->
            <div class="card-body vstack gap-4">
                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">News and updates</h6>
                        <small>News about product and feature updates</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                    </div>
                </div>

                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">Tips and tutorials</h6>
                        <small>Tips on getting more out of unlimited</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy2" checked="">
                    </div>
                </div>

                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">User research</h6>
                        <small>Tips on getting more out of unlimited</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy3">
                    </div>
                </div>

                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">Comments</h6>
                        <small>Comments on your post and replies to comments</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy4">
                    </div>
                </div>

                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">Reminders</h6>
                        <small>I would like to receive booking assistance reminders</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy5">
                    </div>
                </div>
            </div>
        </div>

        <!-- General setting -->
        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">General Permission</h5>
            </div>

            <!-- Card body -->
            <div class="card-body vstack gap-4">
                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">Notify on updates and activity</h6>
                        <small>You'll be notified when anyone shares a report or invite you to a
                            projects</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy6"
                            checked="">
                    </div>
                </div>

                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">Send weekly digest</h6>
                        <small>A weekly update on changes in theme statement and more</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy7">
                    </div>
                </div>

                <!-- Item -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- Content -->
                    <div>
                        <h6 class="mb-0">Collaborators</h6>
                        <small>I would like to receive booking assistance reminders</small>
                    </div>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-md mb-0">
                        <input class="form-check-input" type="checkbox" id="checkPrivacy8">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Website setting -->
    <div class="col-lg-6">
        <!-- Dark mode setting -->
        <div class="card shadow mb-4">

            <!-- Card header -->
            <div class="card-header border-bottom p-3">
                <h5 class="card-header-title mb-0">Dark - Light Mode Settings</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <div class="hstack gap-2 flex-wrap">
                    <!-- Mode light -->
                    <div class="form-check form-check-inline align-items-center theme-icon-active">
                        <input class="form-check-input mode-switch" type="radio"
                            name="inlineRadioOptions" id="inlineRadio1" value="option1"
                            data-bs-theme-value="light" checked>
                        <label class="form-check-label" for="inlineRadio1">
                            <img src="/images/element/d-light.svg" class="rounded shadow w-80px"
                                alt="">
                        </label>
                        <div class="text-center mt-1 small">Light</div>
                    </div>
                    <!-- Mode dark -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mode-switch" type="radio"
                            name="inlineRadioOptions" id="inlineRadio2" value="option2"
                            data-bs-theme-value="dark">
                        <label class="form-check-label" for="inlineRadio2">
                            <img src="/images/element/d-dark.svg" class="rounded shadow w-80px"
                                alt="">
                        </label>
                        <div class="text-center mt-1 small">Dark</div>
                    </div>
                    <!-- Mode system -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input mode-switch" type="radio"
                            name="inlineRadioOptions" id="inlineRadio3" value="option3"
                            data-bs-theme-value="auto">
                        <label class="form-check-label" for="inlineRadio3">
                            <img src="/images/element/d-default.svg" class="rounded shadow w-80px"
                                alt="">
                        </label>
                        <div class="text-center mt-1 small">System Setting</div>
                    </div>
                </div>

                <!-- Content -->
                <p class="mb-0 mt-3 small"><b>Note:</b> This is just UI of Theme mode setting. This is not
                    working functionality.</p>
            </div>
            <!-- Card body END -->
        </div>

        <!-- Website settings -->
        <div class="card shadow">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="card-header-title">Website Settings</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <form class="row g-4 align-items-center">

                    <!-- Input item -->
                    <div class="col-xl-6">
                        <label class="form-label">Site Name</label>
                        <input type="text" class="form-control" placeholder="Site Name">
                        <div class="form-text">Enter Website Name. It Display in Website and Email.</div>
                    </div>

                    <!-- Input item -->
                    <div class="col-xl-6">
                        <label class="form-label">Site Copyrights</label>
                        <input type="text" class="form-control" placeholder="Site Copyrights">
                        <div class="form-text">Using for Contact and Send Email</div>
                    </div>

                    <!-- Input item -->
                    <div class="col-12">
                        <label class="form-label">Site Email</label>
                        <input type="email" class="form-control" placeholder="Site Email">
                        <div class="form-text">For Copyrights Text</div>
                    </div>

                    <!-- Textarea item -->
                    <div class="col-12">
                        <label class="form-label">Site Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                        <div class="form-text">For write brief description of your organization, or a
                            Website.</div>
                    </div>

                    <!-- Input item -->
                    <div class="col-lg-6">
                        <label class="form-label">Contact Phone</label>
                        <input type="text" class="form-control" placeholder="Contact Phone">
                        <div class="form-text">Using for Contact and Support</div>
                    </div>

                    <!-- Input item -->
                    <div class="col-lg-6">
                        <label class="form-label">Support Email</label>
                        <input type="email" class="form-control" placeholder="Support Email">
                        <div class="form-text">For Support Email</div>
                    </div>

                    <!-- Radio items -->
                    <div class="col-lg-6">
                        <label class="form-label">Allow Registration</label>
                        <div class="d-sm-flex">
                            <!-- Radio -->
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Enable
                                </label>
                            </div>
                            <!-- Radio -->
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Disable
                                </label>
                            </div>
                            <!-- Radio -->
                            <div class="form-check radio-bg-light">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    On Request
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Textarea item -->
                    <div class="col-12">
                        <label class="form-label">Contact Address</label>
                        <textarea class="form-control" rows="3"></textarea>
                        <div class="form-text">Enter support Address</div>
                    </div>

                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-end">
                        <button type="button" class="btn btn-primary mb-0">Update</button>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
    </div>

    <!-- Account setting -->
    <div class="col-lg-6">
        <!-- Active log -->
        <div class="bg-light rounded-3 p-4 mb-3">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- Content -->
                <div>
                    <h6 class="h5">Activity Logs</h6>
                    <p class="mb-1 mb-md-0">You can save your all activity logs including unusual activity
                        detected.</p>
                </div>
                <!-- Switch -->
                <div class="form-check form-switch form-check-md mb-0">
                    <input class="form-check-input" type="checkbox" id="checkPrivacy9" checked="">
                </div>
            </div>
        </div>

        <!-- Change password -->
        <div class="bg-light rounded-3 p-4 mb-3">
            <div class="d-md-flex justify-content-between align-items-center flex-wrap">
                <!-- Content -->
                <div>
                    <h6 class="h5">Change Password</h6>
                    <p class="mb-1 mb-md-0">Set a unique password to protect your account.</p>
                </div>
                <!-- Button -->
                <div>
                    <a href="#" class="btn btn-primary mb-1" data-bs-toggle="modal"
                        data-bs-target="#changePassword">Change Password</a>
                    <p class="mb-0 small h6">Last change 10 Aug 2020</p>
                </div>
            </div>
        </div>

        <!-- Two step verification -->
        <div class="bg-light rounded-3 p-4">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- Content -->
                <div>
                    <h6 class="h5">2 Step Verification</h6>
                    <p class="mb-1 mb-md-0">Secure your account with 2 Step security. When it is activated
                        you will need to enter not only your password, but also a special code using app.
                        You can receive this code by in mobile app.</p>
                </div>
                <!-- Switch -->
                <div class="form-check form-switch form-check-md mb-0">
                    <input class="form-check-input" type="checkbox" id="checkPrivacy13" checked="">
                </div>
            </div>
        </div>

        <!-- Active log table -->
        <div class="card shadow mt-4">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h5 class="card-header-title">Active Logs</h5>
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <!-- Table START -->
                <div class="table-responsive border-0">
                    <table class="table align-middle p-4 mb-0 table-hover">

                        <!-- Table head -->
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Browser</th>
                                <th scope="col" class="border-0">IP</th>
                                <th scope="col" class="border-0">Time</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>Chrome On Window</td>

                                <!-- Table data -->
                                <td>173.238.198.108</td>

                                <!-- Table data -->
                                <td>12 Nov 2021</td>

                                <!-- Table data -->
                                <td>
                                    <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                        out</button>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>Mozilla On Window</td>

                                <!-- Table data -->
                                <td>107.222.146.90</td>

                                <!-- Table data -->
                                <td>08 Nov 2021</td>

                                <!-- Table data -->
                                <td>
                                    <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                        out</button>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>Chrome On iMac</td>

                                <!-- Table data -->
                                <td>231.213.125.55</td>

                                <!-- Table data -->
                                <td>06 Nov 2021</td>

                                <!-- Table data -->
                                <td>
                                    <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                        out</button>
                                </td>
                            </tr>

                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>Mozilla On Window</td>

                                <!-- Table data -->
                                <td>37.242.105.138</td>

                                <!-- Table data -->
                                <td>02 Nov 2021</td>

                                <!-- Table data -->
                                <td>
                                    <button class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0">Sign
                                        out</button>
                                </td>
                            </tr>


                        </tbody>
                        <!-- Table body END -->
                    </table>
                </div>
                <!-- Table END -->
            </div>
            <!-- Card body END -->
        </div>
    </div>
</div> <!-- Row END -->

@endsection