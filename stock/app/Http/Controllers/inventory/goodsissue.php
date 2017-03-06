<?php

namespace App\Http\Controllers\inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class goodsissue extends Controller
{
    //
    public function getlist(){
      $data=DB::select("SELECT * FROM goodissue");
      return view('inventory.goodsissue.view',["datalst"=>$data]);
    }
}
