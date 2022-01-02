<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminPanelController;

Route::get('',[AdminPanelController::class,'index'])->name('admin.home');
