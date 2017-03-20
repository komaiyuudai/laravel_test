@extends('layouts.app')

@section('header')
    <link href="/css/left-content.css" rel="stylesheet" type="text/css">
    <link href="/css/top.css" rel="stylesheet" type="text/css">
@endsection
@section('title', 'TOPページ')
@section('content')
    @include('layouts.left-content')

    <div class="right-content">
        <h2>新着商品</h2>
        <div class="product_list">
            @foreach ($newProducts as $product)
            <div class="product">
                <div class="product-img">
                </div>
                <div class="discription">
                    <span id="brand-name" class="detail">{{ $product->Brand->name }}</span>
                    <span class="detail">{{ $product->name }}</span>
                    <span class="detail">\{{ number_format($product->price) }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection