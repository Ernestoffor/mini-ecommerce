@extends('layouts.admin')

@section('content')
<div class="card-">
    <div class="card-header">
        <h4>Add A New Product</h4>
    </div>
    <div class="card-body" >
        <form action="{{url('store-product')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <h4>Add A New Product</h4>
            <div class="row "style="margin-left: 300px ; text-align:center;  " >
                <div class="col-md-4 mr-3" >
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" 
                    value="{{ old('name') }}"
                        autocomplete="name"  autofocus >
                </div>

                <div class="col-md-4 mr-3">
                    <label for="price">Price: </label>
                    <input type="text" name="price" class="form-control" 
                    value="{{ old('price') }}"
                        autocomplete="price"  autofocus >
                </div>

                <div class="col-md-4">
                <label for="image"> Upload an Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary">Create Product<?php</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection