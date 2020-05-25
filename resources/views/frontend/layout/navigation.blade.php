@section('nav')

      <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <!-- Brand -->
        <!-- Links -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">     
          <li class="nav-item">
            <a href="{{ Route('index') }}" class="navbar-brand"><i class="fas fa-home" style="color:white"></i></a>
          </li>
          <!-- Dropdown -->
        <?php
          $nt1=$nhomtin->where('trangthai','1')->take(7);
        ?>
          @foreach($nt1 as $nt)
            @if($nt->trangthai==1)
            
              <li class="nav-item dropdown">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white!important">
                  {{ $nt->ten_nhomtin }}
                </a>
                
                  <div class="dropdown-menu">
                    @foreach($nt->loaitin as $tt)
                    <a class="dropdown-item" href="{{ Route('loaitin',['id'=>$tt->id_loaitin,'loaitinseo'=>$tt->loaitinseo]) }}" >{{  $tt->ten_loaitin }}</a>
                    @endforeach
                  </div>
                 
              </li>
              
            @endif
        @endforeach
        <li class="nav-item">
            <a class="nav-link drop-toggle" href="{{URL::to('/dangnhap')}}" id="navbardrop" style="color:white!important">Đăng nhập</a>
            </li>
            <li>
                    <a class="nav-link drop-toggle" href="{{URL::to('/dangnhap')}}" id="navbardrop" style="color:white!important">Đăng xuất</a>
                    </li>
                    

        </ul>
         
            
                    
                
          

      </div>
      </nav> 

   
  {{-- Search --}}
    
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top: 25px;">
          <form class="form-inline" action="{{ Route('timkiem') }}" method="POST">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}";>
              <input class="form-control mr-sm-2" type="text" name="tukhoa" placeholder="Search" style="width: 80%;">
              <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  {{-- End Search --}}
@endsection