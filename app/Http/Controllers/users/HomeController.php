<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\TechCategory;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $techcategories = TechCategory::with('technologies')->get();
        return view('users.home', with(compact( 'techcategories')));
    }

}
