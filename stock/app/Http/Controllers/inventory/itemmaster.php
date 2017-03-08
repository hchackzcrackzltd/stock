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

    public function additem(Request $request){
      $this->validate($request,[
        'description'=>'required|min:3',
        'mmt'=>'required|min:0',
        'status'=>'required',
        'pack_size'=>'required|numeric|min:5',
        'uom'=>'required'
      ]);
      return redirect()->route('itemmaster_view')->with('status', 'Item Added');
    }
}
