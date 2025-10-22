@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-3">TravelBuddy – Flight Search</h1>

    <form method="GET" action="{{ url('/flights/status') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Origin (IATA)</label>
            <input type="text" name="origin" class="form-control" required maxlength="3" placeholder="SYD">
        </div>

        <div class="mb-3">
            <label class="form-label">Destination (IATA)</label>
            <input type="text" name="destination" class="form-control" required maxlength="3" placeholder="MEL">
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Passengers</label>
            <input type="number" name="pax" class="form-control" min="1" max="9" value="1">
        </div>

        <div class="mb-3">
            <label class="form-label">Cabin</label>
            <select name="cabin" class="form-control">
                <option value="ECONOMY">Economy</option>
                <option value="BUSINESS">Business</option>
                <option value="FIRST">First</option>
            </select>
        </div>

        <button class="btn btn-primary">Search Flights</button>
    </form>
</div>
@endsection
