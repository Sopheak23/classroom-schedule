<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = DB::table('day')->get();
        return view('roomA1')->with('days',$days);
    }
    public function getFaculty(){
        $faculty=DB::table('faculty')->get();
        $html ="";
        foreach($faculty as $item){
            $html.='<option value='.$item->faculty_id.'>'.$item->faculty_name.'</option>';
        }
        return $html;
    }
    public function getDapartement(){
        $id = $_GET['id'];
        $department = DB::table('department')->where('faculty_id',$id)->get();
        $html ="";
        foreach($department as $item){
            $html.='<option value='.$item->department_id.'>'.$item->department_name.'</option>';
        }
        return $html;
    }
    public function input(){
        return $_POST['did'].$_POST['fid'];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
