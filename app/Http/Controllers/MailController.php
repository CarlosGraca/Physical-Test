<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    //
    public function index()
    {
      # code...
    }

    public function sendMail()
    {
      Mail::send('mail.register',['data'=>$data], function ($mail) use ($data)
      {
          $mail->to($data['email'],$data['name'])->from('everyone@gmail.com')->subject('Welcome');
      })
    }
}
