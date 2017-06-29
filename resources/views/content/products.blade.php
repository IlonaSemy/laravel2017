@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-12">
        <h1 class="text-center">  
            @if(!empty($page_title)) 
            {{ $page_title }} 
            @else 
            No products for this category...
            @endif
        </h1> 
    </div> 
</div> 
<div class="row"> 
    @if($products)  
    @foreach($products as $product) 
    <div class="col-md-6 col-sm-6"> 
        <h3>{{ $product['title']}}</h3> 
        <p><img width="200" src ="{{ asset('images/'. $product['image'])}}"</p> 
        <p>{{!! $product['article'] !!}}</p>
        <p><b>Price on our site:</b>{{ $product['price']}}$</p> 
        <p> 
            <input type="button" value="+ Add to Cart" class="btn btn-success"> 
            <a href="{{ url('shop/' . $cat_url . '/' . $product['url'])}}" class="btn btn-primary">View details</a>
        </p> 
    </div> 
    @endforeach
    @elseif(!empty($page_title)) 
    <div class="col-md-12"> 
        <p class="text-center"><i>No products for this category...</i></p> 
    </div> 
    @endif 
</div>
@endsection


