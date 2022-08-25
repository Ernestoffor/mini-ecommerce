@extends('layouts.admin')

@section('content')
<div class="card" style="margin-left: 300px ; text-align:center ">
    <div class="card-header " >
        <h1>Categories </h1>
    </div>

    <div class="card-body">
        <div class="table">
        <table>
            <thead>
                <tr>
                    <th >Title</th>
                    <th > Image</th>
                    <th> Action</th>
                </tr>
            </thead>

            <tbody>
               
                @foreach($category as $item)
                
                    <tr style="margin: 10px;">
                            <td  >{{$item->name}}</td>
                            <td >  <img src="{{asset('assets/uploads/categories/'.$item->image)}}" alt="Image" style="width:200px" > </td>
                            
                            <td>
                                <a href="{{url('category-edit/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('category-delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>   
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>
    
</div>

@endsection