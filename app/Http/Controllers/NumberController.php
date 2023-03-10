<?php

namespace App\Http\Controllers;
use App\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function getNumber(Request $request) {
        $msisdn = $request->post('msisdn');
        $x = Number::where('icc_id','=',$msisdn)->first();
        return $x;
    }
    
    public function getNumberByIcc(Request $request) {
        $icc = $request->get('icc');
        $x = Number::where('icc_id','=',$icc)->first();
        return response()->json($x);
    }
}
