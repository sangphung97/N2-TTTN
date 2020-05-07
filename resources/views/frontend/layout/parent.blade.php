<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{--  <link rel="stylesheet" href="{{ asset('frontend_asset/css/boostrap.min.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('frontend_asset/css/style.css') }}">  
    <link rel="stylesheet" href="{{ asset('frontend_asset/css/all.min.css')}}">
    <link rel="icon" href="{{ asset('frontend_asset/images/favicon.ico') }}">
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body>
    
    @yield('nav')
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fas fa-chevron-up" style="font-size:30px"></i>
    </button>
    @yield('header-body')
    @yield('content')

    {{--  <script type="text/javasrcip" src="{{ asset('frontend_asset/js/bootstrap.min.js') }}"></script>  --}}
    <footer style="line-height:3;background-color:rgb(282, 138, 147)">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-copyright" aria-hidden="true"></i>
                            <span>Thực Tập Tốt Nghiệp Nhóm 2</span>
                        </div>
                        <div class="col-md-12">
                            <span>Theo dõi <a href="{{ Route('index') }}" style="font-size:25px">tinhot.ga</a> trên:</span>
                            <p style="font-size:25px">
                                <li>
                                    
                                </li>
                                <a href="#"><i class="fab fa-facebook" style="margin-right:15px"></i></a>
                                <a href="#"><i class="fab fa-instagram" style="margin-right:15px"></i></a>
                                <a href="#"><i class="fab fa-youtube" style="margin-right:15px"></i></a>
     
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcongdongvnexpress%2F&tabs=timeline&width=400px&height=200px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400px" height="200px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                
            </div>
        </div>
    </footer>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend_asset/js/custom.js') }}"> </script>

    
</body>

</html>