<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();
        return redirect('/');
    }
    public function view($id)
    {
        // throws 404 if not found
        $message = Message::findOrFail();

        return view('message', [
            'message' => $message
        ]);
    }
}
