<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class manage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $class = DB::table('moneys')->get();
        return view('index',compact('class'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){

        $data=array(
            'name' =>$request->name,
            'what'=>$request->what,
            'amount'=>$request->amount
        );

        DB::table('moneys')->insert($data);
        return redirect()->back()->with('success','Successfully inserted!');
    }
    public function delete($id){
        DB::table('moneys')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfully deleted');
    }

}
