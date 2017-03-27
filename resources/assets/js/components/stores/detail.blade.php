@extends('layouts.app')

@section('header')
    <link href="/css/stores/detail.css" rel="stylesheet" type="text/css">
@endsection

@section('title', 'ショップ商品一覧')

@section('content')
    <div id="store-product">
        <h2>{{ $store->name }}</h2>
        @foreach ($store->products as $product)
        <div class="product-list">
            <span class="product-detail">
                <a href="/{{ $product->store_id }}/{{ $product->brand_id }}/{{ $product->id }}"><img src="/"></a>
            <span class="product-detail">{{ $product->name }}</span>
            <span class="product-detail">\{{ number_format($product->price) }}</span>
        </div>
        @endforeach
    </div>
@endsection
