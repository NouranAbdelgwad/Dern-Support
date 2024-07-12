@extends('layout.layout')
@section('title', 'Ticketing system')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/software_request">Software</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/hardware_request">Hardware</a>
            </li>
        </ul>
        <br>
        @if (session('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('message')}}
            </div>
        @endif
        <form action="/software_request" method="post">
            @csrf
            <label class="form-label">Problem title</label>
            <input type="text" class="form-control" name="title"><br>
            <label class="form-label">Problem description</label>
            <input type="text" class="form-control" name="description"><br>
            <label class="form-label">Payment method</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="payment-cash" value="cash">
                <label class="form-check-label" for="payment-cash">Cash</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="payment-credit" value="credit">
                <label class="form-check-label" for="payment-credit">Credit</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" id="payment-ewallet" value="ewallet">
                <label class="form-check-label" for="payment-ewallet">E-wallet</label>
            </div>

            <label class="form-label">Picture of the Error</label>
            <input type="file" class="form-control" name="img"><br>
            <label class="form-label">Additional details</label>
            <input type="text" class="form-control" name="additional_details"><br>
            <button class="standard-btn" type="submit">Submit</button>
        </form>
    </div>
@endsection
