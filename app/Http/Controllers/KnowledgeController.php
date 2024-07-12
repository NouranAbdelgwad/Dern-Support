<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function show(){
        return view("components.knowledge")->with("knowledge", Knowledge::all());
    }
}
