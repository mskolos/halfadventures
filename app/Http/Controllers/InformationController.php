<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function about()
    {
        return view('information.about');
    }

    public function author()
    {
        return view('information.author');
    }

    public function releases()
    {
        return view('information.releases');
    }
}
