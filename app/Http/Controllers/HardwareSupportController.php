<?php

namespace App\Http\Controllers;

use App\Models\Hardware_support;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HardwareSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try{
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'payment_method' => 'required|in:cash,credit,ewallet',
                'support_method' => 'required|in:delivery,on_office',
                'img' => 'nullable|max:2048',
                'additional_details' => 'nullable|string',
            ]);
            $validatedData['description'] = $validatedData['description'] ?? 'No description provided';
            if ($request->hasFile('img')) {
                $imagePath = $request->file('img')->store('software-support', 'public');
                $validatedData['img'] = $imagePath;
            }
            $validatedData["user_id"] = Auth::user()->id;
            Hardware_support::insert($validatedData);
            return redirect("/hardware_request")->with("message", "Your request successfully sent, wait for customer service message via email");
        }catch(Exception $e){
            return "Error!{$e->getMessage()}";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Hardware_support $hardware_support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hardware_support $hardware_support)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hardware_support $hardware_support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hardware_support $hardware_support)
    {
        //
    }
}
