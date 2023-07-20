<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
 
      Mail::to('d81654bb10-80c747+1@inbox.mailtrap.io')->send(new NotifyMail());
 
    } 
    public function sendMAil(){
        
     Mail::to('d81654bb10-80c747+1@inbox.mailtrap.io')->send(new NotifyMail());
 }
}
