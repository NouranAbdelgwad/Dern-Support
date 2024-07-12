<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class CustomerAuth extends Controller
{
    public function sign_up(Request $request)
    {
        $validatedData = $request->validate([
            "full_name" => "required|string",
            "email" => "required|email",
            "password" => "required",
            "phone_number" => "required"
        ]);
        $validatedData["password"] = password_hash($request->password, PASSWORD_BCRYPT);
        User::insert($validatedData);
        return redirect("/login");
    }
    public function check(Request $request)
    {
        $data = $request->validate([
            "email" => "email|required",
            "password" => "required"
        ]);
        if(Auth::attempt($data,$request->remember)){
            $request->session()->regenerate();
            return redirect("/");
        }
        throw ValidationException::withMessages([
            "email" => "Email or Password don't match our data"
        ]);
    }

    }

