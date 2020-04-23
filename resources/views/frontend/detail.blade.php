@extends('frontend.layout.parent')

@section('title','Chi Tiết Tin')

@includeIf('frontend.layout.navigation')
@section('content')
<div class="container-fluid" style="margin:30px 0;">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-9">
                
                <div class="col-md-12" style="text-align: center">
                    
                    <a href="{{ Route('loaitin',['id'=>$detailtenloai->id_loaitin,'loaitinseo'=>$detailtenloai->loaitinseo]) }}" class="a-category">
                      {{ $detailtenloai->ten_loaitin }}
                    </a>
                    <h3 style="margin:15px 0;font-size:3rem">{{ $tindetail->tieude }}</h3>
                    
                    <p>
                        <span>{{ $tindetail->ngaydangtin }} | </span>
                        By 
                        <a href="#"> {{ $tindetail->tacgia }}</a>
                        <span> | Lượt Xem: {{ $tindetail->solanxem }} </span>
                    </p>
                    <img src="{{ asset('upload/tintuc/'.$tindetail->hinhdaidien) }}" alt="img" style="width:100%">
                    
                </div>
                
                <div class="col-md-12" style="margin-top:35px; padding-left:45px">
                    <p>
                       <?php echo $tindetail->noidung;?>
                    </p>
                </div>
                
                {{-- Comment --}}
                {{-- <div class="row">
                    <div class="col-md-12">
                        <h2 style="border-bottom:1px solid">
                            Comments
                        </h2>
                        <div class="container" style="margin-top:50px">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('frontend_asset/images/author.jpg') }}" alt="commments" style="width:100%">
                                </div>
                                <div class="col-md-11" >
                                    <p style="font-weight:bold;text-transform:uppercase">Người Comment</p> 
                                    <div class="col-md-12">
                                        <p>Nội dung comment</p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="box-comment">
                                            <button id="myBtn1">Trả lời</button>
                                        </div>
                                        <div class="modal1" id="myModal">
                                            <form>
                                                <div class="row">
                                                     <div class="col-md-9">
                                                        <input type="text" class="form-control" id="email" placeholder="Nhập Bình Luận" name="email">  
                                                    </div>
                                                    <div class="col-md-3"><button type="submit">Send</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- End Comment --}}
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="border-bottom:1px solid">
                            Comments
                        </h2>
                        @if(count($errors)>0)
                        <div class="alert"> 
                          @foreach($errors->all() as $err)
                              {{$err}}<br>
                              @endforeach
                        </div>
                      @endif
            
            
            
                      @if(session('thongbao'))
                      <div class="alert">
                        
                        {{session('thongbao')}}
                      </div>
                      @endif
                        <form action="{{ Route('binhluan',['id'=>$tindetail->id_tin]) }}" class="form-group" method="POST">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}";>   
                            <div class="col-md-12">                        
                                <textarea name="noidung" id="noidung" cols="100%" rows="10" placeholder="Nhập Bình Luận" ></textarea>
                                

                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <label for="email" style="font-size:2rem">Email:</label>
                                    <input type="email" id="email" placeholder="Nhập Email để gửi" style="width:80%" name="email">
                                </div>
                                <div class="col-md-5" style="padding-top:8px">
                                    <button type="submit" class="btn btn-primary"> Gửi</button>
                                </div>
                            </div>                           
                        </form>
                    </div>
                </div>
                {{-- Show --}}
                <div class="row"style="border-top:1px solid">
                    @foreach($binhluan as $bl)
                        @if($bl->trangthai==1)
                            <div class="col-md-12">
                                <div class="name" >
                                    <h5 style="padding-top:30px">
                                        Email: {{ $bl->email }}
                                    </h5>
                                    <p style="padding-left:28px;font-size:23px">
                                        {{ $bl->noidung }}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{-- End Show --}}
            </div>
            
            <div class="col-md-3">
                {{-- Tin Liên Quan --}}
                <div class="col-md-12">
                    <h3 style="text-align:center">
                        Tin Liên Quan
                    </h3>
                   @foreach($listloai as $tlq)
                    <div class="col-md-12" style="margin-top:50px">
                        {{-- detail/ $tlq->id_tin  }}/{{ $tlq->tieudeseo --}}
                        <a href="{{ Route('tintuc',['id'=>$tlq->id_tin,'tieudeseo'=>$tlq->tieudeseo]) }}">
                            <img src="{{ asset('upload/tintuc/'.$tlq->hinhdaidien) }}" alt="img" style="width:100%;height:200px">
                            <p style="margin-top:20px;text-align:center;font-size:22px;font-weight:bold;" >
                                {{ $tlq->tieude }}
                            </p>
                        </a>
                    </div>
                   @endforeach
                </div>
                {{-- End Liên Quan --}}
                {{-- Tags --}}
                <div class="col-12" style="margin:30px 0">
                    <h3 style="text-align:center">
                        Tags
                    </h3>
                    <div class="row">
                        <div class="col-md-3">
                                <a href="#" style="text-align:center;display:block">
                                    lam sao
                                </a>
                        </div>
                    </div>
                </div>
                {{-- End Tags --}}
                {{-- Tags --}}
                <div class="row"style="justify-content:center">
                    <div class="col-8" style="border:1px solid;padding:20px 0">
                        <h3 style="text-align:center">
                            Share On
                        </h3>
                        <div class="row" style="justify-content:center;margin-top:30px">
                            <div class="col-md-3">
                                    <a href="#" style="text-align:center;display:block">
                                        <i class="fab fa-facebook" style="font-size:35px"></i>
                                    </a>
                            </div>
                            <div class="col-md-3">
                                    <a href="#" style="text-align:center;display:block">
                                        <i class="fab fa-google-plus-g" style="font-size:35px"></i>
                                    </a>
                            </div>                        
                        </div>
                    </div>
                </div>
                {{-- End Tags --}}
                {{-- Login --}}
                <div class="row"style="justify-content:center">
                    <div class="col-8" style="border:1px solid;padding:20px 0;margin-top:30px">
                        <h3 style="text-align:center">
                            Connect To...
                        </h3>
                        <div class="row" style="justify-content:center;margin-top:30px">
                            <div class="col-md-3">
                                    <a href="#" style="text-align:center;display:block">
                                        <i class="fab fa-facebook" style="font-size:35px"></i>
                                    </a>
                            </div>
                            <div class="col-md-3">
                                    <a href="#" style="text-align:center;display:block">
                                        <i class="fab fa-google-plus-g" style="font-size:35px"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Login --}}
            </div>
        </div>

        
    </div>
</div>
@endsection
