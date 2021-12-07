<?php

namespace Mahadicreation\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mahadicreation\Contact\Mail\ContactMailable;
use Mahadicreation\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.sent_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
