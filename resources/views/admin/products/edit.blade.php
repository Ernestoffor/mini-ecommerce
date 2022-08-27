@extends('layouts.admin')

@section('content')
<div class="card-">
    <div class="card-header">
        <h4>Edit/Update Product</h4>
    </div>
    <div class="card-body ms-400" style="margin-left: 300px ; text-align:center ">
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
                <div class="col-md-3 mr-3">
                    <label for="name">Price: </label>
                    <input type="text" value="{{$products->price}}" name="price" class="form-control" 
                    value="{{ old('price') }}"
                        autocomplete="price"  autofocus >
                </div>

                <div class="col-md-3 mr-3">
                    <label for="category_name">Category: </label>
                    <input type="text" value="{{$products->category_name}}" name="category_name" class="form-control" 
                    value="{{ old('category_name') }}"
                        autocomplete="category_name"  autofocus >
                </div>

                <div class="row " style="margin-left:200px ;">
                <div class="col-md-3 mr-3">
                    <label for="quantity">Quantity </label>
                    <input type="text" value="{{$products->quantity}}" name="quantity" class="form-control" 
                    value="{{ old('quantity') }}"
                        autocomplete="quantity"  autofocus >
                </div>

                <div class="col-md-3">
                <label for="image"> Edit an Image</label>
                @if($products->image)
                
                    <img src="{{asset('assets/uploads/products/'.$products->image)}}" alt="Category Image"  style="width:200px">
                @endif
                    <input type="file"  name="image" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit A Product</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection