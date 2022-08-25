@extends('layouts.admin')

@section('content')
<div class="card-">
    <div class="card-header">
        <h4>Add Categories</h4>
    </div>
    <div class="card-body" style="margin-left: 100px ; text-align:center ">
        <form action="{{url('store')}}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="row " style="margin-left:200px ;">
                <div class="col-md-4 mr-3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control" 
                    value="{{ old('name') }}"
                        autocomplete="name"  autofocus >
                </div>

                <div class="col-md-4">
                <label for="image"> Upload an Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection