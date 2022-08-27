@extends('layouts.admin')

@section('content')
<div class="card" style=" text-align:center ">
    <div class="card-header " >
        <h1>Products </h1>
    </div>

    <div class="card-body ">
        <div class="table" style="margin-left: 300px;">
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th >Title</th>
                   
                    <th>Price</th>
                    <th >Quantity</th>
                   
                    <th > Image</th>
                    <th> Action</th>
                </tr>
            </thead>

            <tbody>
               
                @foreach($products as $item)
                
                    <tr style="margin: 10px;">
                            <td  >{{$item->category_name}}</td>
                            <td  >{{$item->name}}</td>
                            <td  >${{$item->price}}</td>
                            <td  >{{$item->name}}</td>
                            <td >  <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="Image" style="width:200px" > </td>
                            
                            <td>
                                <a href="{{url('product-edit/'.$item->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('product-delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>   
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>
    
</div>


@endsection