<?php

namespace App\Http\Controllers;

use App\loaitin;
use App\nhomtin;
use App\tin;
use App\binhluan;
use Illuminate\Http\Request;

class trangchuController extends Controller
{
    //
    function __construct()
    {
        $tin=tin::all();
        $nhomtin=nhomtin::where('trangthai','=','1')->take(13)->get();
        $loaitin=loaitin::all();
        view()->share('tin',$tin);
        view()->share('nhomtin',$nhomtin);
        view()->share('loaitin',$loaitin);
    //Index Page
    
        $tinhot=tin::where('tin.tinhot','=','1')->take(4)->get( );
        view()->share('tinhot',$tinhot);
        $tacgia=tin::distinct()->get(['tacgia']);
        view()->share('tacgia',$tacgia);
  
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
        
        
        // $inhomtin=nhomtin::where('nhomtin.trangthai','=','1')
        //     ->join('loaitin','loaitin.id_nhomtin','=','nhomtin.id_nhomtin')
        //     ->join('tin','tin.id_loaitin','=','loaitin.id_loaitin')
        //     ->select('tin.*','loaitin.ten_loaitin','loaitin.id_nhomtin as id_nhomtin')
        //     ->paginate(1);
                   
            //->get();
        
            $inhomtin=nhomtin::where('nhomtin.trangthai','=',1)->get();
           
           // dd($inhomtin);
        // foreach($inhomtin as $tin1)
        // {
        //     $tin1=tin::where('trangthai','1')->orWhere('id_tin','=',$inhomtin)
            
        //     ->take(2)->get();
        // }
      
               
      
        // $name_nhomtin=nhomtin::where('trangthai','1')->get()

        $tin=tin::where('trangthai','1')
        ->orderBy('solanxem','desc')
        ->take(3)
        ->get();

        return view('frontend.index',['inhomtin'=>$inhomtin,'tin'=>$tin]);
    }

    function detail($id){
        $tindetail=tin::find($id);
        if(is_null($tindetail))
           return redirect("/");
        $tindetail->solanxem+=1;
        $tindetail->save();
        $id1=$tindetail->loaitin->id_loaitin;
        $tloai=loaitin::find($id1);
      // dd($tloai);   
        //Detail Page
        $tinlienquan=tin::find($id);
        $id2=$tinlienquan->id_loaitin;
        $listloai=tin::where([['id_loaitin','=',$id2],['id_tin','<>',$id]])->take(4)->get();
        $binhluan=binhluan::all();
        return view ('frontend.detail',['tindetail'=>$tindetail,'detailtenloai'=>$tloai,'listloai'=>$listloai,'binhluan'=>$binhluan]);
        
    }
    function category($id){
        $loai=loaitin::find($id);
        $tintuc=tin::where('id_loaitin',$id)->paginate(5); 
       // dd($tindetail);   
        return view('frontend.news_category',['loai'=>$loai,'tintuc'=>$tintuc]);
    }

    /*function author(){
        $tg=tin::where('tin.trangthai','=','1')->get();
        $tacgia=tin::distinct()->get(['tacgia']);
        
        
        return view('frontend.author',['tg'=>$tg,'$tacgia'=>$tacgia]);
    }
    */
    function timkiem(Request $request){
        $tukhoa=$request->tukhoa;
        $tintuc=tin::where('tieude','like',"%$tukhoa%")
            //->orWhere('mota','like',"%$tukhoa%")
            //->orWhere('noidung','like',"%$tukhoa%")
            ->get();
        return view('frontend.search',['tintuc'=>$tintuc,'tukhoa'=>$tukhoa]);
    }
   
    
}
 