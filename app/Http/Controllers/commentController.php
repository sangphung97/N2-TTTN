<?php

namespace App\Http\Controllers;

use App\binhluan;
use App\tin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class commentController extends Controller
{
    //
    function postComment($id, Request $request){
        $idtintuc=$id;
        $tintuc=tin::find($id);
        $comment=new binhluan;
        $comment->noidung=$request->noidung;
        $comment->id_tin=$idtintuc;
        $comment->email=$request->email;
        $this->validate($request,[
            'email'=>'required'
        ],[
            'email.required'=>'Chưa nhập Email'
        ]);  

        $comment->save();
        

        return redirect("detail/$id/".$tintuc->tieudeseo.".html")->with('thongbao','Bình Luận Thành Công! Chờ Duyệt..');
        
    }
}
