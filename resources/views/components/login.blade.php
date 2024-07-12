@extends("layout.layout")

@section("title", "login")

@section("content")
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row bg-light mt-3">
        <div class="col-6">
            <form action="/login" method="post" class="form">
                @csrf
                <label class="form-label">Email: </label>
                <input type="email" class="form-control" name="email">
                <label class="form-label">Password: </label>
                <input type="password" class="form-control" name="password"> <br>
                <button class="btn btn-primary" type="submit">Log In</button>
            </form>
        </div>
    </div>
</div>
@endsection
