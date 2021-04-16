<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // stores every row in the table into $messages variable
        $messages = Message::all();

        // home.blade.php
        return view('home', [
            'messages' => $messages
        ]);
    }
}
