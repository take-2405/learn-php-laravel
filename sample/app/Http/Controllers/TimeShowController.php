<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeShowController extends Controller
{
    public function timeshow()
    {
    $time = Carbon::now();
    //以下のコードはどちらでも良い
    return view('time', compact('time'));
    //  return view('timeshow')->with(['time' => $time]); 
    }
}
