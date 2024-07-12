@extends("layout.layout")
@section("title", "edit part")

@section("content")
<div class="container">
    <h2 class="text-center" >Edit part</h2>
    <form action="/edit/part/{{$part->id}}" method="post" class="form">
        @csrf
        <label>Part name</label>
        <input class="form-control mt-1" type="text" name="part_name" id="part_name" value={{$part->part_name}}>
        <label>Part image</label>
        <input class="form-control mt-1" type="file" name="part_img" id="part_img" value={{$part->part_img}}>
        <label>Number of parts in stock</label>
        <input class="form-control mt-1" type="number" name="parts_in_stock" id="parts_in_stock" value={{$part->parts_in_stock}}>
        <label>Part's cost</label>
        <input class="form-control mt-1" type="number" name="cost" id="cost" value={{$part->cost}}>
        <button type="submit" class="btn btn-primary mt-1">Edit</button>
        @method("PUT")
    </form>
</div>
@endsection
