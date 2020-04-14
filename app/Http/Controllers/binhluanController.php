<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\binhluan;

class binhluanController extends Controller
{
    public function getdanhsach1(){
    	$binhluan=binhluan::where('trangthai','0')->get();
    	return view('admin.binhluan.danhsach',['binhluan'=>$binhluan]);
    }
    public function getdanhsach(){
    	$binhluan=binhluan::where('trangthai','1')->get();
    	return view('admin.binhluan.danhsach',['binhluan'=>$binhluan]);
    }
    public function getsua($id_binhluan){
    	$binhluan=binhluan::find($id_binhluan);
    	$binhluan->trangthai=1;
    	echo $user_login = Auth::user();
    	$binhluan->id_admin=$user_login->id;
    	$binhluan->save();
    	return redirect('admin/binhluan/danhsach.html');
    }
}
