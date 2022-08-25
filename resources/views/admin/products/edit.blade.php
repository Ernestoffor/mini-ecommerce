@extends('layouts.admin')

@section('content')
<div class="card-">
    <div class="card-header">
        <h4>Edit/Update Product</h4>
    </div>
    <div class="card-body" style="margin-left: 100px ; text-align:center ">
        <form action="{{url('product-update/'.$products->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="row " style="margin-left:200px ;">
                <div class="col-md-4 mr-3">
                    <label for="name">Name: </label>
                    <input type="text" value="{{$products->name}}" name="name" class="form-control" 
                    value="{{ old('name') }}"
                        autocomplete="name"  autofocus >
                </div>

                <div class="row " style="margin-left:200px ;">
                <div class="col-md-4 mr-3">
                    <label for="name">Price: </label>
                    <input type="text" value="{{$products->price}}" name="price" class="form-control" 
                    value="{{ old('price') }}"
                        autocomplete="price"  autofocus >
                </div>


                <div class="col-md-4">
                <label for="image"> Edit an Image</label>
                @if($products->image)
                
                    <img src="{{asset('assets/uploads/products/'.$products->image)}}" alt="Category Image"  style="width:200px">
                @endif
                    <input type="file"  name="image" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary">Edit A Product</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection