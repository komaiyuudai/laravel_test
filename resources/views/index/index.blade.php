@extends('layouts.app')

@section('header')
    <link href="/css/left-content.css" rel="stylesheet" type="text/css">
    <link href="/css/index.css" rel="stylesheet" type="text/css">
@endsection
@section('title', 'TOPページ')
@section('content')
    @include('layouts.left-content')
    <div class="right-content">
        <div class="product_list">
            @for ($i = 1; $i < $products; $i++)
            <div class="product">
                {{$i}}
            </div>
            @endfor
        </div>
    </div>
@endsection