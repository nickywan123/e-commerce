<?php

namespace App\Http\Controllers\Development;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComingSoonController extends Controller
{
    public function index()
    {
        return view('coming-soon');
    }
}
