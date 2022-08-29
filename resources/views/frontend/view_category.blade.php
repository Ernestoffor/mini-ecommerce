<html>
    <head>
          <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/customCSS.css') }}" rel="stylesheet">
    
    </head>
    
    
<body>
        

   
    @include('layouts.inc.welcome_offcanvas')




<div class="py-5">
    <h2 class="text-center"> {{$category->name}} </h2>
    <div class="container">

        <div class="row">
            @foreach($products as $prod)
            
                <div class="col-md-3 mb-3">
                    <div class="card m-3">
            
                        <img src=" {{ asset('assets/uploads/products/'.$prod->image) }} " alt="">
                
                        <h5> {{$prod->name}} </h5>
                        <p> ${{$prod->price}} </p>
                
            
                    </div>
                </div>
            

            @endforeach
        </div>
   
    </div>

</div>




  <!-- Scripts -->
  <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>

    </body>
</html>