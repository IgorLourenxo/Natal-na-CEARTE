<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function message()
    {
        return view('pages.message');
    }
}
