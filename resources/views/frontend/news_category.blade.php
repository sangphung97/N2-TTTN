@extends('frontend.layout.parent')
@section('title','Loại Tin')
@include('frontend.layout.navigation')
@section('content')
    <div class="box" style="background-color: #edeff2;">
        <div class="container-fluid" style="padding:2% 5%;margin-top: 20px" >
            <div class="row justify-content-between" >
                <div class="col-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, impedit sunt quas eos esse aut adipisci vero praesentium, qui reprehenderit ipsam incidunt obcaecati natus voluptatibus ratione aliquam. Ex, sint cum.
                </div>
                <div class="col-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, dolorem. Excepturi, minus a! Repellendus sint vero deserunt sapiente. Excepturi repudiandae ab exercitationem suscipit quaerat aut iste repellat quod rerum assumenda!
                </div>
            </div>
        </div>
    </div>
    {{-- Main --}}
    
    <div class="container-fluid"style="margin:35px auto;max-width:1575px">
        <div class="row">
            <div class="col-md-6">
                <h3 style="font-size:4rem">
                    Loại Tin
                </h3>
            </div>
        </div>
        <div class="row" style="outline:1px solid;padding:2% 0;position:relative;margin-top:40px">
            <div class="my-title">
                <h4 style="font-size:2rem">
                    {{ $loai->ten_loaitin }}
                </h4>
            </div>
            @foreach($tintuc as $tt)
            <div class="col-md-12">
                    
                    <div class="row" style="margin-top:40px;padding-left:25px">
                        
                        <div class="col-md-3">
                            
                            <img src="{{ asset('upload/tintuc/'.$tt->hinhdaidien) }}" alt="category" style="width:100%">
                           
                        </div>
                        
                        <div class="col-md-9 row">
                            
                            <div class="col align-self-start">
                                <a href="{{ Route('tintuc',['id'=>$tt->id_tin,'tieudeseo'=>$tt->tieudeseo]) }}">
                                    <h5 style="font-size: 2rem">
                                        <b>{{ $tt->tieude }}</b>
                                    </h5>
                                    <p>
                                        {{ $tt->mota }}
                                    </p>
                                    <p>
                                        {{ substr($tt->noidung,0,500) }}...
                                    </p>
                                </a>
                            </div>
                            <div class="col align-self-end" style="flex-basis: auto">
                                    
                                    <span>
                                        Ngày đăng tin | {{ $tt->ngaydangtin }}
                                    </span>
                                    <a href="#">
                                        By Tác giả: {{ $tt->tacgia }}
                                    </a>
                                    <span>
                                    | Lượt xem: {{ $tt->solanxem }}
                                    </span>
                            </div>
                        </div>  
                        
                    </div>
                    
                
            
            </div>
            @endforeach
            <div class="col-md-12">
                {{  $tintuc->links()   }}
            </div>
            
        </div>
    </div>

    {{-- End Main --}}
@endsection