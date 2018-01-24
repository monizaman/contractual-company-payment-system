<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\StuffDuty;


class StuffDutyController extends Controller
{
    public function index(){
 
        $stuffduty  = StuffDuty::all();
 
        return response()->json($stuffduty);
 
    }
 
    public function getstuff_duty($id){
 
        $stuffduty  = StuffDuty::find($id);
 
        return response()->json($stuffduty);
    }
 
    public function create_stuff_duty(Request $request){
 
        $stuffduty = StuffDuty::create($request->all());
 
        return response()->json($stuffduty);
 
    }


    
 
    public function deletestuffduty($id){
        $stuffduty  = StuffDuty::find($id);
        $stuffduty->delete();

        return response()->json('deleted');
    }
 
    public function updatestuffduty(Request $request,$id){
        $stuffduty  = StuffDuty::find($id);
        $stuffduty->title = $request->input('title');
        $stuffduty->author = $request->input('author');
        $stuffduty->isbn = $request->input('isbn');
        $stuffduty->save();
 
        return response()->json($stuffduty);
    }
}
