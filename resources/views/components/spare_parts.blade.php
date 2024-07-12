@extends("layout.layout")
@section("title", "Dashboard")

@section("content")
<div class="container">
    <h2 class="text-center" >Add new part</h2>
    <form action="/add/part" method="post" class="form">
        @csrf
        <label>Part name</label>
        <input class="form-control mt-1" type="text" name="part_name" id="part_name">
        <label>Part image</label>
        <input class="form-control mt-1" type="file" name="part_img" id="part_img">
        <label>Number of parts in stock</label>
        <input class="form-control mt-1" type="number" name="parts_in_stock" id="parts_in_stock">
        <label>Part's cost</label>
        <input class="form-control mt-1" type="number" name="cost" id="cost">
        <button type="submit" class="btn btn-primary mt-1">Add</button>
    </form>
    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index/software_request">Software requests</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/index/hardware_request">Hardware requests</a>
        </li>
        <li class="nav-item" >
            <a class="nav-link active" href="/index/spare_parts" >Spare parts</a>
        </li>
    </ul>
    <table class="table table-bordered table-responsive mt-3">
        <thead>
            <tr>
                <th>image</th>
                <th>Name</th>
                <th>parts_in_stock</th>
                <th>cost</th>
                <th colspan="2" >Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($parts as $part)
                <tr>
                    <td>{{$part->part_img}}</td>
                    <td>{{$part->part_name}}</td>
                    <td>{{$part->parts_in_stock}}</td>
                    <td>{{$part->cost}}</td>
                    <td>
                        <form action="/delete/parts/{{$part->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/put/part/{{$part->id}}" class="btn btn-primary">edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection
