
<div  class="text-center text-white-50 bg-dark">
<h1 style="align-items:center ;">Products in Stock</h1>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach($products as $item)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="{{$item->name}}">
                        <h5>{{$item->name}}</h5>
                        <small>${{$item->price}}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>