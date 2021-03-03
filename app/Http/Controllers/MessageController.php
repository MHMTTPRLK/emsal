<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
  public function messagePost(Request $request)
  {
     // return $request->post();
    Message::create($request->post());

      return redirect()->back();
  }

}
