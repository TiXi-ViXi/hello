<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Compute extends Controller
{
    public function compute(){
        return view('compute');
    }
    public function spend(){
        $fall = 0;
        for ($x = 0; $x <= 1000; $x++) {


            $helloo = DB::table('moneys')->where('id',$x)->value('what');

            $hello = DB::table('moneys')->where('id',$x)->value('amount');
            if($helloo == 'n'){
                $fall = $fall + $hello;
            }
            else{

            }

        }
        return redirect()->back()->with('success',$fall);
    }
    public function save(){
        $fall = 0;
        for ($x = 0; $x <= 1000; $x++) {


            $helloo = DB::table('moneys')->where('id',$x)->value('what');

            $hello = DB::table('moneys')->where('id',$x)->value('amount');
            if($helloo == 'p'){
                $fall = $fall + $hello;
            }
            else{

            }

        }
        return redirect()->back()->with('success',$fall);
    }
    public function savings(){
        $fall = 0;
        for ($x = 0; $x <= 1000; $x++) {


            $helloo = DB::table('moneys')->where('id',$x)->value('what');

            $hello = DB::table('moneys')->where('id',$x)->value('amount');
            if($helloo == 'p'){
                $fall = $fall + $hello;
            }
            else if($helloo == 'n'){
                $fall = $fall - $hello;
            }

        }
        return redirect()->back()->with('success',$fall);
    }
    public function what(){
        $fall = 0;
        for ($x = 0; $x <= 1000; $x++) {
            $count = 0;

            $helloo = DB::table('moneys')->where('id',$x)->value('what');

            $hello = DB::table('moneys')->where('id',$x)->value('amount');
            if($helloo == 'p'){
                $fall = $fall + $hello;
                $count = $count + 1;
            }
            else if($helloo == 'n'){
                $count = $count + 1;
            }
            else{

            }

        }
        $fall = $fall/5;
        if($count == 0){
            return redirect()->back()->with('success','Brother Are you dump? Put some data');
        }
        else{
        return redirect()->back()->with('success',$fall);
        }
    }
    public function find(){
        $fall = 0;
        for ($x = 0; $x <= 1000; $x++) {


            $helloo = DB::table('moneys')->where('id',$x)->value('what');

            $hello = DB::table('moneys')->where('id',$x)->value('amount');
            if($helloo == 'p'){
                $fall = $fall + $hello;
            }
            else if($helloo == 'n'){
                $fall = $fall - $hello;
            }

        }
        if ($fall<0){

            return view('red');
        }
        else{
            return view('green');
        }
    }

}
