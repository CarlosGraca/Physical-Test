<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
      public function basic_email(){
          $data=['name'=>'Harison matondang'];
          Mail::send(['text'=>'mail'], $data, function($message){
              $message->to('af131588@us.edu.cv','Ailton Fortes')->subject('Send Mail from Laravel with Basics Email');
              $message->from('info.physicaltest@gmail.com','PhysicalTest');
          });
          echo 'Basics Email was sent!';
      }

      //create new function to send HTML email
      public function html_email(){
        $data=['name'=>'Harison matondang'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('harisonmatondang@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with HTML Email');
            $message->from('nabilaauliaputri29@gmail.com','Nabila');
        });
        echo 'HTML Email was sent!';
      }

      //create new function to send mail with attachment Mail
        public function attachment_email(){
          $data=['name'=>'Harison matondang'];
          Mail::send(['text'=>'mail'], $data, function($message){
              $message->to('harisonmatondang@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with HTML Email');
              // add attach here
              // i have a image file on Laravel project
            //  $message->attach('C:serverhtdocshckrcompublicuploadsharison.jpg');
              //$message->attach('C:serverhtdocshckrcompublicuploadssector-code.jpg');
              $message->from('nabilaauliaputri29@gmail.com','Nabila');
          });
          echo 'HTML Email was sent!';
        }

    public function sendMail()
    {
      Mail::send('mail.register',['data'=>$data], function ($mail) use ($data)
      {
          $mail->to($data['email'],$data['name'])->from('everyone@gmail.com')->subject('Welcome');
      });
    }
}
