<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
      public function message(Request $request){

     $msg= new Message;
     
     $msg->name= $request->name;
     $msg->email= $request->email;
     $msg->subject= $request->subject;
     $msg->message= $request->message;

     $msg->save();
     return redirect()->back()->with('success', 'Message Sent Successfully');
   }
}
