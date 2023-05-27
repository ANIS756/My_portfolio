<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use function Symfony\Component\Mime\Header\all;

class ContactController extends Controller
{
    public function contactme(){
        $contact_form_data = request()->all();
        Mail::to('anismojumder796@gmail.com')->send(new ContactFormMail($contact_form_data));

        return redirect()->route('landing');
    }
}
