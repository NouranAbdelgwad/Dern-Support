@extends('layout.layout')
@section('title', 'Ticketing system')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/software_request">Software</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/hardware_request">Hardware</a>
            </li>
        </ul>
        <br>
        <form action="/hardware_request" method="post">
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
            </div><br>
            <label class="form-label">Support method</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="support_method" id="delivery" value="delivery">
                <label class="form-check-label">delivery</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="support_method" id="on_office" value="on_office">
                <label class="form-check-label">on_office</label>
            </div><br>
            <label class="form-label">Picture of the Error</label>
            <input type="file" class="form-control" name="img"><br>
            <label class="form-label">Additional details</label>
            <input type="text" class="form-control" name="additional_details"><br>
            <button class="standard-btn" type="submit" >Submit</button>
        </form>
    </div>
@endsection
