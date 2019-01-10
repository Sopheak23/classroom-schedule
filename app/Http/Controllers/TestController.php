<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $data['data']=DB::table('building')->get();
        return view('roomA1',$data);
    }
}
