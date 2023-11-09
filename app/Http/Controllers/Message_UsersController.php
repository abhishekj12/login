<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\message_users;

class Message_UsersController extends Controller
{
    //
    public function check($recieverId){
        $senderId = Auth::user()->id;

        $data = [
            'sender_id' => $senderId,
            'reciever_id' => $recieverId
        ];

        $data2 = [
            'sender_id' => $recieverId,
            'reciever_id' => $senderId
        ];

        $checkExist = message_users::where('sender_id', $senderId)->where('reciever_id', $recieverId)->first();

        if(!$checkExist){
            $createConvo = message_users::create($data);
            $createConvo2 = message_users::create($data2);
            return $createConvo->id;
        }else{
            return $checkExist->id;
        }
    }
}
