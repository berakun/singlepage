<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        return inertia('admin');
    }
}
