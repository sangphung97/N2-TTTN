@section('nav')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="position:sticky;top:0;z-index:1000">
    <!-- Brand -->
    
  
    <!-- Links -->
    
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
    <form class="form-inline" action="{{ Route('timkiem') }}" method="POST">
      @csrf
       <input type="hidden" name="_token" value="{{ csrf_token() }}";>
        <input class="form-control mr-sm-2" type="text" name="tukhoa" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
  </nav>
@endsection