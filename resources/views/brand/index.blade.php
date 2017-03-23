@extends('layouts.app')

@section('header')
    <link href="/css/brands/brand.css" rel="stylesheet" type="text/css">
@endsection

@section('title', 'ブランド一覧')

@section('content')
    <div id="brand">
        <h2>ブランド一覧</h2>
        <div id="brand-list">
            @foreach ($brands as $brand)
            <span class="brand-name">
                <a href="/brand/{{ $brand->id }}">{{ $brand->name }}</a>
            </span>
            @endforeach
        </div>
    </div>
@endsection
