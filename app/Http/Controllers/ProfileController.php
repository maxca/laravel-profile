<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
        ->with([
            "full_name" => "samark chaisanguan",
            "email"     => "samark.work@gmail.com",
            "phone"     => "02-555-5244",
            "mobile"    => "0996217524"
        ]);
    }
}
