<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function messagePost(Request $request)
  {
      Message::create($request->post());
      return redirect()->back();
  }
}
