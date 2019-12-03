<?php

namespace App\Http\Controllers;

use App\Message;

class PagesController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('updated_at', 'desc')->where('approved', 1)->get();
        $total = Message::count();
        return view('welcome')->with('messages', $messages)->with('total', $total);
    }

    public function message()
    {
        return view('pages.message');
    }
}
