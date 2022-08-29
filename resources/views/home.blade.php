@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Mini Ecommerce Shop') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Route::has('login'))
                    <p> You are welcome <strong>{{ Auth::user()->name }}</strong>!!!</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div  class="text-center text-white-50 bg-primary bg-gradient">
<h1 style="align-items:center ;">Products in Stock</h1>
</div>

<div class="py-5">
    
        <a href="{{url('products')}}">
            <div class="container">
                <div class="row">
                   
                    @foreach($products as $item)
                    
                        <div class="col-md-3 my-3">
                            <div class="card mx-2 h-100">
                                <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="{{$item->name}}">
                                <h5>{{$item->name}}</h5>
                                <small>${{$item->price}}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </a>
    
</div>

<div class="card ">
<div class="card-header " style="float: light;">
        <h1>Categories </h1>
    </div>

    <div class="card-body">
        <div class="table">
        <table>
            <thead>
                <tr>
                    <th >Title</th>
                   
                    
                </tr>
            </thead>

            <tbody>
               
                @foreach($category as $item)
                
                    <tr style="margin: 10px;">
                            <td  >{{$item->name}}</td>
                            <!-- <td >  <img src="{{asset('assets/uploads/categories/'.$item->image)}}" alt="Image" style="width:200px" > </td> -->
                            
                             
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>
    
</div>
</div>

@endsection
