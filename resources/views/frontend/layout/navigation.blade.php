@section('nav')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="position:sticky;top:0;z-index:1000">
    <!-- Brand -->
    
  
    <!-- Links -->
    
    <ul class="navbar-nav">     
  
      <!-- Dropdown -->
      @foreach($loaitin as $lt)
      @if($lt->trangthai==1)
      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white!important">
          {{ $lt->ten_loaitin }}
        </a>
         @foreach($lt->tin as $tt)
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" >{{  $tt->tieude }}</a>
          
        </div>
        @endforeach
      </li>
      @endif
     @endforeach
    </ul>
    <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-success" type="submit">Search</button>
    </form>
  </nav>
@endsection