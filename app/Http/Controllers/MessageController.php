<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index($id){
        $sent_msg=DB::table('message')->where('sender_id',$id)->get();
        $received_msg=DB::table('message')->where('receiver_id',$id)->get();
        return view('backend.message.index',compact('sent_msg','received_msg'));
    }
    
    public function send(Request $request,$rid,$sid){
        $receiver=DB::table('users')->where('id',$rid)->first();
        $sender=DB::table('users')->where('id',$sid)->first();
        $msg=DB::table('message')->where('sender_id',$sender->id)
                                 ->where('receiver_id',$receiver->id)
                                 ->first();
        $NewMsg=$request->msg;
        if ($msg===null){
            DB::table('message')->insert([
                'sender_id'     => $sender->id,
                'sender_name'   => $sender->name,
                'receiver_id'   => $receiver->id,
                'receiver_name' => $receiver->name,
                'msg'           => $NewMsg,
            ]);
        } else{
            DB::table('message')->where('sender_id',$sender->id)
                                ->where('receiver_id',$receiver->id)
                                ->update(['msg' => $NewMsg]);
        }
        return redirect()->route('home');
    }

    public function sendForm($rid){
        return view('backend.message.send', ['rid'=>$rid]);
    }
}
