@extends('layouts.app')

@section('header')
    <link href="/css/brands/detail.css" rel="stylesheet" type="text/css">
@endsection

@section('title', '•÷•È•Û•……Ã∆∑“ª”E')

@section('content')
    <div id="brand-product">
        <h2>{{ $brand->name }}</h2>
        @foreach ($brand->products as $product)
        <div class="product-list">
            <span class="product-detail">
                <a href="/{{ $product->store_id }}/{{ $product->brand_id }}/{{ $product->id }}"><img src="/"></a>
            <span class="product-detail">{{ $product->name }}</span>
            <span class="product-detail">\{{ number_format($product->price) }}</span>
        </div>
        @endforeach
    </div>
@endsection
