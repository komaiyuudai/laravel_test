@extends('layouts.app')

@section('header')
    <link href="/css/left-content.css" rel="stylesheet" type="text/css">
    <link href="/css/top.css" rel="stylesheet" type="text/css">
@endsection
@section('title', 'TOPページ')
@section('content')
    @include('layouts.left-content')

    <div class="right-content">
        <div class="product_list">
            @foreach ($newProducts as $product)
            <div class="product">
                <div class="product-img">
                </div>
                <div class="discription">
                    <p>{{ $product->name }}</p>
                    <p>\{{ number_format($product->price) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection