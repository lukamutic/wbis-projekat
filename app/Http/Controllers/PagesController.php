<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // create new post page
    public function new()
    {
        return view('pages.new');
    }

     // spage of single post
    public function single()
    {
        return view('pages.single');
    }
}
