<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){
        $businesses = Business::orderBy('name_es')->get();

        return response()->json([
           'businesses' => $businesses,
        ]);
    }
}
