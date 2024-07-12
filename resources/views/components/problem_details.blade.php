@extends('layout.layout')
@section('title', 'details')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <img src="{{ $details->img_url }}" alt="event" class="event_img col-6">
            <div class="col-6 mt-3">
                <h2><b>{{ $details->title }}</b></h2>
                <p class="text">{{ $details->type }}</p>
                <br><br>
                <h4>Description</h4>
                <p>{{$details->description}}</p>
                <h4>Solution</h4>
                <p>{{$details->solution}}</p>
            </div>
        </div>
    @endsection
