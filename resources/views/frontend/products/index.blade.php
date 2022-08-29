<html>
    <head>
          <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/customCSS.css') }}" rel="stylesheet">
    
    </head>
    <body>
        

   
@include('layouts.inc.welcome_offcanvas')

<!-- <div  style="margin-top: 50px">
           @include('layouts.inc.slidebar')
</div> -->

<div class="py-10 " style="margin-top: 2rem;">
<h1>Available Products</h1>

            <div class="container">
                <div class="row">
                   
                    @foreach($products as $item)
                    
                        <div class="col-md-4 my-3">
                            <div class="card mx-2 h-100">
                                <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="{{$item->name}}">
                                <h5>{{$item->name}}</h5>
                                <small>${{$item->price}}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
   

    <div class=" text-center" >
        <h2> All Categories</h2>
    </div>
    
        
        
            <div class="text-center">
            @foreach($category as $item)
                <h5>
                    
                    {{$item->name}}
                   
                </h5>
                @endforeach
</div>
        
    
</div>


<style>
    a {
        text-decoration: none !important;
    }
</style>

  <!-- Scripts -->
  <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>

    </body>
</html>
