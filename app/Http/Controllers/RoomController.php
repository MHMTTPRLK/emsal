<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

        public function deneme($id)
        {
              return  $room=Message::where('room_id',$id)->get();

        }
    public function roomShow($id)
    {

        $messages=Message::where('room_id',$id)->get();
        $room=Room::where('status','publish')->findOrFail($id);
        return view('room_message',compact('room','messages'));
    }


}
