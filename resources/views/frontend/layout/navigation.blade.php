@section('nav')

      <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
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
          @foreach($nhomtin as $nt)
            @if($nt->trangthai==1)
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white!important">
                  {{ $nt->ten_nhomtin }}
                </a>
                  @foreach($nt->loaitin as $tt)
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ Route('loaitin',['id'=>$tt->id_loaitin,'loaitinseo'=>$tt->loaitinseo]) }}" >{{  $tt->ten_loaitin }}</a>
                    
                  </div>
                  @endforeach
              </li>
            @endif
        @endforeach
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