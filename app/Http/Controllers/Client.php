<?php

namespace App\Http\Controllers;

use App\Models\Client as c;
use App\Models\igration;
use Illuminate\Http\Request;

class Client extends Controller
{
   public function FunctionName(Request $request)
   {
      $res =  $request->all();
      c::create($res);
      return ("DONE");
   }
}
