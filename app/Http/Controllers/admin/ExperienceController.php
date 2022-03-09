<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $string = 'Hello from route resource';
        $experiences = Business::all();
        return view('admin.experience.index', with(compact('experiences')));
    }
}
