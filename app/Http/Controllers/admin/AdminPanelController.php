<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use function view;

class AdminPanelController extends Controller
{
    //
    public function __construct(){
        $this->middleware('can:Access panel')->only('index');
    }
    public function index(){
        $string = 'Hello from controller';
        return view('admin.welcome', compact('string'));
    }
}
