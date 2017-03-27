@extends('layouts.app')

@section('header')
    <link href="/css/left-content.css" rel="stylesheet" type="text/css">
    <link href="/css/products/product.css" rel="stylesheet" type="text/css">
@endsection
@section('title', $product->Brand->name . ' ' . $product->name)
@section('content')
<div id="product">
    <div class="product-img">
        <img src="/">
    </div>
    <div class="product-discription">
        <span class="product-detail">ショップ：{{ $product->Store->name }}</span>
        <span class="product-detail">ブランド：{{ $product->Brand->name }}</span>
        <span class="product-detail">商品名：{{ $product->name }}</span>
        <span id="product-price" class="product-detail">\{{ number_format($product->price) }}</span>
    </div>
    <div class="product-form">
        <button class="provisional-purchase">カートに入れる</button>
    </div>
</div>

@endsection