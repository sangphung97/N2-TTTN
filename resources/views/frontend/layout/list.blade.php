
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
              <div class="col-md-8"> 
                        @foreach($nhomtin as $nt)  
                            
                            @if($nt->trangthai==1)           
                                <h2 style="border-bottom: 1px solid black;width: 80%">{{ $nt->ten_nhomtin }}</h2>
                             @endif
                            @foreach($inhomtin as $int) 
                                @if($int->id_nhomtin == $nt->id_nhomtin)
                                
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
                                                
                                        </div>
                                    </div>
                        
                            
                                @endif
                            @endforeach
                        @endforeach
                   
                        
                        
            
                </div>
                
            
        </div>
        {{-- End Nhom Tin --}}
        {{-- Tac Gia --}}
        <div class="col-md-3" style="padding:0">
            <div class="row">
                <h2 style="border-bottom:1px solid">
                    Tác Giả
                </h2>
                @foreach($tacgia as $tg)
                    
                <div class="col-md-12">
                    <a href="#" class="tg">
                        {{ $tg->tacgia }}
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <h2 style="border-bottom:1px solid">
                    Tin Hot
                </h2>
                @foreach($tinhot as $tth)
                
                <div class="col-md-12" style="padding:0">
                    <div class="row">
                            <div class="col-md-6"style="padding:0;margin-bottom:20px">
                            <a href="#">
                                <img src="{{ asset('upload/tintuc/'.$tth->hinhdaidien) }}" alt="tinhot" style="width:100%">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#">
                                
                                {{ $tth->mota }}
                            </a>
                        </div>
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
