<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailContactController extends Controller
{
    public function store(Request $request){
        if ($request->has('contactStore')){
            $request->validate([
                "name" => ["required", "string", "max:160"],
                "mail" => ["required","string","email","max:255"],
                "subject" => ["required","string","max:255"],
                "message" => ["required","string"]
            ]);
            Mail::to("b.ntambwe97@gmail.com")->send(new ContactSender($request));
            return redirect()->back();
        }
    }
}
