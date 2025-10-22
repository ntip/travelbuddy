@extends('layouts.base')

@section('header')
@include('layouts.partials/navbar')
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
        Main Content START -->
    <section>
        <div class="container position-relative" data-sticky-container>
            <div class="row g-4">
                <!-- Left Content START -->
                <div class="col-xl-9">
                    <div class="vstack gap-4">

                        <!-- Title START -->
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <h1 class="display-4 mb-0"><i class="fa-solid fa-plane rtl-flip"></i></h1>

                            <!-- Title and content START -->
                            <div class="ms-3">
                                <!-- Title -->
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item me-2">
                                        <h3 class="mb-0">Mumbai(BOM)</h3>
                                    </li>
                                    <li class="list-inline-item me-2">
                                        <h3 class="mb-0"><i class="bi bi-arrow-right"></i></h3>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <h3 class="mb-0">New York(JFK)</h3>
                                    </li>
                                </ul>

                                <!-- List -->
                                <ul class="nav nav-divider h6 fw-normal text-body mb-0">
                                    <li class="nav-item">25 Jan</li>
                                    <li class="nav-item">1 Stop</li>
                                    <li class="nav-item">05h 25m</li>
                                </ul>
                            </div>
                            <!-- Title and content END -->
                        </div>
                        <!-- Title END -->

                        <!-- Ticket START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header d-flex justify-content-between pb-0">
                                <h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy</h6>
                                <a href="#" class="btn btn-link text-decoration-underline p-0 mb-0"
                                    data-bs-toggle="modal" data-bs-target="#baggageFare">
                                    <i class="bi bi-eye-fill me-1"></i>Baggage & Fare Rules
                                </a>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body p-4">
                                <!-- Ticket item START -->
                                <div class="row g-4">
                                    <!-- Air line name -->
                                    <div class="col-md-3">
                                        <!-- Image -->
                                        <img src="/images/element/09.svg" class="w-80px mb-3" alt="">
                                        <!-- Title -->
                                        <h6 class="fw-normal mb-0">Phillippines Airline</h6>
                                        <h6 class="fw-normal mb-0">PA - 5620</h6>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Title -->
                                        <h4>BOM</h4>
                                        <h6>14:50</h6>
                                        <!-- Address -->
                                        <p class="mb-2">Sun, 29 Jan 2023</p>
                                        <p class="mb-2">Chhatrapati Shivaji International Airport</p>
                                        <p class="mb-0">Terminal - 2, Gate - 25</p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-sm-4 col-md-3 text-center my-sm-auto">
                                        <!-- Time -->
                                        <h5>9hr 50min</h5>

                                        <div class="position-relative my-4">
                                            <!-- Line -->
                                            <hr class="bg-primary opacity-5 position-relative">
                                            <!-- Icon -->
                                            <div
                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Title -->
                                        <h4>CDG</h4>
                                        <h6>11:50</h6>
                                        <!-- Address -->
                                        <p class="mb-2">Sun, 29 Jan 2023</p>
                                        <p class="mb-2">Ch. De Gaulle, Paris, France</p>
                                        <p class="mb-0">Terminal - 2E, Gate - 3</p>
                                    </div>
                                </div>
                                <!-- Ticket item END -->

                                <!-- Divider -->
                                <div class="bg-light rounded-2 text-center text-danger p-2 my-4">
                                    Change of planes: 3h 15m Layover in France
                                </div>

                                <!-- Ticket item START -->
                                <div class="row g-4">
                                    <!-- Air line name -->
                                    <div class="col-md-3">
                                        <!-- Image -->
                                        <img src="/images/element/09.svg" class="w-80px mb-3" alt="">
                                        <!-- Title -->
                                        <h6 class="fw-normal mb-0">Phillippines Airline</h6>
                                        <h6 class="fw-normal mb-0"> PA-645</h6>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Title -->
                                        <h4>CDG</h4>
                                        <h6>2:50</h6>
                                        <!-- Address -->
                                        <p class="mb-2">Sun, 30 Jan 2023</p>
                                        <p class="mb-2">Ch. De Gaulle, Paris, France</p>
                                        <p class="mb-0">Terminal - 2E, Gate - 3</p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-sm-4 col-md-3 text-center my-sm-auto">
                                        <!-- Time -->
                                        <h5>5hr 50min</h5>

                                        <div class="position-relative my-4">
                                            <!-- Line -->
                                            <hr class="bg-primary opacity-5 position-relative">
                                            <!-- Icon -->
                                            <div
                                                class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
                                                <i class="fa-solid fa-fw fa-plane rtl-flip"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Airport detail -->
                                    <div class="col-sm-4 col-md-3">
                                        <!-- Title -->
                                        <h4>JFK</h4>
                                        <h6>7:35</h6>
                                        <!-- Address -->
                                        <p class="mb-2">Sun, 30 Jan 2023</p>
                                        <p class="mb-2">John F Kennedy Intl-NY</p>
                                        <p class="mb-0">Terminal - 4, Gate - 08</p>
                                    </div>
                                </div>
                                <!-- Ticket item END -->
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Ticket END -->

                        <!-- Information START -->
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom px-4">
                                <h3 class="card-title mb-0">Important Information</h3>
                            </div>
                            <!-- Card body -->
                            <div class="card-body py-4">
                                <!-- List -->
                                <h5 class="mb-3"><i class="bi bi-arrow-right rtl-flip me-2"></i>Passengers traveling
                                    to the United States, please note</h5>
                                <ul>
                                    <li class="mb-2">Who can travel? <strong>All fully vaccinated travelers are
                                            allowed to enter the country. All WHO-approved vaccines, including
                                            Covishield and Covaxin, are accepted by the USA.</strong></li>
                                    <li class="mb-2">Destination restrictions: <strong>Non-vaccinated travelers from
                                            India cannot enter. Any traveler transiting via EU/UK cannot enter the
                                            USA.</strong></li>
                                    <li class="mb-2">Insipidity the sufficient discretion imprudence resolution sir
                                        him decisively. Proceed how any engaged visitor.</li>
                                    <li class="mb-2">Explained propriety off out perpetual his you. Feel sold off
                                        felt nay rose met you. We so entreaties cultivated astonished is.</li>
                                    <li class="mb-2"> Was sister for a few longer Mrs sudden talent become. Done may
                                        bore quit evil old mile. If likely am of beauty tastes. </li>
                                </ul>

                                <!-- Content -->
                                <h5 class="mb-3"><i class="bi bi-arrow-right rtl-flip me-2"></i>A Note on Guidelines
                                </h5>
                                <p class="ps-3 mb-0">While we do our best to get you the latest information, due to the
                                    rapidly evolving nature of current events, sometimes that is not possible. Please
                                    note, it is the sole responsibility of the passenger to ensure his or her
                                    eligibility to enter the destination or transit countries (as applicable). We accept
                                    no liability in this regard. Please check the travel rules of all regulatory
                                    websites before to booking as well as commencing.</p>

                            </div>
                        </div>
                        <!-- Information END -->

                        <!-- Booking form START -->
                        <form class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom px-4">
                                <h3 class="card-title mb-0">Traveler Details</h3>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body py-4">
                                <!-- Badge with content -->
                                <div class="bg-danger bg-opacity-10 rounded-2 p-3 mb-3">
                                    <p class="h6 fw-light small mb-0"><span
                                            class="badge bg-danger me-2">New</span>Please make sure you enter the Name
                                        as per your passport</p>
                                </div>

                                <!-- Button -->
                                <div class="text-end mb-3">
                                    <a href="#" class="btn btn-primary-soft mb-0">Add New Adult</a>
                                </div>

                                <!-- Accordion START -->
                                <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                    <!-- Item -->
                                    <div class="accordion-item mb-3">
                                        <h6 class="accordion-header font-base" id="heading-1">
                                            <button class="accordion-button fw-bold rounded collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                aria-expanded="true" aria-controls="collapse-1">
                                                Adult 1
                                            </button>
                                        </h6>
                                        <!-- Accordion Body START -->
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body mt-3">

                                                <!-- Form START -->
                                                <div class="row g-4">
                                                    <!-- Select item -->
                                                    <div class="col-md-3">
                                                        <label class="form-label">Title</label>
                                                        <select class="form-select js-choice">
                                                            <option selected>Mr</option>
                                                            <option>Mrs</option>
                                                        </select>
                                                    </div>

                                                    <!-- Input item -->
                                                    <div class="col-md-9">
                                                        <label class="form-label">Full name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="First name">
                                                            <input type="text" class="form-control"
                                                                placeholder="Last name">
                                                        </div>
                                                    </div>

                                                    <!-- Select group -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Date Of Birth</label>
                                                        <div class="row g-0">
                                                            <div class="col-4">
                                                                <div class="choice-radius-end">
                                                                    <select
                                                                        class="form-select js-choice z-index-9 rounded-start">
                                                                        <option value="" selected>Date</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                        <option>31</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="choice-radius-0">
                                                                    <select
                                                                        class="form-select choice-radius-0 js-choice z-index-9 border-0 bg-light">
                                                                        <option value="" selected>Month</option>
                                                                        <option>Jan</option>
                                                                        <option>Feb</option>
                                                                        <option>Mar</option>
                                                                        <option>Apr</option>
                                                                        <option>May</option>
                                                                        <option>Jun</option>
                                                                        <option>Jul</option>
                                                                        <option>Aug</option>
                                                                        <option>Sep</option>
                                                                        <option>Oct</option>
                                                                        <option>Nov</option>
                                                                        <option>Dec</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="choice-radius-start">
                                                                    <select
                                                                        class="form-select js-choice z-index-9 border-0 bg-light">
                                                                        <option value="" selected>Year</option>
                                                                        <option>1990</option>
                                                                        <option>1991</option>
                                                                        <option>1992</option>
                                                                        <option>1993</option>
                                                                        <option>1994</option>
                                                                        <option>1995</option>
                                                                        <option>1996</option>
                                                                        <option>1997</option>
                                                                        <option>1998</option>
                                                                        <option>1999</option>
                                                                        <option>2000</option>
                                                                        <option>2001</option>
                                                                        <option>2002</option>
                                                                        <option>2003</option>
                                                                        <option>2004</option>
                                                                        <option>2005</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Select item -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Nationality</label>
                                                        <select class="form-select js-choice">
                                                            <option value="" selected>Select Nationality</option>
                                                            <option>Indian</option>
                                                            <option>Mali</option>
                                                            <option>Japan</option>
                                                            <option>Jordan</option>
                                                        </select>
                                                    </div>

                                                    <!-- Input item -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Passport Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter passport number">
                                                    </div>

                                                    <!-- Select item -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Passport Issuing Country</label>
                                                        <select class="form-select js-choice">
                                                            <option value="" selected>Select Country</option>
                                                            <option>India</option>
                                                            <option>Canada</option>
                                                            <option>Japan</option>
                                                            <option>China</option>
                                                        </select>
                                                    </div>

                                                    <!-- Select group -->
                                                    <div class="col-md-6">
                                                        <label class="form-label">Passport Expiry</label>
                                                        <input type="text" class="form-control flatpickr"
                                                            placeholder="Enter passport date"
                                                            data-date-format="d M y">
                                                    </div>
                                                </div>
                                                <!-- Form END -->

                                            </div>
                                        </div>
                                        <!-- Accordion Body END -->
                                    </div>

                                    <!-- Item -->
                                    <div class="accordion-item">
                                        <h6 class="accordion-header font-base" id="heading-2">
                                            <button class="accordion-button rounded fw-bold collapsed pe-5"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">
                                                Adult 2
                                            </button>
                                        </h6>
                                        <!-- Body -->
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body mt-3">
                                                What deal evil rent by real in. But her ready least set lived spite
                                                solid. September how men saw tolerably two behavior arranging. She
                                                offices for highest and replied one venture pasture. Applauded no
                                                discovery in newspaper allowance am northward. Frequently partiality
                                                possession resolution at or appearance unaffected me. Engaged its was
                                                the evident pleased husband. Ye goodness felicity do disposal dwelling
                                                no. First am plate jokes to began to cause a scale. Subjects he prospect
                                                elegance followed no overcame possible it on. Improved own provided
                                                blessing may peculiar domestic. Sight house has sex never. No visited
                                                raising gravity outward subject my cottage Mr be.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion END -->

                                <!-- Number and email START -->
                                <!-- Title -->
                                <h5 class="mt-4">Booking detail will be sent to</h5>
                                <div class="row g-3 g-md-4">
                                    <!-- Input item -->
                                    <div class="col-md-6">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter your mobile number">
                                    </div>

                                    <!-- Input item -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control"
                                            placeholder="Enter your email address">
                                    </div>
                                </div>
                                <!-- Number and email START -->

                                <!-- Button -->
                                <div class="d-grid mt-4">
                                    <a href="{{ route('second', ['flight', 'booking']) }}"
                                        class="btn btn-primary mb-0">Proceed To Payment</a>
                                </div>
                            </div>
                            <!-- Card body END -->
                        </form>
                        <!-- Booking form END -->
                    </div>
                </div>
                <!-- Left Content END -->

                <!-- Right content START -->
                <aside class="col-xl-3">
                    <div data-sticky data-margin-top="80" data-sticky-for="1199">
                        <div class="row g-4">
                            <!-- Fare summary START -->
                            <div class="col-md-6 col-xl-12">
                                <div class="card bg-light rounded-2">
                                    <!-- card header -->
                                    <div class="card-header border-bottom bg-light">
                                        <h5 class="card-title mb-0">Fare Summary</h5>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <ul class="list-group list-group-borderless">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-normal mb-0">Base Fare
                                                    <a href="#" tabindex="0" data-bs-toggle="popover"
                                                        data-bs-trigger="focus" data-bs-placement="bottom"
                                                        data-bs-content="COVID-19 test required Vaccinated travelers can visit">
                                                        <i class="bi bi-info-circle"></i>
                                                    </a>
                                                </span>
                                                <span class="fs-5">$38,660</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-normal mb-0">Discount</span>
                                                <span class="fs-6 text-success">+$2,560</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-normal mb-0">Other Services</span>
                                                <span class="fs-5">$20</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-footer border-top bg-light">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h5 fw-normal mb-0">Total Fare</span>
                                            <span class="h5 fw-normal mb-0">$36,500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fare summary END -->

                            <!-- Coupon START -->
                            <div class="col-md-6 col-xl-12">
                                <div class="card card-body bg-light">
                                    <div class="cardt-title">
                                        <h5>Offer & Discount</h5>
                                    </div>
                                    <!-- Input group -->
                                    <div class="input-group mt-2">
                                        <input class="form-control form-control" placeholder="Coupon code">
                                        <button type="button" class="btn btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Coupon END -->

                            <!-- Cancel policy START -->
                            <div class="col-md-6 col-xl-12">
                                <div class="card card-body border p-4">
                                    <div class="cardt-title mb-3">
                                        <h5 class="mb-0">Cancellation & Date Change Charges</h5>
                                    </div>

                                    <h6 class="text-danger">Non Refundable</h6>
                                    <p class="mb-2">The Cancellation penalty on this booking will depend on how close
                                        to the departure date you cancel your ticket. View fare rules to know more</p>
                                    <div><a href="#" class="btn btn-link p-0 mb-0 text-decoration-underline"
                                            data-bs-toggle="modal" data-bs-target="#cancellation">
                                            <i class="bi bi-eye-fill"></i> View Detail
                                        </a></div>
                                </div>
                            </div>
                            <!-- Cancel policy END -->
                        </div>
                    </div>
                </aside>
                <!-- Right content END -->

            </div>
        </div>
    </section>
    <!-- =======================
        Main Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer2')

<!-- Cancellation modal START -->
<div class="modal fade" id="cancellation" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="cancellationlabel">Cancellation & Date Change Charges</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-3">

                <ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded p-2 mb-3"
                    id="tour-pills-tab" role="tablist">
                    <!-- Tab item -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-start active mb-0" id="tour-pills-tab-1"
                            data-bs-toggle="pill" data-bs-target="#tour-pills-tab1" type="button" role="tab"
                            aria-controls="tour-pills-tab1" aria-selected="true">Cancellation Charge</button>
                    </li>
                    <!-- Tab item -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-end mb-0" id="tour-pills-tab-2" data-bs-toggle="pill"
                            data-bs-target="#tour-pills-tab2" type="button" role="tab"
                            aria-controls="tour-pills-tab2" aria-selected="false">Date Change Charge</button>
                    </li>
                </ul>

                <!-- Tab content START -->
                <div class="tab-content mb-0" id="tour-pills-tabContent">

                    <!-- Content item START -->
                    <div class="tab-pane fade show active" id="tour-pills-tab1" role="tabpanel"
                        aria-labelledby="tour-pills-tab-1">

                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <!-- Title -->
                                <h5 class="card-title mb-0">
                                    <img src="/images/element/09.svg" class="h-50px" alt="">
                                    BOM - CDG
                                </h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Table START -->
                                <div class="table-responsive-lg">
                                    <table class="table table-bordered rounded caption-bottom overflow-hidden mb-0">
                                        <!-- Caption -->
                                        <caption class="pb-0">*From The Date Of Departure</caption>
                                        <!-- Table head -->
                                        <thead class="table-dark border-light">
                                            <tr>
                                                <th scope="col">Time Frame</th>
                                                <th scope="col">Air Free + MMT Free</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="border-top-0">
                                            <tr>
                                                <td>0 hours to 24 hours</td>
                                                <td>Non Refundable</td>
                                            </tr>
                                            <tr>
                                                <td>24 hours to 365 days</td>
                                                <td>$16,325 + $250</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table END -->
                            </div>
                        </div>
                    </div>
                    <!-- Content item END -->

                    <!-- Content item START -->
                    <div class="tab-pane fade" id="tour-pills-tab2" role="tabpanel"
                        aria-labelledby="tour-pills-tab-2">
                        <div class="card border">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <!-- Title -->
                                <h5 class="card-title mb-0">
                                    <img src="/images/element/09.svg" class="h-50px" alt="">
                                    JFK - BOM
                                </h5>
                            </div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Table START -->
                                <div class="table-responsive-lg">
                                    <table class="table table-bordered rounded caption-bottom overflow-hidden mb-0">
                                        <!-- Caption -->
                                        <caption class="pb-0">*From The Date Of Departure</caption>
                                        <!-- Table head -->
                                        <thead class="table-dark border-light">
                                            <tr>
                                                <th scope="col">Time Frame</th>
                                                <th scope="col">Air Free + MMT Free + Fare Difference</th>
                                            </tr>
                                        </thead>
                                        <!-- Table body -->
                                        <tbody class="border-top-0">
                                            <tr>
                                                <td>0 hours to 24 hours</td>
                                                <td>Non Refundable</td>
                                            </tr>
                                            <tr>
                                                <td>24 hours to 365 days</td>
                                                <td>$16,325 + $250 + Fare Difference</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table END -->
                            </div>
                        </div>
                    </div>
                    <!-- Content item END -->

                </div>
                <!-- Tab content END -->
            </div>
        </div>
    </div>
</div>
<!-- Cancellation modal END -->

<!-- Baggage and fare START -->
<div class="modal fade" id="baggageFare" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Title -->
            <div class="modal-header">
                <h5 class="modal-title" id="baggageFarelabel">Baggage & Fare Rules</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-3">
                <!-- Card START -->
                <div class="card border">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <!-- Title -->
                        <h5 class="card-title mb-0">
                            <img src="/images/element/09.svg" class="h-80px" alt="">
                            BOM - CDG
                        </h5>
                    </div>

                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Table START -->
                        <div class="table-responsive-lg">
                            <table class="table table-bordered rounded caption-bottom overflow-hidden mb-0">
                                <!-- Table head -->
                                <thead class="table-dark border-light">
                                    <tr>
                                        <th scope="col">Baggage Type</th>
                                        <th scope="col">Check In</th>
                                        <th scope="col">Cabin</th>
                                    </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="border-top-0">
                                    <tr>
                                        <td>Adult</td>
                                        <td>2 PC</td>
                                        <td>7 Kg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table END -->
                    </div>

                    <!-- Card footer -->
                    <div class="card-footer d-flex justify-content-between align-items-center pt-0 px-sm-4">
                        <span>*1PC = 23KG</span>
                        <a href="#" class="btn btn-sm btn-primary-soft mb-0">Add luggage</a>
                    </div>
                </div>
                <!-- Card END -->

                <!-- Content START -->
                <div class="mt-4 px-2">
                    <span class="badge bg-light text-success mb-2"><i class="bi bi-star-fill me-2"></i>Travel
                        Hack</span>
                    <h5 class="mb-2">This itinerary includes a self-transfer</h5>
                    <p class="mb-0">Please note, that it is the sole responsibility of the passenger to ensure his or
                        her eligibility to enter the destination or transit countries (as applicable). We accept no
                        liability in this regard. Please check the travel rules of all regulatory websites before to
                        booking as well as commencing.</p>
                </div>
                <!-- Content END -->
            </div>
        </div>
    </div>
</div>
<!-- Baggage and fare END -->
@endsection