
<div  class="text-center text-white-50 bg-primary bg-gradient">
<h1 style="align-items:center ;">Products in Stock</h1>
</div>

<div class="py-5">
    @if (Route::has('login'))   
        <a href="{{url('products')}}">
            <div class="container">
                <div class="row">
                    @foreach($products as $item)
                        <div class="col-md-3 my-3">
                            <div class="card mx-2 h-100">
                                <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="{{$item->name}}">
                                <h5>{{$item->name}}</h5>
                                <small>${{$item->price}}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </a>
    @else
        <h1>Login or register to access the product</h1>
        return redirect(/)
    @endif
</div>