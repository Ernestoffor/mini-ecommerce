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

                    {{ __('You are Welcome !') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row " >
<div class="card ">
<div class="card-header "  style="float: left;">
        <h1>Products </h1>
    </div>

    <div class="card-body">
        <div class="table">
        <table>
            <thead>
                <tr>
                    <th style="margin-right: 80px;">Title</th>
                   
                    <th style="margin-left: 80px;">Price</th>
                    <th > Image</th>
                    
                </tr>
            </thead>

            <tbody>
               
                @foreach($products as $item)
                
                    <tr style="margin: 10px;">
                            <td style="margin-right: 80px;" >{{$item->name}}</td>
                            <td  style="margin-left: 80px;">${{$item->price}}</td>
                            <td >  <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="Image" style="width:200px" > </td>
                            
                            
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>
    
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
                    <th > Image</th>
                    
                </tr>
            </thead>

            <tbody>
               
                @foreach($category as $item)
                
                    <tr style="margin: 10px;">
                            <td  >{{$item->name}}</td>
                            <td >  <img src="{{asset('assets/uploads/categories/'.$item->image)}}" alt="Image" style="width:200px" > </td>
                            
                             
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>
    
</div>
</div>

@endsection
