@extends('layouts.app')

@section('header')
    <link href="/css/layouts/left-content.css" rel="stylesheet" type="text/css">
    <link href="/css/tops/top.css" rel="stylesheet" type="text/css">
@endsection
@section('title', 'TOPページ')
@section('content')
    @include('layouts.left-content')
    <div id="content-top">
        <top></top>
    </div>
<!--         <div class="right-content">
            <h2>新着商品</h2>
            <div class="product_list">
                @foreach ($newProducts as $product)
                <div class="product">
                    <div class="product-img">
                        <a href="/{{ $product->Store->id }}/{{ $product->Brand->id }}/{{ $product->id }}">
                            <img src="/">
                        </a>
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
 -->    


@endsection