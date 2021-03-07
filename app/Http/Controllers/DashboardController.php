<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index() {

      $rooms=Room::where('status','publish')->get();
          return view('welcome',compact('rooms'));
  }



}
