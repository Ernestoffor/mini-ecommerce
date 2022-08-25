@extends('layouts.admin')

@section('content')
<div class="card" style="margin-left: 300px ; text-align:center ">
    <div class="card-body mb-10" >
        <h1>Categories </h1>
    </div>

    <div class="card-body">
        <div class="table">
            <thead>
                <tr>
                    <th class="md-6">Title</th>
                    <th class="md-6"> Image</th>
                </tr>
            </thead>

            <tbody>
                @foreach($category as $item)

                    <tr>
                       <div class="row">
                         <div class="d-flex">
                            <td class="md-6" >{{$item->name}}</td>
                            <td class="md-6">  <img src="{{asset('assets/uploads/categories/'.$item->image)}}" alt="Image" class="w-25" > </td>
                            
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>

                            </div>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                       </div>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </div>
    
</div>

@endsection