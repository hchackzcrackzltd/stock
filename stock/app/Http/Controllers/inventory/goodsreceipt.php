<?php

namespace App\Http\Controllers\inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class goodsreceipt extends Controller
{
    //
    public function getlist()
    {
      $data=DB::select("SELECT * FROM goodreceipt");
      return view('inventory.goodsrecipt.view',["lstdata"=>$data]);
    }
    public function getdetail(Request $request)
    {
      $sqldata=DB::select("SELECT * FROM goodreceipt WHERE docnum=?",[$request->id]);
      $sqllst=DB::select("SELECT A.code_item,A.quantity,A.uom,B.descript FROM goodreceipt_item AS A LEFT JOIN itemmaster AS B ON A.code_item=B.code WHERE A.docnum=?",[$request->id]);
      return view('inventory.goodsrecipt.detail',["title"=>$sqldata,"lsttm"=>$sqllst]);
    }
}
