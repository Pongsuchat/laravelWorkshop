<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){
        $sum=1+$id;
        $arr = [
            'id' => 3,
            'firstname' => 'Pongsuchat ',
            'lastname' => 'jantakam',
            'skill'=>[
                'thai'=>100,
                'eng' => 50
            ]
            ];
            //dd($arr);  แสดงผล drum die แสดงค่าแล้วหยุด 
        //return $sum;
        return view('user')->with('obj', $arr);
        // return response()->json([//return แบบ json
        //     'result'=>[
        //         'id'=> $sum
        //     ]
        // ]);
    }
}
