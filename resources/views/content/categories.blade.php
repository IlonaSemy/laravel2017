@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-12">
        <h1 class="text-center">Myhero Shop</h1> <br><br>
    </div> 
</div>  
<div class="row"> 

    @if ($categories)
    @foreach($categories as $category) 
    <div class="col-md-4 col-sm-6"> 
        <h3 >{{ $category['title'] }} </h3>  
        <p><img width="250" src="{{ asset('images/' . $category['image']) }}"></p> 
        <p>{!! $category['article']!!}</p> 
        <p><a href="{{ url('shop/'. $category['url']) }}" class="btn btn-primary">View product</a></p>
    </div> 
    @endforeach 
    @else 
    <div class="col-md-12"> <br><br>
        <p class="text-center"><b>No categories found...</b></p>
        <div 
            @endif
    </div>
    @endsection
