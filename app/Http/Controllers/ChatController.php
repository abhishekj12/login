<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\messages;

use App\Models\message_users;
use auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::where('id', '<>', Auth::id())->get();
        return view('chat.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
  //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = [
            'message_users_id' => $request->data,
            'message' => $request->message
        ];

        $sendMessage = messages::create($data);
        if($sendMessage){
            return "Message Sent";
        }else{
            return "Error sending message.";
        }
    }

    public function load($reciever, $sender){
        $id1 = message_users::where('sender_id', $sender)->where('reciever_id',$reciever)->pluck('id');
        $id2 = message_users::where('reciever_id', $sender)->where('sender_id',$reciever)->pluck('id');
        $alldata = messages::where('message_users_id', $id1)->orWhere('message_users_id', $id2)->get();
        $data = [$alldata,$id1];
        return  $data;
    }


    public function data($reciever, $sender, $last){
        $id1 = message_users::where('sender_id', $sender)->where('reciever_id',$reciever)->pluck('id');
        $id2 = message_users::where('reciever_id', $sender)->where('sender_id',$reciever)->pluck('id');
        $allMessages = messages::where('id','>=',$last)->where('message_users_id', $id2)->orderBy('id', 'asc')->get();
          // dd($allMessages);
        return $allMessages;
    }

     /* Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
