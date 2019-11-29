<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return view('pages.index');
        } else {
            return view('welcome');
        }
    }
}
