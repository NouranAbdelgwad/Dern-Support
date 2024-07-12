<?php

namespace App\Http\Controllers;

use App\Models\Software_support;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoftwareSupportController extends Controller
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
                'img' => 'nullable|max:2048',
                'additional_details' => 'nullable|string',
            ]);
            $validatedData['description'] = $validatedData['description'] ?? 'No description provided';
            if ($request->hasFile('img')) {
                $imagePath = $request->file('img')->store('software-support', 'public');
                $validatedData['img'] = $imagePath;
            }
            $validatedData["user_id"] = Auth::user()->id;
            Software_support::insert($validatedData);
            return redirect("/software_request")->with("message", "Your request successfully sent, wait for customer service message via email");
        }catch(Exception $e){
            return "Error!{$e->getMessage()}";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Software_support $software_support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Software_support $software_support)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Software_support $software_support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Software_support $software_support)
    {
        //
    }
}
