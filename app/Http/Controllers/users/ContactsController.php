<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|min:10',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contacts::create($request->all());

        return response()->json('Success', 200);



    }
}
