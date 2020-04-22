
@extends('admin.layout.index')

@section('content')



<div id="content">


<div id="content-header">
    <div id="breadcrumb"> <a title="" class="tip-bottom"><i class="icon-home"></i> Nhóm tin</a></div>
  </div>
  <div class="container-fluid">

    <hr>
    <div class="row-fluid">
      <div class="span12">
         @if(session('thongbao'))
          <div class="alert">
            
            {{session('thongbao')}}
          </div>
          @endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Danh sách tin</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID tin</th>
                  <th>Tiêu đề</th>
                  <th>Số lần xem</th>
                  <th>Nhóm tin</th>
                  <th>Loại tin</th>
                  <th>Trạng thái</th>
                  <th>Tác giả</th>
                  <th>Thời gian</th>
                  <th>Thao tác</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tin as $t)                
                <tr class="gradeX">
                  <td>{{$t->id_tin}}</td>
                  <td>{{$t->tieude}}
                      <br>
                    <img  width="100px;" src="upload/tintuc/{{$t->hinhdaidien}}"></td>
                  <td>{{$t->solanxem}}</td>
                 <td>
                      {{$t->loaitin->nhomtin->ten_nhomtin}}
                    </td>
                     <td>
           {{$t->loaitin->ten_loaitin}}
                    </td>
                  <td>
                    @if($t->trangthai==1)
                      Hiện
                      @else
                      Ẩn
                   @endif
                     </td>
               <td>{{$t->tacgia}}</td>
                <td>{{$t->ngaydangtin}}</td>
            <td class="center"><div class="form-actions" style="padding:0px; margin: 0px; border: 0px; ">
              <form  action="admin/tin/sua-{{$t->id_tin}}.html">
              <button type="submit" class="btn btn-mini">Sửa</button></form>
         </div></td>
            <td class="center"><div class="form-actions" style="padding:0px; margin: 0px; border: 0px; ">
            <form  action="admin/tin/xoa-{{$t->id_tin}}.html">
              <button type="submit" class="btn btn-mini">Xóa</button></form>
            </div></td>
               </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


           
    @endsection