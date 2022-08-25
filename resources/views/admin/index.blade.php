@extends('layouts.admin')

@section('content')
<div class="card" style="margin-left: 200px ; text-align:center ">
    <<div style="justify-content: center; color:aqua; align-items:center; margin-left:200px">
            <h1> Welcome to Mini Ecommerce Shop</h1>
            </div>
            
            <div class="card" style=" text-align:center ">
    
    <div style="margin-left: 150px ;">
    <div class="card-header " >
        <h1>Products </h1>
    </div>

    <div class="card-body">
        <div class="table">
        <table>
            <thead>
                <tr>
                    <th >Title</th>
                   
                    <th>Price</th>
                    <th > Image</th>
                    <th> Action</th>
                </tr>
            </thead>

            <tbody>
               
                @foreach($products as $item)
                
                    <tr style="margin: 10px;">
                            <td  >{{$item->name}}</td>
                            <td  >${{$item->price}}</td>
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



    </div>


    <br>
    <br>

    <div style="margin-left: 150px;">
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
        </div>
</div>

@endsection