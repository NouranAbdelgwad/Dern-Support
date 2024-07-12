<?php

namespace App\Http\Controllers;

use App\Models\SpareParts;
use Illuminate\Http\Request;

class SparePartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("components.spare_parts")->with("parts", SpareParts::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            "part_name"=>"required",
            "part_img"=>"required",
            "parts_in_stock"=>"required",
            "cost"=>"required"
        ]);
        SpareParts::insert($validatedData);
        return redirect("/index/spare_parts")->with("added", "added succssfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(SpareParts $spareParts)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        SpareParts::findOrFail($id)->update([
            "part_name"=>$request["part_name"],
            "part_img"=>$request["part_img"],
            "parts_in_stock"=>$request["parts_in_stock"],
            "cost"=>$request["cost"]
        ]);
        return redirect("/index/spare_parts")->with("updated", "updated succesfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        return view("components.edit_part")->with("part", SpareParts::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SpareParts::destroy($id);
        return redirect("/index/spare_parts")->with("deleted", "deleted");
    }
}
