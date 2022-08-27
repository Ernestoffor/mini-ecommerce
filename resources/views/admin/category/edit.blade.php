@extends('layouts.admin')

@section('content')
<div class="card-">
    <div class="card-header">
        <h4>Edit/Update Category</h4>
    </div>
    <div class="card-body" style="margin-left: 100px ; text-align:center ">
        <form action="{{url('category-update/'.$category->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="row " style="margin-left:200px ;">
                <div class="col-md-4 mr-3">
                    <label for="name">Name: </label>
                    <input type="text" value="{{$category->name}}" name="name" class="form-control" 
                    value="{{ old('name') }}"
                        autocomplete="name"  autofocus >
                </div>

                

                
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary">Edit A Category</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection