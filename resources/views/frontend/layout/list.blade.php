
    

@section('content')
<div class="container-fluid" style="padding:30px 5%">
    
    
    <div class="row">

    
    
        {{-- Place for Advertisment --}}
        <div class="col-md-2">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quos minus, repellendus molestias quibusdam itaque ullam obcaecati facere est similique ad assumenda deserunt dolores. Illo, ut itaque. Nostrum, nesciunt beatae?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quos minus, repellendus molestias quibusdam itaque ullam obcaecati facere est similique ad assumenda deserunt dolores. Illo, ut itaque. Nostrum, nesciunt beatae?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quos minus, repellendus molestias quibusdam itaque ullam obcaecati facere est similique ad assumenda deserunt dolores. Illo, ut itaque. Nostrum, nesciunt beatae?
        </div>
        {{--End  Place for Advertisment --}}
        {{-- Nhom Tin --}}
        <div class="col-md-7" >
              <div class="col-md-12"> 
                        @foreach($nhomtin as $nt)                           
                                @if($nt->trangthai==1)           
                                    <h2 style="border-bottom: 1px solid black;width: 80%">{{ $nt->ten_nhomtin }}</h2>
                                @endif
                            
                                @php
                                //chỉ lấy ra 5 loại tin khác nhau trong 1 nhóm 
                                    $lt1=$nt->loaitin->where('trangthai','=','1')->take(7);
                                @endphp
                            @foreach($lt1 as $lt) 
                            
                                @php
                                //mỗi loại tin chỉ lấy ra 1 tin mới nhất dựa vào thơi gian đăng tin    
                                    $int1=$lt->tin->where('trangthai','=','1')->sortByDesc('ngaydangtin')->take(1);
                                
                                @endphp
                             
                                @foreach($int1 as $int)                                           
                                            <div class="row">
                                                <div class="col-md-6" style="margin:15px 0">
                                                
                                                    <a href="detail/{{ $int->id_tin }}/{{ $int->tieudeseo }}.html">
                                                        <img src="{{ asset('upload/tintuc/'.$int->hinhdaidien) }}"alt="img" style="width: 100%" >
                                                    </a>
                                                
                                                </div>
                                                <div class="col-md-6" style="margin:15px 0">        
                                                        <h4>
                                                            <a href="detail/{{ $int->id_tin }}/{{ $int->tieudeseo }}.html">{{ $int->tieude }}</a>
                                                        </h4>
                                                        <p>
                                                            <a href="detail/{{ $int->id_tin }}/{{ $int->tieudeseo }}.html">{{ $int->mota }}</a>
                                                        </p>
                                                        <p>
                                                            <a href="{{ Route('loaitin',['id'=>$lt->id_loaitin,'loaitinseo'=>$lt->loaitinseo]) }}" style="border: 1px solid;padding: 4px 18px; border-radius: 20px;background-color: gold;">
                                                                {{ $lt->ten_loaitin }}
                                                            </a>
                                                        </p>
                                                </div>                                           
                                            </div>                                   
                                    @endforeach
                                @endforeach
                        @endforeach
                        
                       
                </div>   
                
                
        </div>
        
        {{-- End Nhom Tin --}}
        {{-- Tac Gia --}}
        <div class="col-md-3" style="padding:0">
            <div class="row" style="justify-content:center">
                <h2 style="border-bottom:1px solid">
                    Tác Giả
                </h2>
                @foreach($tacgia as $tg)
                    
                <div class="col-md-12" style="justify-content: center;align-items: center;display: flex;">
                    <a href="#" class="tg">
                        {{ $tg->tacgia }}
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row"style="justify-content:center" >
                <div class="col-md-12" style="justify-content: center;align-items: center;display: flex;">
                    <h2 style="border-bottom:1px solid">
                        Tin Hot
                    </h2>
                </div>
                @foreach($tinhot as $tth)
                
                
                    <div class="row"style="margin:0!important;justifuy-content:center;width:80%">
                            <div class="col-xs-6"style="padding:0;margin-bottom:20px">
                            <a href="#" style="display: block;">
                                <img src="{{ asset('upload/tintuc/'.$tth->hinhdaidien) }}" alt="tinhot" style="width:100%">
                        
                                <p>{{ substr($tth->mota,0,500) }}...</p>
                            </a>
                            
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        {{-- End Tac Gia --}}
   </div> 
</div>  

</div>  

@endsection
