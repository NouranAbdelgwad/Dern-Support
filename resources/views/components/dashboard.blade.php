@extends("layout.layout")
@section("title", "Dashboard")

@section("content")
<div class="container">
    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index/software_request">Software requests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/index/hardware_request">Hardware requests</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link" href="/index/spare_parts" >Spare parts</a>
        </li>
    </ul>
</div>
@endsection
