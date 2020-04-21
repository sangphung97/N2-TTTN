<?php

namespace App\Http\Controllers;

use App\loaitin;
use App\nhomtin;
use App\tin;
use Illuminate\Http\Request;

class trangchuController extends Controller
{
    //
    function __construct()
    {
        $tin=tin::all();
        $nhomtin=nhomtin::all();
        $loaitin=loaitin::all();
        view()->share('tin',$tin);
        view()->share('nhomtin',$nhomtin);
        view()->share('loaitin',$loaitin);
      
        
    }
    function index(){
        /*
        $list= bang1::where('bang1.trangthai','=','1')
                ->join('bang2','bang1.id_bang1',=,'bang2.id_bang2')
                ->select('bang1.*','bang2.tencot as tencotmuonlay )
                ->get();

       ------------- Qui tắc join  3 bảng-------------
            $shares = DB::table('shares') bang1
                ->join('users', 'users.id', '=', 'shares.user_id')
                ->join('follows', 'follows.user_id', '=', 'users.id')
                ->where('follows.follower_id', '=', 3)
                ->get();
                $a[0][1];

        */

        $inhomtin=nhomtin::where('nhomtin.trangthai','=','1')
            ->join('loaitin','loaitin.id_nhomtin','=','nhomtin.id_nhomtin')
            ->join('tin','tin.id_loaitin','=','loaitin.id_loaitin')
            ->select('tin.*','loaitin.id_nhomtin as id_nhomtin')
            ->get();

           // dd($inhomtin);
            
        return view('frontend.index',compact('inhomtin'));
    }

    function detail($id){
        $tin=tin::find($id);
        $tinhot=tin::where('tinhot',1)->take(4)->get();
        $tinlienquan=tin::where('id_loaitin','$tin->id_loaitin')->take(5)->get();
        return view ('frontend.detail',['tin'=>$tin,'tinhot'=>$tinhot,'tinlienquan'=>tinlienquan]);
    }
}
