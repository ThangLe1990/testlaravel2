<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailDemoController extends Controller
{
    public function sendmail() {

        $data = [
            'key1' => 'value 1',
            'key2' => 'value 2: Day la gia tri 2'
        ];

        Mail::to ('ledinhthang90@gmail.com') 
                -> send ( new DemoMail ($data) );
        
        // $name = 'Le Thang';
        // Mail::send('mails.demo', ['name' => $name], function($email){
        //     $email->to('ledinhthang90@gmail.com', 'Le thang hello');

        // }); 

    }
}