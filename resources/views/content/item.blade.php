@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-12"> 
    @if(item) 
    <h1>{{ $item['title']}}</h1> 
    <p><img width="300" src="{{ asset ('images/' . $item['image'])}}" </p> 
    <p><b>Price on site:</b>{{ $item['price']}}$</p> 
    <p> 
        <input type="button" value="+ Add to cart" class="btn btn-success"> 
        <a href="{{ url('shop/checkout') }}" class="btn btn-primary">Checkout</a> 
    </p>
        @else 
    <p class="text-center"><i>No product details ...</i></p>  
    @endif 
    </p>
@endsection
