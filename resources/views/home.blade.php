@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <img class="product_img" style="width:300px; height:200px;" src="{{  $product->product_images[0]->source_img }} ">
                    <div><a href="products/{{ $product->id }}">{{ $product->name }}</a></div>
                    <span>{{ $product->price }}</span>
                    <p><a class="btn btn-dark" href="products/{{ $product->id }}" role="button">Add to cart</a></p>

                </div>
            @endforeach
        </div>
    </div>
@endsection

