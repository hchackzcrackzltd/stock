<?php

namespace App\Http\Controllers\inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class itemmaster extends Controller
{
    //
    public function getitemlist(){
      $data=DB::select("SELECT * FROM itemmaster");
      return view('inventory.itemmaster.view',["listdata"=>$data]);
    }
}
