@section('header-body')
<div id="demo" class="carousel slide " data-ride="carousel" >

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <?php foreach ($tin as $key => $value){  ?>

  <div class="carousel-item @if($key==0)  active @endif ">
        <img src="upload/tintuc/{{$value->hinhdaidien}}" alt="Los Angeles" style="width: 600px; height: 400px;">
        <div class="carousel-caption">
          
            <p>{{$value->tieude}}</p>
          </div>
      </div>
       
      
<?php } ?>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
    
</div>
  
@endsection