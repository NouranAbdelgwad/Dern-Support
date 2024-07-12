@extends('layout.layout')

@section('title', 'login')

@section('content')
<div class="container">
    <div class="row bg-light mt-3">
        <div class="col-6">
            <form action="/sign_up" method="post" class="form">
                @csrf
                <label class="form-label">Full name: </label>
                <input type="text" class="form-control" name="full_name">
                <label class="form-label">Email: </label>
                <input type="email" class="form-control" name="email">
                <label class="form-label">Phone number: </label>
                <input type="number" class="form-control" name="phone_number">
                <label class="form-label">Password: </label>
                <input type="password" class="form-control" name="password">
                <a href="/login">already have an account? </a><br>
                <button class="btn btn-primary" type="submit">Sign up</button>
            </form>
        </div>
    </div>
</div>
@endsection
